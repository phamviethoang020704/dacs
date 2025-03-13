{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Car Rental</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon (1).ico') }}">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            position: relative;
            scrollbar-width: thin;
            scrollbar-color: #ff4d30 #fff;
        }
        body{
            background-color: #F8F8F8;
        }
        #header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #F3F4F6;
            height: 60px;
            padding: 0 20px;
        }
        #header-left{
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
        }
        #header-left h3{
            /* color: #5937E0; */
            padding-top: 5px;
            padding-left: 5px;
            font-size: 20px;
            font-weight: bold;
        }
        #header-left ion-icon{
            color:#FA4226;
            font-size: 30px;
            margin-right: 5px;

        }
        #Login-Register{
            z-index: 100;
        }
        .register{
            text-decoration: none;
            background: #FA4226;
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            color: white;
            font-size: 20px;
            box-shadow: 0 0 15px #FA4226;
        }
        .register:hover{
            background-color: #df2d12;
            box-shadow: 0 0 15px #df2d12;
        }
        .login{
            text-decoration: none;
            color: black;
            font-size: 20px;
        }
        .login:hover{
            color: #FA4226;
        }
        #account{
            background: #FA4226;
            font-size: 20px;
            text-decoration: none;
            color: white;
            border-radius: 10px;
            padding: 5px;
            margin-left: 30px;
            z-index: 1;
        }
        #detail{
            display: flex;
            margin: 50px 20px;
            justify-content: center;
            background-color: white;
            padding: 20px;
        }
        #detail-content>h1{
            font-size: 25px;
            color: rgba(0, 0, 0, .8);
        }
        #text-decoration{
            text-decoration: underline;
            margin-left: 15px;
        }
        #gold{
            color: #d0011b;
            margin-right: 15px;
        }
        #detail-price h1{
            color: rgba(0, 0, 0, .8);
            font-size: 25px;
        }
        #detail-price{
            display: flex;
            align-items: center;
            margin-top: 15px;
        }
        #detail-price p{
            color: #d0011b;
            font-size: 30px;
            margin-left: 10px;
        }
        .seat-quantity{
            display: flex;
            align-items: center;
            margin-top: 15px;
        }
        .seat-quantity h1{
            color:#757575;
            font-size: 15px;
            margin-right: 10px;
        }

        #delete-car{
            background-color: #FA4226;
            color: white;
            border-radius: 5px;
            border: none;
            margin: 20px 10px 20px 0;
            cursor: pointer;
            width: 50px;
            height: 30px;
            line-height: 30px;
        }
        #edit-car{
            text-decoration: none;
            background-color: #FA4226;
            color: white;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            width: 50px;
            height: 30px;
            line-height: 30px;
            display: flex;
            justify-content: center;
            margin: 20px 0 0 30px;
        }
        #edit-delete{
            display: flex;
        }
        #book{
            background-color: #FA4226;
            color: white;
            height: 40px;
            line-height: 40px;
            display: flex;
            justify-content: center;
            width: 300px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 30px;
        }


        #gallery-container {
            width: 500px;
            margin: 0 30px 0 0;
        }
        #main-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            cursor: pointer;
        }
        .thumbnail-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }
        .arrow {
            font-size: 24px;
            cursor: pointer;
            padding: 5px;
        }
        #thumbnails {
            display: flex;
            overflow: hidden;
            width: 240px;
        }
        .thumbnail-list {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }
        .thumbnail {
            width: 70px;
            height: 50px;
            object-fit: cover;
            margin: 0 5px;
            cursor: pointer;
            border: 2px solid transparent;
        }
        .thumbnail:hover {
            border: 2px solid red;
        }
        .thumbnail.active {
            border: 2px solid red;
        }
        #overlay{
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color:rgba(0,0,0,.14);
            z-index: 99;
            display: none;
        }
        #enlarge-gallery-container {
            position: fixed;
            width: 80%;
            height: 80%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            display: flex;
            z-index: 100;
        }
        #div-main-image{
            flex-basis: 50%;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        #div-main-image>img{
            width: 400px;
            height: 225px;
        }
        #div-main-image span{
            font-size: 40px;
            cursor: pointer;
        }
        #enlarge-image{
            flex-basis: 50%;
            display: flex;
            flex-wrap: wrap;
            row-gap: 20px;
            column-gap: 40px;
            margin: auto;
        }
        #enlarge-image img{
            width: 160px;
            height: 90px;
            padding: 0;
            margin: 0;
        }
        .enlarge-thumbnail.active{
            border: 2px solid red;
        }



        #description{
            margin: 20px;
            background-color: white;
            padding: 20px;
        }
        #description h1{
            color: rgba(0, 0, 0, .87);
            font-size: 25px;
            padding: 10px 0;
        }
        #description p{
            width: 50%;
            font-size: 15px;
            line-height: 20px;
        }
        #review-product{
            font-size: 30px;
            margin: 30px 20px;
            background-color: white;
        }
        #review-product>h2{
            color: rgba(0, 0, 0, .87);
            font-size: 25px;
            margin-left: 20px;
            padding-top: 20px;
        }
        #review-product-menu{
            display: flex;
            background-color: #FFFBF8;
            border: 1px solid #FA4226;
            margin: 20px 20px 0;
        }
        .red{
            color: #d0011b;
            font-size: 25px;
        }
        .red span{
            font-size: 15px;
        }
        #review-product-menu-left{
            padding: 20px;
        }
        #review-product-menu-right{
            display: flex;
            gap: 20px;
            align-items: center;
            margin-left: 30px;
        }
        #review-product-menu-right a{
            color: rgba(0, 0, 0, .87);
            background-color: white;
            text-decoration: none;
            height: 30px;
            width: 70px;
            line-height: 40px;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid rgba(0, 0, 0, .09);
        } --}}
        {{-- /* binh luan */ --}}
        {{-- #user-rating{
            display: flex;
            flex-direction: column;
            gap: 0;
            margin-left: 20px;
            margin-top: 20px;
        }
        #user-rating h2{
            color: rgba(0, 0, 0, .8);
            font-size: 15px;
        }
        #user-rating span{
            font-size: 15px;
        }
        #user-rating>div{
            display: flex;
            gap: 0;
        }
        #user-rating>p{
            font-size: 15px;
            color: rgba(0, 0, 0, .54);
        }
        #user-comment{
            margin-left: 40px;
            font-size: 15px;
            width: 50%;
        }
        .btn-show-repform{
            border:none;
            background-color: #FA4226;
            color: white;
            cursor: pointer;
            padding: 3px 10px;
            margin-left: 40px;
        }
        .btn-show-repform:hover{
            text-decoration: underline;
        }
        .repform>div{
            display: flex;
            align-items: center;
        }
        .repform textarea{
            padding: 5px;
            border: 1px solid #757575;
        }
        .repform button{
            cursor: pointer;
            width: 50px;
            height: 20px;
            line-height: 30px;
            border: none;
            background-color: #FA4226;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
        }
        .repform button:hover{
            text-decoration: underline;
        }
        .repcomments{
            margin-left: 60px;
        }
        .repcomments strong{
            font-size: 15px;
        }
        .repcomments small{
            font-size: 15px;
        }
        .repcomments p{
            font-size: 15px;
        }
        hr{
            border-color: rgba(0, 0, 0, .09);;
        }
        #form-review>button{
            border-radius: 5px;
            color: white;
            background-color: #FF4D30;
            border: none;
            padding: 3px;
            cursor: pointer;
        }
        #form-review>button:hover{
            text-decoration: underline;
        }
        #form-review>label{
            font-size: 15px;
        }
        #textarea-comment p{
            font-size: 14px;
        }
        #textarea-comment textarea{
            padding: 5px;
        }
        .stars {
            /* display: inline-block; */
        }

        .star {
            /* font-size: 2em; */
            color: #ccc;
            cursor: pointer;
        }

        .star:hover,
        .star.selected {
            color: gold;
        }
        .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin-top: 20px;
}

.pagination a {
    text-decoration: none;
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    color: #333;
    transition: background-color 0.3s, color 0.3s;
    font-size: 15px;
}

.pagination a:hover {
    background-color: #FF4D30;
    color: #fff;
}

.pagination .active {
    padding: 8px 12px;
    border: 1px solid #FF4D30;
    border-radius: 5px;
    background-color: #FF4D30;
    color: #fff;
    font-weight: bold;
    font-size: 15px;
}
.disabled {
    font-size: 15px;
}
.page-link{
    font-size: 15px;
}

.pagination .disabled {
    padding: 8px 12px;
    color: #999;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: not-allowed;
    background-color: #f9f9f9;
    font-size: 15px;
}

.pagination .dots {
    padding: 8px 12px;
    color: #999;
    border: none;
    background: transparent;
    font-size: 14px;
    cursor: default;
} --}}


{{-- #footer{
            display: flex;
            margin-top: 70px;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        #footer-1,#footer-2,#footer-3,#footer-4{
            flex-basis: 20%;
            padding: 20px;
            box-sizing: border-box;
        }
        #footer a{
            text-decoration: none;
            color: black;
        }
        #footer li{
            list-style: none;
        }
        #footer-1 p{
            color: #888888;
            line-height: 25px;
            margin:15px 0;
            font-size: 15px;
        }
        #footer-1 h4{
            font-size: 15px;
        }
        #footer-1 h3{
            margin: 15px 0;
            font-size: 15px;
        }
        #footer-2 li{
            margin: 20px 0;
            font-size: 15px;
        }
        #footer-2 a:hover{
            color: #FF4D30;
        }
        #footer-2 ul{
            margin: 0;padding: 0;
            list-style: none;
        }
        #footer-3 p{
            margin: 20px 0;
            font-size: 15px;
        }
        #footer-4{
            display: flex;
            flex-direction: column;
        }
        #footer-4 p{
            font-size: 20px;
            margin: 20px 0;
        }
        #footer-4 input{
            padding: 15px 40px;
            background-color:#ECECEC;
            border: none;
            outline: none;
            font-size: 15px;
        }
        #footer-4 button{
            cursor: pointer;
            background-color:#FF4D30;
            border:none;
            margin-top: 10px;
            line-height: 30px;
            padding: 7px 15px;
            color: white;
            font-size: 15px;
        }
    </style> --}}

{{--
</head>
<body>
    <div id="header">
        <div id="header-left" onclick="window.location.href='http://127.0.0.1:8000/';" style="cursor: pointer">
            <ion-icon name="car-sport"></ion-icon>
            <h3>Car Rental</h3>
        </div>
        <h1>Xem chi tiết xe</h1>
        <div id="Login-Register">
            @if (Route::has('login'))
                <div>
                    @auth
                        @if (Auth::user()->role === 'admin')
                            <a id="account" href="{{ url('/admin') }}">Trang quản trị</a>
                        @else
                            <a id="account" href="{{ url('/dashboard') }}">Tài khoản</a>
                        @endif
                    @else
                        <a class="login" href="{{ route('login') }}">Đăng nhập</a>

                        @if (Route::has('register'))
                            <a class="register" href="{{ route('register') }}">Đăng ký</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
    <div id="detail">
        <div id="gallery-container">
            <img id="main-image" src="{{ asset('storage/' . $car->image_url) }}" alt="Ảnh xe">
            <div class="thumbnail-container">
                <span class="arrow" onclick="moveLeft()">&#10094;</span>
                <div id="thumbnails">
                    <div class="thumbnail-list">
                        <img class="thumbnail active" src="{{ asset('storage/' . $car->image_url) }}" alt="Ảnh xe"
                             onmouseover="changeImage(this)" onclick="openOverlay(this)">
                        @foreach ($car->carImages as $image)
                            <img class="thumbnail" src="{{ asset('storage/' . $image->image_url) }}" alt="Ảnh liên quan"
                                 onmouseover="changeImage(this)" onclick="openOverlay(this)">
                        @endforeach
                    </div>
                </div>
                <span class="arrow" onclick="moveRight()">&#10095;</span>
            </div>
        </div>
        <div id="detail-content">
            <h1>{{$car->name}}, {{$car->trademark}}</h1>
            <p><span id="text-decoration">{{ $averageRating ? number_format($averageRating, 1)  : 'Chưa có đánh giá' }}</span> <span id="gold">&#9733;&#9733;&#9733;&#9733;&#9733;</span> | <span id="text-decoration"> {{$quantity}}</span> Đánh giá</p>
            <div id="detail-price">
                <h1>Giá thuê siêu rẻ: </h1>
                <p>{{number_format($car->price_per_day, 0, ',', '.')}} VND / Ngày</p>
            </div>
            <div class="seat-quantity">
                <h1>Số chỗ ngồi: </h1>
                <p>{{$car->seat_count}}</p>
            </div>
            <div class="seat-quantity">
                <h1>Số lượng còn lại:</h1>
                <p>{{$car->remaining_quantity}}/{{$car->quantity}}</p>
            </div>
            <div id="edit-delete">
                @if (auth()->check() && auth()->user()->role === 'admin')
                <form action="{{route('car.destroy', $car->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="delete-car">Delete</button>
                </form>
                <a id="edit-car" href="{{ route('car.edit', $car->id) }}">Edit</a>
                @endif
            </div>
            <a id="book" href="{{route('bookings.create',[$car->id,$car->price_per_day])}}">Đặt xe ngay</a>
        </div>
    </div>
    <div id="overlay">
        <div id="enlarge-gallery-container">
            <div id="div-main-image">
                <span class="enlarge-arrow">&#10094;</span>
                <img id="enlarge-main-image" src="{{ asset('storage/' . $car->image_url) }}" alt="Ảnh xe">
                <span class="enlarge-arrow">&#10095;</span>
            </div>
            <div id="enlarge-image">
                <img class="enlarge-thumbnail active" src="{{ asset('storage/' . $car->image_url) }}" alt="Ảnh xe"
                         onclick="">
                @foreach ($car->carImages as $image)
                    <img class="enlarge-thumbnail" src="{{ asset('storage/' . $image->image_url) }}" alt="Ảnh liên quan"
                            onclick="">
                @endforeach
            </div>
        </div>
    </div>
    <div id="description">
        <h1>MÔ TẢ SẢN PHẨM:</h1>
        <p>{{$car->description}}</p>
    </div>


    <div id="review-product">
        <h2>Đánh giá sản phẩm</h2>
        <div id="review-product-menu">
            <div id="review-product-menu-left">
                <p class="red">{{ $averageRating ? number_format($averageRating, 1)  : 'Chưa có đánh giá' }} <span>Trên 5</span> </p>
                <span id="gold">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
            </div>
            <div id="review-product-menu-right">
                <a href="{{ route('car.show', ['id' => $car->id]) }}#reviews-section">
                    Tất cả ({{ $quantity }})
                </a>
                @for ($i = 1; $i <= 5; $i++)
                    <a href="{{ route('car.show', ['id' => $car->id, 'rating' => $i]) }}#reviews-section">
                        {{ $i }} sao ({{ $reviewCounts[$i] ?? 0 }})
                    </a>
                @endfor
            </div>
        </div>

        <!-- Danh sách đánh giá -->
        <div id="reviews-section" class="list-group">
            @if ($reviews->isEmpty())
                <p>Chưa có bình luận nào.</p>
            @else
                @foreach ($reviews as $review)
                    <div class="review" data-rating="{{ $review->rating }}">
                        <div id="user-rating">
                            <h2>{{ $review->user?->name ?? 'Người dùng carRental' }}</h2>
                            <div>
                                @for ($i = 1; $i <= 5; $i++)
                                    <span class="star" style="color: {{ $i <= $review->rating ? '#d0011b' : '#ccc' }};">&#9733;</span>
                                @endfor
                            </div>
                            <p>{{ $review->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                        <p id="user-comment">{{ $review->comment }}</p>
                        <div id="admin-comment">
                            @if (auth()->check() && auth()->user()->role === 'admin')
                                <button class="btn-show-repform" data-review-id="{{ $review->id }}">
                                    Trả lời
                                </button>

                                <!-- Form repcomment -->
                                <form action="{{ route('repcomments.store') }}" method="POST" class="repform" id="repform-{{ $review->id }}" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="review_id" value="{{ $review->id }}">
                                    <div>
                                        <textarea rows="2" cols="100" name="content" placeholder="Nhập nội dung phản hồi..." required></textarea>
                                        <button type="submit">Gửi</button>
                                    </div>
                                </form>
                            @endif
                        </div>

                        <!-- Hiển thị repcomment -->
                        @if ($review->repcomments->isNotEmpty())
                            <div class="repcomments">
                                @foreach ($review->repcomments as $rep)
                                    <div>
                                        <strong>Admin</strong>
                                        <small>{{ $rep->created_at->format('d/m/Y H:i') }}</small>
                                        <p>{{ $rep->content }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <hr>
                @endforeach
            @endif
        </div> --}}
        <!-- user comment -->
        {{-- <div id="input-box-comment">
            @if (auth()->check())
            @php
                // Kiểm tra xem người dùng đã đặt xe này và xem trạng thái của đơn đặt xe
                $booking = $car->bookings()->where('user_id', auth()->id())->first();
            @endphp

            @if ($booking && $booking->browsing_status)
                @php
                    // Kiểm tra nếu người dùng đã bình luận về chiếc xe này
                    $existingReview = $car->reviews()->where('user_id', auth()->id())->first();
                @endphp

                @if ($existingReview)
                    <p>Bạn đã bình luận, cảm ơn sự chia sẻ của bạn!</p>
                @else
                    <form id="form-review" action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="car_id" value="{{ $car->id }}">

                        <!-- Phần sao đánh giá -->
                        <label for="rating">Đánh giá trải nghiệm của bạn: </label>
                        <div class="stars">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                        </div>
                        <input type="hidden" name="rating" id="rating" value="0">

                        <!-- Phần bình luận -->
                        <div id="textarea-comment">
                            <p>{{auth()->user()->name}}</p>
                            <label for="comment"></label>
                            <textarea placeholder="Viết gì đó..." name="comment" id="comment" rows="3" cols="50" required></textarea>
                        </div>
                        <button type="submit">Gửi bình luận</button>
                    </form>
                @endif
            @else
                <p>Hãy để lại những góp ý sau khi bạn đã hoàn thành chuyến đi của mình cùng với dịch vụ bên chúng tôi nhé!</p>
            @endif
        @else
            <p>Bạn cần <a href="{{ route('login') }}">đăng nhập</a> để bình luận.</p>
        @endif
        </div> --}}
        {{-- <div id="input-box-comment">
            @if (auth()->check())
                @php
                    // Lấy danh sách tất cả đơn đặt xe hợp lệ của user cho xe này
                    $bookings = $car->bookings()
                        ->where('user_id', auth()->id())
                        ->where('browsing_status', true)
                        ->where('admin_give_back', true)
                        ->get();

                    // Tìm đơn đặt xe chưa được review
                    $bookingToReview = null;
                    foreach ($bookings as $booking) {
                        $existingReview = $car->reviews()
                            ->where('user_id', auth()->id())
                            ->where('booking_id', $booking->id)
                            ->exists();
                        if (!$existingReview) {
                            $bookingToReview = $booking;
                            break;
                        }
                    }
                @endphp --}}

                {{-- @if ($bookingToReview)
                    <form id="form-review" action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <input type="hidden" name="booking_id" value="{{ $bookingToReview->id }}">

                        <!-- Phần sao đánh giá -->
                        <label for="rating">Đánh giá trải nghiệm của bạn: </label>
                        <div class="stars">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                        </div>
                        <input type="hidden" name="rating" id="rating" value="0">

                        <!-- Phần bình luận -->
                        <div id="textarea-comment">
                            <p>{{ auth()->user()->name }}</p>
                            <label for="comment"></label>
                            <textarea placeholder="Viết gì đó..." name="comment" id="comment" rows="3" cols="50" required></textarea>
                        </div>
                        <button type="submit">Gửi bình luận</button>
                    </form>
                @else
                    <p>Bạn đã đánh giá tất cả các đơn hàng của mình.</p>
                @endif
            @else
                <p>Bạn cần <a href="{{ route('login') }}">đăng nhập</a> để bình luận.</p>
            @endif
        </div> --}}


        <!-- Phân trang -->
        {{-- <div class="pagination"> --}}
            {{-- Nút "Trước" --}}
            {{-- @if ($reviews->onFirstPage())
                <span class="disabled">← Trước</span>
            @else
                <a href="{{ $reviews->previousPageUrl() }}" class="page-link">← Trước</a>
            @endif --}}

            {{-- Trang đầu tiên --}}
            {{-- @if ($reviews->currentPage() > 2)
                <a href="{{ $reviews->url(1) }}" class="page-link">1</a>
                @if ($reviews->currentPage() > 3)
                    <span class="dots">...</span>
                @endif
            @endif --}}

            {{-- Các trang lân cận --}}
            {{-- @foreach (range(max(1, $reviews->currentPage() - 1), min($reviews->lastPage(), $reviews->currentPage() + 1)) as $page)
                @if ($page == $reviews->currentPage())
                    <span class="active">{{ $page }}</span>
                @else
                    <a href="{{ $reviews->url($page) }}" class="page-link">{{ $page }}</a>
                @endif
            @endforeach --}}

            {{-- Trang cuối cùng --}}
            {{-- @if ($reviews->currentPage() < $reviews->lastPage() - 1)
                @if ($reviews->currentPage() < $reviews->lastPage() - 2)
                    <span class="dots">...</span>
                @endif
                <a href="{{ $reviews->url($reviews->lastPage()) }}" class="page-link">{{ $reviews->lastPage() }}</a>
            @endif --}}

            {{-- Nút "Tiếp" --}}
            {{-- @if ($reviews->hasMorePages())
                <a href="{{ $reviews->nextPageUrl() }}" class="page-link">Tiếp →</a>
            @else
                <span class="disabled">Tiếp →</span>
            @endif
        </div>
    </div> --}}

    {{-- footer --}}
    {{-- <div id="footer">
        <div id="footer-1">
            <h1>Thuê xe</h1>
            <p>Chúng tôi cung cấp nhiều loại xe đáp ứng mọi nhu cầu lái xe của bạn. Chúng tôi có chiếc xe hoàn hảo để đáp ứng nhu cầu của bạn.</p>
            <h2>0123-456-789</h2>
            <h3>Hoang@gmail.com</h3>
            <h4>Thiết kế: Pham viet Hoang</h4>
        </div>
        <div id="footer-2">
            <h1>Công ty</h1>
            <ul>
                <li><a href="#">Phòng trưng bày</a></li>
                <li><a href="#">Sự nghiệp</a></li>
                <li><a href="#">Điện thoại di động</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Cách chúng tôi làm việc</a></li>
            </ul>
        </div>
        <div id="footer-3">
            <h1>Thời gian làm việc</h1>
            <p>Thứ 2 - Thứ 6, từ 8 giờ sáng - 9 giờ tối</p>
            <p>Thứ 7: 8 giờ sáng - 7 giờ tối</p>
            <p>Chủ nhật: đóng cửa</p>
        </div>
        <div id="footer-4">
            <h1>Đăng ký</h1>
            <p>Đăng ký địa chỉ Email của bạn để nhận tin tức và cập nhật mới nhất.</p>
            <input type="text" placeholder="Nhập địa chỉ email">
            <button>Xác nhận</button>
        </div>
    </div>



</body>
<script>
    // JavaScript xử lý việc chọn sao
    document.querySelectorAll('.star').forEach(star => {
        star.addEventListener('mouseover', function() {
            const value = this.getAttribute('data-value');
            document.querySelectorAll('.star').forEach(s => {
                s.classList.remove('selected');
                if (s.getAttribute('data-value') <= value) {
                    s.classList.add('selected');
                }
            });
        });

        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            document.getElementById('rating').value = value;
        });
    });
    document.querySelectorAll('.btn-show-repform').forEach(button => {
        button.addEventListener('click', function () {
            const reviewId = this.dataset.reviewId;
            const form = document.getElementById(`repform-${reviewId}`);
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        });
    });





    document.addEventListener("DOMContentLoaded", function () {
    let thumbnails = document.querySelectorAll(".thumbnail");
    let mainImage = document.getElementById("main-image");
    let thumbnailContainer = document.querySelector(".thumbnail-list");
    let maxVisible = 3; // Hiển thị tối đa 3 ảnh nhỏ
    let currentIndex = 0;
    let totalThumbnails = thumbnails.length;

    let overlay = document.getElementById("overlay");
    let enlargeThumbnails = document.querySelectorAll(".enlarge-thumbnail");
    let enlargeMainImage = document.getElementById("enlarge-main-image");
    let images = Array.from(thumbnails).map(img => img.src);
    let currentIndexOverlay = 0;

    /** 🔹 Thay đổi ảnh lớn khi hover vào ảnh nhỏ */
    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener("mouseover", function () {
            mainImage.src = thumb.src;

            thumbnails.forEach(el => el.classList.remove("active"));
            thumb.classList.add("active");
        });

        thumb.addEventListener("click", function () {
            overlay.style.display = "block";
            enlargeMainImage.src = thumb.src;
            currentIndexOverlay = index;

            enlargeThumbnails.forEach(el => el.classList.remove("active"));
            enlargeThumbnails[index].classList.add("active");
        });
    });

    /** 🔹 Trượt danh sách ảnh nhỏ sang trái */
    document.querySelector(".arrow:first-of-type").addEventListener("click", function () {
        if (currentIndex > 0) {
            currentIndex--;
            thumbnailContainer.style.transform = `translateX(-${currentIndex * 80}px)`;
        }
    });

    /** 🔹 Trượt danh sách ảnh nhỏ sang phải */
    document.querySelector(".arrow:last-of-type").addEventListener("click", function () {
        if (currentIndex < totalThumbnails - maxVisible) {
            currentIndex++;
            thumbnailContainer.style.transform = `translateX(-${currentIndex * 80}px)`;
        }
    }); --}}

    {{-- /** 🔹 Thay đổi ảnh lớn trong overlay khi click vào ảnh nhỏ */
    enlargeThumbnails.forEach((thumb, index) => {
        thumb.addEventListener("click", function () {
            enlargeMainImage.src = thumb.src;
            currentIndexOverlay = index;

            enlargeThumbnails.forEach(el => el.classList.remove("active"));
            thumb.classList.add("active");
        });
    });

    /** 🔹 Nút mũi tên trong overlay */
    document.querySelectorAll(".enlarge-arrow")[0].addEventListener("click", function () {
        currentIndexOverlay = (currentIndexOverlay - 1 + images.length) % images.length;
        enlargeMainImage.src = images[currentIndexOverlay];

        enlargeThumbnails.forEach(el => el.classList.remove("active"));
        enlargeThumbnails[currentIndexOverlay].classList.add("active");
    });

    document.querySelectorAll(".enlarge-arrow")[1].addEventListener("click", function () {
        currentIndexOverlay = (currentIndexOverlay + 1) % images.length;
        enlargeMainImage.src = images[currentIndexOverlay];

        enlargeThumbnails.forEach(el => el.classList.remove("active"));
        enlargeThumbnails[currentIndexOverlay].classList.add("active");
    });

    /** 🔹 Đóng overlay khi click ra ngoài */
    overlay.addEventListener("click", function (event) {
        if (event.target === overlay) {
            overlay.style.display = "none";
        }
    });
    mainImage.addEventListener("click", function () {
    overlay.style.display = "block";
    enlargeMainImage.src = mainImage.src;

    // Tìm index của ảnh đang hiển thị
    currentIndexOverlay = images.findIndex(img => img === mainImage.src);

    // Cập nhật class active cho ảnh trong overlay
    enlargeThumbnails.forEach(el => el.classList.remove("active"));
    if (currentIndexOverlay !== -1) {
        enlargeThumbnails[currentIndexOverlay].classList.add("active");
    }
});
});
// --}}









{{--
document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.filter-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                let rating = this.getAttribute('data-rating');
                document.querySelectorAll('.review').forEach(review => {
                    review.style.display = (rating === 'all' || review.getAttribute('data-rating') === rating) ? 'block' : 'none';
                });
            });
        });
    });

</script>

</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/99e557a6de.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>DriveLux</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        #header{
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding-top: 20px;
            background-color: #FAFAFA;
            padding-top: 30px;
            padding-bottom: 20px;
        }
        #header-menu{
            display: flex;
            gap: 35px;
        }
        #header-menu li{
            list-style: none;
        }
        #header-menu a:hover{
            color: #2CB9AD !important;
        }
        #header a{
            color: #797D86;
            font-weight: 400;
            text-decoration: none;
            transition: all 0.5sease-in-out;
            font-size: 19px;
        }
        #header-menu-login{
            display: flex;
            gap: 35px;
        }
        .login,#account{
            color: #FAFAFA !important;
            transition: all 0.5s ease-in-out;
            padding: 12px 32px;
            border: none;
            border-radius: 50px;
            background-color: #2C2D2F;
        }
        .login:hover,#account:hover {
            transform: scale(1.025);
            outline: 2px solid #57d3c9;
            box-shadow: 4px 5px 17px -4px #2CB9AD;
            background-color: #2CB9AD;
        }
        #menu-main{
            color: #2CB9AD !important;
        }
        #inner-banner{
            width: 100%;
            padding-left: 40px;
            display: flex;
            align-items: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: left;
            height: 290px;
            background-image: url('{{ asset('storage/rentalCar/inner-banner.png') }}');
        }
        #inner-banner h3{
            font-weight: 900;
            font-size: 70px;
            line-height: 120%;
            color: #FAFAFA;
            margin: 0;
        }


        #car{
            padding: 10px 0;
            background: #F0F2F4;
            border-radius: 30px;
            margin: 100px 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .div-car-info{
            display: flex;
            flex-direction: column;
            row-gap: 20px;
            background-color: white;
            border-radius: 30px;
            padding: 30px;
        }
        .text-color{
            color:#2CB9AD;
        }
        .car-info{
            display: flex;
            align-items: center;
            gap: 50px;
            justify-content: space-between;
        }
        .car-info p{
            font-size: 25px;
        }
        .car-info h1{
            font-weight: 500;
            font-size: 25px;
        }
        #h1-trademark{
            font-size: 35px !important;
            font-weight: 700 !important;
        }
        #detail{
            display: flex;
            margin: 20px 20px;
            justify-content: center;
        }
        #detail-content>h1{
            font-size: 25px;
            color: rgba(0, 0, 0, .8);
        }
        #text-decoration{
            text-decoration: underline;
            margin-left: 15px;
        }
        #gold{
            color: #2CB9AD;
            margin-right: 15px;
        }
        #detail-price h1{
            color: rgba(0, 0, 0, .8);
            font-size: 25px;
        }
        #detail-price{
            display: flex;
            align-items: center;
            margin-top: 15px;
        }
        #detail-price p{
            color: #d0011b;
            font-size: 30px;
            margin-left: 10px;
        }
        .seat-quantity{
            display: flex;
            align-items: center;
            margin-top: 15px;
        }
        .seat-quantity h1{
            color:#757575;
            font-size: 15px;
            margin-right: 10px;
        }

        #delete-car{
            background-color: #FB9B82;
            color: white;
            border-radius: 5px;
            border: none;
            margin: 20px 10px 20px 0;
            cursor: pointer;
            width: 70px;
            height: 30px;
            line-height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }
        #edit-car{
            text-decoration: none;
            background-color: #2ABAAE;
            color: white;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            width: 50px;
            height: 30px;
            line-height: 30px;
            display: flex;
            justify-content: center;
            margin: 20px 0 0 30px;
        }
        #edit-delete{
            display: flex;
        }
        #book{
            color: #FAFAFA !important;
            transition: all 0.5s ease-in-out;
            padding: 12px 32px;
            border: none;
            border-radius: 50px;
            background-color: #2C2D2F;
            text-decoration: none;
            margin: auto;
        }
        #book:hover{
            transform: scale(1.025);
            outline: 2px solid #57d3c9;
            box-shadow: 4px 5px 17px -4px #2CB9AD;
            background-color: #2CB9AD;
        }


        #gallery-container {
            width: 500px;
            margin: 0 30px 0 0;
        }
        #main-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            cursor: pointer;
            border-radius: 30px;
            background-color: white;
        }
        .thumbnail-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }
        .arrow {
            font-size: 24px;
            cursor: pointer;
            padding: 5px;
        }
        #thumbnails {
            display: flex;
            overflow: hidden;
            width: 240px;
        }
        .thumbnail-list {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }
        .thumbnail {
            width: 70px;
            height: 50px;
            object-fit: cover;
            margin: 0 5px;
            cursor: pointer;
            border: 2px solid transparent;
        }
        .thumbnail:hover {
            border: 2px solid red;
        }
        .thumbnail.active {
            border: 2px solid red;
        }



        #book-container {
            display: flex;
            justify-content: space-between;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin: 0 100px;
        }

        /* Bố cục hai bên */
        #form-car {
            width: 55%;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
        }

        #confirm-info-user {
            width: 40%;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            border-left: 4px solid #3498db;
        }

        /* Form */
        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Tổng giá thuê */
        #total_price {
            font-weight: bold;
            color: #e74c3c;
            background-color: #f3f3f3;
        }

        /* Nút xác nhận */
        button {
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }

        /* Xác nhận thông tin người dùng */
        #confirm-info-user h1 {
            color: #3498db;
        }

        #confirm-info-user p {
            font-size: 16px;
            margin: 8px 0;
        }

        #confirm-info-user a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #27ae60;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        #confirm-info-user a:hover {
            background-color: #219150;
        }




        #description{
            margin: 20px;
            background-color: white;
            padding: 20px;
        }
        #description h1{
            color: rgba(0, 0, 0, .87);
            font-size: 25px;
            padding: 10px 0;
        }
        #description p{
            width: 50%;
            font-size: 15px;
            line-height: 20px;
        }
        #review-product{
            font-size: 30px;
            margin: 30px 20px;
            background-color: white;
        }
        #review-product>h2{
            color: rgba(0, 0, 0, .87);
            font-size: 25px;
            margin-left: 20px;
            padding-top: 20px;
        }
        #review-product-menu{
            display: flex;
            background-color: #FFFBF8;
            border: 1px solid #FA4226;
            margin: 20px 20px 0;
        }
        .red{
            color: #2CB9AD;
            font-size: 25px;
        }
        .red span{
            font-size: 15px;
        }
        #review-product-menu-left{
            padding: 20px;
        }
        #review-product-menu-right{
            display: flex;
            gap: 20px;
            align-items: center;
            margin-left: 30px;
        }
        #review-product-menu-right a{
            color: rgba(0, 0, 0, .87);
            background-color: white;
            text-decoration: none;
            height: 30px;
            width: 70px;
            line-height: 40px;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid rgba(0, 0, 0, .09);
        }
        {{-- /* binh luan */ --}}
        #user-rating{
            display: flex;
            gap: 0;
            margin-left: 20px;
            margin-top: 20px;
            align-items: center;
        }
        #avt-user{
            margin-right: 10px;
        }
        #avt-user img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        #user-rating-name{
            display: flex;
            flex-direction: column;
            gap: 0;
        }
        #user-rating h2{
            color: rgba(0, 0, 0, .8);
            font-size: 15px;
        }
        #user-rating span{
            font-size: 15px;
            color: #2CB9AD;
        }
        #user-rating-name>p{
            font-size: 15px;
            color: rgba(0, 0, 0, .54);
        }
        #user-rating-name>div{
            display: flex;
            gap: 3px;
        }
        #user-comment{
            margin-left: 80px;
            font-size: 15px;
            width: 50%;
        }
        .btn-show-repform{
            border:none;
            background-color: #2980B9;
            color: white;
            cursor: pointer;
            padding: 3px 10px;
            margin-left: 40px;
        }
        .btn-show-repform:hover{
            text-decoration: underline;
        }
        .repform>div{
            display: flex;
            align-items: center;
        }
        .repform textarea{
            padding: 5px;
            border: 1px solid #757575;
        }
        .repform button{
            cursor: pointer;
            width: 50px;
            height: 20px;
            line-height: 30px;
            border: none;
            background-color: #FA4226;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
        }
        .repform button:hover{
            text-decoration: underline;
        }
        .repcomments{
            margin-left: 80px;
            background-color:#F5F5F5;
            width: 50%;
            padding: 10px;
        }
        .repcomments strong{
            font-size: 15px;
        }
        .repcomments small{
            font-size: 15px;
        }
        .repcomments p{
            color: rgba(0, 0, 0, .65);
            margin-top: .625rem;
            white-space: pre-wrap;
            word-break: break-word;
            font-size: 15px;
        }
        hr{
            border-color: rgba(0, 0, 0, .09);;
        }
        #form-review{
            border: 2px solid #e2e5e9;
            margin-top: 10px;
            width: 50%;
            margin-left: 15px;
            border-radius: 6px;
        }
        #form-review>button{
            border-radius: 5px;
            color: white;
            background-color: #FF4D30;
            border: none;
            padding: 3px;
            cursor: pointer;
        }
        #form-review>button:hover{
            text-decoration: underline;
        }
        #form-review>label{
            font-size: 15px;
        }
        #textarea-comment{
            display: flex;
            justify-content: space-between;
        }
        #textarea-comment img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 5px;
        }
        #textarea-comment textarea{
            border: none;
            outline: none;
        }
        #textarea-comment button{
            width: 120px !important;
            height: 40px !important;
        }

        .stars {
            /* display: inline-block; */
        }

        .star {
            /* font-size: 2em; */
            color: #ccc;
            cursor: pointer;
        }

        .star:hover,
        .star.selected {
            color: gold;
        }
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }

        .pagination a {
            text-decoration: none;
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #333;
            transition: background-color 0.3s, color 0.3s;
            font-size: 15px;
        }

        .pagination a:hover {
            background-color: #2980B9;
            color: #fff;
        }

        .pagination .active {
            padding: 8px 12px;
            border: 1px solid #2980B9;
            border-radius: 5px;
            background-color: #2980B9;
            color: #fff;
            font-weight: bold;
            font-size: 15px;
        }
        .disabled {
            font-size: 15px;
        }
        .page-link{
            font-size: 15px;
        }

        .pagination .disabled {
            padding: 8px 12px;
            color: #999;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: not-allowed;
            background-color: #f9f9f9;
            font-size: 15px;
        }

        .pagination .dots {
            padding: 8px 12px;
            color: #999;
            border: none;
            background: transparent;
            font-size: 14px;
            cursor: default;
        }
        .comment-text{
            font-size: 15px;
        }
        #admin-reply{
            border: 2px solid #efefef;
            width: 50%;
            margin-left: 39px;
        }
        #admin-reply textarea{
            border: none;
            outline: none;
        }
        #admin-reply button{
            background-color: #2980B9;
            width: 80px;
            height: 30px;
        }
        .error-message{
            display: flex;
            align-items: center;
            color: red;
            font-size: 15px;
        }
        #footer{
            width: 100%;
            height: 486px;
            position: relative;
        }
        #footer-left{
            row-gap: 10px;
            padding-top: 100px;
            padding-left: 150px;
            display: flex;
            flex-direction: column;
            background-image: url('{{ asset('storage/home/footer-shape.png') }}');
            width: 490px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: right;
            height: 486px;

        }
        #footer-left>p{
            font-size: 20px;
            margin-right: 10px;
        }
        .footer-icon{
            display: flex;
            gap: 10px;
            align-items: flex-end;
            cursor: pointer;
            color: #FAFAFA;
            transition: color 1s ease;
        }
        .footer-icon:hover{
            color: #1B1C1E;
        }
        .footer-icon i{
            font-weight: 100;
            font-size: 25px;
        }
        #footer-left>p{
            font-size: 15px;
            margin: 15px 0;
        }
        #footer-logo{
            display: flex;
            gap: 30px;
        }
        #footer-logo i{
            color: #FAFAFA;
            font-size: 30px;
            transition: color 1s ease-in-out;
            cursor: pointer;
        }
        #footer-logo i:hover{
            color: #1B1C1E;
        }
        #footer h4{
            font-size: 20px;
            color: #FAFAFA;
            margin-top: 10px;
        }
        #footer h5{
            font-size: 20px;
            margin-top: 10px;
        }
        #footer-logo-car{
            position: absolute;
            top: 100px;
            left: 40%;
            transform: translateY(-50%);
            width: 300px;
            height: auto;
        }
        #footer-logo-car img, #footer-car img{
            width: 100%;
            height: auto;
        }
        #footer-car{
            position: absolute;
            right: 150px;
            top: 50%;
            transform: translateY(-50%);
            width: 500px;
        }
        #scrollToTop{
            display: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #3ECCC0;
            color: black;
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1003;
            font-size: 25px;
            border: none;
            cursor: pointer;
        }
        #scrollToTop:hover{
            background-color: #06c6b6;
        }
    </style>
</head>
<body>
    <div id="header">
        <img src="{{ asset('storage/home/logo.png') }}" alt="Logo">
        <div id="header-menu-login">
            <div id="header-menu">
                <li><a href="/">Trang chủ</a></li>
                <li><a href="/car">Thuê xe</a></li>
                <li><a href="about">Về chúng tôi</a></li>
                <li><a href="/contact">Liên hệ</a></li>
            </div>
            <div id="Login">
                @if (Route::has('login'))
                    <div>
                        @auth
                            @if (Auth::user()->role === 'admin')
                                <a id="account" href="{{ url('/admin') }}">Trang quản trị</a>
                            @else
                                <a id="account" href="{{ url('/dashboard') }}">Tài khoản</a>
                            @endif
                        @else
                                <a class="login" href="{{ route('login') }}">Đăng nhập</a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div id="inner-banner">
        <h3>Xem chi tiết</h3>
    </div>
    <div id="car">
        <div id="detail">
            <div id="gallery-container">
                <img id="main-image" src="{{ asset('storage/' . $car->image_url) }}" alt="Ảnh xe">
                <div class="thumbnail-container">
                    <span class="arrow" onclick="moveLeft()">&#10094;</span>
                    <div id="thumbnails">
                        <div class="thumbnail-list">
                            <img class="thumbnail active" src="{{ asset('storage/' . $car->image_url) }}" alt="Ảnh xe"
                                 onmouseover="changeImage(this)" onclick="openOverlay(this)">
                            @foreach ($car->carImages as $image)
                                <img class="thumbnail" src="{{ asset('storage/' . $image->image_url) }}" alt="Ảnh liên quan"
                                     onmouseover="changeImage(this)" onclick="openOverlay(this)">
                            @endforeach
                        </div>
                    </div>
                    <span class="arrow" onclick="moveRight()">&#10095;</span>
                </div>
            </div>
            <div id="detail-content">
                <div class="div-car-info">
                    <div class="car-info">
                        <h1 id="h1-trademark">Thương hiệu</h1>
                        <p id="trademark">{{$car->trademark}}</p>
                    </div>
                    <div class="car-info">
                        <h1>Tên xe</h1>
                        <p id="name">{{$car->name}}</p>
                    </div>
                    <div class="car-info">
                        <h1>Giá thuê</h1>
                        <p class="text-color"><span>{{ number_format($car->price_per_day, 0, ',', '.') }} VND/Ngày</span></p>
                    </div>
                    <div class="car-info">
                        <h1>Số chỗ ngồi</h1>
                        <p>{{$car->seat_count}}</p>
                    </div>
                    <div class="car-info">
                        <h1>Số lượng</h1>
                        <p>{{$car->remaining_quantity}}</p>
                    </div>
                    <div class="car-info">
                        <h1>Đánh giá</h1>
                        <p class="text-color"><span>{{ $car->reviews->avg('rating') ?: 5 }}&#9733;</span></p>
                    </div>
                    <div id="edit-delete">
                        @if (auth()->check() && auth()->user()->role === 'admin')
                        <form action="{{route('car.destroy', $car->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="delete-car">Delete</button>
                        </form>
                        <a id="edit-car" href="{{ route('car.edit', $car->id) }}">Edit</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <a id="book" href="{{route('bookings.create',[$car->id,$car->price_per_day])}}">Đặt xe ngay</a>
    </div>
    <div id="description">
        <h1>MÔ TẢ SẢN PHẨM:</h1>
        <p>{{$car->description}}</p>
    </div>


    <div id="review-product">
        <h2>Đánh giá sản phẩm</h2>
        <div id="review-product-menu">
            <div id="review-product-menu-left">
                <p class="red">{{ $averageRating ? number_format($averageRating, 1)  : 'Chưa có đánh giá' }} <span>Trên 5</span> </p>
                <span id="gold">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
            </div>
            <div id="review-product-menu-right">
                <a href="{{ route('car.show', ['id' => $car->id]) }}#reviews-section">
                    Tất cả ({{ $quantity }})
                </a>
                @for ($i = 1; $i <= 5; $i++)
                    <a href="{{ route('car.show', ['id' => $car->id, 'rating' => $i]) }}#reviews-section">
                        {{ $i }} sao ({{ $reviewCounts[$i] ?? 0 }})
                    </a>
                @endfor
            </div>
        </div>

        <!-- Danh sách đánh giá -->
        <div id="reviews-section" class="list-group">
            @if ($reviews->isEmpty())
                <p>Chưa có bình luận nào.</p>
            @else
                @foreach ($reviews as $review)
                    <div class="review" data-rating="{{ $review->rating }}">
                        <div id="user-rating">
                            <div id="avt-user">
                                <img src="{{asset('storage/' . $review->user->avt_url)}}" alt="">
                            </div>
                            <div id="user-rating-name">
                                <h2>{{ $review->user?->name ?? 'Người dùng carRental' }}</h2>
                                <div>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <span class="star" style="color: {{ $i <= $review->rating ? '#2CB9AD' : '#ccc' }};">&#9733;</span>
                                    @endfor
                                </div>
                                <p>{{ $review->created_at->format('d/m/Y') }}</p>
                            </div>
                        </div>
                        <p id="user-comment">{{ $review->comment }}</p>
                        <div id="admin-comment">
                            @if (auth()->check() && auth()->user()->role === 'admin')
                                <button class="btn-show-repform" data-review-id="{{ $review->id }}">
                                    Trả lời
                                </button>

                                <!-- Form repcomment -->
                                <form action="{{ route('repcomments.store') }}" method="POST" class="repform" id="repform-{{ $review->id }}" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="review_id" value="{{ $review->id }}">
                                    <div id="admin-reply">
                                        <textarea rows="2" cols="100" name="content" placeholder="Nhập nội dung phản hồi..." required></textarea>
                                        <button type="submit">Trả lời</button>
                                    </div>
                                </form>
                            @endif
                        </div>

                        <!-- Hiển thị repcomment -->
                        @if ($review->repcomments->isNotEmpty())
                            <div class="repcomments">
                                @foreach ($review->repcomments as $rep)
                                    <div>
                                        <strong>Phản hồi của quản trị viên</strong>
                                        <small>{{ $rep->created_at->format('d/m/Y') }}</small>
                                        <p>{{ $rep->content }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
        <div id="input-box-comment">
            @if (auth()->check())
                @php
                    // Lấy danh sách tất cả đơn đặt xe hợp lệ của user cho xe này
                    $bookings = $car->bookings()
                        ->where('user_id', auth()->id())
                        ->where('browsing_status', true)
                        ->where('admin_give_back', true)
                        ->get();

                    // Tìm đơn đặt xe chưa được review
                    $bookingToReview = null;
                    foreach ($bookings as $booking) {
                        $existingReview = $car->reviews()
                            ->where('user_id', auth()->id())
                            ->where('booking_id', $booking->id)
                            ->exists();
                        if (!$existingReview) {
                            $bookingToReview = $booking;
                            break;
                        }
                    }
                @endphp

                 @if ($bookingToReview)
                    <form id="form-review" action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <input type="hidden" name="booking_id" value="{{ $bookingToReview->id }}">

                        <!-- Phần sao đánh giá -->
                        <label for="rating"></label>
                        <div class="stars">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                        </div>
                        <input type="hidden" name="rating" id="rating" value="0">

                        <!-- Phần bình luận -->
                        <div id="textarea-comment">
                            <div>
                                <img src="{{asset('storage/' . auth()->user()->avt_url)}}" alt="">
                                <textarea placeholder="Viết gì đó..." name="comment" id="comment" rows="3" cols="50" required></textarea>
                            </div>
                            <button type="submit">Gửi bình luận</button>
                        </div>
                        @error('comment')
                            <div class="error-message">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                        @error('rating')
                            <div class="error-message">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </form>
                @else
                    <p class="comment-text">"Bạn đã đánh giá tất cả các đơn hàng của mình."</p>
                @endif
            @else
                <p>Bạn cần <a href="{{ route('login') }}">đăng nhập</a> để bình luận.</p>
            @endif
        </div>


        <!-- Phân trang -->
         <div class="pagination">
            {{-- Nút "Trước" --}}
             @if ($reviews->onFirstPage())
                <span class="disabled">← Trước</span>
            @else
                <a href="{{ $reviews->previousPageUrl() }}" class="page-link">← Trước</a>
            @endif

            {{-- Trang đầu tiên --}}
             @if ($reviews->currentPage() > 2)
                <a href="{{ $reviews->url(1) }}" class="page-link">1</a>
                @if ($reviews->currentPage() > 3)
                    <span class="dots">...</span>
                @endif
            @endif

            {{-- Các trang lân cận --}}
             @foreach (range(max(1, $reviews->currentPage() - 1), min($reviews->lastPage(), $reviews->currentPage() + 1)) as $page)
                @if ($page == $reviews->currentPage())
                    <span class="active">{{ $page }}</span>
                @else
                    <a href="{{ $reviews->url($page) }}" class="page-link">{{ $page }}</a>
                @endif
            @endforeach

            {{-- Trang cuối cùng --}}
             @if ($reviews->currentPage() < $reviews->lastPage() - 1)
                @if ($reviews->currentPage() < $reviews->lastPage() - 2)
                    <span class="dots">...</span>
                @endif
                <a href="{{ $reviews->url($reviews->lastPage()) }}" class="page-link">{{ $reviews->lastPage() }}</a>
            @endif

            {{-- Nút "Tiếp" --}}
             @if ($reviews->hasMorePages())
                <a href="{{ $reviews->nextPageUrl() }}" class="page-link">Tiếp →</a>
            @else
                <span class="disabled">Tiếp →</span>
            @endif
        </div>
    </div>

    <div id="footer">
        <div id="footer-left">
            <div class="footer-icon">
                <i class='bx bx-phone'></i>
                <p>02414123123</p>
            </div>
            <div class="footer-icon">
                <i class='bx bx-envelope'></i>
                <p>hoang@gmail.com</p>
            </div>
            <div class="footer-icon">
                <i class='bx bx-map'></i>
                <p>12 Yên Nghĩa, Hà Đông, Hà Nội</p>
            </div>
            <p>Monday - Friday: 08:00 AM - 06:00 PM</p>
            <div id="footer-logo">
                <i class='bx bxl-instagram'></i>
                <i class='bx bxl-facebook'></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class='bx bx-envelope'></i>
            </div>
            <h4>© 2024 All rights are reserved by</h4>
            <h5>Drivelux</h5>
        </div>
        <div id="footer-logo-car">
            <img src="{{ asset('storage/home/logo.png') }}" alt="">
        </div>
        <div id="footer-car">
            <img src="{{ asset('storage/home/car-image-2.png') }}" alt="">
        </div>
    </div>
    <button id="scrollToTop">↑</button>
    <script>
    // JavaScript xử lý việc chọn sao
    document.querySelectorAll('.star').forEach(star => {
        star.addEventListener('mouseover', function() {
            const value = this.getAttribute('data-value');
            document.querySelectorAll('.star').forEach(s => {
                s.classList.remove('selected');
                if (s.getAttribute('data-value') <= value) {
                    s.classList.add('selected');
                }
            });
        });

        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            document.getElementById('rating').value = value;
        });
    });
    document.querySelectorAll('.btn-show-repform').forEach(button => {
        button.addEventListener('click', function () {
            const reviewId = this.dataset.reviewId;
            const form = document.getElementById(`repform-${reviewId}`);
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        });
    });





    document.addEventListener("DOMContentLoaded", function () {
    let thumbnails = document.querySelectorAll(".thumbnail");
    let mainImage = document.getElementById("main-image");
    let thumbnailContainer = document.querySelector(".thumbnail-list");
    let maxVisible = 3; // Hiển thị tối đa 3 ảnh nhỏ
    let currentIndex = 0;
    let totalThumbnails = thumbnails.length;

    let overlay = document.getElementById("overlay");
    let enlargeThumbnails = document.querySelectorAll(".enlarge-thumbnail");
    let enlargeMainImage = document.getElementById("enlarge-main-image");
    let images = Array.from(thumbnails).map(img => img.src);
    let currentIndexOverlay = 0;

    /** 🔹 Thay đổi ảnh lớn khi hover vào ảnh nhỏ */
    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener("mouseover", function () {
            mainImage.src = thumb.src;

            thumbnails.forEach(el => el.classList.remove("active"));
            thumb.classList.add("active");
        });

        thumb.addEventListener("click", function () {
            overlay.style.display = "block";
            enlargeMainImage.src = thumb.src;
            currentIndexOverlay = index;

            enlargeThumbnails.forEach(el => el.classList.remove("active"));
            enlargeThumbnails[index].classList.add("active");
        });
    });

    /** 🔹 Trượt danh sách ảnh nhỏ sang trái */
    document.querySelector(".arrow:first-of-type").addEventListener("click", function () {
        if (currentIndex > 0) {
            currentIndex--;
            thumbnailContainer.style.transform = `translateX(-${currentIndex * 80}px)`;
        }
    });

    /** 🔹 Trượt danh sách ảnh nhỏ sang phải */
    document.querySelector(".arrow:last-of-type").addEventListener("click", function () {
        if (currentIndex < totalThumbnails - maxVisible) {
            currentIndex++;
            thumbnailContainer.style.transform = `translateX(-${currentIndex * 80}px)`;
        }
    });



});
//
const scrollToTop = document.getElementById("scrollToTop");
            window.onscroll = function(){
                if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
                    scrollToTop.style.display = "block";
                }
                else{
                    scrollToTop.style.display = "none";
                }
            }
            scrollToTop.addEventListener("click",() => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                })
            })
    </script>
</body>
</html>
