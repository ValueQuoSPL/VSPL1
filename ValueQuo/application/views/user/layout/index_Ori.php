<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= BASEURL ?>assets/user/img/misc/favicon.png">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta property="og:url"           content="" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="ValueQuo" />
        <meta property="og:description"   content="ValueQuo - Smart Business" />
        <meta property="og:image"         content="assets/user/img/newlogo.png" />
        <title> ValueQuo</title>
        <base href="<?= BASEURL ?>"/>
        <!-- Bootstrap Core CSS-->
        <link href="<?= BASEURL ?>assets/user/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS-->
        <link href="<?= BASEURL ?>assets/user/css/universal.css" rel="stylesheet">
        <link href="<?= BASEURL ?>assets/user/css/vegas.min.css" rel="stylesheet">
        <script src="<?= BASEURL ?>/assets/user/js/AngularformsApp.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-resource.js"></script>
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
                    <a ng-href="./" class="navbar-brand page-scroll">
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
                            <a ng-href="./home" ng-click="activeMenu = 'home'">Home</a>
                        </li>
                        <li ng-class="{active : activeMenu === 'aboutus'}">
                            <a ng-href="./aboutus" ng-click="activeMenu = 'aboutus'">About Us</a>
                        </li>
                        <li ng-class="{active : activeMenu === 'myservices'}">
                            <a  ng-href="./myservices" ng-click="activeMenu = 'myservices'">Our Services</a>
                        </li>
                        <li ng-class="{active : activeMenu === 'contactus'}">
                            <a  ng-href="./contactus" ng-click="activeMenu = 'contactus'">Contact Us</a>
                        </li>
                        <li ng-class="{active : activeMenu === 'blogs'}">
                            <a  ng-href="./blogs" ng-click="activeMenu = 'blogs'">Blogs</a>
                        </li>
                       <!-- <li ng-class="{active : activeMenu === 'login'}">
                            <a  ng-href="./login" ng-click="activeMenu = 'login'"><i class="fa fa-sign-in"></i> Login</a>
                        </li>-->
                        <li>
                            <div id="google_translate_element"></div> 
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
       
        <div class="ng-view" autoscroll="true">

        </div>
        <!-- Footer Section-->
        <section class="section-small footer bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h5>About</h5>
                        <p>Thanks for choosing ValueQuo as your trusted partner. ValueQuo team is always keen to support and go out of way to ensure your success. We value our relationship and hope for a long term relationship.</p>
                    </div>
                    <div class="col-sm-2 col-sm-offset-1 footer-menu">
                        <h5>Company</h5>
                        <h6 class="no-pad"><a href="home">Home</a></h6>
                        <h6 class="no-pad"><a href="myservices">Our Services</a></h6>
                        <h6 class="no-pad"><a href="aboutus">About Us</a></h6>
                        <h6 class="no-pad"><a href="contactus">Contact Us</a></h6>
                        <h6 class="no-pad"><a href="blogs">Blogs</a></h6>
                    </div> 
                    <div class="col-sm-5 text-center">

                        <h3 class="cust-head">Subscribe</h3>
                        <h5>Sign-Up For News Updates and Alerts</h5>
                        <!-- MailChimp Signup Form - Replace the form action in the line below with your MailChimp embed action! For more information on how to do this please visit the Docs!-->
                        <form id="mc-embedded-subscribe-form"  name="subscribe"  class="form-inline subscribe-form">
                            <div class="input-group input-group-lg">
                                <input  type="email" name="email"  placeholder="Email address..." class="form-control">
                                <span class="input-group-btn">
                                    <button type="submit" name="subscribe"  class="btn btn-dark">Subscribe</button></span>
                                <div id="mce-responses"></div>
                                <div id="mce-error-response" style="display:none" class="response"></div>
                                <div id="mce-success-response" style="display:none" class="response"></div>
                            </div>
                        </form>
                        <!-- End MailChimp Signup Form--><img src="img/misc/mailchimp.png" alt="">



                    </div>
                </div>
            </div>
        </section>
        <section class="section-small footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h6>Copyright &copy; 2018 <a href=""> ValueQuo Solutions Pvt. Ltd.</a> | All rights reserved.</h6>                        
                    </div> 
                    <div class="col-sm-4 col-sm-offset-1 text-right">
                        <ul class="list-inline">
                            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-fw fa-lg"></i></a></li>
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-fw fa-lg"></i></a></li>
                            <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus fa-fw fa-lg"></i></a></li>
                            <li><a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-fw fa-lg"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5a66b8084b401e45400c4dcf/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        <!-- jQuery-->

        <script src="<?= BASEURL ?>assets/user/js/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjOupChvFGPSvUta2ptObYel6lrgNCB8s"></script>
        <script src="<?= BASEURL ?>assets/user/js/map.js"></script>
        <!-- Custom Theme JavaScript-->
        <script src="<?= BASEURL ?>assets/user/js/universal.js"></script> 
        <script type="text/javascript" src="//connect.facebook.net/en_US/all.js#xfbml=1&appId=356890211451683" id="facebook-jssdk"></script> 

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
        <script>
    $("#accordion .panel-heading").click(function () {
//            $("p").toggleClass("activeacc");
    });
        </script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
            //    Validation for email
            $("#email").focusout(function () {
                var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                var email = $('#email').val();
                var elem = jQuery.trim($("#email").val());
                if (elem.length == 0) {
                    alert('This field cannot be left blank.');
                } else {
                    if ((!email.match(email_regex))) {
                        alert('Enter valid email address.');
                        return false;
                    }
                }
            });
//    Validation for email
        </script>
        <script>
            var site_url = "<?= site_url() ?>";
            var base_url = "<?= base_url() ?>";
            var oTable = null;
            //$('.datepicker').datepicker();
        </script>
    </body>
</html>