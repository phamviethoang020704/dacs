<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\Car\StoreCarRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\ValidatedData;
use App\Models\Review;
use App\Models\CarImage;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $trademark = $request->get('trademark');
        $search = $request->get('search'); // Tìm kiếm theo tên xe
        $priceRange = $request->get('price_range'); // Lọc theo mức giá
        $seatCount = $request->get('seat_count'); // Lọc theo số chỗ ngồi
        $rating = $request->get('rating'); // Lọc theo rating từ bảng review

        $cars = Car::query()->with('reviews'); // Gọi quan hệ với bảng review

        // Lọc theo thương hiệu
        if ($trademark && $trademark !== 'all') {
            $cars->where('trademark', $trademark);
        }

        // Tìm kiếm theo tên xe
        if ($search) {
            $searchTerms = explode(' ', trim(preg_replace('/\s+/', ' ', $search))); // Xóa khoảng trắng dư
            $cars->orderByRaw("
                CASE
                    WHEN name LIKE ? THEN 1
                    WHEN name LIKE ? THEN 2
                    ELSE 3
                END
            ", ["%$search%", "%$search%"]);

            $cars->where(function ($query) use ($searchTerms) {
                foreach ($searchTerms as $term) {
                    $query->where('name', 'LIKE', '%' . $term . '%');
                }
            });
        }

        // Lọc theo mức giá
        if ($priceRange) {
            switch ($priceRange) {
                case '<1000000':
                    $cars->where('price_per_day', '<', 1000000);
                    break;
                case '1000000-2000000':
                    $cars->whereBetween('price_per_day', [1000000, 2000000]);
                    break;
                case '2000000-3000000':
                    $cars->whereBetween('price_per_day', [2000000, 3000000]);
                    break;
                case '3000000-4000000':
                    $cars->whereBetween('price_per_day', [3000000, 4000000]);
                    break;
                case '4000000-5000000':
                    $cars->whereBetween('price_per_day', [4000000, 5000000]);
                    break;
                case '>5000000':
                    $cars->where('price_per_day', '>', 5000000);
                    break;
            }
        }

        // Lọc theo số chỗ ngồi
        if ($seatCount) {
            $cars->where('seat_count', $seatCount);
        }

        // Lọc theo rating từ bảng review
        if ($rating) {
            $cars->whereHas('reviews', function ($query) use ($rating) {
                $query->havingRaw('AVG(rating) > ?', [$rating]);
            });
        }

        // Thực hiện phân trang
        $cars = $cars->paginate(8)->appends(request()->query());

        // Danh sách các loại xe
        $trademarks = [
            'Audi', 'Bentley', 'BMW', 'Jaguar',
            'Land-Rover', 'Lexus', 'Mercedes-Benz', 'Rolls-Royce'
        ];

        return view('car.show_car', compact('cars', 'trademarks', 'trademark', 'search', 'priceRange', 'seatCount', 'rating'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.add_car');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        $car = new Car();
        $car->fill($request->except('image_url'));

    if ($request->hasFile('image_url')) {
        $file = $request->file('image_url');
        $filename = Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('cars', $filename, 'public');
        $car->image_url = $path;
    }
    $car->save();


    //
    if ($request->hasFile('related_images')) {
        $index = 1; // Đánh số thứ tự ảnh liên quan
        foreach ($request->file('related_images') as $file) {
            $baseName = Str::slug($car->name) . '-' . $index; // Đặt tên theo format mong muốn
            $filename = $baseName . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs("carImages/" . Str::slug($car->name), $filename, 'public');

            CarImage::create([
                'car_id' => $car->id,
                'image_url' => $path,
            ]);

            $index++; // Tăng số thứ tự cho ảnh tiếp theo
        }
    }


    // return redirect('/car/create')->with('success', 'Thêm xe thành công');
    return redirect()->back()->withInput()->with('activeForm', 'addCar')->with('success', 'Thêm xe thành công');
    }
    public function show($id, Request $request)
    {
        $car = Car::with('reviews.user')->findOrFail($id);
        $averageRating = Review::where('car_id', $id)->avg('rating');
        $quantity = Review::where('car_id', $id)->count();

        // Lấy số lượng đánh giá theo từng sao
        $reviewCounts = Review::where('car_id', $id)
            ->selectRaw('rating, COUNT(*) as count')
            ->groupBy('rating')
            ->pluck('count', 'rating');

        // Lọc theo số sao (nếu có)
        $rating = $request->query('rating');
        $reviewsQuery = Review::where('car_id', $id)
            ->when($rating, function ($query, $rating) {
                return $query->where('rating', $rating);
            })
            ->latest();

        $reviews = $reviewsQuery->paginate(5)->onEachSide(1)->withQueryString();

        // Kiểm tra đơn hàng hợp lệ chưa được review
        $eligibleBookings = [];
        if (auth()->check()) {
            $userBookings = $car->bookings()
                ->where('user_id', auth()->id())
                ->where('browsing_status', true)
                ->where('admin_give_back', true)
                ->get();

            foreach ($userBookings as $booking) {
                $hasReviewed = Review::where('booking_id', $booking->id)->exists();

                if (!$hasReviewed) {
                    $eligibleBookings[] = $booking;
                }
            }
        }

        return view('car.car_id', compact('car', 'averageRating', 'quantity', 'reviews', 'rating', 'reviewCounts', 'eligibleBookings'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('car.edit_car', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCarRequest $request, $id)
    {
        $car = Car::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('image_url')) {
            if ($car->image_url && Storage::exists($car->image_url)) {
                Storage::delete($car->image_url);
            }
            $file = $request->file('image_url');
            $filename = Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('cars', $filename, 'public');
            $car->image_url = $path;
            $data['image_url'] = $path; // Cập nhật đường dẫn ảnh vào dữ liệu
        }
        $car->update($data);
        return redirect()->route('car.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('car.index');
    }

    public function CarHome(){
        $cars = Car::inRandomOrder()->take(6)->get();
        $carTopRating = Car::withAvg('reviews','rating')->orderByDesc('reviews_avg_rating')->take(6)->get();
        return view('welcome',compact('cars','carTopRating'));
    }
    public function CarAbout(){
        $cars = Car::inRandomOrder()->take(6)->get();
        return view('user.about',compact('cars'));
    }

    public function filterCars(Request $request)
    {
        $cars = Car::when($request->trademark, function ($query) use ($request) {
            $query->where('trademark', $request->trademark);
        })->get();

        return response()->json($cars);
    }
    public function rating(){
        $fiveStarReviews = Review::where('rating', 5)
        ->latest()
        ->take(3)
        ->with('user')
        ->get();

    // Truyền biến $fiveStarReviews sang View
    return view('welcome', compact('fiveStarReviews'));
    }


}
