<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>DriveLux</title>
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
        .odd {
            background-color: #f9f9f9; /* Xám nhạt */
        }

        .even {
            background-color: white; /* Xanh nhạt */
        }
        .booking-table{
            margin-top: 30px;
            width: 100%;
            table-layout: fixed;
            border: 1px solid #ddd;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
        }
        th, td {
            padding: 12px 5px;
            text-align: left;
        }
        thead {
            background-color: #767F87;
            color: white;
        }
        thead th{
            font-size: 12px;
            text-align: center;
        }
        tbody td{
            font-size: 13px;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #ddd;
            transition: 0.3s;
        }

        th {
            text-transform: uppercase;
        }
        #bookingBrowsing,#overdueBookings{
            display: none;
        }
        table button{
            width: 100%;
            height: 100%;
            border-radius: 5px;
            color: white;
            background-color: #0A8ADC;
            padding: 10px;
            cursor: pointer;
            border: none;
        }
        .active{
            background-color: #E0F0FB;
        }
        #divAddCar{
            display: none;
        }
        #form>h1{
            font-weight: 600;
            border-bottom: 1px solid #ccc;
            color: #2C2D2F;
            padding-bottom: 5px;
            width: 100%;
            display: flex;
            justify-content: center;
        }
        #form>div{
        }
.btn-delete button{
    background-color: #FB9B82;
}
td p{
    width: 100%;
    display: flex;
    justify-content: center;
}
    </style>
</head>
<body>
    <div id="sidebar">
        <div id="sidebarIcon" onclick="window.location.href='http://127.0.0.1:8000/';" style="cursor: pointer">
            <img src="{{ asset('storage/home/logo.png') }}" alt="Logo">
        </div>
        <p>Trang chủ</p>
        <div class="menuClass"  onclick="window.location.href='http://127.0.0.1:8000/admin/dashboard';">
            <ion-icon name="grid-outline"></ion-icon>
            <h2>Bảng điều khiển</h2>
        </div>
        <p>Đơn đặt xe</p>
        <div class="menuClass" id="menu-all"  onclick="window.location.href='http://127.0.0.1:8000/admin';">
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
        <div id="bookCar">
            <table id="all" class="booking-table">
                <thead>
                    <tr>
                        <th>Thời gian</th>
                        <th>Họ và tên</th>
                        <th>Tên xe</th>
                        <th>Ngày BĐ</th>
                        <th>Ngày KT</th>
                        <th>Tổng giá</th>
                        <th>Duyệt</th>
                        <th>KH trả xe</th>
                        <th>QTV trả xe</th>
                        <th>Tình trạng</th>
                        <th>Xóa đơn</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr class="">
                        <td>{{$booking->updated_at->format('d/m/Y')}}</td>
                        <td>{{ $booking->user ? $booking->user->name : 'Không có người dùng' }}</td>
                        <td>{{ $booking->car ? $booking->car->name : 'Không có xe' }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('d/m/Y') }}</td>
                        <td>{{  \Carbon\Carbon::parse($booking->end_date)->format('d/m/Y')  }}</td>
                        <td>{{ number_format($booking->total_price, 0, ',', '.') }}</td>
                        <td>
                            @if ($booking->browsing_status == false)
                            <form action="{{ Route('admin.approveBooking',$booking->id)}}" method="POST">
                                @csrf
                                <button type="submit">duyệt</button>
                            </form>
                            @else
                                <p>đã duyệt</p>
                        @endif
                        </td>
                        <td>
                            @if ($booking->user_give_back == false)
                                <p>chưa</p>
                            @else
                                <p>hoàn tất</p>
                            @endif
                        </td>
                        <td>
                            @if ($booking->browsing_status == true)
                                @if ($booking->admin_give_back == false)
                                    <form action="{{Route('admin.adminGiveBack',$booking->id)}}" method="POST">
                                        @csrf
                                        <button type="submit">Xác nhận</button>
                                    </form>
                                @else
                                    <p>hoàn tất</p>
                                @endif
                            @else
                                    <p>🔒</p>
                            @endif
                        </td>
                        <td>{{ $booking->car_return_deadline }}</td>
                        <td class="btn-delete">
                            <form action="{{Route('booking.destroy',$booking->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class='bx bxs-trash'></i>Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    <script>
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
