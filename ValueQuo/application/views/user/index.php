<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= BASEURL ?>assets/user/img/misc/favicon.png">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> Universal</title>
        <!-- Bootstrap Core CSS-->
        <link href="<?= BASEURL ?>assets/user/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS-->
        <link href="<?= BASEURL ?>assets/user/css/universal.css" rel="stylesheet">
        <link href="<?= BASEURL ?>assets/user/css/vegas.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
        <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
       
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top" ng-app="myApp">
        <!-- Preloader-->
        <div id="preloader">
            <div id="status"></div>
        </div>
        <!-- Navigation-->
        <nav class="navbar navbar-universal navbar-custom navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#home" class="navbar-brand page-scroll">
                       
                        <!-- Text or Image logo-->
<!--                        <img src="<?= BASEURL ?>assets/user/img/newlogo.png" alt="Logo" class="logo">
                        <img src="<?= BASEURL ?>assets/user/img/newlogo.png" alt="Logo" class="logodark">-->
                         <img src="assets/user/img/newlogo.png" alt="Logo" class="logo">
                        <img src="assets/user/img/newlogo.png" alt="Logo" class="logodark">
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul ng-controller="menucontroller" class="nav navbar-nav navbar-left" id="menuid">
                        <li class="hidden"><a href="#page-top"></a></li>
                        <li ng-class="{active : activeMenu === 'home'}">
                            <a href="#home" ng-click="activeMenu = 'home'">Home</a>
                        </li>
                        <li ng-class="{active : activeMenu === 'home'}">
                            <a href="#home" ng-click="activeMenu = 'home'">Home</a>
                        </li>
                        <li ng-class="{active : activeMenu === 'aboutus'}">
                            <a href="#aboutus" ng-click="activeMenu = 'aboutus'">About Us</a>
                        </li>
                        <li ng-class="{active : activeMenu === 'myservices'}">
                            <a href="#myservices" ng-click="activeMenu = 'myservices'">Our Services</a>
                        </li>
                        <li ng-class="{active : activeMenu === 'contactus'}">
                            <a href="#contactus" ng-click="activeMenu = 'contactus'">Contact Us</a>
                        </li>
                        <li ng-class="{active : activeMenu === 'blogs'}">
                            <a href="#blogs" ng-click="activeMenu = 'blogs'">Blogs</a>
                        </li>

                        <li class="dropdown"><a href="" class="dropdown-toggle"><i class="fa fa-search fa-lg"></i><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form method="post" class="search-form">
                                        <button type="submit" title="Search" class="search-button"><i class="fa fa-search fa-lg"></i></button>
                                        <input type="text" placeholder="SEARCH" class="form-control search-field">
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="" class="dropdown-toggle">English<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">English</a></li>
                                <li><a href="">Hindi</a></li>
                                <li><a href="">Marathi</a></li>
                            </ul>
                        </li>
                        <li ng-class="{active : activeMenu === 'login'}">
                            <a href="#login" ng-click="activeMenu = 'login'"><i class="fa fa-sign-in"></i> Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <div ng-view>
          
        </div>
        <!-- Footer Section-->
        <section class="section-small footer bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h5>About</h5>
                        <p>Thanks for choosing Universal for your next project! Universal is a unique template for building  beautiful business website. We have a dedicated support team ready to answer your questions.</p>
                    </div>
                    <div class="col-sm-2 col-sm-offset-1 footer-menu">
                        <h5>Company</h5>
                        <h6 class="no-pad"><a href="#home">Home</a></h6>
                        <h6 class="no-pad"><a href="#myservices">Our Services</a></h6>
                        <h6 class="no-pad"><a href="#aboutus">About Us</a></h6>
                        <h6 class="no-pad"><a href="#contactus">Contact Us</a></h6>
                        <h6 class="no-pad"><a href="#blogs">Blogs</a></h6>
                    </div>
                    <div class="col-sm-2 footer-menu">
                        <h5>&nbsp;</h5>
                        <h6 class="no-pad"><a href="#home">Home</a></h6>
                        <h6 class="no-pad"><a href="#myservices">Our Services</a></h6>
                        <h6 class="no-pad"><a href="#aboutus">About Us</a></h6>
                        <h6 class="no-pad"><a href="#contactus">Contact Us</a></h6>
                        <h6 class="no-pad"><a href="#blogs">Blogs</a></h6>
                    </div>
                    <div class="col-sm-3 text-right">
                        <h5>Total downloads</h5><span data-min="0" data-max="2785" data-delay="5" data-increment="3" class="numscroller">0</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-small footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h6>Powered By <a href=""> forbetterweb.com</a>
                        </h6>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <h6>We <i class="fa fa-heart fa-fw"></i> creative people
                        </h6>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1 text-right">
                        <ul class="list-inline">
                            <li><a href="/"><i class="fa fa-twitter fa-fw fa-lg"></i></a></li>
                            <li><a href="/"><i class="fa fa-facebook fa-fw fa-lg"></i></a></li>
                            <li><a href="/"><i class="fa fa-google-plus fa-fw fa-lg"></i></a></li>
                            <li><a href="/"><i class="fa fa-linkedin fa-fw fa-lg"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- jQuery-->
        <script src="<?= BASEURL ?>assets/user/js/jquery-1.12.4.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/angular.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/angular-route.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/angscript.js" type="text/javascript"></script>
        <!-- Bootstrap Core JavaScript-->
        <script src="<?= BASEURL ?>assets/user/js/bootstrap.min.js"></script>
        <!-- Plugin JavaScript-->
        <script src="<?= BASEURL ?>assets/user/js/jquery.easing.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/jquery.countdown.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/device.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/form.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/jquery.placeholder.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/jquery.shuffle.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/jquery.parallax.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/jquery.circle-progress.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/jquery.swipebox.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/smoothscroll.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/wow.min.js"></script>
        <script src="<?= BASEURL ?>assets/user/js/jquery.smartmenus.js"></script>
        <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3E86i8mx1BZDlAaLcknh_mWl4F70i4os"></script>
        <script src="<?= BASEURL ?>assets/user/js/map.js"></script>
        <!-- Custom Theme JavaScript-->
        <script src="<?= BASEURL ?>assets/user/js/universal.js"></script> 
 
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
    </body>
</html>