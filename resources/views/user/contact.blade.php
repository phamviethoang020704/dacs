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
            margin: 0 0 0 50px;
        }


        .contact-container {
            width: 80%;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 700px;
        }

        .contact-title {
            font-weight: 600;
            font-size: 32px;
            line-height: 120%;
            color: #2C2D2F;
            margin-bottom: 10px;
        }


        .contact-description {
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            letter-spacing: 0.05em;
            color: #797D86;
            margin-bottom: 50px;
        }

        .contact-form-group {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .contact-input, .contact-textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 25px;
            font-size: 14px;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        .contact-textarea {
            border-radius: 10px;
            height: 200px;
            resize: none;
            margin-bottom: 20px;
        }

        .contact-submit-btn {
            width: 100%;
            padding: 15px;
            background: #222;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            margin-top: 10px;
            margin-top: 40px;
            transition: all 0.5s ease-in-out;
        }

        .contact-submit-btn:hover {
            transform: scale(1.025);
            outline: 2px solid #57d3c9;
            box-shadow: 4px 5px 17px -4px #2CB9AD;
            background-color: #2CB9AD;
        }


        #contact-section {
            display: flex;
            height: 800px;
            border-radius: 30px;
            margin: 100px;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding: 50px;
            background-image: url('{{ asset('storage/contact/map-image.png') }}');
            background-size: cover;
            background-position: center;
        }

        .contact-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 250px;
            position: relative;
        }

        .contact-icon {
            font-size: 24px;
            background: white;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
        }

        .contact-text {
            margin-top: 30px;
            font-size: 16px;
            font-weight: bold;
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
                <li><a href="/about">Về chúng tôi</a></li>
                <li><a href="/contact" id="menu-main">Liên hệ</a></li>
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
        <h3>Liên hệ</h3>
    </div>

    <div class="contact-container">
        <h2 class="contact-title">Hãy kết nối, liên hệ với DriveLux</h2>
        <p class="contact-description">
            Bạn có thắc mắc, cần hỗ trợ hoặc đã sẵn sàng đặt chỗ? Chúng tôi ở đây để giúp bạn. Sử dụng thông tin liên hệ hoặc điền vào biểu mẫu bên dưới để liên hệ với DriveLux.</p>

        <form>
            <div class="contact-form-group">
                <input type="text" class="contact-input" placeholder="Tên của bạn">
                <input type="email" class="contact-input" placeholder="Email">
            </div>

            <div class="contact-form-group">
                <input type="text" class="contact-input" placeholder="Chủ đề của bạn">
                <input type="tel" class="contact-input" placeholder="Số điện thoại">
            </div>

            <textarea class="contact-textarea" placeholder="Lời nhắn"></textarea>

            <button type="submit" class="contact-submit-btn">Xác nhận</button>
        </form>
    </div>
    <section id="contact-section">
        <div class="contact-card">
            <div class="contact-icon">📞</div>
            <p class="contact-text">+1 233 898 0897</p>
        </div>

        <div class="contact-card">
            <div class="contact-icon">📧</div>
            <p class="contact-text">email@example.com</p>
        </div>

        <div class="contact-card">
            <div class="contact-icon">📍</div>
            <p class="contact-text">P#123, Main Street, Anytown, USA.</p>
        </div>
    </section>
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
