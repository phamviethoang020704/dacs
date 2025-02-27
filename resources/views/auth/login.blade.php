<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Car Rental</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon (1).ico') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    text-decoration: none;
    list-style: none;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(90deg, #e2e2e2, #c9d6ff);
}

.container{
    position: relative;
    width: 850px;
    height: 550px;
    background: #fff;
    margin: 20px;
    border-radius: 30px;
    box-shadow: 0 0 30px rgba(0, 0, 0, .2);
    overflow: hidden;
}

    .container h1{
        font-size: 36px;
        margin: 0px 0;
    }

    .container p{
        font-size: 14.5px;
        margin: 15px 0;
    }

form{ width: 100%; }

.form-box{
    position: absolute;
    right: 0;
    width: 50%;
    height: 100%;
    background: #fff;
    display: flex;
    align-items: center;
    color: #333;
    text-align: center;
    padding: 40px;
    z-index: 1;
    transition: .6s ease-in-out 1.2s, visibility 0s 1s;
}

    .container.active .form-box{ right: 50%; }

    .form-box.register{ visibility: hidden; }
        .container.active .form-box.register{ visibility: visible; }

.input-box{
    position: relative;
    margin: 0;
    height: 60px;
    margin-top: 9px;
}

    .input-box input{
        width: 100%;
        padding: 13px 50px 13px 20px;
        border-radius: 8px;
        background-color: white;
        border: none;
        outline: none;
        font-size: 16px;
        color: #333;
        font-weight: 500;
        height: 40px;
    }

.forgot-link{
    margin: -5px 0 15px;
}
    .forgot-link a{
        margin-top: 20px;
        font-size: 14.5px;
        color: #333;
    }

.btn{
    width: 100%;
    height: 48px;
    background: #FA4226;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    border: none;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;
}

.social-icons{
    display: flex;
    justify-content: center;
}

    .social-icons a{
        display: inline-flex;
        padding: 10px;
        border: 2px solid #ccc;
        border-radius: 8px;
        font-size: 24px;
        color: #333;
        margin: 0 8px;
    }

.toggle-box{
    position: absolute;
    width: 100%;
    height: 100%;
}

    .toggle-box::before{
        content: '';
        position: absolute;
        left: -250%;
        width: 300%;
        height: 100%;
        background: #FA4226;
        /* border: 2px solid red; */
        border-radius: 150px;
        z-index: 2;
        transition: 1.8s ease-in-out;
    }

        .container.active .toggle-box::before{ left: 50%; }

.toggle-panel{
    position: absolute;
    width: 50%;
    height: 100%;
    /* background: seagreen; */
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 2;
    transition: .6s ease-in-out;
}

    .toggle-panel.toggle-left{
        left: 0;
        transition-delay: 1.2s;
    }
        .container.active .toggle-panel.toggle-left{
            left: -50%;
            transition-delay: .6s;
        }

    .toggle-panel.toggle-right{
        right: -50%;
        transition-delay: .6s;
    }
        .container.active .toggle-panel.toggle-right{
            right: 0;
            transition-delay: 1.2s;
        }

    .toggle-panel p{ margin-bottom: 20px; }

    .toggle-panel .btn{
        width: 160px;
        height: 46px;
        background: transparent;
        border: 2px solid #fff;
        box-shadow: none;
    }
    .phone-address{
        display: flex;
        gap: 5px;
        padding: 0;
        margin: 15px 0 15px;
    }
    #phone,#address{
        display: flex;
        height: 40px;
        align-items: center;
        border-radius: 10px;
        padding: 5px;
    }
    #phone input,#address input{
        width: 140px;
    }
    .error-message{
        display: flex;
        color: red;
        height: 10px;
        margin: 0;
        padding: 0;
        align-items: center;
        margin-top: 3px;
    }
    .error-message.e1 {
        margin-top: 13px;
    }
    #back{
        background-color: #FA4226;
        color: white;
        height: 30px;
        width: 30px;
        position: fixed;
        top: 30px;
        left: 30px;
        z-index: 5;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
@media screen and (max-width: 650px){
    .container{ height: calc(100vh - 40px); }

    .form-box{
        bottom: 0;
        width: 100%;
        height: 70%;
    }

        .container.active .form-box{
            right: 0;
            bottom: 30%;
        }

    .toggle-box::before{
        left: 0;
        top: -270%;
        width: 100%;
        height: 300%;
        border-radius: 20vw;
    }

        .container.active .toggle-box::before{
            left: 0;
            top: 70%;
        }

        .container.active .toggle-panel.toggle-left{
            left: 0;
            top: -30%;
        }

    .toggle-panel{
        width: 100%;
        height: 30%;
    }
        .toggle-panel.toggle-left{ top: 0; }
        .toggle-panel.toggle-right{
            right: 0;
            bottom: -30%;
        }

            .container.active .toggle-panel.toggle-right{ bottom: 0; }
            }

                @media screen and (max-width: 400px){
                    .form-box { padding: 20px; }

                    .toggle-panel h1{font-size: 30px; }
                }
                .input-group {
    position: relative;
    width: 100%;
    max-width: 300px;
}

.input-group input {
    width: 100%;
    padding: 12px 10px;
    border: 2px solid #ccc;
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
.input-group input:valid {
    border-color: #2ab27b;
}

.input-group input:focus + label,
.input-group input:valid + label {
    top: 0;
    font-size: 14px;
    color: #2ab27b;
}
#textLogin{
    height: 20px;
    line-height: 20px;
    margin: 0;
}
    </style>
</head>
<body>
    <div id="back" onclick="window.location.href='http://127.0.0.1:8000/';"><-</div>
    <div class="container" id="container">
        <div class="form-box login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Đăng nhập</h1>
                <div class="input-box">
                    <div class="input-group">
                        <input type="email" name="email">
                        <label for="email">email</label>
                    </div>
                    @error('email')
                        <div class="error-message">
                            <ion-icon name="alert-circle-outline"></ion-icon>
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="input-box">
                    <div class="input-group">
                        <input type="password" name="password">
                        <label for="password">Mật khẩu</label>
                    </div>
                    @error('password')
                        <div class="error-message">
                            <ion-icon name="alert-circle-outline"></ion-icon>
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="forgot-link">
                    <a href="{{route('password.request')}}">Quên mật khẩu?</a>
                </div>
                <button type="submit" class="btn">Đăng nhập</button>
                <p>hoặc tiếp tục với</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google' ></i></a>
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-github' ></i></a>
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Đăng ký</h1>
                <div class="input-box">
                    <div class="input-group">
                        <input required type="text" name="name" value="{{ old('name') }}">
                        <label for="name">Họ và tên</label>
                    </div>
                    @error('name')
                    <div class="error-message">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                </div>
                <div class="input-box">
                    <div class="input-group">
                        <input type="text" name="email"  value="{{ old('email') }}">
                        <label for="email">Email</label>
                    </div>
                    @error('email')
                    <div class="error-message">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                </div>
                <div class="input-box">
                    <div class="input-group">
                        <input type="password" name="password" >
                        <label for="password">Mật khẩu</label>
                    </div>
                    @error('password')
                        <div class="error-message">
                            <ion-icon name="alert-circle-outline"></ion-icon>
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="input-box">
                    <div class="input-group">
                        <input required type="password" name="password_confirmation" >
                        <label for="password_confirmation">nhập lại mật khẩu</label>
                    </div>
                    @error('password_confirmation')
                    <div class="error-message">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                </div>
                <div class="phone-address">
                    <div>
                        <div id="phone">
                            <div class="input-group">
                                <input  type="text" name="phone" value="{{ old('phone') }}">
                                <label for="phone">Số điện thoại</label>
                            </div>
                        </div>
                        @error('phone')
                            <div class="error-message e1">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div>
                        <div id="address">
                            <div class="input-group">
                                <input  type="text" name="address" value="{{ old('address') }}">
                                <label for="address">Địa chỉ</label>
                            </div>
                        </div>
                        @error('address')
                            <div class="error-message e1">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn">Đăng ký</button>
                <p id="textLogin">hoặc đăng nhập bằng</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google' ></i></a>
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-github' ></i></a>
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                </div>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>chào mừng trở lại!</h1>
                <p>Bạn chưa có tài khoản</p>
                <button class="btn register-btn">Đăng ký ngay</button>
            </div>

            <div class="toggle-panel toggle-right">
                <h1>Chào mừng trở lại</h1>
                <p>Bạn đã có tài khoản</p>
                <button class="btn login-btn">Đăng nhập</button>
            </div>
        </div>
    </div>
    <script>
const container = document.getElementById('container');
    const registerBtn = document.querySelector('.register-btn');
    const loginBtn = document.querySelector('.login-btn');

    registerBtn.addEventListener('click', () => {
        container.classList.add('active');
        sessionStorage.setItem('auth_tab', 'register'); // Lưu trạng thái vào sessionStorage
    });

    loginBtn.addEventListener('click', () => {
        container.classList.remove('active');
        sessionStorage.setItem('auth_tab', 'login'); // Lưu trạng thái vào sessionStorage
    });

    // Kiểm tra lỗi từ session và giữ trạng thái phù hợp
    document.addEventListener('DOMContentLoaded', function () {
        let authTab = sessionStorage.getItem('auth_tab');

        @if(session('register_error'))
            authTab = 'register';
        @elseif(session('login_error'))
            authTab = 'login';
        @endif

        if (authTab === 'register') {
            container.classList.add('active');
        } else {
            container.classList.remove('active');
        }
    });
    </script>
</body>
</html>
