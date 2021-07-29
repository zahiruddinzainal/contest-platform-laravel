<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page title</title>
    <link rel="stylesheet" href="public/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="public/assets/vendors/aos/dist/aos.css/aos.css" />
    <link rel="stylesheet" href="public/assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="public/assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css" />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="public/assets/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="public/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'roboot', sans-serif;
        text-decoration: none;
        scroll="no"style="overflow: hidden"
    }

    html {
        overflow: scroll;
        overflow-x: hidden;
    }

    ::-webkit-scrollbar {
        width: 0;
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background: #FF0000;
    }

    ::-moz-selection {
        color: white;
        background: black;
    }

    ::selection {
        color: white;
        background: black;
    }

    nav {
        width: 100%;
        height: 48px;
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    nav ul {
        list-style: none;
        display: flex;
    }

    nav ul li {
        margin: 0 40px;
    }

    nav ul li a {
        font-weight: 300;
        color: #adadad;
        transition: 600ms;
    }

    nav ul li a:hover {
        color: #f5f5f7;
    }

    .welcome h1 {
        color: #fff;
        font-weight: 300;
        font-size: 2rem;
    }

    .container {
        width: 1070px;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    </style>
</head>

<body>
    <nav>
        <ul class="mt-3">
            <li><a href="#"><i class="fab fa-apple"></i></a></li>
            <li><a href="#">Mac</a></li>
            <li><a href="#">iPad</a></li>
            <li><a href="#">iPhone</a></li>
            <li><a href="#">Watch</a></li>
            <li><a href="#">My Contests</a></li>
            @guest
            @if (Route::has('login'))
            <li><a href="login">Login</a></li>
            <li><a href="register">Register</a></li>
            @endif
            @else
            <li><a href="profile">{{Auth::user()->name}}</a></li>
            @endguest

            <li><a href="#"><i class="fas fa-search"></i></a></li>
            <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
        </ul>
    </nav>
    <div class="container-fluid px-0 mt-5">
        <div class="row m-5">
            <h3 >Contests I have joined</h3>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>Contest title</th>
                        <th>Date joined</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$y->title}}</td>
                        <td>{{$x->created_at}}</td>
                        <td>pending</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



</body>

</html>