<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>DriveLux</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon (1).ico') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
                        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            scrollbar-width: thin;
            scrollbar-color: #ff4d30 #fff;
        }
        body{
            background-color: #F0F5F9;
            height: 100vh;
            z-index: 1;
        }
        #sidebar{
            position: fixed;
            top: 15px;
            left: 15px;
            bottom: 15px;
            border-radius: 20px;
            background-color: white;
            min-width: 270px;
        }
        #menu-all{
            background-color:#E0F0FB;
        }
        #sidebarIcon{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin: 20px 0;
        }
        #sidebarIcon>ion-icon{
            color: #FA4226;
            font-size: 25px;
        }
        #sidebar p{
            color: 	rgba(0, 0, 0, 0.7);
            margin-top: 20px;
            margin-left: 25px;
        }
        .menuClass{
            width: 100%;
            display: flex;
            align-items: center;
            gap: 15px;
            padding-left: 25px;
            height: 40px;
            border-bottom-right-radius: 20px;
            border-top-right-radius: 20px;
            margin-top: 15px;
            cursor: pointer;
        }
        .menuClass:hover{
            background-color:#E0F0FB;
        }
        .menuClass h2{
            font-size: 15px;
            font-weight: 500 !important;
            line-height: 1.1rem !important;
            letter-spacing: .009375em !important;
            font-family: inherit !important;

        }
        a{
            text-decoration: none;
            color: black;
        }
        #header{
            position: fixed;
            height: 70px;
            background-color: white;
            top: 15px;
            right: 15px;
            border-radius: 15px;
            margin-left: 20px;
            width: calc(100% - 320px);
            display: flex;
            justify-content: space-between;
            padding: 0 15px 0 30px;
            align-items: center;
            box-shadow: 1px 1px 0px 0px rgba(0, 0, 0, 0.4);
            z-index: 10;
        }
        #header i{
            font-size: 20px;
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
            background-color: #E0F0FB;
        }
        #profile-logout{
            position: relative;
            line-height: 50px;
            margin-right: 20px;
            cursor: pointer;
            user-select: none;
            z-index: 3;
        }
        #profile-logout img{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-top: 23px;
        }
        #profile-logout>div{
            position: absolute;
            bottom: -90px;
            right: 0;
            /* display: flex; */
            flex-direction: column;
            justify-content: start;
            border:1px solid #e5e7eb;
            box-shadow: 0 0 15px #e5e7eb;
            height: 90px;
            width: 150px;
            display: none;
            background-color: white;
            z-index: 4;
        }
        #profile-logout-content{
            z-index: 4;
        }
        #content{
            margin-left: 306px;
            margin-top: 106px;
            padding: 20px;
            min-height: 100vh;
            background-color: white;
            border-radius: 20px;
            margin-right: 10px;
        }
        #dashboard{
            background-color:#E0F0FB;
        }
        .chart-container {
            width: 500px; /* Biểu đồ nhỏ hơn */
            height: 529px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
            margin-top: 30px;
            border-radius: 10px;
            padding: 5px;
        }
        .dashboard {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 600px;
            margin: auto;
            font-family: Arial, sans-serif;
        }
        .card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .icon {
            width: 40px;
            height: 40px;
            background-color: #f0f4f8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #007bff;
        }
        .text {
            flex-grow: 1;
            margin-left: 15px;
        }
        .text h2 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }
        .text p {
            margin: 5px 0;
            color: gray;
            font-size: 14px;
        }
        .change {
            font-size: 14px;
            font-weight: bold;
        }
        .up {
            color: green;
        }
        .down {
            color: red;
        }


        #char{
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 0 40px;
        }
        #char-img{
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
            margin-top: 30px;
            border-radius: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <div id="sidebarIcon" onclick="window.location.href='http://127.0.0.1:8000/';" style="cursor: pointer">
            <img src="{{ asset('storage/home/logo.png') }}" alt="Logo">
        </div>
        <p>Trang chủ</p>
        <div class="menuClass" id="dashboard"  onclick="window.location.href='http://127.0.0.1:8000/admin/dashboard';">
            <ion-icon name="grid-outline"></ion-icon>
            <h2>Bảng điều khiển</h2>
        </div>
        <p>Đơn đặt xe</p>
        <div class="menuClass"  onclick="window.location.href='http://127.0.0.1:8000/admin';">
            <i class='bx bx-podcast'></i>
            <h2  class="">Tất cả</h2>
        </div>
        <div class="menuClass" id="menu-bookingBrowsing"  onclick="window.location.href='http://127.0.0.1:8000/admin/browse';">
            <ion-icon name="checkmark-outline"></ion-icon>
            <h2  class="">Đơn chưa duyệt</h2>
        </div>
        <div class="menuClass" id="menu-overdueBookings"  onclick="window.location.href='http://127.0.0.1:8000/admin/returnCar';">
            <i class='bx bxl-paypal'></i>
            <h2  class="">Đơn chưa trả xe</h2>
        </div>
        <p>Thêm xe</p>
        <div class="menuClass" id="addCar"  onclick="window.location.href='http://127.0.0.1:8000/car/create';">
            <i class='bx bxs-car-wash'></i>
            <h2>Thêm xe</h2>
        </div>
        <p>Thông tin</p>
        <div class="menuClass"  onclick="window.location.href='http://127.0.0.1:8000/profile';">
            <i class='bx bx-info-circle'></i>
            <h2>Thông tin cá nhân</h2>
        </div>
    </div>
    <div id="header">
        <i class='bx bxs-bell-ring'></i>
        <div id="profile-logout">
            <img src="{{asset('storage/' . auth()->user()->avt_url)}}" alt="">
            <div id="profile-logout-content">
                <a href="{{ route('profile.edit') }}">Thông tin</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Đăng xuất</button>
                </form>
            </div>
        </div>
    </div>
    <div id="content">
        <h3>Bảng điều khiển</h3>
        <div class="dashboard">
            <!-- Tổng Doanh Thu -->
            <div class="card">
                <div class="text">
                    <h2>{{ number_format($totalRevenue, 0, ',', '.') }} VND</h2>
                    <p>Tổng Doanh Thu</p>
                    <span class="change up">▲ 22.45%</span>
                </div>
                <div class="icon">💰</div>
            </div>

            <!-- Tổng Đơn Hàng -->
            <div class="card">
                <div class="text">
                    <h2>{{ number_format($bookingCount) }}</h2>
                    <p>Đơn Hàng</p>
                    <span class="change up">▲ 22.45%</span>
                </div>
                <div class="icon">🛒</div>
            </div>

            <!-- Số Người Dùng -->
            <div class="card">
                <div class="text">
                    <h2>{{ number_format($userCount) }}</h2>
                    <p>Người Dùng</p>
                    <span class="change down">▼ 2.45%</span>
                </div>
                <div class="icon">👤</div>
            </div>

            <!-- Số Đánh Giá -->
            <div class="card">
                <div class="text">
                    <h2>{{ number_format($reviewCount) }}</h2>
                    <p>Đánh Giá</p>
                    <span class="change down">▼ 0.45%</span>
                </div>
                <div class="icon">⭐</div>
            </div>
        </div>
        <div id="char">
            <div class="chart-container">
                <h3>Doanh thu 6 tháng gần nhất</h3>
                <canvas id="smallRevenueChart"></canvas>
            </div>
            <div id="char-img">
                <img id="car-image" src="{{ asset('storage/dashboard/image.png') }}" alt="Logo">
            </div>
        </div>

    </div>

    <script>
        let labels = {!! json_encode($revenueData->pluck('month')) !!};
        let revenueData = {!! json_encode($revenueData->pluck('total_revenue')) !!};

        const ctx = document.getElementById('smallRevenueChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Doanh thu (VND)',
                    data: revenueData,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
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
    </script>
</body>
</html>
