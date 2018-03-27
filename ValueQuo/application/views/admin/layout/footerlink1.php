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
<script src="<?= ADMINASSETS ?>js/plugin/datatables/jquery.dataTables.min.js"></script>
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
//Change text into arabic language start

    //For Never Authorize Status Start
    function viewValidDetails(id) {
        $.ajax({
            url: '<?= BASEURL ?>admin/Authorization_controller/viewValidDetails/' + id,
            type: 'POST',
            async: false,
            dataType: 'json',
            success: function(authValidDetails) {
                $('#detailModal1').modal('toggle');
                $('.table-responsive #clearance-port').html(authValidDetails.port);
                $('.table-responsive #service').html(authValidDetails.service);
                $('.table-responsive #broker_name').html(authValidDetails.broker_name);
                $('.table-responsive #broker_license_number').html(authValidDetails.broker_license_number);
                $('.table-responsive #broker_license_expiry_date').html(authValidDetails.broker_license_expiry_date);
                $('.table-responsive #license_status').html(authValidDetails.license_status);
                $('.table-responsive #broker_status').html(authValidDetails.broker_status);
                $('.table-responsive #address_line').html(authValidDetails.address_line);
                $('.table-responsive #country').html(authValidDetails.country);
                $('.table-responsive #state').html(authValidDetails.state);
                $('.table-responsive #city').html(authValidDetails.city);
                $('.table-responsive #zip_code').html(authValidDetails.zip_code);
                $('.table-responsive #tel').html(authValidDetails.tel);
                $('.table-responsive #fax').html(authValidDetails.fax);
                $('.table-responsive #email').html(authValidDetails.email);
                $('.table-responsive #auth_validity_period').html(authValidDetails.auth_validity_period);
                $('.table-responsive #auth_code').html(authValidDetails.auth_code);
                $('.table-responsive #auth_expiry_date').html(authValidDetails.auth_expiry_date);
            }

        });
    }
    function viewDetails($id) {
        $.ajax({
            url: '<?= BASEURL ?>admin/Authorization_controller/viewDetails/' + $id,
            type: 'POST',
            async: false,
            dataType: "json",
            success: function(authDetails) {
                $('#detailModal').modal('toggle');
                $('.table-responsive #clearance-port').html(authDetails.port);
                $('.table-responsive #service').html(authDetails.service);
                $('.table-responsive #broker_name').html(authDetails.broker_name);
                $('.table-responsive #broker_license_number').html(authDetails.broker_license_number);
                $('.table-responsive #broker_license_expiry_date').html(authDetails.broker_license_expiry_date);
                $('.table-responsive #license_status').html(authDetails.license_status);
                $('.table-responsive #broker_status').html(authDetails.broker_status);
                $('.table-responsive #address_line').html(authDetails.address_line);
                $('.table-responsive #country').html(authDetails.country);
                $('.table-responsive #state').html(authDetails.state);
                $('.table-responsive #city').html(authDetails.city);
                $('.table-responsive #zip_code').html(authDetails.zip_code);
                $('.table-responsive #tel').html(authDetails.tel);
                $('.table-responsive #fax').html(authDetails.fax);
                $('.table-responsive #email').html(authDetails.email);
                $('#c_id').val(authDetails.id);
                $('#auth_status').val(authDetails.auth_status);
            }
        });
    }
    //For Never Authorize Status End
    //For valid Status Start

    function viewCargoDetails1() {
        var x = document.getElementById("hsCode").value;
        $.ajax({
            url: '<?= BASEURL ?>admin/Create_shipment/viewCargoDetails/' + x,
            type: 'POST',
            async: false,
            dataType: "json",
            success: function(CargoDetails) {
                $('.cargo #commodity_english').val(CargoDetails.commodity_english);
                $('.cargo #transliterateTextarea').val(CargoDetails.commodity_arabic);
                $('.cargo #document').val(CargoDetails.document);
                $('.cargo #custom_duty_tarriff').val(CargoDetails.custom_duty_tarriff);
            }
        });
    }

    function companyDetails() {
        var x = document.getElementById("arabic_company_name").value;
        $('.company #arabic_cr_number').val('');
        $('.company #tel_number').val('');
        $('.company #zip_code').val('');
        $('.company #po_box').val('');
        $('.company #fax_number').val('');
        $('.company #city_as_per_cr').val('');
        $('.company #trade_name').val('');
        $('.company #main_com_reg_no').val('');
        $('.company #sub_regional_reg_no').val('');
        $('.company #email').val('');
        $('.company #mobile_number').val('');
        $('.company #mail_box_number').val('');
        $('.company #address').val('');
        $('.company #IBAN_acc_number').val('');
        $('.company #national_id_number').val('');
        $.ajax({
            url: '<?= BASEURL ?>admin/Create_shipment/viewCompanyDetails',
            type: 'POST',
            async: false,
            data: {id: x},
            dataType: "json",
            success: function(companyDetails) {
                if (companyDetails) {
                    $('.company #arabic_cr_number').val(companyDetails.arabic_cr_number);
                    $('.company #tel_number').val(companyDetails.tel_number);
                    $('.company #zip_code').val(companyDetails.zip_code);
                    $('.company #po_box').val(companyDetails.po_box);
                    $('.company #fax_number').val(companyDetails.fax_number);
                    $('.company #city_as_per_cr').val(companyDetails.city_name_as_per_cr);
                    $('.company #trade_name').val(companyDetails.trade_name);
                    $('.company #main_com_reg_no').val(companyDetails.main_com_reg_no);
                    $('.company #sub_regional_reg_no').val(companyDetails.sub_regional_reg_no);
                    $('.company #email').val(companyDetails.email);
                    $('.company #mobile_number').val(companyDetails.mobile_number);
                    $('.company #mail_box_number').val(companyDetails.mail_box_number);
                    $('.company #address').val(companyDetails.address);
                    $('.company #IBAN_acc_number').val(companyDetails.IBAN_acc_number);
                    $('.company #national_id_number').val(companyDetails.national_id_number);
                } else {
                    $('.company #arabic_cr_number').val('');
                    $('.company #tel_number').val('');
                    $('.company #zip_code').val('');
                    $('.company #po_box').val('');
                    $('.company #fax_number').val('');
                    $('.company #city_as_per_cr').val('');
                    $('.company #trade_name').val('');
                    $('.company #main_com_reg_no').val('');
                    $('.company #sub_regional_reg_no').val('');
                    $('.company #email').val('');
                    $('.company #mobile_number').val('');
                    $('.company #mail_box_number').val('');
                    $('.company #address').val('');
                    $('.company #IBAN_acc_number').val('');
                    $('.company #national_id_number').val('');
                }

            }
        });
    }

    function viewCargoDetails() {
        var imp = window.inps;
        var x = document.getElementById("hsCode" + imp).value;
        $.ajax({
            url: '<?= BASEURL ?>admin/Create_shipment/viewCargoDetails/' + x,
            type: 'POST',
            async: false,
            dataType: "json",
            success: function(CargoDetails) {
                $('.cargo #commodity_english' + imp).val(CargoDetails.commodity_english);
                $('.cargo #transliterateTextarea' + imp).val(CargoDetails.commodity_arabic);
                $('.cargo #document' + imp).val(CargoDetails.document);
                $('.cargo #custom_duty_tarriff' + imp).val(CargoDetails.custom_duty_tarriff);
            }
        });
    }
    function addMore() {
        window.inps = $('#wrapper > fieldset:last').data('count') + 1 || 0;
        $('#wrapper').append('<fieldset style="padding-top:13px;" data-count="' + inps + '"><section  class="col col-6"><label class="label">Quantity</label><label class="input"><input type="number" min="1" id="qty" class="input-sm"  value=""  placeholder="Enter Quantity" name="qty[]" required></label></section> <section  class="col col-6"><label class="label">Weight (In Kgs)</label><label class="input"><input type="number" min="1" class="input-sm"  id="weight" value=""  placeholder="Enter Weight(In Kgs)" name="weight[]" required> </label></section> <section  class="col col-6"> <label class="label">Select Hs Code</label> <label class="select"><select class="input-sm demo" name="hs_code[]"  id="hsCode' + inps + '"  onchange="viewCargoDetails(<?php echo $i; ?>)" required><option value="">Choose Hs Code</option><?php foreach ($hscode as $value) { ?><option value="<?php echo $value->id ?>"><?php echo $value->range ?></option> <?php } ?> </select> <i></i> </label></section><div class="cargo">  <section  class="col col-6"><label class="label">Commodity In English</label><label class="input"><input type="text" class="input-sm" id="commodity_english' + inps + '" value=""  placeholder="Enter Commodity (In English)" name="commodity_english[]"></label></section><section  class="col col-6"><label class="label">Commodity In Arabic</label><label class="input"><input type="text" class="input-sm" id="transliterateTextarea' + inps + '"  value=""   placeholder="Enter Commodity (In Arabic)" name="commodity_arabic[]" required></label> </section><section  class="col col-6"><label class="label">Document</label><label class="input"><input type="text" class="input-sm"   id="document' + inps + '" value=""  placeholder="Enter Documents" name="document[]"></label></section><section  class="col col-6"><label class="label">Custom Duty Tarriff</label> <label class="input"><input type="text" class="input-sm"  id="custom_duty_tarriff' + inps + '"  value=""  placeholder="Custom Duty Tarriff" name="custom_duty_tarriff[]" required></label></section><a class="remove">X</a></fieldset>');
    }
    $('#wrapper').on('click', 'a.remove', function() {
        $(this).closest('fieldset').remove();
    });
    $('#wrapper1').on('click', 'a.remove', function() {
        $(this).closest('fieldset').remove();
    });
    function format(d) {
        var additional_doc = d.additional_details;
        var AddDocArr = JSON.parse(additional_doc);
        var docList = d.document_list;
        var docListDropdown = JSON.parse(docList);
        var companyDetails = d.company_details;
        var companyDetailsDropdown = JSON.parse(companyDetails);
        var docStatusDropdwon = d.doc_status_dropdown;
        var docStatusDropdwon = JSON.parse(docStatusDropdwon);
        var id = d.ship_id;
        var document_details = d.document_name;
        var dd = JSON.parse(document_details);
        var shipment_updates = d.ship_updates;
        var ships_updates = JSON.parse(shipment_updates);
        var ship_update_fields = "";
        var vdocument = d.document;
        var docArr = vdocument.split(',');
        var docTable = '';
        var hsCode = d.hs_code;
        var hsCodeArr = hsCode.split(',');
        var hsCodeArrTable = '';
        var quantity = d.qty;
        var qtyArr = quantity.split(',');
        var weight = d.weight;
        var weightArr = weight.split(',');
        var commodity_english = d.commodity_english;
        var commodityEnglishArr = commodity_english.split(',');
        var commodity_arabic = d.commodity_arabic;
        var commodityArabicArr = commodity_arabic.split(',');
        var counter = 1;
        var counter1 = 1;
        var cnt = 0;
        var custom_duty_tarriff = d.custom_duty_tarriff;
        var customDutyTarriffArr = custom_duty_tarriff.split(',');
        var docStatusDropdwonio = "";
        var compDetailsDropdownio = "";
        var docListDropdwonio = "";
        var ShipUpdateStatus1 = "";
        var additional_document = "";
        $.each(docStatusDropdwon, function(k, v) {
            docStatusDropdwonio += '<option value="' + v.name + '">' + v.name + '</option>';
        });
        $.each(docListDropdown, function(k, val) {
            docListDropdwonio += '<option value="' + val.name + '">' + val.name + '</option>';
        });
        $.each(companyDetailsDropdown, function(k, val) {
            compDetailsDropdownio += '<option value="' + val.id + '">' + val.arabic_company_name + '</option>';
        });


        for (var i = 0; i < docArr.length; i++) {
            if (typeof (dd[cnt]) !== "undefined" && docArr.includes(dd[cnt].document_name) && dd[cnt].document_name === docArr[i]) {
                docTable += '<tr><td>' + counter1 + '</td><td>' + dd[cnt].document_name + '</td><td>' + dd[cnt].uploaded_document + '</td><td>' + dd[cnt].document_status + '</td><td>' + dd[cnt].document_courier + '</td><td><button type="submit" id="' + counter1 + '" onclick="deleteDocument(\'' + id + '\',\'' + docArr[i] + '\')" class="btn btn-danger">Delete</button></td></tr>';
                counter1++;
                cnt++;
            } else {
                docTable += '<tr><td>' + counter1 + '</td><td>' + docArr[i] + '</td><td><input type="file" id="uploaded_document' + counter1 + '" name="uploaded_document" class="table-input" required><input type="text" id="document_name' + counter1 + '" name="document_name" value="' + docArr[i] + '"/><input type="text" id="shipment_id' + counter1 + '" name="shipment_id" value="' + id + '"/></td><td><section  class="col col-6"><label class="select"><select class="document_status" name="document_status" id="selectbasic' + counter1 + '" required><option value="">Select Document Status</option>' + docStatusDropdwonio + '</select><i></i></label></section></td><td><input type="text" id="document_courier' + counter1 + '" name="document_courier" placeholder="Enter Document Courier" class="input-sm" required/></td><td><button type="submit" id="' + counter1 + '" onclick="uploadDocument(this)" class="btn btn-success"><i class="fa fa-arrow-circle-right fa-lg"></i></button></td></tr>';
                counter1++;
            }

        }


        for (var i = 0; i < hsCodeArr.length; i++) {
            hsCodeArrTable += '<tr class="innertd" ><td>' + counter + '</td><td>' + qtyArr[i] + '</td><td>' + weightArr[i] + '</td><td>' + hsCodeArr[i] + '</td><td>' + commodityEnglishArr[i] + '</td><td>' + commodityArabicArr[i] + '</td><td>' + customDutyTarriffArr[i] + '</td></tr>';
            counter++;
        }

        for (var i = 0; i < AddDocArr.length; i++) {
            if (AddDocArr[i].shipment_id === id && typeof (AddDocArr[i]) !== "undefined") {
                var additional_document = '<td>' + AddDocArr[i].document_name + '</td><td>' + AddDocArr[i].upload_doc + '</td><td>' + AddDocArr[i].document_status + '</td><td>' + AddDocArr[i].remark + '</td><td><a href="<?= BASEURL ?>generatePdf/' + AddDocArr[i].shipment_id + '" >Pdf</a></td>';
            } else {
                var additional_document = '<td><input type="hidden" id="shipment_id" value="' + id + '" name="shipment_id"  class="table-input" required><section  class="col col-6"><label class="select"><select class="doc_list" name="doc_list" id="doc_list" required><option value="">Select Document Name</option>' + docListDropdwonio + '</select><i></i></label></section></td><td><input type="file" id="upload_doc" name="upload_doc" class="table-input" required></td><td><section  class="col col-6"><label class="select"><select class="document_status" name="document_status" id="document_status" required><option value="">Select Document Status</option>' + docStatusDropdwonio + '</select><i></i></label></section></td><td><input type="text" id="remarks" name="remarks" placeholder="Remark" class="table-input" required></td><td><a href="#" data-toggle="modal" class="btn btn-danger" data-target="#login-modal">More Details</a>' +
                        '<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"><div class="modal-dialog"><div class="loginmodal-container"><a  class="btn btn-default" data-dismiss="modal"  role="button" style="float:right;"><i class="fa fa-times" aria-hidden="true"></i></a><h1>Generate Pdf Details</h1><br>' +
                        '<div class="row company"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><section  class="col col-6"><select class="dropdown" onchange="companyDetails()"  name="arabic_company_name" id="arabic_company_name" required><option value="">Select Arabic Company Name</option>' + compDetailsDropdownio + '</select><i></i></section><input type="text"  id="arabic_cr_number" name="arabic_cr_number" placeholder="Arabic CR number" readonly><input type="text" id="tel_number" name="tel_number" placeholder="Telephone number" readonly><input type="text" name="zip_code" id="zip_code" placeholder="Zip Code" readonly><input type="text" id="main_com_reg_no" name="main_com_reg_no" placeholder="Main Commercial Registration Number" readonly><input type="text" id="email" name="email" placeholder="Email Id" readonly><input type="text" id="mail_box_number" name="mail_box_number" placeholder="Mail Box Number" readonly><input type="text" id="IBAN_acc_number" name="IBAN_acc_number" placeholder="IBAN Account Number" readonly></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><input type="text" id="po_box" name="po_box" placeholder="PO Box#" readonly><input type="text" id="fax_number" name="fax_number" placeholder="Fax Number" readonly><input type="text" id="city_as_per_cr" name="city_as_per_cr" placeholder="City Name As Per CR" readonly><input type="text" id="trade_name" name="trade_name" placeholder="Trade Name" readonly><input type="text" id="sub_regional_reg_no" name="sub_regional_reg_no" placeholder="Sub Regional Registration Number" readonly><input type="text" id="mobile_number" name="mobile_number" placeholder="Mobile Number" readonly><input type="text" id="address" name="address" placeholder="Address" readonly><input type="text" id="national_id_number" name="national_id_number" placeholder="National Id Number Of Company Owner" readonly></div><input type="submit" name="login" class="login loginmodal-submit" onclick="additionalDocument()"  value="Submit"></div> </td>';
            }
        }


        for (var i = 0; i < ships_updates.length; i++) {
            if (ships_updates[i].shipment_id === id && typeof (ships_updates[i]) !== "undefined") {
                var ship_update_fields = '<td>' + ships_updates[i].sh_date + '</td><td>' + ships_updates[i].shipment_status + '</td><td>' + ships_updates[i].document + '</td><td>' + ships_updates[i].remark + '</td><td><button type="submit" onclick="deleteDocumentupdates(\'' + id + '\')" class="btn btn-danger">Delete</button></td>';
            } else {
                var ship_update_fields = '<td>' + d.datepicker + '<input type="hidden" id="shipment_id" value="' + id + '" name="shipment_id"  class="table-input" required></td><td>' + d.ship_update_status + '</td><td><input type="file" id="document" name="document" class="table-input" required></td><td><input type="text" id="remark" name="remark" placeholder="Remark" class="table-input" required></td><td><button type="submit" id="shipmentUpdate" onclick="shipmentUpdate()" class="btn btn-success"><i class="fa fa-arrow-circle-right fa-lg"></i></button></td>';

            }
        }
        return '<h4 align="center"><b>Cargo Details</b></h4><table class="innertable" cellpadding="5" cellspacing="0" border="0"><tr class="innerth"><th>Serial No.</th><th>Quantity</th><th>Weight</th><th>Hs Code</th><th>Commodity(In English)</th><th>Commodity(In Arabic)</th><th>Custom Duty Tarriff</th></tr><tr>' + hsCodeArrTable + '</tr></table><h4 align="center"><b>Documents</b></h4><table class="innertable" cellpadding="5" cellspacing="0" border="0"><tr class="innerth"><th>Serial No.</th>' +
                '<th>Document Name</th><th>Document</th><th>Document Status </th><th>Document Courier </th><th></th></tr>' + docTable + '</table><h4 align="center"><b>Shipment Update Status</b></h4><table class="innertable" cellpadding="5" cellspacing="0" border="0"><tr class="innerth"><th>Shipment Update Date</th><th>Shipment Update Status</th><th>Documents</th><th>Remarks</th><th></th></tr><tr class="innerth">' + ship_update_fields + '</tr></table></table><h4 align="center"><b>Additional Documents</b></h4><table class="innertable" cellpadding="5" cellspacing="0" border="0"><tr class="innerth">' +
                '<th>Document Name</th><th>Upload Document</th><th>Document Status</th><th>Remark</th><th></th></tr>' + additional_document + '</table>';
    }
    function additionalDocument() {

        var upload_data = $("#upload_doc").prop('files')[0];
        var postData = new FormData();
        postData.append('file', upload_data);
        postData.append('doc_list', $("#doc_list").val());
        postData.append('shipment_id', $("#shipment_id").val());
        postData.append('document_status', $("#document_status").val());
        postData.append('remarks', $("#remarks").val());
        postData.append('arabic_company_name', $("#arabic_company_name").val());
        postData.append('arabic_cr_number', $("#arabic_cr_number").val());
        postData.append('tel_number', $("#tel_number").val());
        postData.append('zip_code', $("#zip_code").val());
        postData.append('po_box', $("#po_box").val());
        postData.append('fax_number', $("#fax_number").val());
        postData.append('city_as_per_cr', $("#city_as_per_cr").val());
        postData.append('trade_name', $("#trade_name").val());
        postData.append('main_com_reg_no', $("#main_com_reg_no").val());
        postData.append('sub_regional_reg_no', $("#sub_regional_reg_no").val());
        postData.append('email', $("#email").val());
        postData.append('mobile_number', $("#mobile_number").val());
        postData.append('mail_box_number', $("#mail_box_number").val());
        postData.append('address', $("#address").val());
        postData.append('IBAN_acc_number', $("#IBAN_acc_number").val());
        postData.append('national_id_number', $("#national_id_number").val());
        $.ajax({
            url: '<?= BASEURL ?>admin/Create_shipment/insertAdditionalDocuments/',
            type: 'POST',
            processData: false,
            contentType: false,
            async: false,
            data: postData,
            dataType: "json",
            success: function(result) {
                if (result.status == 1) {
                    alert('Your Additional Documents Submitted Successfully!');
                    window.location.href = "<?= BASEURL ?>admin/create_shipment";
                } else {
                    alert('Additional Documents Not Added');
                }
            }
        });
    }

    function uploadDocument(obj) {
        var id = obj.id;
        var documentName = document.getElementById("document_name" + id).value;
        var shipment_id = document.getElementById("shipment_id" + id).value;
        var selectbasic = document.getElementById("selectbasic" + id).value;
        var document_courier = document.getElementById("document_courier" + id).value;
        var file_data = $("#uploaded_document" + id).prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('document_name', $("#document_name" + id).val());
        form_data.append('shipment_id', $("#shipment_id" + id).val());
        form_data.append('selectbasic', $("#selectbasic" + id).val());
        form_data.append('document_courier', $("#document_courier" + id).val());
        $.ajax({
            url: '<?= BASEURL ?>admin/Create_shipment/uploadDocument/',
            type: 'POST',
            processData: false,
            contentType: false,
            async: false,
            data: form_data,
            dataType: "json",
            success: function(result) {
                if (result.status == 1) {
                    alert('Your Document Data Submitted Successfully!');
                    window.location.href = "<?= BASEURL ?>admin/create_shipment";
                } else {
                    alert('Document Data Not Added');
                }

            }
        });
    }

    function shipmentUpdate() {
        var file_data = $("#document").prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('sh_date', $("#sh_date").val());
        form_data.append('shipment_id', $("#shipment_id").val());
        form_data.append('shipment_status', $("#shipment_status").val());
        form_data.append('remark', $("#remark").val());
        $.ajax({
            url: '<?= BASEURL ?>admin/Create_shipment/shipmentUpdate/',
            type: 'POST',
            processData: false,
            contentType: false,
            async: false,
            data: form_data,
            dataType: "json",
            success: function(result) {
                if (result.status == 1) {
                    alert('Your Shipement Updates Submitted Successfully!');
                    window.location.href = "<?= BASEURL ?>admin/create_shipment";
                } else {
                    alert('Shipment Updates Not Added');
                }

            }
        });
    }


    function deleteDocument(id, doc_name) {
        $.ajax({
            url: '<?= BASEURL ?>admin/Create_shipment/delete_document/',
            type: 'get',
            async: false,
            data: {shipment_id: id, document_name: doc_name},
            dataType: "json",
            success: function(result) {
                alert('Document Record Deleted Successfully');
                window.location.href = "<?= BASEURL ?>admin/create_shipment";
            }
        });
    }
    function deleteDocumentupdates(id) {
        $.ajax({
            url: '<?= BASEURL ?>admin/Create_shipment/delete_document_updates/',
            type: 'get',
            async: false,
            data: {shipment_id: id},
            dataType: "json",
            success: function(result) {
                alert('Document Update Record Deleted Successfully');
                window.location.href = "<?= BASEURL ?>admin/create_shipment";
            }
        });
    }
</script>





