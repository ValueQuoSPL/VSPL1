<!DOCTYPE html>
<html lang="en-us" id="extr-page" >

    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- #CSS Links -->
        <!-- Basic Styles -->
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
    <?php
    if ($this->session->flashdata('forgotp')) {
        ?>
        <center>
            <div class="alert alert-success fade in ">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php echo $this->session->flashdata('forgotp'); ?>
            </div>
        </center>
    <?php } ?>
    <?php
    if ($this->session->flashdata('resetPasswordonheader')) {
        ?>
        <center>
            <div class="alert alert-success fade in ">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php echo $this->session->flashdata('resetPasswordonheader'); ?>
            </div>
        </center>
    <?php } ?>
    <body class="animated fadeInDown">
        <header id="header">
            <div id="logo-group">
                <span id="logo"> <img src="<?= USERASSETS ?>img/newlogo.png" alt="Shipment"> </span>
            </div>
            <span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Need an account?</span> <a href="<?php echo site_url('register') ?>" class="btn btn-danger">Create account</a> </span>
        </header>

        <div  id="main" role="main">
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
                            <img src="<?= ADMINASSETS ?>img/login.png" class="pull-right display-image" alt="" style="width:210px">
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
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                        <div class="well no-padding">
                            <?php
                            $attrib = array('data-toggle' => 'validator', 'class' => 'smart-form client-form', 'id' => "login-form", 'role' => 'form');
                            echo form_open(site_url() . "auth/login", $attrib);
                            ?>
                            <!--<form action="index.html" id="login-form" class="smart-form client-form">-->
                            <header>
                                Sign In
                            </header>
                            <fieldset>
                                <section>
                                    <label class="label">Email Id</label>
                                    <label class="input"> <i class="icon-append fa fa-user"></i>
                                        <!--<input type="email" name="email">-->
                                        <?php echo form_input($identity); ?>
                                        <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal">
                                            </i> Please enter email address</b></label>
                                </section>
                                <section>
                                    <label class="label">Password</label>
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        <?php echo form_input($password); ?>
                                        <!--<input type="password" name="password">-->
                                        <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
                                    <div class="note">
                                        <a href="#" data-toggle="modal" data-target="#forgotPasswordModal">Forgot password?</a>


                                    </div>
                                </section>
                                <section>
                                    <label id="infoMessage" class="label">
                                        <i><?php echo $message; ?></i>
                                    </label>
                                </section>
                            </fieldset>
                            <footer>
                                <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary"'); ?>
                                <?php echo form_close(); ?>
                                <!--                                    <button type="submit" class="btn btn-primary">
                                                                        Sign in
                                                                    </button>-->
                            </footer>
                        </div>
<!--                        <h5 class="text-center"> - Or sign in using -</h5>
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
        <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" style="font-size:30px;margin-right:10px;color:rgb(39,91,137)" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>  
                        <center>
                            <h1 class="f1" style="color:rgb(39,91,137);"><b>Forgot Password</b></h1>
                        </center>

                    </div>
                    <div class="modal-body no-padding">

                        <form id="login-form" class="smart-form" method="post" action="<?= BASEURL ?>getForgotPassword">


                            <fieldset>

                                <section>
                                    <label class="label">Enter your email address</label>
                                    <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Email" required>
                                        <b class="tooltip tooltip-top-right"><i class="fa fa-envelope txt-color-teal"></i> Please enter email address for password reset</b></label>
                                </section>

                            </fieldset>
                            <footer>

                                <button type="submit" class="btn btn-primary">
                                    Go
                                </button>
                            </footer>


                        </form>						

                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!--================================================== -->	
        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
        <script src="<?= ADMINASSETS ?>js/plugin/pace/pace.min.js"></script>
        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script> if (!window.jQuery) {
                document.write('<script src="<?= ADMINASSETS ?>js/libs/jquery-2.1.1.min.js"><\/script>');
            }</script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script> if (!window.jQuery.ui) {
                document.write('<script src="<?= ADMINASSETS ?>js/libs/jquery-ui-1.10.3.min.js"><\/script>');
            }</script>
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
        <!--[if IE 8]>
                <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
        <![endif]-->
        <!-- MAIN APP JS FILE -->
        <script src="<?= ADMINASSETS ?>js/app.min.js"></script>
        <script type="text/javascript">
            runAllForms();
            $(function () {
                // Validation
                $("#login-form").validate({
                    // Rules for form validation
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true,
                            minlength: 3,
                            maxlength: 20
                        }
                    },
                    // Messages for form validation
                    messages: {
                        email: {
                            required: 'Please enter your email address',
                            email: 'Please enter a VALID email address'
                        },
                        password: {
                            required: 'Please enter your password'
                        }
                    },
                    // Do not change code below
                    errorPlacement: function (error, element) {
                        error.insertAfter(element.parent());
                    }
                });
            });
        </script>
    </body>
</html>