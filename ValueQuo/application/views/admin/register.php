<!DOCTYPE html>
<html lang="en-us" id="extr-page" ng-app="Shipment">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" type="text/css" media="screen" href="<?= ADMINASSETS ?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?= ADMINASSETS ?>css/font-awesome.min.css">
        <!-- Shipment Styles : Caution! DO NOT change the order -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?= ADMINASSETS ?>css/smartadmin-production-plugins.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?= ADMINASSETS ?>css/smartadmin-production.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?= ADMINASSETS ?>css/smartadmin-skins.min.css">
        <!-- Shipment RTL Support -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?= ADMINASSETS ?>css/smartadmin-rtl.min.css"> 
        <!-- We recommend you use "your_style.css" to override Shipment
             specific styles this will also ensure you retrain your customization with each Shipment update.
        --><link rel="stylesheet" type="text/css" media="screen" href="<?= ADMINASSETS ?>css/your_style.css"> 
        <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?= ADMINASSETS ?>css/demo.min.css">
        <!-- #FAVICONS -->
        <link rel="shortcut icon" href="<?= ADMINASSETS ?>img/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= ADMINASSETS ?>img/favicon/favicon.ico" type="image/x-icon">
        <!-- #GOOGLE FONT -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
        <!-- #APP SCREEN / ICONS -->
        <!-- Specifying a Webpage Icon for Web Clip 
                 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
        <link rel="apple-touch-icon" href="<?= ADMINASSETS ?>img/splash/sptouch-icon-iphone.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= ADMINASSETS ?>img/splash/touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= ADMINASSETS ?>img/splash/touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= ADMINASSETS ?>img/splash/touch-icon-ipad-retina.png">
        <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <!-- Startup image for web apps -->
        <link rel="apple-touch-startup-image" href="<?= ADMINASSETS ?>img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
        <link rel="apple-touch-startup-image" href="<?= ADMINASSETS ?>img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
        <link rel="apple-touch-startup-image" href="<?= ADMINASSETS ?>img/splash/iphone.png" media="screen and (max-device-width: 320px)">
     
    </head>
    <body id="login">
        <header id="header">
                <!--<span id="logo"></span>-->
            <div id="logo-group">
                <span id="logo"> <img src="<?= ADMINASSETS ?>img/logo.png" alt="Shipment"> </span>
                <!-- END AJAX-DROPDOWN -->
            </div>
            <span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Already registered?</span> <a href="<?php echo site_url('auth/login') ?>" class="btn btn-danger">Sign In</a> </span>
        </header>
        <div id="main" role="main">
            <!-- MAIN CONTENT -->
            <div id="content" class="container">
                <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
                        <h1 class="txt-color-red login-header-big">ValueQuo</h1>
                        <div class="hero">
                            <div class="pull-left login-desc-box-l">
                                <h4 class="paragraph-header">It's Okay to be Smart. Experience the simplicity of ValueQuo, everywhere you go!</h4>
                                <div class="login-app-icons">
                                    
                                </div>
                            </div>
                            <img src="<?= ADMINASSETS ?>img/add.png" class="pull-right display-image" alt="" style="width:210px">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h5 class="about-heading">About ValueQuo - Are you up to date?</h5>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h5 class="about-heading">Not just your average template!</h5>
                                <p>
                                    Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi voluptatem accusantium!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="well no-padding">
                            <form  id="smart-form-register" class="smart-form client-form" name="myForm" method="post" ng-submit="signUp()" novalidate >
                                <header>
                                    Registration is FREE*
                                </header>
                                <fieldset>
                                    <section>
                                        <label class="input"> <i class="icon-append fa fa-user"></i>
                                            <input type="text" name="username" placeholder="Username" ng-model="signup.username">
                                            <b class="tooltip tooltip-bottom-right">Needed to enter the Username</b> </label>
                                    </section>
                                    <section>
                                        <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Email Address" id="email"  ng-model="signup.email"  ng-pattern = "/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i" ng-change="checkUniqueness(signup.email)" required>
                                            <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
                                        <span class="error" ng-cloak ng-show="myForm.email.$error.pattern && myForm.email.$touched" style="color:red">Invalid email</span>
                                        <span class="error" style="color:red;" id="already_exist"></span>
                                    </section>
                                    <section>
                                        <label class="input"> <i class="icon-append fa fa-lock"></i>
                                            <input type="password" name="password" placeholder="Password" id="password" ng-model="signup.password" maxlength="12" minlength = "6" required>
                                            <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                                        <span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid">
                                            <span ng-cloak ng-show="myForm.password.$error.minlength || myForm.password.$error.maxlength && myForm.email.password">Password should be minimum 6 character or maximum 12 characters.</span>
                                        </span>
                                    </section>
                                    <section>
                                        <label class="input"> <i class="icon-append fa fa-lock"></i>
                                            <input type="password" name="passwordConfirm" placeholder="Confirm Password" id="password_confirmation" ng-model="signup.confirm_password" ng-pattern = "signup.password" required>
                                            <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                                        <span class="error" ng-cloak ng-show="myForm.passwordConfirm.$error.pattern" style="color:red"> Passwords don't match.</span>
                                    </section>
                                    <section>
                                        <label class="input"> <i class="icon-append fa fa-phone"></i>
                                            <input type="text" name="phone" placeholder="Mobile Number" id="mobile_number" maxlength="10" ng-model="signup.mobile" allow-only-numbers required>
                                            <b class="tooltip tooltip-bottom-right">Needed to verify your Mobile Number</b> </label>
                                    </section>
                                </fieldset>
                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input">
                                                <input type="text" name="f_name" placeholder="First Name" id="first_name" ng-model="signup.first_name">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input">
                                                <input type="text" name="l_name" placeholder="Last Name" id="last_name" ng-model="signup.last_name">
                                            </label>
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="select">
                                                <select name="gender" ng-model="signup.gender" required>
                                                    <option value="" selected="selected">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select> <i></i> </label>
                                        </section>
<!--                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="request" placeholder="Request activation on" class="datepicker" data-dateformat='dd/mm/yy'>
                                            </label>
                                        </section>-->
                                    </div>
                                </fieldset>
                                <footer>
                                    <button type="submit"  id="sub_btn" class="btn btn-primary">
                                        Register
                                    </button>
                                </footer>
                                <div class="message" style="text-align: center;">
                                    <i class="fa fa-check"></i>
                                    <p>
                                        Thank you for your registration!
                                    </p>
                                </div>
                            </form>
                        </div>
                        <p class="note text-center">*FREE Registration ends on October 2015.</p>
<!--                        <h5 class="text-center">- Or sign in using -</h5>
                        <ul class="list-inline text-center">
                            <li>
                                <a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
        <script data-pace-options='{ "restartOnRequestAfter": true }' src="<?= ADMINASSETS ?>js/plugin/pace/pace.min.js"></script>
        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
        <script src="<?= ADMINASSETS ?>/js/jquery.min.js"></script>
        <script>
                                                    if (!window.jQuery) {
                                                        document.write('<script src="<?= ADMINASSETS ?>js/libs/jquery-2.1.1.min.js"><\/script>');
                                                    }
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
                                                    if (!window.jQuery.ui) {
                                                        document.write('<script src="<?= ADMINASSETS ?>js/libs/jquery-ui-1.10.3.min.js"><\/script>');
                                                    }
        </script>
        <!-- IMPORTANT: APP CONFIG -->
        <script src="<?= ADMINASSETS ?>js/app.config.js"></script>

        <!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
        <script src="<?= ADMINASSETS ?>js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

        <!-- BOOTSTRAP JS -->		
        <script src="<?= ADMINASSETS ?>js/bootstrap/bootstrap.min.js"></script>

        <!-- JQUERY VALIDATE -->
        <script src="<?= ADMINASSETS ?>js/plugin/jquery-validate/jquery.validate.min.js"></script>

        <!-- JQUERY MASKED INPUT -->
        <script src="<?= ADMINASSETS ?>js/plugin/masked-input/jquery.maskedinput.min.js"></script>

        <!-- MAIN APP JS FILE -->
        <script src="<?= ADMINASSETS ?>js/app.min.js"></script>
        <!--Angular Js Scripts Start-->
        <script  type="text/javascript" src="<?= ANGULARURL ?>bower_components/tinymce/tinymce.min.js"></script>
        <script  type="text/javascript" src="<?= ANGULARURL ?>bower_components/angular/angular.min.js"></script>
        <script  type="text/javascript" src="<?= ANGULARURL ?>angular-ui.min.js"></script>
        <script  type="text/javascript" src="<?= ANGULARURL ?>bower_components/angularjs-datepicker/src/js/angular-datepicker.js"></script>
        <link rel="stylesheet" href="<?= ANGULARURL ?>bower_components/angularjs-datetime-picker/angularjs-datetime-picker.css" />
        <script  type="text/javascript" src="<?= ANGULARURL ?>bower_components/angularjs-datetime-picker/angularjs-datetime-picker.js"></script>
        <script  type="text/javascript" src="<?= ANGULARURL ?>jquery.placepicker.js"></script>
        <script  type="text/javascript" src="<?= ANGULARURL ?>ui-bootstrap.js"></script>
        <script type="text/javascript" src="<?= ANGULARURL ?>angular-route.js"></script>
        <script type="text/javascript" src="<?= ANGULARURL ?>angular-animate.js"></script>
        <script type="text/javascript" src="<?= ANGULARURL ?>angular-sanitize.js"></script>
        <script  type="text/javascript" src="<?= ANGULARURL ?>bower_components/angular-ui-tinymce/dist/tinymce.min.js"></script>
        <script  type="text/javascript" src="<?= ANGULARURL ?>admin.control.js"></script>
        <script  type="text/javascript" src="<?= ANGULARURL ?>services.js"></script>

        <!--Angular Js Scripts End-->

        <script type="text/javascript">
                                                    runAllForms();

                                                    // Model i agree button
                                                    $("#i-agree").click(function () {
                                                        $this = $("#terms");
                                                        if ($this.checked) {
                                                            $('#myModal').modal('toggle');
                                                        } else {
                                                            $this.prop('checked', true);
                                                            $('#myModal').modal('toggle');
                                                        }
                                                    });


                                                    var site_url = "<?= site_url() ?>";
                                                    var base_url = "<?= base_url() ?>";
                                                    var oTable = null;
        </script>
        <script language="javascript">
            $(document).ready(function () {

                //restrict numbers and special characters in first_name

                $("#first_name").bind("keypress", function (event) {
                    var charCode = event.which;
                    if (charCode === 8 || charCode === 0) {
                        return;
                    }
                    else {
                        var keyChar = String.fromCharCode(charCode);
                        return /[a-zA-Z]/.test(keyChar);
                    }
                });

                //restrict numbers and special characters in last_name
                $("#last_name").bind("keypress", function (event) {
                    var charCode = event.which;
                    if (charCode === 8 || charCode === 0) {
                        return;
                    }
                    else {
                        var keyChar = String.fromCharCode(charCode);
                        return /[a-zA-Z]/.test(keyChar);
                    }
                });

                $("#password_confirmation").change(function () {
                    if ($(this).val() !== $("#password").val()) {
                        alert("Password do not match");
                    }
                });

            });
        </script>
    </body>
</html>

