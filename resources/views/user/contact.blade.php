<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/99e557a6de.js" crossorigin="anonymous"></script>
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    <title>DriveLux</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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

    <!-- Map container -->
    <div class="contact-container">
        <h2 class="contact-title">Vị trí của chúng tôi</h2>
        <div id="map"></div>
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

        // Initialize Leaflet maps
        document.addEventListener('DOMContentLoaded', function() {
            // Main detailed map
            const detailedMap = L.map('map').setView([20.9639, 105.7565], 15);
            
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(detailedMap);
            
            const detailedMarker = L.marker([20.9639, 105.7565]).addTo(detailedMap);
            detailedMarker.bindPopup('<strong>DriveLux</strong><br>12 Yên Nghĩa, Hà Đông, Hà Nội').openPopup();
            
            // Background map in contact section
            const backgroundMap = L.map('contact-map-background', {
                zoomControl: false,
                attributionControl: false,
                dragging: false,
                scrollWheelZoom: false
            }).setView([20.9639, 105.7565], 13);
            
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: ''
            }).addTo(backgroundMap);
            
            L.marker([20.9639, 105.7565]).addTo(backgroundMap);
        });
    </script>
</body>
</html>
