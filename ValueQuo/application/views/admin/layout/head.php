<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <title><?php echo SITENAME ?> Admin | <?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Basic Styles -->

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMINASSETS ?>css/bootstrap.min.css">

    <link href="<?php echo ADMINASSETS ?>jstree/themes/default/style.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMINASSETS ?>css/font-awesome.min.css">
    <!-- Shipment Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMINASSETS ?>css/smartadmin-production-plugins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMINASSETS ?>css/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMINASSETS ?>css/smartadmin-skins.min.css">

    <!-- Shipment RTL Support  -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMINASSETS ?>css/smartadmin-rtl.min.css">
    <!--     We recommend you use "your_style.css" to override Shipment
             specific styles this will also ensure you retrain your customization with each Shipment update.-->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMINASSETS ?>css/your_style.css"> 
    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMINASSETS ?>css/demo.min.css">
    <!-- FAVICONS -->

    <link rel="shortcut icon" href="<?php echo ADMINASSETS ?>img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo ADMINASSETS ?>img/favicon/favicon.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
    <!-- Specifying a Webpage Icon for Web Clip 
             Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="<?php echo ADMINASSETS ?>img/splash/sptouch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo ADMINASSETS ?>img/splash/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo ADMINASSETS ?>img/splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo ADMINASSETS ?>img/splash/touch-icon-ipad-retina.png">
    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="<?php echo ADMINASSETS ?>img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="<?php echo ADMINASSETS ?>img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="<?php echo ADMINASSETS ?>img/splash/iphone.png" media="screen and (max-device-width: 320px)">

    <link href="<?php echo ADMINASSETS ?>js/datatables/css/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo ADMINASSETS ?>js/datatables/css/datatables.css" rel='stylesheet' type='text/css' />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ADMINASSETS ?>css/datepicker.css" rel="stylesheet" type="text/css"/>

    <style type="text/css">
        .custom-table tr td{
            width:33.33%;
        }
        .goog-logo-link {
            display:none !important;
        } 

        .goog-te-gadget{
            color: transparent !important;
        }
        .goog-te-combo{
            color: #000;
            margin-top:8px !important;
        }
        .custom-font{
            font-size:14px !important;
        }
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        } 
        body {
            top: 0px !important; 
        }
        #logo-group ul li{
            float:left !important;
        }

        .table-input{
            display:inline !important;
        }
        #left-panel{
            z-index: 904;
        }
        .minifyme{
            width: 100%;
            border-radius: 0px;
            margin-top: 0px;
        }
        .minifyme:hover{
            width: 100%;
            border-radius: 0px;
            margin-top: 0px;
        }

        th{
            text-align: left;
        }
        .innertable{
            padding-left:50px;
            padding-right:50px;
            width:100%;
        }
        .innertd td{
            background: #eaeaea;
            border:1px solid #ddd;
        }
        .innerth th{
            background: #d9d9d9;
            border:1px solid #ddd;
        }
        #example h4{
            padding: 10px; 
        }
        #example h4 b{
            font-weight: normal !important;
        }
        @import url(http://fonts.googleapis.com/css?family=Roboto);

        /****** Generate Pdf MODAL ******/
        .loginmodal-container {
            padding: 30px;
            /*max-width: 60%;*/
            width: 100% !important;
            background-color: #F7F7F7;
            margin: 0 auto;
            border-radius: 2px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            font-family: roboto;
        }

        .loginmodal-container h1 {
            text-align: center;
            font-size: 1.8em;
            font-family: roboto;
        }

        .loginmodal-container input[type=submit] {
            width: 100%;
            display: block;
            margin-bottom: 10px;
            position: relative;
        }

        .loginmodal-container input[type=text], input[type=password] {
            height: 44px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 10px;
            -webkit-appearance: none;
            background: #fff;
            border: 1px solid #d9d9d9;
            border-top: 1px solid #c0c0c0;
            /* border-radius: 2px; */
            padding: 0 8px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        .dropdown{
            height: 44px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 10px;
            -webkit-appearance: none;
            background: #fff;
            border: 1px solid #d9d9d9;
            border-top: 1px solid #c0c0c0;
            /* border-radius: 2px; */
            padding: 0 8px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .loginmodal-container input[type=text]:hover, input[type=password]:hover {
            border: 1px solid #b9b9b9;
            border-top: 1px solid #a0a0a0;
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        }

        .loginmodal {
            text-align: center;
            font-size: 14px;
            font-family: 'Arial', sans-serif;
            font-weight: 700;
            height: 36px;
            padding: 0 8px;
            /* border-radius: 3px; */
            /* -webkit-user-select: none;
              user-select: none; */
        }

        .loginmodal-submit {
            /* border: 1px solid #3079ed; */
            border: 0px;
            color: #fff;
            text-shadow: 0 1px rgba(0,0,0,0.1); 
            background-color: #4d90fe;
            padding: 17px 0px;
            font-family: roboto;
            font-size: 14px;
            /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
        }

        .loginmodal-submit:hover {
            /* border: 1px solid #2f5bb7; */
            border: 0px;
            text-shadow: 0 1px rgba(0,0,0,0.3);
            background-color: #357ae8;
            /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
        }

        .loginmodal-container a {
            text-decoration: none;
            color: #666;
            font-weight: 400;
            text-align: center;
            display: inline-block;
            opacity: 0.6;
            transition: opacity ease 0.5s;
        } 

        .login-help{
            font-size: 12px;
        }

    </style>
