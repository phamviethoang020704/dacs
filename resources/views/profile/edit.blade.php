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
            justify-content: flex-end;
            gap: 30px;
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
        }
        #profile-logout-content{
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
        #profile-avt{
            display: flex;
            align-items: center;
            gap: 15px;
        }
        #input-icon{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 76%;
        }
        #input-icon>div{
            display: flex;
            align-items: center;
        }
        #input-icon input{
            padding: 5px;
            border: none;
            outline: none;
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
        #hello-user{
            padding: 15px 0;
            border-bottom: .0625rem solid #efefef;
            margin-bottom: 20px;
        }
        #hello-user h1{
            color: #333;
            font-size: 1.125rem;
            font-weight: 500;
            line-height: 1.5rem;
            margin: 0;
            text-transform: capitalize;
        }
        #hello-user p{
            color: #555;
            font-size: .875rem;
            line-height: 1.0625rem;
            margin-top: .1875rem;
        }
        #avatar{
            display: flex;
            height: 200px;
            justify-content: center;
            align-items: center;
        }
        #infomation{
            width: 200px;
            height: 150px;
        }
        .avatar-wrapper{
            position: relative;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-left: 30px;
        }
        .avatar-wrapper img{
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }
        .edit-icon{
            position: absolute;
            bottom: 5px;
            right: 5px;
            background: #ff7b00;
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        #name-email{
        }
        #name-email h4{
            font-size: 25px;
            font-weight: 600;
            color: #2C2D2F;
            margin-bottom: 10px;
        }
        .container{
            display: flex;
            gap: 90px;
        }

        #form-update {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        #form-update p {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        #form-update form {
            display: flex;
            flex-direction: column;
        }

        #form-update .mb-3 {
            margin-bottom: 15px;
        }

        #form-update .form-label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }

        #form-update button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #form-update button:hover {
            background-color: #0056b3;
        }

        #form-update input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        #bg-main{
            background-color:#E0F0FB;
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
        @if (auth()->user()->role == 'admin')
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
        @endif
        <p>Thông tin</p>
        <div class="menuClass" id="bg-main"  onclick="window.location.href='http://127.0.0.1:8000/profile';">
            <i class='bx bx-info-circle'></i>
            <h2>Thông tin cá nhân</h2>
        </div>
    </div>
    <div id="header">
        <div id="input-icon">
            <div>
                <i class='bx bx-search-alt-2'></i>
                <input type="text" placeholder="Tìm kiếm...">
            </div>
            <i class='bx bx-bell'></i>
        </div>
        <div id="profile-logout">
            <div id="profile-avt">
                <img src="{{asset('storage/' . auth()->user()->avt_url)}}" alt="">
                <p>{{$user->name}}</p>
            </div>
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
        <div id="hello-user">
            <h1>Xin chào {{$user->name}}</h1>
            <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
        </div>
        <div class="container">
            <div id="avatar">
                <div id="infomation">
                    <div class="avatar-wrapper">
                        <img id="avatarPreview" class="avatar" src="{{ asset('storage/' . ($user->avt_url ?? 'default-avatar.png')) }}" alt="Avatar">
                        <div class="edit-icon" onclick="document.getElementById('avatarInput').click()">✏️</div>
                    </div>
                    <input type="file" id="avatarInput" name="avt_url" accept="image/*" form="avatarForm" style="opacity: 0">
                    <form id="avatarForm" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="form_type" value="avatar_update">
                    </form>
                </div>
                <div id="name-email">
                    <h4>{{$user->name}}</h4>
                    <p>{{$user->email}}</p>
                </div>
            </div>
            <div id="form-update">
                <p>Thay đổi thông tin cá nhân</p>
                <div id="form-update-profile">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="form_type" value="profile_update"> <!-- Xác định form -->

                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address', $user->address) }}">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                    </form>
                </div>
                <p>Thay đổi mật khẩu</p>
                <div id="form-update-password">
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="current-password">Mật khẩu hiện tại:</label>
                        <input type="password" id="current-password" name="current_password" required>

                        <label for="new-password">Mật khẩu mới:</label>
                        <input type="password" id="new-password" name="password" required>

                        <label for="confirm-password">Xác nhận mật khẩu:</label>
                        <input type="password" id="confirm-password" name="password_confirmation" required>

                        <button type="submit">Đổi mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
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
         // Xử lý chọn ảnh và xem trước ảnh
         document.getElementById('avatarInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('avatarPreview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
            document.getElementById('avatarForm').submit(); // Tự động gửi form sau khi chọn ảnh
        });
    </script>
</body>
</html>
