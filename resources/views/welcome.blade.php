<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
            padding-bottom: 150px;
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

        #container{
            position: relative;
            height: 200vh;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('{{ asset('storage/home/image-hero.png') }}');
        }
        #container-textcenter{
            position: absolute;
            top: -90px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #container-textcenter h2{
            font-weight: 600;
            line-height: 120%;
            text-align: center;
            color: #2C2D2F;
            font-size: 76px;
            unicode-bidi: isolate;
            width: 60%;
        }
        #container-textcenter>h2 span{
            color: #2CB9AD;
            font-weight: 700 !important;
        }
        #container-textcenter p{
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            letter-spacing: 0.05em;
            color: #2C2D2F;
            margin-bottom: 30px;
            width: 50%;
            text-align: center;
        }
        #container-textcenter div{
            display: flex;
            gap: 30px;
        }
        #container-textcenter div a{
            font-size: 19px;
            color: #FAFAFA !important;
            transition: all 0.5s ease-in-out;
            padding: 12px 32px;
            border: none;
            border-radius: 50px;
            background-color: #2C2D2F;
            text-decoration: none;
        }
        #container-textcenter div a:hover{
            transform: scale(1.025);
            outline: 2px solid #57d3c9;
            box-shadow: 4px 5px 17px -4px #2CB9AD;
            background-color: #2CB9AD;
        }
        #container-textleft{
            position: absolute;
            top: 300px;
            left: 100px;
        }
        #container-textleft h4{
            font-weight: 700;
            line-height: 120%;
            color: #FAFAFA;
            margin-bottom: 10px;
            font-size: 57px;
        }
        #container-textleft p{
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            letter-spacing: 0.05em;
            color: #FAFAFA;
            width: 80%;
        }
        #car-image{
            position: absolute;
            top: 230px;
            width: 100%;
            display: flex;
            justify-content: center;
            margin: auto;
        }
        #car-image img{
            width: 80%;
        }
        #arrow-line{
            width: 100%;
        }
        #logo-div{
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }
        #logo{
            width: 750px;
            overflow: hidden;
            white-space: nowrap;
        }
        #logo-item{
            width: fit-content;
            display: flex;
            gap: 10px;
            animation: slide 20s linear infinite;
        }
        .logo-items{
            width:150px;
            height: 150px;
            display: flex;
            align-items: center;
        }
        .logo-items img{
            width: 90%;
            height: 90%;
            border-radius: 15px;
            box-shadow: 0 0 15px #2CB9AD;
        }
        @keyframes slide {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
        }
        #slider-container-center{
            display: flex;
            justify-content: center;
            margin-bottom: 100px;
        }
        .slider-container {
            width: 1200px; /* Hiển thị 3 div mỗi div rộng 100px */
            overflow: hidden;
            position: relative;
        }
        .slider {
            display: flex;
            width: 4800px; /* 6 div * 400px * 2 (clone để tạo hiệu ứng lặp vô hạn) */
            transition: transform 0.5s ease-in-out;
        }
        .slide {
            width: 400px;
            height: auto;
            background: #F0F2F4;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 5px;
        }
        #prev-next{
            display: flex;
            justify-content: space-between;
            padding: 0 0px 0 80px;
            margin-top: 100px;
        }
        #prev-next-btn{
            display: flex;
            gap: 30px;
        }
        #prev-next-btn button{
            background-color: #F0F2F4;
            color:#2CB9AD;
            width: 50px;
            height: 50px;
            border: none;
            border-radius: 15px;
            font-size: 35px;
            cursor: pointer;
        }
        #prev-next-text{
            display: flex;
        }
        #prev-next-text p{
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            letter-spacing: 0.05em;
            color: #1B1C1E;
            padding: 0 30px;
            text-align: end;
            width: 60%;
        }
        #prev-next-text h2{
            font-weight: 700;
            font-size: 30px;
            line-height: 120%;
            color: rgb(27, 28, 30);
            margin-bottom: 24px;
        }
        #prev-next-text>div{
            position: relative;
        }
        #prev-next-text>div>div{
            bottom: 10px;
            position: absolute;
            width: 280px; /* Độ dài */
            height: 10px; /* Độ dày */
            background-color: #27B3AC; /* Màu xanh */
            clip-path: polygon(0% 50%, 5% 0%, 100% 0%, 100% 100%, 5% 100%);
        }

        .slide img{
            width: 100%;
            height: 200px;
            border-radius: 20px;
        }
        .slide{
            border-radius: 20px;
            padding: 20px;
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
        .slide a{
            color: #FAFAFA !important;
            transition: all 0.5s ease-in-out;
            padding: 12px 32px;
            border: none;
            border-radius: 50px;
            background-color: #2C2D2F;
            text-decoration: none;
            margin: auto;
        }
        .slide a:hover{
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
        #how-to-book{
            margin-top: 100px;
            display: flex;
            margin: auto;
            gap: 50px;
            align-items: center;
            margin-left: 100px;
        }
        #how-to-book h2{
            font-weight: 700;
            font-size: 57px;
            line-height: 120%;
            color: #1B1C1E;
        }
        #how-to-book p{
            color: #1B1C1E;
            font-size: 20px;
            width: 35%;
            margin-bottom: 10px;
            line-height: 160%;
        }
        #how-to-book>div>div{
            margin-top: 10px;
            width: 300px;
            height: 10px;
            background-color: #2AB8B8;
            clip-path: polygon(0% 0%, 95% 0%, 100% 50%, 95% 100%, 0% 100%);
        }
        #book-area{
            display: flex;
            background-color: #2CB9AD;
            position: relative;
            height: 150px;
            margin-top: 50px;
        }
        .book-area-2{
            position: relative;
            position: absolute;
            left: 293px;
            height: 150px;
            width: 397px;
            top: 2px;
        }
        .book-area-3{
            position: relative;
            position: absolute;
            left: 610px;
            height: 150px;
            width: 397px;
            top: 2px;
        }

        .book-area-2>div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            height: 50px;
        }
        .book-area-3>div{
            position: absolute;
            top: 50%;
            left: 55%;
            transform: translate(-50%,-50%);
            height: 50px;
        }
        .book-area-2>img,.book-area-3>img{
            width: 100%;
        }
        .book-area-1 h5,.book-area-1 p{
            color: #FAFAFA;
            font-size: 25px;
        }
        .book-area-1 p{
            font-weight: 600;
        }
        .book-area-1{
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 40px;
        }
        .book-area-4{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 0px;
            width: 350px;
        }
        .book-area-4 img{
            width: 100%;
        }
        .book-area-2 h5, .book-area-3 h5{
            color: #2CB9AD;
            font-weight: 600;
            font-size: 25px;
        }
        .book-area-2 p,.book-area-3 p{
            color: #797D86;
            font-weight: 600;
            font-size: 20px;
            margin-top: 5px;
            white-space: nowrap;
        }


        #slider-container-center-2{
            display: flex;
            justify-content: center;
            margin-bottom: 100px;
        }
        .slider-container-2 {
            width: 1200px; /* Hiển thị 3 div mỗi div rộng 100px */
            overflow: hidden;
            position: relative;
        }
        .slider-2 {
            display: flex;
            width: 4800px; /* 6 div * 400px * 2 (clone để tạo hiệu ứng lặp vô hạn) */
            transition: transform 0.5s ease-in-out;
        }
        .slide-2 {
            width: 400px;
            height: auto;
            background: #F0F2F4;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 5px;
        }
        #prev-next-2{
            display: flex;
            justify-content: space-between;
            padding: 0 0px 0 80px;
            margin-top: 100px;
        }
        #prev-next-btn-2{
            display: flex;
            gap: 30px;
        }
        #prev-next-btn-2 button{
            background-color: #F0F2F4;
            color:#2CB9AD;
            width: 50px;
            height: 50px;
            border: none;
            border-radius: 15px;
            font-size: 35px;
            cursor: pointer;
        }
        #prev-next-text-2{
            display: flex;
        }
        #prev-next-text-2 p{
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            letter-spacing: 0.05em;
            color: #1B1C1E;
            padding: 0 30px;
            text-align: end;
            width: 60%;
        }
        #prev-next-text-2 h2{
            font-weight: 700;
            font-size: 57px;
            line-height: 120%;
            color: rgb(27, 28, 30);
            margin-bottom: 24px;
        }
        #prev-next-text-2>div{
            position: relative;
        }
        #prev-next-text-2>div>div{
            bottom: 10px;
            position: absolute;
            width: 280px; /* Độ dài */
            height: 10px; /* Độ dày */
            background-color: #27B3AC; /* Màu xanh */
            clip-path: polygon(0% 50%, 5% 0%, 100% 0%, 100% 100%, 5% 100%);
        }

        .slide-2 img{
            width: 100%;
            height: 200px;
            border-radius: 20px;
        }
        .slide-2{
            border-radius: 20px;
            padding: 20px;
        }
        .slide-car-info-div-2{
            border-radius: 20px;
            background-color: white;
            margin-top: 20px;
            width: 100%;
            padding: 20px;
        }
        .slide-car-info-2{
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            align-items: center;
        }
        .slide-car-info-2 h1{
            font-weight: 200;
            font-size: 15px;
        }
        .slide-car-info-2 p{
            font-size: 15px;
        }
        .slide-car-info-2>p>span{
            color: #2CB9AD;
        }
        .slide-2 a{
            color: #FAFAFA !important;
            transition: all 0.5s ease-in-out;
            padding: 12px 32px;
            border: none;
            border-radius: 50px;
            background-color: #2C2D2F;
            text-decoration: none;
            margin: auto;
        }
        .slide-2 a:hover{
            transform: scale(1.025);
            outline: 2px solid #57d3c9;
            box-shadow: 4px 5px 17px -4px #2CB9AD;
            background-color: #2CB9AD;
        }
        #slide-a-2{
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }


        #vehicle-categories{
            margin-top: 100px;
            display: flex;
            margin: auto;
            gap: 50px;
            align-items: center;
            margin-left: 100px;
        }
        #vehicle-categories h2{
            font-weight: 700;
            font-size: 57px;
            line-height: 120%;
            color: #1B1C1E;
        }
        #vehicle-categories p{
            color: #1B1C1E;
            font-size: 20px;
            width: 35%;
            margin-bottom: 10px;
            line-height: 160%;
        }
        #vehicle-categories>div>div{
            margin-top: 10px;
            width: 300px;
            height: 10px;
            background-color: #2AB8B8;
            clip-path: polygon(0% 0%, 95% 0%, 100% 50%, 95% 100%, 0% 100%);
        }
        #trademark-categories{
            display: flex;
            justify-content: space-evenly;
            margin-top: 80px;
            flex-wrap: wrap;
            column-gap: 80px;
            row-gap: 40px;
            position: relative;
        }
        #trademark-categories .image-car{
            transform: skewX(-11deg) skewY(0deg);
            border-radius: 30px;
            box-shadow: 42px 42px 24px rgba(0, 0, 0, 0.01), 24px 24px 20px rgba(0, 0, 0, 0.03), 11px 11px 15px rgba(0, 0, 0, 0.04), 3px 3px 8px rgba(0, 0, 0, 0.05), 0px 0px 0px rgba(0, 0, 0, 0.05);
            position: relative;
            width: 410px;
            height: 752px;
            transition: all 0.5s ease-in-out;
            z-index: 2;
            overflow: hidden;
            display: flex;
            justify-content: center;
            flex-basis: 30%;
        }
        #trademark-categories img{
            display: inline-block;
            transform: skewX(-11deg) skewY(0deg) !important;
            border-radius: 30px;
            box-shadow: 42px 42px 24px rgba(0, 0, 0, 0.01), 24px 24px 20px rgba(0, 0, 0, 0.03), 11px 11px 15px rgba(0, 0, 0, 0.04), 3px 3px 8px rgba(0, 0, 0, 0.05), 0px 0px 0px rgba(0, 0, 0, 0.05);
            position: relative;
            width: 300% ;
            transition: all 0.5s ease-in-out;
            z-index: 2;
        }
        #trademark-categories p{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            z-index: 4;
            background-color: white;
            color: #1B1C1E;
            border: 2px solid white;
            opacity: 0;
            transition: all 1s ease;
            padding: 10px 20px;
            border-radius: 15px;
            cursor: pointer;
            font-weight: 600;
        }
        #trademark-categories .image-car:hover p{
            opacity: 1;
        }
        #trademark-categories p:hover{
            background-color: transparent;
            color: white;
        }
        #trademark-categories .image-car::after{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0);
            transition: background 0.3s ease;
            z-index: 3;
        }
        #trademark-categories .image-car:hover::after {
            background: rgba(0, 0, 0, 0.5); /* Khi hover sẽ có lớp đen mờ */
        }

        #trademark-categories .image-car>div{
            position: absolute;
            top: 0;
            left: 0;
            width: 600px;
            height: 1000px;
            background-color: red;
            z-index: 4;
            transform: skewX(-11deg) skewY(0deg);
        }
        #trademark-categories>div{
            position: relative;
        }
        #overlay1,#overlay2,#overlay3{
            width: 410px;
            height: 752px;
            background-color: #F0F2F4;
            transform: skewX(-11deg) skewY(0deg);
            border-radius: 30px;
            transition: all 0.5s ease-in-out;
            z-index: 1;
            position: absolute;
            top: 0;left: 0px;
        }
        #t-c-1:hover>#overlay1,#t-c-2:hover>#overlay2,#t-c-3:hover>#overlay3{
            transform: skewX(7deg) skewY(0deg);
        }
        #why-choose-us{
            display: flex;
            margin-top: 80px;
            justify-content: flex-end;
            margin-right: 100px;        }
        #why-choose-us p{
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            letter-spacing: 0.05em;
            color: #1B1C1E;
            padding: 0 30px;
            text-align: end;
            width: 50%;
        }
        #why-choose-us h2{
            font-weight: 700;
            font-size: 27px;
            line-height: 120%;
            color: rgb(27, 28, 30);
            margin-bottom: 24px;
        }
        #why-choose-us>div{
            position: relative;
        }
        #why-choose-us>div>div{
            right: 0;
            bottom: 10px;
            position: absolute;
            width: 280px; /* Độ dài */
            height: 10px; /* Độ dày */
            background-color: #27B3AC; /* Màu xanh */
            clip-path: polygon(0% 50%, 5% 0%, 100% 0%, 100% 100%, 5% 100%);
        }
        #why-choose-us-2{
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            padding: 0 100px;
            margin-top: 50px;
        }
        #why-choose-us-2>div{
            flex: 0 1 calc((100% - 40px) / 2);
            background-color: #F0F2F4;
            height: 170px;
            padding: 30px;
            border-radius: 40px;
        }
        #why-choose-us-2>div>div{
            border-radius: 50%;
            background-color: white;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
        }
        #why-choose-us-2 h4{
            font-weight: 600;
            font-size: 32px;
            line-height: 120%;
            color: #2C2D2F;
            margin: 0;
        }
        #newsletter{
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 250px;
            margin-top: 60px;
            margin-bottom: 70px;
            position: relative;
            background-image: url('{{ asset('storage/home/newsletter-bg.png') }}');
        }
        #newsletter-form{
            position: absolute;
            top: 50%;
            left: 55%;
            transform: translate(-50%,-50%);
            background-color:#EFF1F3;
            border-radius: 20px;
            height: 190px;
            width: 450px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #newsletter-form p{
            font-weight: 700;
            font-size: 24px;
            line-height: 120%;
            text-align: center;
            color: #2C2D2F;
            margin: 15px 0;
        }
        #newsletter-form input{
            padding: 10px 20px;
            border-radius: 30px;
            height: 50px;
            width: 80%;
            border: none;
            outline: none;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
            font-weight: 700;
        }
        #newsletter-form a{
            color: #FAFAFA !important;
            transition: all 0.5s ease-in-out;
            padding: 12px 32px;
            border: none;
            border-radius: 50px;
            background-color: #2C2D2F;
            text-decoration: none;
            margin: auto;
        }
        #newsletter-form a:hover{
            transform: scale(1.025);
            outline: 2px solid #57d3c9;
            box-shadow: 4px 5px 17px -4px #2CB9AD;
            background-color: #2CB9AD;
        }
        #newsletter-text>div{
            display: flex;
            gap: 10px;
        }
        #newsletter-text{
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;padding-left: 50px;
        }
        #newsletter-text h4{
            font-weight: 900;
            font-size: 30px;
            line-height: 120%;
            color: #FAFAFA;
        }
        #newsletter-text i{
            color: #FAFAFA;
            font-size: 55px;
        }
        #newsletter-text p{
            font-weight: 400;
            font-size: 20px;
            line-height: 120%;
            color: #F0F2F4;
            margin: 0;
        }
        #newsletter-text h5{
            font-weight: 400;
            font-size: 25px;
            line-height: 120%;
            color: #FAFAFA;
            margin-bottom: 22px;
        }
        #customer-reviews{
            margin-top: 100px;
            display: flex;
            margin: auto;
            gap: 20px;
            margin-left: 100px;
            flex-direction: column;
        }
        #customer-reviews h2{
            font-weight: 700;
            font-size: 37px;
            line-height: 120%;
            color: #1B1C1E;
        }
        #customer-reviews p{
            color: #1B1C1E;
            font-size: 17px;
            width: 28%;
            margin-bottom: 10px;
            line-height: 160%;
            text-align: end;
            font-weight: 500;
        }
        #customer-reviews>div>div{
            margin-top: 10px;
            width: 300px;
            height: 10px;
            background-color: #2AB8B8;
            clip-path: polygon(0% 0%, 95% 0%, 100% 50%, 95% 100%, 0% 100%);
        }


        #cr-container{
            margin-left: 100px;
            display: flex;
            margin-bottom: 10px;
            user-select: none;
        }
        .cr-slider-container {
            width: 540px; /* Hiển thị 3 div mỗi div rộng 180px */
            overflow: hidden;
            position: relative;
        }
        .cr-slider {
            display: flex;
            width: 2160px; /* 6 div * 180px * 2 (clone để tạo hiệu ứng lặp vô hạn) */
            transition: transform 0.5s ease-in-out;
        }
        .cr-slide {
            width: 180px;
            height: auto;
            background: #F0F2F4;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 15px;
        }

        .cr-slide img{
            width: 100%;
            height: 120px;
            border-radius: 10px;
        }
        .cr-slide{
            border-radius: 10px;
        }
        #main-content-container{
            display: flex;
            padding: 0 100px;
            align-items: center;
        }
        #img-container{
            width: 1000px;
            height: 550px;
            border-radius: 25px;
        }
        #img-container img{
            width: 100%;
            height: 100%;
            border-radius: 25px;
        }
        #div-container{
            background-color: #F0F2F4;
            height: 400px;
            width: 1000px;
            display: flex;
            align-items: center;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            padding: 20px 30px;
        }
        #div-container div{
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: -5px 0 10px rgba(0, 0, 0, 0.5);
            height: 100%;
        }
        #main-content-container h5{
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            letter-spacing: 0.05em;
            color: #1B1C1E;
            border-radius: 20px;
            display: flex;
            align-items: center;
            padding: 20px;
        }
        #div-container h3{
            font-weight: 800;
            font-size: 24px;
            line-height: 120%;
            color: #1B1C1E;
        }
        #div-container p{
            color:#2CB9AD;
            font-size: 25px;
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
            background-image: url("{{ asset('storage/home/footer-shape.png') }}");
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
                <li><a href="/" id="menu-main">Trang chủ</a></li>
                <li><a href="/car">Thuê xe</a></li>
                <li><a href="about">Về DriveLux</a></li>
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
    <div id="container">
        <div id="container-textcenter">
            <h2>Thực hiện ước mơ với <span>DriveLux</span></h2>
            <p>Trải nghiệm cảm giác hồi hộp trên con đường rộng mở với DriveLux. Lựa chọn cao cấp các loại xe sang trọng và khám phá thế giới theo phong cách. Khám phá trải nghiệm lái xe đỉnh cao.</p>
            <div>
                <a href="#">Khám phá</a>
                <a href="#">Đăng ký</a>
            </div>
        </div>
        <div id="container-textleft">
            <h4>Ferrari 250 GTO</h4>
            <p>Trải nghiệm Ferrari 250 GTO Đặt chuyến phiêu lưu ngay</p>
        </div>
        <div id="car-image">
            <img id="car-image" src="{{ asset('storage/home/car-image.png') }}" alt="Logo">
        </div>
    </div>
    <img id="arrow-line" src="{{ asset('storage/home/arrow-line.png') }}" alt="arrow-line">
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
            <button class="btn prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="btn next" onclick="moveSlide(1)">&#10095;</button>
        </div>
        <div id="prev-next-text">
            <p>Lựa chọn cẩn thận, những gì tốt nhất cho một chuyến đi khó quên</p>
            <div>
                <h2>the most beautiful</h2>
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
    <div id="how-to-book">
        <div>
            <h2>Cách để đặt xe</h2>
            <div></div>
        </div>
        <p>Quy trình đặt xe dễ dàng, nhận ngay chiếc xe mơ ước của bạn chỉ trong vài phút</p>
    </div>
    <div id="book-area">
        <div class="book-area-1">
            <h5>Bước 1:</h5>
            <p>Chọn xe bạn thích</p>
        </div>
        <div class="book-area-2">
            <img src="{{ asset('storage/home/arrow-shape.png') }}" alt="car">
            <div>
                <h5>Bước 2:</h5>
                <p>Điền vào biểu mẫu</p>
            </div>
        </div>
        <div class="book-area-3">
            <img src="{{ asset('storage/home/arrow-shape.png') }}" alt="car">
            <div>
                <h5>Bước 3:</h5>
                <p>Chọn chuyến đi của bạn</p>
            </div>
        </div>
        <div class="book-area-4">
            <img src="{{ asset('storage/home/car-how-to-book.png') }}" alt="car">
        </div>
    </div>

    <div id="prev-next-2">
        <div id="prev-next-btn-2">
            <button class="btn-2 prev-2" onclick="moveSlide2(-1)">&#10094;</button>
            <button class="btn-2 next-2" onclick="moveSlide2(1)">&#10095;</button>
        </div>
        <div id="prev-next-text-2">
            <p>Tìm chuyến đi lí tưởng của bạn, khám phá những chiếc xe được đánh giá cao nhất của chúng tôi</p>
            <div>
                <h2>Top Picks</h2>
                <div></div>
            </div>
        </div>
    </div>
    <div id="slider-container-center-2">
        <div class="slider-container-2">
            <div id="slider-2" class="slider-2">
                @foreach ($carTopRating as $car)
                <div class="slide-2">
                    <img src="{{ asset('storage/' . $car->image_url) }}" alt="{{ $car->name }}">
                    <div class="slide-car-info-div-2">
                        <div class="slide-car-info-2">
                            <h1>Thương hiệu</h1>
                            <p id="trademark-2">{{$car->trademark}}</p>
                        </div>
                        <div class="slide-car-info-2">
                            <h1>Tên xe</h1>
                            <p id="name-2">{{$car->name}}</p>
                        </div>
                        <div class="slide-car-info-2">
                            <h1>Giá thuê</h1>
                            <p><span>{{ number_format($car->price_per_day, 0, ',', '.') }} VND/Ngay</span></p>
                        </div>
                        <div class="slide-car-info-2">
                            <h1>Số chỗ ngồi</h1>
                            <p>{{$car->seat_count}}</p>
                        </div>
                        <div class="slide-car-info-2">
                            <h1>Số lượng</h1>
                            <p>{{$car->remaining_quantity}}</p>
                        </div>
                        <div class="slide-car-info-2">
                            <h1>Đánh giá</h1>
                            <p><span>{{ $car->reviews->avg('rating') ?: 5 }}&#9733;</span></p>
                        </div>
                        <div id="slide-a-2">
                            <a href="/car/show/{{$car->id}}">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach ($carTopRating as $car)
                <div class="slide-2">
                    <img src="{{ asset('storage/' . $car->image_url) }}" alt="{{ $car->name }}">
                    <div class="slide-car-info-div-2">
                        <div class="slide-car-info-2">
                            <h1>Thương hiệu</h1>
                            <p id="trademark-2">{{$car->trademark}}</p>
                        </div>
                        <div class="slide-car-info-2">
                            <h1>Tên xe</h1>
                            <p id="name-2">{{$car->name}}</p>
                        </div>
                        <div class="slide-car-info-2">
                            <h1>Giá thuê</h1>
                            <p><span>{{ number_format($car->price_per_day, 0, ',', '.') }} VND/Ngay</span></p>
                        </div>
                        <div class="slide-car-info-2">
                            <h1>Số chỗ ngồi</h1>
                            <p>{{$car->seat_count}}</p>
                        </div>
                        <div class="slide-car-info-2">
                            <h1>Số lượng</h1>
                            <p>{{$car->remaining_quantity}}</p>
                        </div>
                        <div class="slide-car-info-2">
                            <h1>Đánh giá</h1>
                            <p><span>{{ $car->reviews->avg('rating') ?: 5 }}&#9733;</span></p>
                        </div>
                        <div id="slide-a-2">
                            <a href="/car/show/{{$car->id}}">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="vehicle-categories">
        <div>
            <h2>Hãng xe</h2>
            <div></div>
        </div>
        <p>Khám phá một vài mẫu xe hot của chúng tôi, hoàn toàn phù hợp cho nhu cầu du lịch của bạn</p>
    </div>
    <div id="trademark-categories">
        <div id="t-c-1">
            <div class="image-car"><img src="{{ asset('storage/home/car-image-7.png') }}" alt="car"><p>SUV</p></div>
            <div id="overlay1"></div>
        </div>
        <div id="t-c-2">
            <div class="image-car"><img src="{{ asset('storage/home/car-image-9.png') }}" alt="car"><p>Sedan</p></div>
            <div id="overlay2"></div>
        </div>
        <div id="t-c-3">
            <div class="image-car"><img src="{{ asset('storage/home/car-image-8.png') }}" alt="car"><p>Sports</p></div>
            <div id="overlay3"></div>
        </div>
    </div>
    <div id="why-choose-us">
        <p>Khám phá Ưu điểm của DriveLux: Dịch vụ vô song & Trải nghiệm khó quên đang chờ đón</p>
        <div>
            <h2>Tại sao nên chọn chúng tôi</h2>
            <div></div>
        </div>
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
    <div id="newsletter">
        <div id="newsletter-text">
            <div>
                <i class='bx bx-phone'></i>
                <h4>0123 456 789</h4>
            </div>
            <h5>Gọi chúng tôi</h5>
            <p>Chúng tôi luôn sẵn sàng giúp bạn</p>
        </div>
        <div id="newsletter-form">
            <p>Cập nhật email của bạn</p>
            <input type="email" placeholder="Email">
            <a href="#">Đăng ký</a>
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

        //slider-2
        let index2 = 0;
        const totalSlides2 = 6;
        const visibleSlides2 = 3;
        const slider2 = document.getElementById('slider-2');
        let autoSlide2 = setInterval(() => moveSlide2(1), 5000);
        let isDragging2 = false;
        let startX2;

        function moveSlide2(direction2) {
            index2 += direction2;
            if (index2 > totalSlides2) {
                index2 = 1;
                slider2.style.transition = 'none';
                slider2.style.transform = `translateX(0px)`;
                setTimeout(() => {
                    slider2.style.transition = 'transform 0.5s ease-in-out';
                    slider2.style.transform = `translateX(${-index2 * 400}px)`;
                }, 50);
                return;
            }
            if (index2 < 0) {
                index2 = totalSlides2 - 1;
                slider2.style.transition = 'none';
                slider2.style.transform = `translateX(${-totalSlides2 * 400}px)`;
                setTimeout(() => {
                    slider2.style.transition = 'transform 0.5s ease-in-out';
                    slider2.style.transform = `translateX(${-index2 * 400}px)`;
                }, 50);
                return;
            }
            slider2.style.transform = `translateX(${-index2 * 400}px)`;
            resetAutoSlide2();
        }

        function resetAutoSlide2() {
            clearInterval(autoSlide2);
            autoSlide2 = setInterval(() => moveSlide2(1), 5000);
        }

        slider2.addEventListener('mousedown', (e) => {
            isDragging2 = true;
            startX2 = e.pageX;
        });

        slider2.addEventListener('mousemove', (e) => {
            if (!isDragging2) return;
            let moveX2 = e.pageX - startX2;
            if (moveX2 > 50) {
                moveSlide2(-1);
                isDragging2 = false;
            }
            if (moveX2 < -50) {
                moveSlide2(1);
                isDragging2 = false;
            }
        });

        slider2.addEventListener('mouseup', () => isDragging2 = false);
        slider2.addEventListener('mouseleave', () => isDragging2 = false);

        //Customer reviews
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
