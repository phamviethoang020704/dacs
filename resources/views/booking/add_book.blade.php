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
            scrollbar-width: thin;
            scrollbar-color: #ff4d30 #fff;
        }
        #header{
            display: flex;
            justify-content: space-between;
            background-color: #F3F4F6;
            height: 50px;
            align-items: center;
        }
        #header-left{
            display: flex;
            align-items: center;
            margin-left: 30px;
        }
        #header-left ion-icon{
            color:#FA4226;
            font-size: 30px;
            margin-right: 5px;
        }
        #header-left h1{
            padding-top: 5px;
            padding-left: 5px;
            font-size: 20px;
            font-weight: bold;
        }
        li{
            list-style: none;
        }
        #profile-logout a{
            text-decoration: none;
            color: black;
            font-size: 15px;
            height: 40px;
            line-height: 40px;
            display: flex;
            justify-content: start;
            padding-left: 10px;
            margin-top: 5px;
        }
        #profile-logout button{
            border: none;
            background-color: white;
            font-size: 15px;
            height: 40px;
            line-height: 40px;
            margin: 0;
            width: 100%;
            display: flex;
            justify-content: start;
            padding-left: 10px;
            cursor: pointer;
        }
        #profile-logout a:hover,#profile-logout button:hover{
            background-color: #F3F4F6;
        }
        #profile-logout{
            position: relative;
            height: 50px;
            line-height: 50px;
            margin-right: 40px;
            cursor: pointer;
            user-select: none;
            z-index: 2;
        }
        #profile-logout>div{
            position: absolute;
            bottom: -90px;
            left: 0;
            /* display: flex; */
            flex-direction: column;
            justify-content: start;
            border:1px solid #e5e7eb;
            box-shadow: 0 0 15px #e5e7eb;
            height: 90px;
            width: 150px;
            display: none;
        }
        #profile-logout-content{
            z-index: 2;
            background-color: white;
        }
        #content>h1{
            font-size: 25px;
            color: white;
            display: flex;
            justify-content: center;
            margin-top: 5px;
        }
        #content-image{
            width: 100%;
            position: relative;
            background-image: url('{{ asset('storage/booking/addBookMain.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            margin: 0;
        }
        #content{
            position: absolute;
            width: 60%;
            height: 80%;
            background-color: rgba(0, 0, 0, 0.7);
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            border:1px solid #fff;
        }
        #confirm-info-user{
            margin-left: 5px;
            margin-bottom: 10px;
        }
        #confirm-info-user h1{
            color: whitesmoke;
            font-size: 15px;
            margin-bottom: 5px;
        }
        #confirm-info-user p{
            color: white;
            font-size: 15px;
        }
        #confirm-info-user a{
            background-color: #FA4226;
            color: white;
            text-decoration: none;
            font-size: 15px;
            height: 25px;
            line-height: 25px;
            border-radius: 5px;
            padding: 2px;
        }
        #info-car{
            margin-left: 5px;
        }
        #info-car h1{
            color: white;
            font-size: 20px;
            margin-bottom: 5px;
        }
        #info-car p{
            color: white;
            font-size: 15px;
        }
        #start-end{
            margin-top: 20px;
            display: flex;
            gap: 50px;
        }
        .form-group{
            margin-top: 15px;
        }
        .form-group label{
            color: white;
            font-size: 15px;
        }
        .form-group input{
            width: 200px;
            height: 30px;
        }
        #form{
            margin-left: 5px;
        }
        #total_price:hover{
            cursor: default;
        }
        #total_price:focus{
            outline: none;
        }
        #form>button{
            color: white;
            background-color: #FA4226;
            border-radius: 5px;
            height: 40px;
            line-height: 40px;
            width: 130px;
            border: none;
            margin-top: 20px;
            cursor: pointer;
        }
        #success-message {
            opacity: 1;
            transition: opacity 1s ease-out; /* Hiệu ứng mờ dần */
            position: fixed; /* Đặt ở vị trí cố định trong view */
            top: 50%; /* Khoảng cách từ trên cùng */
            transform: translateY(-50%); /* Căn giữa chính xác */
            left: 50%; /* Căn giữa */
            transform: translateX(-50%); /* Căn giữa chính xác */
            z-index: 9999; /* Đảm bảo thông báo không bị che khuất */
            background-color: #FA4226;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div id="header">
        <div id="header-left" onclick="window.location.href='http://127.0.0.1:8000/';" style="cursor: pointer">
            <ion-icon name="car-sport"></ion-icon>
            <h3>Car Rental</h3>
        </div>
        <div id="profile-logout">
            <span>{{Auth::user()->name}} ⇊</span>
            <div id="profile-logout-content">
                <a href="{{ route('profile.edit') }}">Thông tin</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Đăng xuất</button>
                </form>
            </div>
        </div>
    </div>
    <div id="content-image">
        <div id="content">
            <h1>Nhập thông tin để thuê xe</h1>
            <div id="confirm-info-user">
                <h1>Xác nhận thông tin người dùng</h1>
                <p>Tên người dùng: {{Auth()->user()->name}}</p>
                <p>Số điện thoại: {{Auth()->user()->phone}}</p>
                <p>Địa chỉ: {{Auth()->user()->address}}</p>
                <a href="{{ route('profile.edit') }}">Ấn vào đây để chỉnh sửa thông tin</a>
            </div>
            <div id="info-car">
                <h1>Đơn đặt xe:</h1>
                <p>{{$car->name}},{{$car->trademark}}</p>
                <p>{{number_format($car->price_per_day, 0, ',', '.')}} VND / Ngày</p>
            </div>
            <form id="form" action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <input name="car_id" type="hidden" value="{{$car->id}}">
                <input name="user_id" type="hidden" value="{{auth()->user()->id}}">
                <input name="price_per_day" id="price_per_day" type="hidden" value="{{$car->price_per_day}}">
                <div id="start-end">

                    <div class="form-group">
                        <label for="start_date">Ngày bắt đầu</label>
                        <br>
                        <input type="date" id="start_date" name="start_date" class="form-control" required>
                        @error('start_date')
                            <div class="error-message">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="end_date">Ngày kết thúc</label>
                        <br>
                        <input type="date" id="end_date" name="end_date" class="form-control" required>
                        @error('end_date')
                            <div class="error-message">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="total_price">Tổng giá thuê (Chọn ngày bắt đầu và kết thúc sẽ tự tính tổng giá)</label>
                    <br>
                    <input type="text" id="total_price" name="total_price" class="form-control" readonly>
                </div>

                <button type="submit">Xác nhận đặt xe</button>
            </form>
        </div>
    </div>
    @if (session('success'))
        <div id="success-message" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');
        const totalPriceInput = document.getElementById('total_price');
        const pricePerDay = parseFloat(document.getElementById('price_per_day').value);

        function calculateTotalPrice() {
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);

            if (!isNaN(startDate) && !isNaN(endDate) && endDate >= startDate) {
                const days = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
                const totalPrice = days * pricePerDay;
                totalPriceInput.value = totalPrice.toLocaleString(); // Hiển thị số dạng tiền tệ
            } else {
                totalPriceInput.value = ''; // Xóa tổng giá nếu ngày không hợp lệ
            }
        }

        // Gắn sự kiện onchange cho các input ngày
        startDateInput.addEventListener('change', calculateTotalPrice);
        endDateInput.addEventListener('change', calculateTotalPrice);
    });

    //
    profileLogout = document.getElementById("profile-logout");
        profileLogoutContent = document.getElementById("profile-logout-content");
        profileLogoutContent.style.display = "none";
        profileLogout.addEventListener("click",(e) => {
            e.stopPropagation();
            profileLogoutContent.style.display = profileLogoutContent.style.display === "none" ? "flex" : "none";
        })
        document.addEventListener("click",(e) => {
            if(profileLogoutContent.style.display === 'flex')
            profileLogoutContent.style.display = 'none';
        })
        //
        window.onload = function() {
    const message = document.getElementById('success-message');
    if (message) {
        setTimeout(function() {
            message.style.opacity = 0; // Làm cho thông báo mờ dần
        }, 2000); // Đợi 2 giây để hiển thị đầy đủ trước khi mờ dần

        setTimeout(function() {
            message.style.display = 'none'; // Ẩn thông báo sau khi mờ dần
        }, 4000); // Đợi thêm 2 giây sau khi mờ dần hoàn toàn
    }
}
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
        .error-message{
            display: flex;
            align-items: center;
            gap: 5px;
            color: red;
            font-size: 15px;
        }


        #footer{
            width: 100%;
            height: 486px;
            position: relative;
            margin-top: 80px;
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
                <li><a href="/about">Về chúng tôi</a></li>
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
        <h3>Thuê xe</h3>
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
    </div>

    <div id="book-container">
        <div id="form-car">
            <form id="form" action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <input name="car_id" type="hidden" value="{{$car->id}}">
                <input name="user_id" type="hidden" value="{{auth()->user()->id}}">
                <input name="price_per_day" id="price_per_day" type="hidden" value="{{$car->price_per_day}}">
                <div id="start-end">

                    <div class="form-group">
                        <label for="start_date">Ngày bắt đầu</label>
                        <br>
                        <input type="date" id="start_date" name="start_date" class="form-control">
                        @error('start_date')
                            <div class="error-message">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="end_date">Ngày kết thúc</label>
                        <br>
                        <input type="date" id="end_date" name="end_date" class="form-control">
                        @error('end_date')
                            <div class="error-message">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="total_price">Tổng giá thuê (Chọn ngày bắt đầu và kết thúc sẽ tự tính tổng giá)</label>
                    <br>
                    <input type="text" id="total_price" name="total_price" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="yourmessage">Tin nhắn của bạn</label>
                    <input type="text" id="yourmessage" name="yourmessage" class="form-control">
                    @error('yourmessage')
                    <div class="error-message">
                            <ion-icon name="alert-circle-outline"></ion-icon>
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                <button type="submit">Xác nhận đặt xe</button>
            </form>
        </div>
        <div id="confirm-info-user">
            <h1>Xác nhận thông tin người dùng</h1>
            <p>Tên người dùng: {{Auth()->user()->name}}</p>
            <p>Số điện thoại: {{Auth()->user()->phone}}</p>
            <p>Địa chỉ: {{Auth()->user()->address}}</p>
            <a href="{{ route('profile.edit') }}">Ấn vào đây để chỉnh sửa thông tin</a>
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
//         document.addEventListener("DOMContentLoaded", function () {
//     let thumbnails = document.querySelectorAll(".thumbnail");
//     let mainImage = document.getElementById("main-image");
//     let thumbnailContainer = document.querySelector(".thumbnail-list");
//     let maxVisible = 3; // Hiển thị tối đa 3 ảnh nhỏ
//     let currentIndex = 0;
//     let totalThumbnails = thumbnails.length;

//     let overlay = document.getElementById("overlay");
//     let enlargeThumbnails = document.querySelectorAll(".enlarge-thumbnail");
//     let enlargeMainImage = document.getElementById("enlarge-main-image");
//     let images = Array.from(thumbnails).map(img => img.src);
//     let currentIndexOverlay = 0;

//     /** 🔹 Thay đổi ảnh lớn khi hover vào ảnh nhỏ */
//     thumbnails.forEach((thumb, index) => {
//         thumb.addEventListener("mouseover", function () {
//             mainImage.src = thumb.src;

//             thumbnails.forEach(el => el.classList.remove("active"));
//             thumb.classList.add("active");
//         });

//         thumb.addEventListener("click", function () {
//             overlay.style.display = "block";
//             enlargeMainImage.src = thumb.src;
//             currentIndexOverlay = index;

//             enlargeThumbnails.forEach(el => el.classList.remove("active"));
//             enlargeThumbnails[index].classList.add("active");
//         });
//     });

//     /** 🔹 Trượt danh sách ảnh nhỏ sang trái */
//     document.querySelector(".arrow:first-of-type").addEventListener("click", function () {
//         if (currentIndex > 0) {
//             currentIndex--;
//             thumbnailContainer.style.transform = `translateX(-${currentIndex * 80}px)`;
//         }
//     });

//     /** 🔹 Trượt danh sách ảnh nhỏ sang phải */
//     document.querySelector(".arrow:last-of-type").addEventListener("click", function () {
//         if (currentIndex < totalThumbnails - maxVisible) {
//             currentIndex++;
//             thumbnailContainer.style.transform = `translateX(-${currentIndex * 80}px)`;
//         }
//     });



// });
// //
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

document.addEventListener('DOMContentLoaded', function () {
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');
        const totalPriceInput = document.getElementById('total_price');
        const pricePerDay = parseFloat(document.getElementById('price_per_day').value);

        function calculateTotalPrice() {
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);

            if (!isNaN(startDate) && !isNaN(endDate) && endDate >= startDate) {
                const days = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
                const totalPrice = days * pricePerDay;
                totalPriceInput.value = totalPrice.toLocaleString(); // Hiển thị số dạng tiền tệ
            } else {
                totalPriceInput.value = ''; // Xóa tổng giá nếu ngày không hợp lệ
            }
        }

        // Gắn sự kiện onchange cho các input ngày
        startDateInput.addEventListener('change', calculateTotalPrice);
        endDateInput.addEventListener('change', calculateTotalPrice);
    });
    </script>
</body>
</html>
