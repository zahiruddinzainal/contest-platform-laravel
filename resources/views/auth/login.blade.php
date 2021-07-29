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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="public/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

    @import url('https://fonts.googleapis.com/css?family=Poppins');

    /* BASIC */

    html {
        background-color: #fff;
    }

    body {
        font-family: "Poppins", sans-serif;
        height: 100vh;
    }

    a {
        color: #92badd;
        display: inline-block;
        text-decoration: none;
        font-weight: 400;
    }

    h2 {
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        display: inline-block;
        margin: 40px 8px 10px 8px;
        color: #cccccc;
    }



    /* STRUCTURE */

    .wrapper {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 20px;
    }

    #formContent {
        -webkit-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
        background: #fff;
        padding: 30px;
        width: 90%;
        max-width: 450px;
        position: relative;
        padding: 0px;
        -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
        box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    #formFooter {
        background-color: #f6f6f6;
        border-top: 1px solid #dce8f1;
        padding: 25px;
        text-align: center;
        -webkit-border-radius: 0 0 10px 10px;
        border-radius: 0 0 10px 10px;
    }



    /* TABS */

    h2.inactive {
        color: #cccccc;
    }

    h2.active {
        color: #0d0d0d;
        border-bottom: 2px solid #1e1e1e;
    }



    /* FORM TYPOGRAPHY*/

    input[type=button],
    input[type=submit],
    input[type=reset] {
        background-color: #1e1e1e;
        border: none;
        color: white;
        padding: 15px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover,
    input[type=submit]:hover,
    input[type=reset]:hover {
        background-color: #39ace7;
    }

    input[type=button]:active,
    input[type=submit]:active,
    input[type=reset]:active {
        -moz-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        -o-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
    }

    input[type=text] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }


    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @-moz-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fadeIn {
        opacity: 0;
        -webkit-animation: fadeIn ease-in 1;
        -moz-animation: fadeIn ease-in 1;
        animation: fadeIn ease-in 1;

        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        animation-duration: 1s;
    }

    .fadeIn.first {
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .fadeIn.second {
        -webkit-animation-delay: 0.6s;
        -moz-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .fadeIn.third {
        -webkit-animation-delay: 0.8s;
        -moz-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }

    .fadeIn.fourth {
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
    }

    /* Simple CSS3 Fade-in Animation */
    .underlineHover:after {
        display: block;
        left: 0;
        bottom: -10px;
        width: 0;
        height: 2px;
        background-color: #1e1e1e;
        content: "";
        transition: width 0.2s;
    }

    .underlineHover:hover {
        color: #1e1e1e;
    }

    .underlineHover:hover:after {
        width: 100%;
    }

    *:focus {
        outline: none;
    }

    #icon {
        width: 60%;
    }

    * {
        box-sizing: border-box;
    }
    </style>

</head>

<body>
    <nav>
    <ul class="mt-3">
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Refer To Friends</a></li>

            @guest
            @if (Route::has('login'))
            <li><a href="login">Login</a></li>
            <li><a href="register">Register</a></li>
            @endif
            @else
            <li><a href="profile">{{Auth::user()->email}}</a></li>
            @endguest
            <li><a href="#">How To Enter</a></li>
            <li><a href="https://instagram.com/mfmirafilzah"><i class="fa fa-instagram" style="margin-right: 20px;"
                        aria-hidden="true"></i></a><a href="https://facebook.com/mfmirafilzah"><i class="fa fa-facebook"
                        style="margin-right: 20px;" aria-hidden="true"></i></a><a
                    href="https://twitter.com/mfmirafilzah"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

        </ul>
    </nav>

    <div class="container-fluid px-0">
        <div class="row mx-0">
            <div class="col-12 px-0">
                <div class="centered">
                    <section class="welcome" style="margin-top: 600px;">
                        <div class="wrapper fadeInDown">
                            <div id="formContent">

                                <h2 class="active underlineHover">Login</h2>

                                <form class="mt-3" method="POST" action="{{ route('login.custom') }}">
                                    @csrf

                                    <input type="text" placeholder="Email" id="email" name="email"
                                        style="text-align: left;" required autofocus>

                                    <input type="text" placeholder="Password" id="password" style="text-align: left;"
                                        name="password" required>

                                    <input type="submit" class="fadeIn fourth mt-4" value="Login">

                                    <a href="./register" style="margin-bottom: 30px;">No account yet? Register here</a>

                                </form>
                                <!-- 
                                <form method="POST" action="{{ route('login.custom') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Email" id="email" class="form-control"
                                            name="email" required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Password" id="password" class="form-control"
                                            name="password" required>
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>

                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-dark btn-block">Login</button>
                                    </div>
                                </form> -->

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


</body>

</html>