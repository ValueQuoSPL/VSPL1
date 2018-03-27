<div class="page-content">
<script src="<?= ADMINASSETS ?>js/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {

        oTable = $('#getData').dataTable({
            "aaSorting": [[0, "asc"]],
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            "iDisplayLength": 10,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?= site_url('admin/Settings_controller/getSettingsdata') ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            },
            'fnRowCallback': function (nRow, aData, iDisplayIndex) {
                nRow.id = aData[0];
                nRow.className = "invoice_link";
                return nRow;
            },
            "aoColumns": [{"bSortable": false, "mRender": checkbox}, {'mRender': null},{"mRender": setStatus}, {"bSortable": false}],
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                $('td:eq(2) > label', nRow).attr('onclick', "changeStatus('id'," + aData[0] + ",'menus')");
            },
            "fnFooterCallback": function (nRow, aaData, iStart, iEnd, aiDisplay) {
            }
        }).fnSetFilteringDelay().dtFilter([
        ], "footer");
    });
</script>
    <!--banner-->	
    <?php $this->load->view('admin/layout/breadcrumb') ?>
    <!--//banner-->
    <div class="page-heading page-heading-md">
        <h2>Settings</h2>
    </div>
    <!--content-->
    <div class="container-fluid-md">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <form id="xform" onsubmit="return bulkDelete()">
                        <div class="panel-heading">
                            Settings
                            <div class="panel-options">
                                <div class="btn-group">
                                    <a class="btn btn-default btn-sm"  href="#" onclick="oTable.fnDraw();" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Settings"><i class="fa fa-trash-o"></i></button>
                                    <a class="btn btn-success btn-sm" href="<?php print base_url(); ?>admin/add_Settings"><i class="fa fa-plus-circle"></i></a>
                                    <button type="button" class="btn btn-info btn-sm" onclick="exceldownload()" title="Excel Download"><i class="fa fa-file-excel-o"></i></button>              

                                    <!--<a class="btn btn-danger btn-sm" href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>-->
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <input type="hidden" name="key" value="id"/>
                                <input type="hidden" name="tab" value="menus"/>
                                <br>
                                <table id="getData" class="dataTable table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th style="min-width:30px; width: 30px; text-align: center;">
                                                    <input class="select_all" type="checkbox" name="select_all" value="1"/>
                                                </th>
                                                <th>Menu_name</th><th>Status</th>
                                                <th style="width:80px; text-align:center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot class="dtFilter">
                                            <tr class="active">
                                                <th style="min-width:30px; width: 30px; text-align: center;">
                                                    <!--<input class="select_all" type="checkbox" name="select_all" value="1"/>-->
                                                </th>
                                                <th>Menu_name</th><th>Status</th>
                                                <th style="width:80px; text-align:center;">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

</div>

<script>
    function validateAlpha() {
        var textInput = document.getElementById("cname").value;
        textInput = textInput.replace(/[^A-Za-z ]/g, "");
        document.getElementById("cname").value = textInput;
    }
</script>

