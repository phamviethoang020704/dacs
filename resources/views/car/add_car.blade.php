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
        #sideBar-main{
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
        .active{
            background-color: #E0F0FB;
        }
        #divAddCar{
            display: block;
        }
        #form>h1{
            font-weight: 600;
            border-bottom: 1px solid #ccc;
            color: #2C2D2F;;
            padding-bottom: 5px;
            width: 100%;
            display: flex;
            justify-content: center;
        }
        #form>div{
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
        .input-group {
            position: relative;
            width: 100%;
            max-width: 300px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
            transition: 0.3s;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            font-size: 16px;
            color: #aaa;
            transition: 0.3s ease-in-out;
            pointer-events: none;
            background: white;
            padding: 0 5px;
        }

        /* Khi input được focus hoặc có giá trị */
        .input-group input:focus,
        .input-group input:not(:placeholder-shown) {
            border-color: #2ab27b;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: 0;
            font-size: 14px;
            color: #2ab27b;
        }
        .input-group textarea {
            width: 470px;
            padding: 12px 16px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
            resize: vertical; /* Cho phép kéo chỉnh chiều cao */
            min-height: 150px; /* Giữ chiều cao tối thiểu */
        }
        .input-group textarea:focus,
        .input-group textarea:not(:placeholder-shown) {
            border-color: #2ab27b;
        }

        .input-group textarea:focus + label,
        .input-group textarea:not(:placeholder-shown) + label {
            top: 0;
            font-size: 14px;
            color: #2ab27b;
        }
        .input-group.textarea-group label {
            position: absolute;
            top: 16px;
            left: 16px;
            background: white;
            padding: 0 4px;
            font-size: 16px;
            color: #888;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        #trademark-name{
            display: flex;
            gap: 30px;
            margin-top: 30px;
            align-items: flex-end;
            justify-content: space-between;
        }
        .form{
            margin-top: 20px;
        }
        #quantity-remaining_quantity{
            display: flex;
            gap: 30px;
            justify-content: space-between;
        }
        #seat_count{
            width: 465px;
        }
        #price_per_day{
            width: 465px;
        }
        .error-message{
            display: flex;
            gap: 5px;
            align-items: center;
            color: #ff4d30;
        }
        #btnAddCar{
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        #btnAddCar button{
            background-color: #45A049;
            color: white;
            font-weight: 700;
            padding: 15px 50px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            width: 60%;
            font-size: 20px;
        }
        .form-control.input-error{
            border: 1px solid red !important;
        }
        #form-spacebetween{
            display: flex;
            justify-content: space-evenly;
        }
        .image-preview-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 300px;
        }
        .image-preview, .related-images {
            width: 100%;
            min-height: 200px;
            border: 2px dashed #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: #fafafa;
            color: #999;
            cursor: pointer;
        }
        .image-preview img {
            max-width: 100%;
            max-height: 100%;
        }
        .related-images {
            display: grid;
            gap: 10px;
            grid-template-columns: repeat(2, 1fr);
            width: 100%;
            min-height: 200px;
        }
        .related-images .image-preview {
            height: 100px;
        }
        .related-images span{
            width: 290px;
            display: flex;
            justify-content: center;
        }
        #img{
            margin-top: 50px;
        }

        .input-group-t{
            display: flex;
            position: relative;
            border: 1px solid #ccc;
            height: 44px;
            align-items: center;
            border-radius: 5px;
            width: 218px;
        }
        .input-group-t input{
            height: 100%;
            border-radius: 5px;
            padding: 0 5px;
            border: none;
            outline: none;
        }
        .input-group-t label{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            padding: 0 5px;
            color: #888;
            font-size: 14px;
            left: 15px;
            transition: 0.3s;
        }
        .input-group-t ul{
            position: absolute;
            left: 0;
            top: 110%;
            list-style: none;
            z-index: 5;
            background-color: white;
            width: 227px;
            overflow: hidden;
            height: 0;
            transition: height 0.5s ease;
            border-radius: 5px;
            box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2);
        }
        .input-group-t li{
            padding: 5px;
            cursor: pointer;
            transition: background 0.1s ease;
        }
        .input-group-t li:hover{
            background-color: #45A049;
            color: #fafafa;
        }
        .input-group-t i{
            font-size: 25px;
            transform: rotate(0deg);
            transition: transform 0.5s ease;
            cursor: pointer;
        }

        .input-group-t input:focus + label,
        .input-group-t input:not(:placeholder-shown) + label {
            top: 0;
            font-size: 12px;
            color: #2ab27b;
        }
        .btn-delete button{
            background-color: #FB9B82;
        }
        td p{
            width: 100%;
            display: flex;
            justify-content: center;
        }
        #addCar{
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
            {{-- <span>{{Auth::user()->avt_url}} ⇊</span> --}}
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
        <div id="divAddCar">
            <div id="form">
                <h1>Nhập thông tin xe</h1>
                <div id="form-aligncenter">
                    <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="form-spacebetween">
                            <div>
                                <div id="trademark-name">
                                    <div class="form-t">
                                        <div class="input-group-t form-control @error('trademark') input-error @enderror">
                                            <input autocomplete="off" placeholder=" " type="text" name="trademark" id="trademark">
                                            <label for="trademark">Thương hiệu</label>
                                            <i id="menu-icon" class='bx bx-chevron-down'></i>
                                            <ul id="trademark-list" class="dropdown-list">
                                                <li class="dropdown-item">Audi</li>
                                                <li class="dropdown-item">Bentley</li>
                                                <li class="dropdown-item">BMW</li>
                                                <li class="dropdown-item">Jaguar</li>
                                                <li class="dropdown-item">Land-Rover</li>
                                                <li class="dropdown-item">Lexus</li>
                                                <li class="dropdown-item">Mercedes-Benz</li>
                                                <li class="dropdown-item">Rolls-Royce</li>
                                            </ul>
                                        </div>
                                            @error('trademark')
                                                <div class="error-message">
                                                    <ion-icon name="alert-circle-outline"></ion-icon>
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @enderror
                                    </div>
                                    <div class="form">
                                        <div class="input-group">
                                            <input autocomplete="off" placeholder=" " type="text" name="name" id="name" class="form-control @error('name') input-error @enderror" value="{{ old('name') }}">
                                            <label for="name">Tên xe</label>
                                        </div>
                                        @error('name')
                                            <div class="error-message">
                                                <ion-icon name="alert-circle-outline"></ion-icon>
                                                <p>{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="input-group">
                                        <input autocomplete="off" placeholder=" " type="" name="seat_count" id="seat_count" class="form-control @error('seat_count') input-error @enderror" value="{{ old('seat_count') }}">
                                        <label for="seat_count">Số chỗ ngồi</label>
                                    </div>
                                    @error('seat_count')
                                        <div class="error-message">
                                            <ion-icon name="alert-circle-outline"></ion-icon>
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form">
                                    <div class="input-group">
                                        <input autocomplete="off" placeholder=" "  type="text" name="price_per_day" id="price_per_day" class="form-control @error('price_per_day') input-error @enderror" value="{{ old('price_per_day') }}">
                                        <label for="price_per_day">Giá thuê một ngày</label>
                                    </div>
                                    @error('price_per_day')
                                        <div class="error-message">
                                            <ion-icon name="alert-circle-outline"></ion-icon>
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div id="quantity-remaining_quantity">
                                    <div class="form">
                                        <div class="input-group">
                                            <input autocomplete="off" placeholder=" "  type="number" name="quantity" id="quantity" class="form-control @error('quantity') input-error @enderror" value="{{ old('quantity') }}">
                                            <label for="quantity">Số lượng</label>
                                        </div>
                                        @error('quantity')
                                            <div class="error-message">
                                                <ion-icon name="alert-circle-outline"></ion-icon>
                                                <p>{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form">
                                        <div class="input-group">
                                            <input autocomplete="off" placeholder=" " type="number" name="remaining_quantity" id="remaining_quantity" class="form-control @error('remaining_quantity') input-error @enderror" value="{{ old('remaining_quantity') }}">
                                            <label for="remaining_quantity">Số lượng có sẵn</label>
                                        </div>
                                        @error('remaining_quantity')
                                            <div class="error-message">
                                                <ion-icon name="alert-circle-outline"></ion-icon>
                                                <p>{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="input-group textarea-group">
                                        <textarea placeholder=" " type="text" name="description" id="description" rows="10" cols="80" class="form-control @error('description') input-error @enderror" value="{{ old('description') }}"></textarea>
                                        <label for="description">Mô tả</label>
                                    </div>
                                    @error('description')
                                        <div class="error-message">
                                            <ion-icon name="alert-circle-outline"></ion-icon>
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                            </div>
                            <div id="img">
                                <input  type="file" name="image_url" id="image_url" accept="image/*" style="display: none;">
                                <input type="file" name="related_images[]" id="related_images" multiple style="display: none;">
                                <div class="image-preview-container">
                                    <div class="image-preview" id="main-preview" onclick="document.getElementById('image_url').click()">
                                        <span>Chưa có ảnh chính</span>
                                    </div>
                                    @error('image_url')
                                        <div class="error-message">
                                            <ion-icon name="alert-circle-outline"></ion-icon>
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                                    <div class="related-images" id="related-preview" onclick="document.getElementById('related_images').click()">
                                        <span>Chưa có ảnh liên quan</span>
                                    </div>
                                    @error('related_images')
                                    <div class="error-message">
                                            <ion-icon name="alert-circle-outline"></ion-icon>
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div id="btnAddCar">
                            <button type="submit">Thêm xe</button>
                        </div>
                    </form>
                </div>
            </div>
                @if (session('success'))
                    <div id="success-message" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
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
        //
         document.addEventListener('DOMContentLoaded',() =>{
            let bookCar = document.getElementById('bookCar')
            let divAddCar = document.getElementById('divAddCar')
            const menuItems = document.querySelectorAll('.menu-item')
            const all = document.getElementById('all');
            const bookingBrowsing = document.getElementById('bookingBrowsing');
            const overdueBookings = document.getElementById('overdueBookings');
            menuItems.forEach(item => {
                item.addEventListener('click',() => {
                    all.style.display = "none"
                    bookingBrowsing.style.display = "none"
                    overdueBookings.style.display = "none"

                    if(item.id == 'menu-all' ){
                        all.style.display = "table"
                        bookCar.style.display = "block"
                        divAddCar.style.display = "none"
                        all.style.width = "100%"
                    }
                    else if(item.id == 'menu-bookingBrowsing'){
                        bookingBrowsing.style.display = "table"
                        bookCar.style.display = "block"
                        divAddCar.style.display = "none"
                        bookingBrowsing.style.width = "100%"
                    }
                    else if(item.id == 'menu-overdueBookings'){
                        overdueBookings.style.display = "table"
                        bookCar.style.display = "block"
                        divAddCar.style.display = "none"
                        overdueBookings.style.width = 100 + "%"
                    }


                })
            })
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



//
document.getElementById("image_url").addEventListener("change", function(event) {
            previewMainImage(event, "main-preview");
        });
        document.getElementById("related_images").addEventListener("change", function(event) {
            previewRelatedImages(event, "related-preview");
        });

        function previewMainImage(event, previewId) {
            let preview = document.getElementById(previewId);
            preview.innerHTML = "";
            let file = event.target.files[0];
            if (file) {
                let img = document.createElement("img");
                img.src = URL.createObjectURL(file);
                preview.appendChild(img);
            } else {
                preview.innerHTML = "<span>Chưa có ảnh chính</span>";
            }
        }

        function previewRelatedImages(event, previewId) {
            let preview = document.getElementById(previewId);
            preview.innerHTML = "";
            let files = event.target.files;
            let count = files.length;
            if (count === 0) {
                preview.innerHTML = '<span>Chưa có ảnh liên quan</span>';
                preview.style.border = "2px dashed #ccc";
                preview.style.background = "#fafafa";
                return;
            }
            preview.style.display = "grid";
            preview.style.gridTemplateColumns = "repeat(2, 1fr)";
            preview.style.minHeight = "auto";

            for (let i = 0; i < count; i++) {
                let div = document.createElement("div");
                div.classList.add("image-preview");
                div.style.height = "100px";
                let img = document.createElement("img");
                img.src = URL.createObjectURL(files[i]);
                div.appendChild(img);
                preview.appendChild(div);
            }
            if (count === 1) {
                preview.style.gridTemplateColumns = "1fr";
                preview.firstChild.style.height = "200px";
            }
        }
        //
        document.addEventListener("DOMContentLoaded", function() {
    const input = document.getElementById("trademark");
    const dropdown = document.getElementById("trademark-list");
    const menuIcon = document.getElementById("menu-icon");
    const inputgroup = document.querySelector(".input-group-t");
    inputgroup.addEventListener("click", function() {
        dropdown.style.height = '227px';
        dropdown.style.border = '1px solid #ccc'
        menuIcon.style.transform = "rotate(180deg)";
        inputgroup.style.border = '1px solid #2ab27b'
    });
    menuIcon.addEventListener("click",(e) => {
        e.stopPropagation();
        if(dropdown.style.height == '227px'){
            dropdown.style.height = '0px';
            menuIcon.style.transform = "rotate(0deg)";
            dropdown.style.border = 'none'
            inputgroup.style.border = '1px solid #ccc'
        }
        else{
            dropdown.style.height = '227px';
            dropdown.style.border = '1px solid #ccc'
            menuIcon.style.transform = "rotate(180deg)";
            inputgroup.style.border = '1px solid #2ab27b'
        }

    })
    document.querySelectorAll(".dropdown-item").forEach(item => {
    item.addEventListener("click", function(e) {
        e.stopPropagation(); // Ngăn sự kiện click lan ra document

        input.value = this.textContent;
        dropdown.style.height = '0px';
        menuIcon.style.transform = "rotate(0deg)";
        dropdown.style.border = 'none'
        inputgroup.style.border = '1px solid #ccc'
    });
});

    document.addEventListener("click", function(e) {
        if (!input.parentElement.contains(e.target)) {
            dropdown.style.height = '0px';
            menuIcon.style.transform = "rotate(0deg)";
            dropdown.style.border = 'none'
            inputgroup.style.border = '1px solid #ccc'
        }
    });
});
    </script>
</body>
</html>
