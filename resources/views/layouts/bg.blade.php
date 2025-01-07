<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <style>
        /* Global Style */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom right, #fbfdfc, #54a86f);
            background-size: contain;
            overflow: hidden;
        }


        /* Decorative Circles */
        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(30, 79, 51, 0.3);
            z-index: -1;
        }

        .circle1 {
            width: 150px;
            height: 150px;
            top: 10%;
            left: 5%;
        }

        .circle2 {
            width: 100px;
            height: 100px;
            bottom: 10%;
            right: 10%;
        }
        .circle3 {
            width: 160px;
            height: 160px;
            bottom: 15%;
            right: 10%;
        }
        .circle4 {
            width: 100px;
            height: 100px;
            bottom: 10%;
            right: 60%;
        }
        .circle5 {
            width: 150px;
            height: 150px;
            bottom: 15%;
            right: 60%;
        }
        .circle6 {
            width: 150px;
            height: 150px;
            top: 5%;
            left: 10%;
        }

        .circle7 {
            width: 125px;
            height: 125px;
            bottom: 15%;
            right: 25%;
        }
        .circle8 {
            width: 110px;
            height: 110px;
            bottom: 35%;
            right: 10%;
        }
        .circle9 {
            width: 110px;
            height: 110px;
            bottom: 30%;
            right: 60%;
        }
        .circle10 {
            width: 150px;
            height: 150px;
            bottom: 15%;
            right: 50%;
        }

        /* Content Wrapper */
        .content-wrapper {
            width: 100%;
            max-width: 600px;
            padding: 20px;
        }

        /* Card Customization */
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px 40px;
            /* Lebih banyak padding */
            width: 100%;
            max-width: 450px;
            /* Lebar card */
            margin: 20px;
        }

        .card-header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }

        /* Input Fields */
        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #48966e;
            box-shadow: 0 0 5px rgba(123, 255, 178, 0.5);
            outline: none;
        }

        /* Remember Me */
        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-check-label {
            margin-left: 5px;
            font-size: 14px;
            color: #555555;
        }

        /* Buttons */
        .btn-primary {
            background-color: #71c48d;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: #ffffff;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #6cb588;
        }

        .btn-link {
            color: #5fca8c;
            text-decoration: none;
            margin-left: 15px;
            /* Jarak antara tombol dan teks */
        }

        .btn-link:hover {
            color: #46b96e;
        }

        /* Flex Layout for Buttons */
        .button-container {
            display: flex;
            align-items: center;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .card {
                padding: 20px;
            }
        }

        /* Tombol Register di Atas Kanan */
        .top-right {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 10;
        }

        .btn-register {
            background-color: #55a26b;
            /* Warna peach */
            color: #ffffff;
            /* Teks putih */
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-register:hover {
            background-color: #589f6c;
            box-shadow: 0 4px 8px rgba(84, 211, 120, 0.4);
        }
    </style>
</head>

<body>
    <!-- Decorative Circles -->
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="circle circle3"></div>
    <div class="circle circle4"></div>
    <div class="circle circle5"></div>
    <div class="circle circle6"></div>
    <div class="circle circle7"></div>
    <div class="circle circle8"></div>
    <div class="circle circle9"></div>
    <div class="circle circle10"></div>

    <!-- Tombol Register Hanya di Halaman Login -->
    @if (Route::currentRouteName() == 'login')
        <div class="top-right">
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn-register">Register</a>
            @endif
        </div>
    @endif

    <!-- Content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
</body>

</html>
