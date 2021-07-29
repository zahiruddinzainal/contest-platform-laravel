<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Page title</title>
    <link rel="stylesheet" href="public/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="public/assets/vendors/aos/dist/aos.css/aos.css" />
    <link rel="stylesheet" href="public/assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="public/assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css" />
    <link rel="shortcut icon" href="public/assets/images/favicon.png" />
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <h1 class="text-center mt-5">
                                Add new contest
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="contact-wrap">
                    <div class="row">
                        <div class="col-lg-12  mb-5 mb-sm-2">
                            <form method="post" action="{{ url('addcontest') }}" enctype="multipart/form-data">
                                @csrf



                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input class="form-control" name="title" placeholder="Contest title"
                                                required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input class="form-control" name="desc" placeholder="Contest description"
                                                required />

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input class="form-control" name="desc" placeholder="Contest prizes"
                                                required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="month" value="2021-01" class="form-control"
                                                placeholder="eg: June 2017" name="start" required>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="month" value="2021-01" class="form-control" name="end"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="file" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit"class="btn btn-lg btn-dark font-weight-bold">Add contest</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="border-top"></div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="footer-vertical-nav">
                            <li class="menu-title"><a href="pages/news-post.html">Home</a></li>
                            <li><a href="index.html">Contests</a></li>
                            <li><a href="pages/world.html">Prizes</a></li>
                            <li><a href="pages/author.html">Important dates</a></li>
                            <li><a href="pages/business.html">Join now</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="footer-vertical-nav">
                            <li class="menu-title"><a href="pages/world.html">Contests</a></li>
                            <li><a href="pages/sports.html">All contests</a></li>
                            <li><a href="pages/art.html">Contests info</a></li>
                            <li><a href="#">Post a contest</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="footer-vertical-nav">
                            <li class="menu-title"><a href="#">Winners</a></li>
                            <li><a href="#">All winners</a></li>
                            <li><a href="#">Winners by contests</a></li>
                            <li><a href="pages/news-post.html">Winners by month</a></li>
                            <li><a href="#">Winners gallery</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="footer-vertical-nav">
                            <li class="menu-title"><a href="#">How to claim?</a></li>
                            <li><a href="#">Contact support</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="pages/aboutus.html">About us</a></li>
                            <li><a href="pages/contactus.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex justify-content-between">
                            <img src="assets/images/logo.svg" class="footer-logo" alt="" />

                            <div class="d-flex justify-content-end footer-social">
                                <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>
                                <ul class="social-media">
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom">
                            <ul class="footer-horizontal-menu">
                                <li><a href="#">Terms of Use.</a></li>
                                <li><a href="#">Privacy Policy.</a></li>
                                <li><a href="#">Accessibility & CC.</a></li>
                                <li><a href="#">AdChoices.</a></li>
                                <li><a href="#">Advertise with us Transcripts.</a></li>
                                <li><a href="#">License.</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                            <p class="font-weight-medium">
                                © 2021 <a href="https://www.bootstrapdash.com/" target="_blank" class="text-dark">@
                                    iContest.my</a>All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- partial -->
    </div>
    </div>
    <!-- inject:js -->
    <script src="public/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="public/assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="public/assets/js/demo.js"></script>
    <!-- End custom js for this page-->
</body>

</html>