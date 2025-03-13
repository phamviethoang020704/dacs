<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        #search-car{
            display: flex;
            margin-top: 50px;
            padding: 0 50px;
            justify-content: space-between;
            gap: 30px;
        }
        #searchcar-list{
            margin-right: 20px;
            width: 850px;
        }
        #search-name{
            width: 100%;
            background-color: #F0F2F4;
            padding: 20px;
            border-radius: 20px;
            height: 90px;
        }
        #search-name form{
            display: flex;
            align-items: center;
            gap: 10px;
        }
        #search-name input{
            width: 95%;
            height: 50px;
            outline: none;
            border: none;
            border-radius: 15px;
            padding-left: 10px;
            box-shadow: 1px 1px 0px 0px rgba(0, 0, 0, 0.3);
        }
        #search-name button{
            background-color: #21B3A6;
            color:#FAFAFA;
            font-weight: 800;
            border: none;
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        #search-name i{
            font-size: 25px;
        }

        .menu-trademark{
            position: relative;
            background-color:#F0F2F4;
            padding: 20px;
            border-radius: 15px;
            height: 90px;
        }
        .menu-trademark div{
            display: flex;
            flex-direction: column;
        }
        .menu-trademark a{
            line-height: 30px;
            font-size: 15px;
            color: #2C2D2F;
            font-weight: 400;
            text-decoration: none;
        }
        .menu-trademark h4{
            font-weight: 400;
            color: #797D86;
            background-color: white;
            padding: 10px 10px;
            border-radius: 15px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 1px 1px 0px 0px rgba(0, 0, 0, 0.3);
        }
        .menu-trademark h4 i{
            font-size: 35px;
            transform: rotate(0deg);
            transition: transform 1s ease;
        }
        .menu-trademark>div{
            position: absolute;
            top: 85%;
            right: 40px;
            width: 200px;
            background-color: white;
            border-radius: 5px;
            height: 0px;
            overflow: hidden;
            transition: height 0.5s ease-in-out;
        }
        .menu-trademark>div a{
            color: #282828;
            display: flex;
            align-items: center;
            padding: 4px 16px;
            line-height: 30px;
            border-radius: 0;
            color: #2C2D2F;
            font-weight: 400;
        }
        .menu-trademark>div a:hover{
            background-color:#21B3A6;
            color: #FAFAFA;
        }
        #menu-attribute{
            height: 500px;
            background-color:#F0F2F4;
            border-radius: 15px;
            margin-top: 10px;
            padding: 20px;
        }
        #menu-attribute>h3{
            width: 100%;
            display: flex;
            justify-content: center;
            color: #2C2D2F;
            font-weight: 500;
            font-size: 20px;
            margin-bottom: 30px;
        }
        #menu-attribute form{
            display: flex;
            flex-direction: column;
            row-gap: 40px;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        #menu-content{
            z-index: 5;
        }
        .dropdown {
            position: relative;
            display: inline-block;
            cursor: pointer;
            margin-right: 15px;
            background-color:white;
            border-radius: 15px;
            width: 90%;
            box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, 0.5)
        }

        .dropdown-btn {
            background: white;
            border-radius: 15px;
            padding: 15px 10px;
            width: 100%;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 200;
            color: #797D86;
            z-index: 1;
        }


        .menu-icon {
            transition: transform 0.3s ease-in-out;
        }

        .dropdown-content {
            position: absolute;
            background: white;
            width: 200px;
            box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
            overflow: hidden;
            height: 0;
            transition: height 0.3s ease-in-out;
            z-index: 5;
            top: 110%;
            border-radius: 5px;
        }

        /* Khi dropdown mở */
        .dropdown.show .dropdown-content {
            height: 200px;
        }

        .dropdown.show .menu-icon {
            transform: rotate(-180deg);
        }

        .dropdown-content p {
            padding: 10px;
            margin: 0;
            cursor: pointer;
            color: #2C2D2F;
            font-weight: 300;
        }

        .dropdown-content p:hover {
            background: #21B3A6;
            color: #FAFAFA;
        }

        #search-attribute{
            width: 350px;
        }
        .dropdown-btn i{
            font-size: 25px;
        }
        #menu-attribute form button{
            font-size: 19px;
            color: #FAFAFA !important;
            transition: all 0.5sease-in-out;
            padding: 12px 32px;
            border: none;
            border-radius: 50px;
            background-color: #2CB9AD;
            text-decoration: none;
            cursor: pointer;
            transition: color 1s ease-in;
        }
        #menu-attribute form button:hover{
            background-color: #03aea0;
        }



        #car-list{
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
            column-gap: 24px;
            row-gap: 16px;
            width: 100%;

        }
        .slide img{
            width: 100%;
            height: 200px;
            border-radius: 20px;
        }
        .slide{
            border-radius: 20px;
            padding: 20px;
            flex: 0 0 calc(50% - 12px);
            background-color:#F0F2F4;
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
        .slide a,#account {
            color: #FAFAFA !important;
            transition: all 0.5s ease-in-out;
            padding: 12px 32px;
            border: none;
            border-radius: 50px;
            background-color: #2C2D2F;
            text-decoration: none;
            margin: auto;
        }
        .slide a:hover,#account:hover{
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
        }

        .pagination a:hover {
            background-color: #30C0B4;
            color: #fff;
        }

        .pagination .active {
            padding: 8px 12px;
            border: 1px solid #30C0B4;
            border-radius: 5px;
            background-color: #30C0B4;
            color: #fff;
            font-weight: bold;
        }

        .pagination .disabled {
            padding: 8px 12px;
            color: #999;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: not-allowed;
            background-color: #f9f9f9;
        }

        .pagination .dots {
            padding: 8px 12px;
            color: #999;
            border: none;
            background: transparent;
            font-size: 14px;
            cursor: default;
        }

        #footer{
            width: 100%;
            height: 486px;
            position: relative;
            margin-top: 50px;
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
                <li><a href="/car" id="menu-main">Thuê xe</a></li>
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
        <h3>Danh sách xe</h3>
    </div>
    <div id="search-car">
        <div id="searchcar-list">
            <div id="search-name">
                <form method="GET" action="{{ route('car.index') }}">
                    <input type="text" name="search" placeholder="Tìm kiếm xe..." value="{{ request('search') }}">
                    <button type="submit"><i class='bx bx-search'></i></button>
                </form>
            </div>
            <div id="car-list">
                @forelse ($cars as $car)
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
                @empty
                    <p class="text-center">Không có xe nào.</p>
                @endforelse
            </div>
        </div>
        <div id="search-attribute">
            <div class="menu-trademark">
                    <h4 id="header-trademark">Chọn hãng xe <i id="menu-icon" class='bx bx-chevron-down'></i></h4>
                    <div id="menu-content">
                        <a href="{{ route('car.index', ['trademark' => 'all']) }}" class="{{ request('trademark') == 'all' || !request('trademark') ? 'active' : '' }}">
                            Tất cả
                        </a>
                        @foreach ($trademarks as $item)
                            <a href="{{ route('car.index', ['trademark' => $item]) }}" class="{{ request('trademark') == $item ? 'active' : '' }}">
                                {{ $item }}
                            </a>
                        @endforeach
                    </div>
            </div>
            <div id="menu-attribute">
                <h3>Tìm xe theo yêu cầu</h3>
                <form method="GET" action="{{ route('car.index') }}">
                    <!-- Dropdown Chọn mức giá -->
                    <div class="dropdown">
                        <h3 class="dropdown-btn">
                            Chọn mức giá
                            <i class='bx bx-chevron-down menu-icon'></i>
                        </h3>
                        <div class="dropdown-content">
                            <p data-value="">Chọn mức giá</p>
                            <p data-value="<1000000">Dưới 1 triệu</p>
                            <p data-value="1000000-2000000">1-2 triệu</p>
                            <p data-value="2000000-3000000">2-3 triệu</p>
                            <p data-value="3000000-4000000">3-4 triệu</p>
                            <p data-value="4000000-5000000">4-5 triệu</p>
                            <p data-value=">5000000">Trên 5 triệu</p>
                        </div>
                        <input type="hidden" name="price_range" id="price_range">
                    </div>

                    <!-- Dropdown Chọn số chỗ ngồi -->
                    <div class="dropdown">
                        <h3 class="dropdown-btn">
                            Chọn số chỗ
                            <i class='bx bx-chevron-down menu-icon'></i>
                        </h3>
                        <div class="dropdown-content">
                            <p data-value="">Chọn số chỗ</p>
                            <p data-value="2">2 chỗ</p>
                            <p data-value="4">4 chỗ</p>
                            <p data-value="5">5 chỗ</p>
                        </div>
                        <input type="hidden" name="seat_count" id="seat_count">
                    </div>

                    <!-- Dropdown Chọn đánh giá -->
                    <div class="dropdown">
                        <h3 class="dropdown-btn">
                            Chọn rating
                            <i class='bx bx-chevron-down menu-icon'></i>
                        </h3>
                        <div class="dropdown-content">
                            <p data-value="">Chọn rating</p>
                            <p data-value="1">Trên 1 sao</p>
                            <p data-value="2">Trên 2 sao</p>
                            <p data-value="3">Trên 3 sao</p>
                            <p data-value="4">Trên 4 sao</p>
                        </div>
                        <input type="hidden" name="rating" id="rating">
                    </div>

                    <button type="submit">Tìm</button>
                </form>
            </div>
        </div>
    </div>

    <div class="pagination">
        @if ($cars->onFirstPage())
            <span class="disabled">← Trước</span>
        @else
            <a href="{{ $cars->previousPageUrl() }}" class="page-link">← Trước</a>
        @endif

        {{-- Trang đầu tiên --}}
        @if ($cars->currentPage() > 2)
            <a href="{{ $cars->url(1) }}" class="page-link">1</a>
            @if ($cars->currentPage() > 3)
                <span class="dots">...</span>
            @endif
        @endif

        @foreach (range(max(1, $cars->currentPage() - 1), min($cars->lastPage(), $cars->currentPage() + 1)) as $page)
            @if ($page == $cars->currentPage())
                <span class="active">{{ $page }}</span>
            @else
                <a href="{{ $cars->url($page) }}" class="page-link">{{ $page }}</a>
            @endif
        @endforeach

        @if ($cars->currentPage() < $cars->lastPage() - 1)
            @if ($cars->currentPage() < $cars->lastPage() - 2)
                <span class="dots">...</span>
            @endif
            <a href="{{ $cars->url($cars->lastPage()) }}" class="page-link">{{ $cars->lastPage() }}</a>
        @endif

        @if ($cars->hasMorePages())
            <a href="{{ $cars->nextPageUrl() }}" class="page-link">Tiếp →</a>
        @else
            <span class="disabled">Tiếp →</span>
        @endif
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
        let headerTrademark = document.getElementById('header-trademark')
        let headerIcon = document.querySelector("#header-trademark i")
        let menuContent = document.getElementById('menu-content')
        menuContent.style.height = '0px'
        headerIcon.style.transform = 'rotate(0deg)'
        headerTrademark.addEventListener('click',() => {
            menuContent.style.height == '0px' ? menuContent.style.height = '300px' : menuContent.style.height = '0px';
            headerIcon.style.transform == 'rotate(0deg)' ? headerIcon.style.transform = 'rotate(-180deg)' : headerIcon.style.transform = 'rotate(0deg)'
        })






        document.querySelectorAll('.dropdown').forEach(dropdown => {
    let btn = dropdown.querySelector('.dropdown-btn');
    let content = dropdown.querySelector('.dropdown-content');
    let hiddenInput = dropdown.querySelector('input[type="hidden"]');
    let icon = dropdown.querySelector('.menu-icon');

    // Xử lý mở/đóng dropdown
    btn.addEventListener('click', () => {
        let isOpen = dropdown.classList.contains('show');

        // Đóng tất cả dropdowns khác trước khi mở cái mới
        document.querySelectorAll('.dropdown').forEach(d => {
            d.classList.remove('show');
        });

        // Mở dropdown hiện tại nếu nó chưa mở
        if (!isOpen) {
            dropdown.classList.add('show');
        }
    });

    // Xử lý chọn giá trị từ dropdown
    content.querySelectorAll('p').forEach(item => {
        item.addEventListener('click', () => {
            btn.firstChild.textContent = item.textContent; // Cập nhật tên dropdown
            hiddenInput.value = item.dataset.value; // Gán vào input ẩn
            dropdown.classList.remove('show'); // Đóng dropdown
        });
    });

    // Ẩn dropdown khi click ra ngoài
    document.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target)) {
            dropdown.classList.remove('show');
        }
    });
});


    </script>
</body>
</html>
