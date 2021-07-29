<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Futura:100,300,400,700&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Arial:100,300,400,700&display=swap');



    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Arial', sans-serif;
        text-decoration: none;
    }


    html {
        overflow: scroll;
        overflow-x: hidden;
    }

    ::-webkit-scrollbar {
        width: 0;
        /* Remove scrollbar space */
        background: transparent;
        /* Optional: just make scrollbar invisible */
    }

    /* Optional: show position indicator in red */
    ::-webkit-scrollbar-thumb {
        background: #FF0000;
    }

    ::-moz-selection {
        /* Code for Firefox */
        color: black;
        background: orange;
    }

    ::selection {
        color: black;
        background: orange;
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
            <li><a href="faq">FAQ</a></li>
            <li><a href="refer">Refer To Friends</a></li>

            @guest
            @if (Route::has('login'))
            <li><a href="login">Login</a></li>
            <li><a href="register">Register</a></li>
            @endif
            @else
            <li><a href="profile">{{Auth::user()->email}}</a></li>
            @endguest
            <li><a href="how">How To Enter</a></li>
            <li><a href="https://instagram.com/mfmirafilzah"><i class="fa fa-instagram" style="margin-right: 20px;"
                        aria-hidden="true"></i></a><a href="https://facebook.com/mfmirafilzah"><i class="fa fa-facebook"
                        style="margin-right: 20px;" aria-hidden="true"></i></a><a
                    href="https://twitter.com/mfmirafilzah"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

        </ul>
    </nav>

    <div class="container-fluid px-0">
        <div class="row mx-0">

            <div class="col-12 px-0 mt-5">
                <div class="centered">
                    <section class="welcome" style="margin-top: 100px;">
                        <h1 class="text-dark font-weight-bold">Not done yet</h1>
                    </section>
                </div>
            </div>

        </div>
    </div>


</body>

</html>