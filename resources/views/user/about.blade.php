<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/99e557a6de.js" crossorigin="anonymous"></script>
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
        .login{
            color: #FAFAFA !important;
            transition: all 0.5s ease-in-out;
            padding: 12px 32px;
            border: none;
            border-radius: 50px;
            background-color: #2C2D2F;
        }
        .login:hover {
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
        #session{
            display: flex;
            gap: 20px;
            margin-top: 100px;
        }
        #session-img{
            flex-basis: 50%;
            margin-left: 120px;
            height: 900px;
            background-color: #F0F2F4;
            border-radius: 30px;
            padding: 30px;
        }
        #session-content{
            flex-basis: 50%;
            margin-right: 100px;

        }
        #session-img img{
            width: 100%;
            height: 100%;
        }
        .whoweare, .whatwedo {
            padding-bottom: 8px;
            font-weight: 400;
            font-size: 32px;
            line-height: 120%;
            margin-bottom: 10px;
            padding-left: 11px;
            position: relative;
            cursor: pointer;
            color: #797D86;
        }
        .whoweare{
            margin-bottom: 50px;
            margin-top: 15px;
        }
        .whatwedo{
            border-bottom: 1px solid black;
        }

        .whoweare.active, .whatwedo.active {
            color: #2CB9AD;
        }

        .whoweare::after, .whatwedo::after {
            content: "";
            width: 0px;
            height: 2px;
            background-color: #2CB9AD;
            position: absolute;
            bottom: 0;
            left: 0;
            transition: width 0.3s ease-in-out;
        }

        .whoweare.active::after, .whatwedo.active::after {
            width: 250px;
        }

        /* Thêm hiệu ứng hover */
        .whoweare:hover::after, .whatwedo:hover::after {
            width: 250px;
        }
        .whoweare:hover, .whatwedo:hover {
            color: #2CB9AD;
        }

        /* Ẩn nội dung ban đầu */
        .content {
            margin-top: 30px;
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            letter-spacing: 0.05em;
            color: #2C2D2F;
        }
        .content.active {
            display: block;
        }
        #why-choose-us-2{
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 50px;
            margin-bottom: 200px;
        }
        #why-choose-us-2>div{
            flex: 0 1 calc((100% - 40px) / 2);
            background-color: #F0F2F4;
            height: 170px;
            padding: 30px;
            border-radius: 40px;
        }
        #why-choose-us-2>div>div{
            border-radius: 50%;
            background-color: white;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
        }
        #why-choose-us-2 h4{
            font-weight: 600;
            font-size: 20px;
            line-height: 120%;
            color: #2C2D2F;
            margin: 0;
        }



        #how-to-book{
            margin-top: 100px;
            display: flex;
            margin: auto;
            gap: 50px;
            align-items: center;
            margin-left: 100px;
        }
        #how-to-book h2{
            font-weight: 700;
            font-size: 57px;
            line-height: 120%;
            color: #1B1C1E;
        }
        #how-to-book p{
            color: #1B1C1E;
            font-size: 20px;
            width: 35%;
            margin-bottom: 10px;
            line-height: 160%;
        }
        #how-to-book>div>div{
            margin-top: 10px;
            width: 300px;
            height: 10px;
            background-color: #2AB8B8;
            clip-path: polygon(0% 0%, 95% 0%, 100% 50%, 95% 100%, 0% 100%);
        }



        #logo-div{
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
        #logo{
            width: 750px;
            overflow: hidden;
            white-space: nowrap;
        }
        #logo-item{
            width: fit-content;
            display: flex;
            gap: 10px;
            animation: slide 20s linear infinite;
        }
        .logo-items{
            width:150px;
            height: 150px;
            display: flex;
            align-items: center;
        }
        .logo-items img{
            width: 90%;
            height: 90%;
            border-radius: 15px;
            box-shadow: 0 0 15px #2CB9AD;
        }
        @keyframes slide {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
        }
        #slider-container-center{
            display: flex;
            justify-content: center;
            margin-bottom: 100px;
        }
        .slider-container {
            width: 1200px; /* Hiển thị 3 div mỗi div rộng 100px */
            overflow: hidden;
            position: relative;
        }
        .slider {
            display: flex;
            width: 4800px; /* 6 div * 400px * 2 (clone để tạo hiệu ứng lặp vô hạn) */
            transition: transform 0.5s ease-in-out;
        }
        .slide {
            width: 400px;
            height: auto;
            background: #F0F2F4;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 5px;
        }
        #prev-next{
            display: flex;
            justify-content: space-between;
            padding: 0 0px 0 80px;
            margin-top: 100px;
        }
        #prev-next-btn{
            display: flex;
            gap: 30px;
        }
        #prev-next-btn button{
            background-color: #F0F2F4;
            color:#2CB9AD;
            width: 50px;
            height: 50px;
            border: none;
            border-radius: 15px;
            font-size: 35px;
            cursor: pointer;
        }
        #prev-next-text{
            display: flex;
        }
        #prev-next-text p{
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            letter-spacing: 0.05em;
            color: #1B1C1E;
            padding: 0 30px;
            text-align: end;
            width: 60%;
        }
        #prev-next-text h2{
            font-weight: 700;
            font-size: 30px;
            line-height: 120%;
            color: rgb(27, 28, 30);
            margin-bottom: 24px;
        }
        #prev-next-text>div{
            position: relative;
        }
        #prev-next-text>div>div{
            bottom: 10px;
            position: absolute;
            width: 280px; /* Độ dài */
            height: 10px; /* Độ dày */
            background-color: #27B3AC; /* Màu xanh */
            clip-path: polygon(0% 50%, 5% 0%, 100% 0%, 100% 100%, 5% 100%);
        }

        .slide img{
            width: 100%;
            height: 200px;
            border-radius: 20px;
        }
        .slide{
            border-radius: 20px;
            padding: 20px;
        }
        .slide-car-info-div{
            border-radius: 20px;
            background-color: white;
            margin-top: 20px;
            width: 100%;
            padding: 20px;
        }
        .slide-car-info{
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            align-items: center;
        }
        .slide-car-info h1{
            font-weight: 200;
            font-size: 15px;
        }
        .slide-car-info p{
            font-size: 15px;
        }
        .slide-car-info>p>span{
            color: #2CB9AD;
        }
        .slide a{
            color: #FAFAFA !important;
            transition: all 0.5s ease-in-out;
            padding: 12px 32px;
            border: none;
            border-radius: 50px;
            background-color: #2C2D2F;
            text-decoration: none;
            margin: auto;
        }
        .slide a:hover{
            transform: scale(1.025);
            outline: 2px solid #57d3c9;
            box-shadow: 4px 5px 17px -4px #2CB9AD;
            background-color: #2CB9AD;
        }
        #slide-a{
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }


        #customer-reviews{
            margin-top: 100px;
            display: flex;
            margin: auto;
            gap: 20px;
            margin-left: 100px;
            flex-direction: column;
        }
        #customer-reviews h2{
            font-weight: 700;
            font-size: 37px;
            line-height: 120%;
            color: #1B1C1E;
        }
        #customer-reviews p{
            color: #1B1C1E;
            font-size: 17px;
            width: 28%;
            margin-bottom: 10px;
            line-height: 160%;
            text-align: end;
            font-weight: 500;
        }
        #customer-reviews>div>div{
            margin-top: 10px;
            width: 300px;
            height: 10px;
            background-color: #2AB8B8;
            clip-path: polygon(0% 0%, 95% 0%, 100% 50%, 95% 100%, 0% 100%);
        }


        #cr-container{
            margin-left: 100px;
            display: flex;
            margin-bottom: 10px;
            user-select: none;
        }
        .cr-slider-container {
            width: 540px; /* Hiển thị 3 div mỗi div rộng 180px */
            overflow: hidden;
            position: relative;
        }
        .cr-slider {
            display: flex;
            width: 2160px; /* 6 div * 180px * 2 (clone để tạo hiệu ứng lặp vô hạn) */
            transition: transform 0.5s ease-in-out;
        }
        .cr-slide {
            width: 180px;
            height: auto;
            background: #F0F2F4;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 15px;
        }

        .cr-slide img{
            width: 100%;
            height: 120px;
            border-radius: 10px;
        }
        .cr-slide{
            border-radius: 10px;
        }
        #main-content-container{
            display: flex;
            padding: 0 100px;
            align-items: center;
        }
        #img-container{
            width: 1000px;
            height: 550px;
            border-radius: 25px;
        }
        #img-container img{
            width: 100%;
            height: 100%;
            border-radius: 25px;
        }
        #div-container{
            background-color: #F0F2F4;
            height: 400px;
            width: 1000px;
            display: flex;
            align-items: center;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            padding: 20px 30px;
        }
        #div-container div{
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: -5px 0 10px rgba(0, 0, 0, 0.5);
            height: 100%;
        }
        #main-content-container h5{
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            letter-spacing: 0.05em;
            color: #1B1C1E;
            border-radius: 20px;
            display: flex;
            align-items: center;
            padding: 20px;
        }
        #div-container h3{
            font-weight: 800;
            font-size: 24px;
            line-height: 120%;
            color: #1B1C1E;
        }
        #div-container p{
            color:#2CB9AD;
            font-size: 25px;
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
                <li><a href="/about" id="menu-main">Về chúng tôi</a></li>
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
        <h3>Về chúng tôi</h3>
    </div>
    <div id="session">
        <div id="session-img">
            <img src="{{ asset('storage/about/about-1.png') }}" alt="Logo">
        </div>
        <div id="session-content">
            <h3 id="whoweare" class="whoweare active">Chúng tôi là ai</h3>
            <h3 id="whatwedo" class="whatwedo">Chúng tôi làm gì</h3>
            <div>
                <p class="content first">Tại DriveLux, chúng tôi không chỉ là một công ty cho thuê xe sang trọng chúng tôi là những người đam mê nhiệt huyết tin vào sức mạnh biến đổi của những chiếc ô tô đặc biệt. Với cam kết không ngừng mang đến những trải nghiệm khó quên, chúng tôi nỗ lực cung cấp cho khách hàng nhiều hơn một chiếc xe; chúng tôi mở ra cánh cổng đến với thế giới xa xỉ, phong cách và sự khéo léo vô song.</p>
                <p class="content second" style="display: none;">Phương pháp tiếp cận toàn diện của chúng tôi đối với kế hoạch tài chính bao gồm quản lý đầu tư, lập kế hoạch nghỉ hưu, lập kế hoạch thuế, lập kế hoạch bất động sản, quản lý rủi ro, lập kế hoạch giáo dục, lập kế hoạch kinh doanh và từ thiện. Liên hệ với chúng tôi ngay hôm nay để lên lịch tư vấn và bắt đầu con đường hướng tới thành công về tài chính. Sức mạnh chuyển đổi của những chiếc ô tô đặc biệt</p>
            </div>
            <div id="why-choose-us-2">
                <div>
                    <div><img src="{{ asset('storage/home/home-chooseUs/sports-car-icon.png') }}" alt="hero-bg"></div>
                    <h4>Nhiều hãng xe sang trọng</h4>
                </div>
                <div>
                    <div><img src="{{ asset('storage/home/home-chooseUs/vacuum-icon.png') }}" alt="hero-bg"></div>
                    <h4>Bảo dưỡng tốt và sạch sẽ</h4>
                </div>
                <div>
                    <div><img src="{{ asset('storage/home/home-chooseUs/booking-icon.png') }}" alt="hero-bg"></div>
                    <h4>Đặt xe dễ dàng</h4>
                </div>
                <div>
                    <div><img src="{{ asset('storage/home/home-chooseUs/service-icon.png') }}" alt="hero-bg"></div>
                    <h4>Nhân viên tư vấn nhiệt tình</h4>
                </div>
            </div>
        </div>
    </div>

    <div id="how-to-book">
        <div>
            <h2>Đối tác của chúng tôi</h2>
            <div></div>
        </div>
        <p>Liên minh mạnh mẽ, xây dựng quan hệ đối tác mạnh mẽ cho những trải nghiệm khó quên</p>
    </div>

    <div id="logo-div">
        <div id="logo">
            <div id="logo-item">
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/bentley-logo.png') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/bmw-logo.png') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logoaudi.webp') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logojaguar.jpg') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logolanrover.webp') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logolexus.png') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logomer.jpg') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logorr.jpg') }}" alt="logo-item"></div>

                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/bentley-logo.png') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/bmw-logo.png') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logoaudi.webp') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logojaguar.jpg') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logolanrover.webp') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logolexus.png') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logomer.jpg') }}" alt="logo-item"></div>
                <div class="logo-items"><img  src="{{ asset('storage/home/home-logo/logorr.jpg') }}" alt="logo-item"></div>
            </div>
        </div>
    </div>


    <div id="prev-next">
        <div id="prev-next-btn">
            <button class="btn prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="btn next" onclick="moveSlide(1)">&#10095;</button>
        </div>
        <div id="prev-next-text">
            <p>Lựa chọn cẩn thận, những gì tốt nhất cho một chuyến đi khó quên</p>
            <div>
                <h2>the most beautiful</h2>
                <div></div>
            </div>
        </div>
    </div>
    <div id="slider-container-center">
        <div class="slider-container">
            <div id="slider" class="slider">
                @foreach ($cars as $car)
                <div class="slide">
                    <img src="{{ asset('storage/' . $car->image_url) }}" alt="{{ $car->name }}">
                    <div class="slide-car-info-div">
                        <div class="slide-car-info">
                            <h1>Thương hiệu</h1>
                            <p id="trademark">{{$car->trademark}}</p>
                        </div>
                        <div class="slide-car-info">
                            <h1>Tên xe</h1>
                            <p id="name">{{$car->name}}</p>
                        </div>
                        <div class="slide-car-info">
                            <h1>Giá thuê</h1>
                            <p><span>{{ number_format($car->price_per_day, 0, ',', '.') }} VND/Ngay</span></p>
                        </div>
                        <div class="slide-car-info">
                            <h1>Số chỗ ngồi</h1>
                            <p>{{$car->seat_count}}</p>
                        </div>
                        <div class="slide-car-info">
                            <h1>Số lượng</h1>
                            <p>{{$car->remaining_quantity}}</p>
                        </div>
                        <div class="slide-car-info">
                            <h1>Đánh giá</h1>
                            <p><span>{{ $car->reviews->avg('rating') ?: 5 }}&#9733;</span></p>
                        </div>
                        <div id="slide-a">
                            <a href="/car/show/{{$car->id}}">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach ($cars as $car)
                <div class="slide">
                    <img src="{{ asset('storage/' . $car->image_url) }}" alt="{{ $car->name }}">
                    <div class="slide-car-info-div">
                        <div class="slide-car-info">
                            <h1>Thương hiệu</h1>
                            <p id="trademark">{{$car->trademark}}</p>
                        </div>
                        <div class="slide-car-info">
                            <h1>Tên xe</h1>
                            <p id="name">{{$car->name}}</p>
                        </div>
                        <div class="slide-car-info">
                            <h1>Giá thuê</h1>
                            <p><span>{{ number_format($car->price_per_day, 0, ',', '.') }} VND/Ngay</span></p>
                        </div>
                        <div class="slide-car-info">
                            <h1>Số chỗ ngồi</h1>
                            <p>{{$car->seat_count}}</p>
                        </div>
                        <div class="slide-car-info">
                            <h1>Số lượng</h1>
                            <p>{{$car->remaining_quantity}}</p>
                        </div>
                        <div class="slide-car-info">
                            <h1>Đánh giá</h1>
                            <p><span>{{ $car->reviews->avg('rating') ?: 5 }}&#9733;</span></p>
                        </div>
                        <div id="slide-a">
                            <a href="/car/show/{{$car->id}}">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <div id="customer-reviews">
        <div>
            <h2>Khách hàng đánh giá</h2>
            <div></div>
        </div>
        <p>Cùng xem khách hàng của chúng tôi đã nói gì về trải nghiệm của họ tại DriveLux</p>
    </div>

    <div id="cr-container">
        <div class="cr-slider-container">
            <div id="cr-slider" class="cr-slider">
                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-1.png') }}" alt="customer"></div>
                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-2.png') }}" alt="customer"></div>
                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-3.png') }}" alt="customer"></div>
                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-4.png') }}" alt="customer"></div>
                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-5.jpg') }}" alt="customer"></div>
                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-6.jpg') }}" alt="customer"></div>

                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-1.png') }}" alt="customer"></div>
                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-2.png') }}" alt="customer"></div>
                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-3.png') }}" alt="customer"></div>
                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-4.png') }}" alt="customer"></div>
                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-5.jpg') }}" alt="customer"></div>
                <div class="cr-slide"><img src="{{ asset('storage/home/cr/cr-6.jpg') }}" alt="customer"></div>
            </div>
        </div>
    </div>

    <!-- Thẻ div chứa ảnh chính và nội dung -->
    <div id="main-content-container">
        <div id="div-container">
            <div>
                <h3 id="customername">Nguyen Van Long</h3>
                <p>&starf;&starf;&starf;&starf;&starf;</p>
                <h5 id="main-text">"Thuê xe từ DriveLux là một trải nghiệm thật sự rất tuyệt vời. Dịch vụ khách hàng tuyệt vời, & chiếc xe tôi chọn vượt xa mọi mong đợi. Xử lý mượt mà, nội thất sang trọng và chuyến đi khó quên. Tôi thực sự giới thiệu DriveLux cho bất kỳ ai đang tìm kiếm trải nghiệm thuê xe đáng chú ý"</h5>
            </div>
        </div>
        <div id="img-container">
            <img id="main-image" src="{{ asset('storage/home/cr/cr-2.png') }}" alt="">
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
            document.addEventListener("DOMContentLoaded", function () {
        let whoweare = document.getElementById("whoweare");
        let whatwedo = document.getElementById("whatwedo");

        let firstContent = document.querySelector(".content.first");
        let secondContent = document.querySelector(".content.second");

        // Đặt trạng thái ban đầu
        whoweare.classList.add("active");
        firstContent.style.display = "block";
        secondContent.style.display = "none";

        // Sự kiện click vào What We Do
        whatwedo.addEventListener("click", () => {
            whatwedo.classList.add("active");
            whoweare.classList.remove("active");

            firstContent.style.display = "none";
            secondContent.style.display = "block"; // Sửa thành "block" để hiển thị
        });

        // Sự kiện click vào Who We Are
        whoweare.addEventListener("click", () => {
            whoweare.classList.add("active");
            whatwedo.classList.remove("active");

            secondContent.style.display = "none";
            firstContent.style.display = "block"; // Sửa thành "block" để hiển thị
        });
    });



    //
    let index = 0;
        const totalSlides = 6;
        const visibleSlides = 3;
        const slider = document.getElementById('slider');
        let autoSlide = setInterval(() => moveSlide(1), 5000);
        let isDragging = false;
        let startX;

        function moveSlide(direction) {
            index += direction;
            if (index > totalSlides) {
                index = 1;
                slider.style.transition = 'none';
                slider.style.transform = `translateX(0px)`;
                setTimeout(() => {
                    slider.style.transition = 'transform 0.5s ease-in-out';
                    slider.style.transform = `translateX(${-index * 400}px)`;
                }, 50);
                return;
            }
            if (index < 0) {
                index = totalSlides - 1;
                slider.style.transition = 'none';
                slider.style.transform = `translateX(${-totalSlides * 400}px)`;
                setTimeout(() => {
                    slider.style.transition = 'transform 0.5s ease-in-out';
                    slider.style.transform = `translateX(${-index * 400}px)`;
                }, 50);
                return;
            }
            slider.style.transform = `translateX(${-index * 400}px)`;
            resetAutoSlide();
        }

        function resetAutoSlide() {
            clearInterval(autoSlide);
            autoSlide = setInterval(() => moveSlide(1), 5000);
        }

        slider.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.pageX;
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            let moveX = e.pageX - startX;
            if (moveX > 50) {
                moveSlide(-1);
                isDragging = false;
            }
            if (moveX < -50) {
                moveSlide(1);
                isDragging = false;
            }
        });

        slider.addEventListener('mouseup', () => isDragging = false);
        slider.addEventListener('mouseleave', () => isDragging = false);



        //
        let index3 = 0;
        const totalSlides3 = 6;
        const visibleSlides3 = 3;
        const slider3 = document.getElementById('cr-slider');
        const mainImage = document.getElementById('main-image');
        const mainText = document.getElementById('main-text');
        let autoSlide3 = setInterval(() => moveSlide3(1), 5000);
        let isDragging3 = false;
        let startX3;
        let customerName = document.getElementById('customername')

        const names = {
            "cr-1.png": 'Nguyen Van Nam',
            "cr-2.png": 'Nguyen Van long',
            "cr-3.png": 'phung Van anh',
            "cr-4.png": 'Nguyen thi ha',
            "cr-5.jpg": 'Nguyen Phuc luong',
            "cr-6.jpg": 'Tran Van Mieu',
        }
        const captions = {
            "cr-1.png": '"DriveLux mang đến một dịch vụ thuê xe đẳng cấp, từ quy trình đặt xe nhanh chóng đến sự tận tâm của đội ngũ hỗ trợ khách hàng. Chiếc xe tôi nhận được không chỉ sạch sẽ, bảo dưỡng tốt mà còn có đầy đủ tiện nghi hiện đại. Chuyến đi thật thoải mái và tuyệt vời!"',
            "cr-2.png": '"Thuê xe từ DriveLux là một trải nghiệm thật sự rất tuyệt vời. Dịch vụ khách hàng tuyệt vời, & chiếc xe tôi chọn vượt xa mọi mong đợi. Xử lý mượt mà, nội thất sang trọng và chuyến đi khó quên. Tôi thực sự giới thiệu DriveLux cho bất kỳ ai đang tìm kiếm trải nghiệm thuê xe đáng chú ý"',
            "cr-3.png": '"Chưa bao giờ tôi cảm thấy việc thuê xe lại dễ dàng và chuyên nghiệp đến vậy! DriveLux thực sự làm tốt từ việc cung cấp thông tin minh bạch, quy trình nhận/trả xe nhanh gọn đến những chiếc xe chất lượng cao. Dịch vụ xuất sắc, xe lái êm ái và trải nghiệm cực kỳ đáng nhớ!',
            "cr-4.png": '"Tôi hoàn toàn hài lòng với dịch vụ của DriveLux! Nhân viên hỗ trợ tận tình, giúp tôi chọn được chiếc xe ưng ý, đúng với nhu cầu. Xe sạch sẽ, sang trọng, động cơ mạnh mẽ và chuyến đi thật sự suôn sẻ. Đây chắc chắn là lựa chọn hàng đầu của tôi mỗi khi cần thuê xe."',
            "cr-5.jpg": '"DriveLux không chỉ mang đến những chiếc xe sang trọng mà còn tạo ra một trải nghiệm thuê xe hoàn hảo. Từ việc đặt xe online tiện lợi, giao nhận xe đúng giờ đến chất lượng xe tuyệt vời – tất cả đều rất chuyên nghiệp. Tôi cảm thấy mình đang sử dụng một dịch vụ đẳng cấp thực sự!"',
            "cr-6.jpg": '"Dịch vụ thuê xe của DriveLux thực sự làm tôi ấn tượng! Xe có nhiều tùy chọn cao cấp, nội thất hiện đại và vận hành êm ái. Nhân viên hỗ trợ cực kỳ thân thiện, sẵn sàng giúp đỡ ngay khi cần. Đây chính là trải nghiệm thuê xe mà ai cũng nên thử một lần!"'
        };

        function moveSlide3(direction) {
            index3 += direction;
            if (index3 > totalSlides3) {
                index3 = 1;
                slider3.style.transition = 'none';
                slider3.style.transform = `translateX(0px)`;
                setTimeout(() => {
                    slider3.style.transition = 'transform 0.5s ease-in-out';
                    slider3.style.transform = `translateX(${-index3 * 180}px)`;
                }, 50);
            } else if (index3 < 0) {
                index3 = totalSlides3 - 1;
                slider3.style.transition = 'none';
                slider3.style.transform = `translateX(${-totalSlides3 * 180}px)`;
                setTimeout(() => {
                    slider3.style.transition = 'transform 0.5s ease-in-out';
                    slider3.style.transform = `translateX(${-index3 * 180}px)`;
                }, 50);
            } else {
                slider3.style.transform = `translateX(${-index3 * 180}px)`;
            }
            updateMainContent();
            resetAutoSlide3();
        }

        function resetAutoSlide3() {
            clearInterval(autoSlide3);
            autoSlide3 = setInterval(() => moveSlide3(1), 5000);
        }

        function updateMainContent() {
            const slides3 = document.querySelectorAll('.cr-slide img');
            const middleIndex = (index3 + 1) % totalSlides3; // Lấy ảnh giữa
            let newSrc = slides3[middleIndex].src.split('/').pop(); // Lấy tên file ảnh
            mainImage.src = slides3[middleIndex].src;
            mainText.textContent = captions[newSrc] || "Hình ảnh đặc biệt, chưa có mô tả.";
            customerName.textContent = names[newSrc];
        }

        slider3.addEventListener('mousedown', (e) => {
            isDragging3 = true;
            startX3 = e.pageX;
        });

        slider3.addEventListener('mousemove', (e) => {
            if (!isDragging3) return;
            let moveX3 = e.pageX - startX3;
            if (moveX3 > 50) {
                moveSlide3(-1);
                isDragging3 = false;
            }
            if (moveX3 < -50) {
                moveSlide3(1);
                isDragging3 = false;
            }
        });

        slider3.addEventListener('mouseup', () => isDragging3 = false);
        slider3.addEventListener('mouseleave', () => isDragging3 = false);

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
