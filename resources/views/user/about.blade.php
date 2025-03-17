<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/99e557a6de.js" crossorigin="anonymous"></script>
    <title>DriveLux</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
<div id="header">
        <img src="{{ asset('storage/home/logo.png') }}" alt="Logo">
        <div id="header-menu-login">
            <div id="header-menu">
                <li><a href="/">Trang chủ</a></li>
                <li><a href="/car">Thuê xe</a></li>
                <li><a href="/about" id="menu-main">Về DriveLux</a></li>
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
        </div>
        <div id="prev-next-text">
            <p>Lựa chọn cẩn thận, những gì tốt nhất cho 
                một chuyến đi khó quên</p>
            <div>
                <h2>Lựa chọn hàng đầu</h2>
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
