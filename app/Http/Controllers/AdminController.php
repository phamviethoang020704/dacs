<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Review;

class AdminController extends Controller
{
    public function index(){
        $bookings = Booking::orderBy('created_at', 'desc')->get();
        return view('admin.admin', compact('bookings'));
    }
    public function bookingBrowsing(){
        $bookingBrowsing = Booking::where('browsing_status', false)->get();
        return view('admin.browse',compact('bookingBrowsing'));
    }
    public function overdueBookings(){
        $bookingCarReturnDeadline = Booking::where('car_return_deadline',null)->get();
        $overdueBookings = $bookingCarReturnDeadline->filter(function ($booking) {
            return $booking->carReturnDeadline !== "Đã trả xe" && $booking->browsing_status == true;
        });
        return view('admin.returnCar',compact('overdueBookings'));
    }


    public function approveBooking($id){
        $booking = Booking::find($id);
        if(!$booking){
            return redirect()->back()->with('error','bookings khong ton tai');
        }
        if($booking->browsing_status == false){

            $car = Car::find($booking->car_id);
            if(!$car) {
                return redirect()->back()->with('error','xe khong ton tai');
            }
            if($car->remaining_quantity <= 0){
                return redirect()->back()->with('error','xe da het hang');
            }
            $car->remaining_quantity -=1;
            $car->save();

            $booking->browsing_status = true;
            $booking->save();
            return redirect()->back()->with('success','don duyet thanh cong');
        }
        return redirect()->back()->with('info','don nay da duoc duyet');

    }
    public function adminGiveBack($id){
        $booking = Booking::find($id);

        if($booking->admin_give_back == false){
            $car = Car::find($booking->car_id);
            if(!$car) {
                return redirect()->back()->with('error','xe khong ton tai');
            }
            $car->remaining_quantity +=1;
            $car->save();

            $booking->admin_give_back = true;
            $booking->save();
            return redirect()->back();
        }
        return redirect()->back();
    }
    public function dashboard()
    {
        $now = Carbon::now();
        $startDate = $now->copy()->subMonths(5)->startOfMonth(); // Lấy 6 tháng gần nhất (0 -> -5)

        $revenueData = DB::table('bookings')
            ->select(DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month"), DB::raw("SUM(total_price) as total_revenue"))
            ->where('admin_give_back', true) // Chỉ lấy đơn hoàn tất
            ->whereBetween('created_at', [$startDate, $now])
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();
            $totalRevenue = Booking::sum('total_price');
            $userCount = User::where('role', 'user')->count();
            $reviewCount = Review::count();
            $bookingCount = Booking::count();

            return view('admin.dashboard', [
                'revenueData'   => $revenueData,
                'totalRevenue'  => $totalRevenue,
                'userCount'     => $userCount,
                'reviewCount'   => $reviewCount,
                'bookingCount'  => $bookingCount
            ]);
    }

}
