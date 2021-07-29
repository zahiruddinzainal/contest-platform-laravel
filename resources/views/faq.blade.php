<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    @import url('https://fonts.googleapis.com/css?family=Arial:100,300,400,700&display=swap');
    
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Arial', sans-serif;
        text-decoration: none;
    }

    .faq-section {
        background: #fdfdfd;
        min-height: 100vh;
        padding: 10vh 0 0;
    }

    .faq-title h2 {
        position: relative;
        margin-bottom: 45px;
        display: inline-block;
        font-weight: 600;
        line-height: 1;
    }

    .faq-title h2::before {
        content: "";
        position: absolute;
        left: 50%;
        width: 60px;
        height: 2px;
        background: #E91E63;
        bottom: -25px;
        margin-left: -30px;
    }

    .faq-title p {
        padding: 0 190px;
        margin-bottom: 10px;
    }

    .faq {
        background: #FFFFFF;
        box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
        border-radius: 4px;
    }

    .faq .card {
        border: none;
        background: none;
        border-bottom: 1px dashed #CEE1F8;
    }

    .faq .card .card-header {
        padding: 0px;
        border: none;
        background: none;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .faq .card .card-header:hover {
        background: rgba(233, 30, 99, 0.1);
        padding-left: 10px;
    }

    .faq .card .card-header .faq-title {
        width: 100%;
        text-align: left;
        padding: 0px;
        padding-left: 30px;
        padding-right: 30px;
        font-weight: 400;
        font-size: 15px;
        letter-spacing: 1px;
        color: #3B566E;
        text-decoration: none !important;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        cursor: pointer;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .faq .card .card-header .faq-title .badge {
        display: inline-block;
        width: 20px;
        height: 20px;
        line-height: 14px;
        float: left;
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
        border-radius: 100px;
        text-align: center;
        background: #1e1e1e;
        color: #fff;
        font-size: 12px;
        margin-right: 20px;
    }

    .faq .card .card-body {
        padding: 30px;
        padding-left: 35px;
        padding-bottom: 16px;
        font-weight: 400;
        font-size: 16px;
        color: #6F8BA4;
        line-height: 28px;
        letter-spacing: 1px;
        border-top: 1px solid #F3F8FF;
    }

    .faq .card .card-body p {
        margin-bottom: 14px;
    }

    @media (max-width: 991px) {
        .faq {
            margin-bottom: 30px;
        }

        .faq .card .card-header .faq-title {
            line-height: 26px;
            margin-top: 10px;
        }
    }


    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
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
    <!-- partial:index.partial.html -->
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <!-- ***** FAQ Start ***** -->
                <div class="col-md-8 offset-md-2">

                    <div class="faq-title text-center pb-3">
                        <h2>FAQ</h2>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="faq" id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1"
                                        data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>What is Lorem Ipsum?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                                        data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span> Where does it come from?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3"
                                        data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Why do we use it?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4"
                                        data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span> Where can I get some?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5"
                                        data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span> What is Lorem Ipsum?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p> It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-6">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6"
                                        data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                        <span class="badge">6</span> Where does it come from?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                        those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                                        Malorum" by Cicero are also reproduced in their exact original form, accompanied
                                        by English versions from the 1914 translation by H. Rackham.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-7">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7"
                                        data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                        <span class="badge">7</span> Why do we use it?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                        their default model text, and a search for 'lorem ipsum' will uncover many web
                                        sites still in their infancy. Various versions have evolved over the years,
                                        sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-2.1.0.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
</body>

</html>