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
<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="<?= ADMINASSETS ?>js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 
<!-- BOOTSTRAP JS -->
<script src="<?= ADMINASSETS ?>js/bootstrap/bootstrap.min.js"></script>
<script src="<?= ADMINASSETS ?>jstree/jstree.min.js"></script>
<!-- CUSTOM NOTIFICATION -->
<script src="<?= ADMINASSETS ?>js/notification/SmartNotification.min.js"></script>
<!-- JARVIS WIDGETS -->
<script src="<?= ADMINASSETS ?>js/smartwidgets/jarvis.widget.min.js"></script>
<!-- EASY PIE CHARTS -->
<script src="<?= ADMINASSETS ?>js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<!-- SPARKLINES -->
<script src="<?= ADMINASSETS ?>js/plugin/sparkline/jquery.sparkline.min.js"></script>
<!-- JQUERY VALIDATE -->
<script src="<?= ADMINASSETS ?>js/plugin/jquery-validate/jquery.validate.min.js"></script>
<!-- JQUERY MASKED INPUT -->
<script src="<?= ADMINASSETS ?>js/plugin/masked-input/jquery.maskedinput.min.js"></script>
<!-- JQUERY SELECT2 INPUT -->
<script src="<?= ADMINASSETS ?>js/plugin/select2/select2.min.js"></script>
<!-- JQUERY UI + Bootstrap Slider -->
<script src="<?= ADMINASSETS ?>js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>
<!-- browser msie issue fix -->
<script src="<?= ADMINASSETS ?>js/plugin/msie-fix/jquery.mb.browser.min.js"></script>
<!-- FastClick: For mobile devices -->
<script src="<?= ADMINASSETS ?>js/plugin/fastclick/fastclick.min.js"></script>
<!--[if IE 8]>
<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
<![endif]-->
<!-- Demo purpose only -->
<script src="<?= ADMINASSETS ?>js/demo.min.js"></script>
<!-- MAIN APP JS FILE -->
<script src="<?= ADMINASSETS ?>js/app.min.js"></script>
<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin -->
<script src="<?= ADMINASSETS ?>js/speech/voicecommand.min.js"></script>
<!-- SmartChat UI : plugin -->
<script src="<?= ADMINASSETS ?>js/smart-chat-ui/smart.chat.ui.min.js"></script>
<script src="<?= ADMINASSETS ?>js/smart-chat-ui/smart.chat.manager.min.js"></script>
<!-- PAGE RELATED PLUGIN(S) -->
<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
<script src="<?= ADMINASSETS ?>js/plugin/flot/jquery.flot.cust.min.js"></script>
<script src="<?= ADMINASSETS ?>js/plugin/flot/jquery.flot.resize.min.js"></script>
<script src="<?= ADMINASSETS ?>js/plugin/flot/jquery.flot.time.min.js"></script>
<script src="<?= ADMINASSETS ?>js/plugin/flot/jquery.flot.tooltip.min.js"></script>
<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src="<?= ADMINASSETS ?>js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= ADMINASSETS ?>js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Full Calendar -->
<script src="<?= ADMINASSETS ?>js/plugin/moment/moment.min.js"></script>
<script src="<?= ADMINASSETS ?>js/plugin/fullcalendar/jquery.fullcalendar.min.js"></script>
<script src="<?= ADMINASSETS ?>js/datatables/jquery.dataTables.min.js"></script>
<script src="<?= ADMINASSETS ?>js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="<?= ADMINASSETS ?>js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="<?= ADMINASSETS ?>js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?= ADMINASSETS ?>js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
<script src="<?= ADMINASSETS ?>js/datatables/jquery.dataTables.dtFilter.min.js"></script>
<script src="<?= ADMINASSETS ?>js/custom.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>js/multiple-emails.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>js/jquery.metisMenu.js" type="text/javascript"></script>
<!--Angular Js Scripts Start-->
<script src="<?= ANGULARURL ?>bower_components/tinymce/tinymce.min.js"></script>
<script src="<?= ANGULARURL ?>bower_components/angular/angular.min.js" type="text/javascript"></script>
<script src="<?= ANGULARURL ?>angular-ui.min.js" type="text/javascript"></script>
<script src="<?= ANGULARURL ?>bower_components/angularjs-datepicker/src/js/angular-datepicker.js"></script>
<link rel="stylesheet" href="<?= ANGULARURL ?>bower_components/angularjs-datetime-picker/angularjs-datetime-picker.css" />
<script src="<?= ANGULARURL ?>bower_components/angularjs-datetime-picker/angularjs-datetime-picker.js"></script>
<script src="<?= ANGULARURL ?>jquery.placepicker.js" type="text/javascript"></script>
<script src="<?= ANGULARURL ?>ui-bootstrap.js" type="text/javascript"></script>
<script src="<?= ANGULARURL ?>angular-route.js"></script>
<script src="<?= ANGULARURL ?>angular-animate.js"></script>
<script src="<?= ANGULARURL ?>angular-sanitize.js"></script>
<script src="<?= ANGULARURL ?>bower_components/angular-ui-tinymce/dist/tinymce.min.js"></script>
<script src="<?= ANGULARURL ?>admin.control.js" type="text/javascript"></script>
<script src="<?= ANGULARURL ?>services.js" type="text/javascript"></script>
<!--Angular Js Scripts End-->
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="<?= ADMINASSETS ?>js/shipment_admin.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= ADMINASSETS ?>js/bootstrap/bootstrap-datepicker.js"></script>

<script>
    var site_url = "<?= site_url() ?>";
    var base_url = "<?= base_url() ?>";
    var oTable = null;
    //$('.datepicker').datepicker();
</script>





