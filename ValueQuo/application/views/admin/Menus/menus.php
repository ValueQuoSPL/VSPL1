
<script src="<?= ADMINASSETS ?>js/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {

        var rows_selected = [];
        oTable = $('#getData').dataTable({
            "aaSorting": [[0, "asc"], [1, "desc"]],
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            "iDisplayLength": 10,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?= site_url('admin/Admin_controller/getMenusData') ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            },
            'fnRowCallback': function (nRow, aData, iDisplayIndex) {
                nRow.id = aData[0];
                nRow.className = "invoice_link";
                return nRow;
            },
            "aoColumns": [{'mRender': checkbox, "bSortable": false}, {"mRender": null}, {"mRender": null}, {"mRender": null}, {"mRender": null}, {"mRender": setStatus}],
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                $('td:eq(5) > label', nRow).attr('onclick', "changeStatus('id'," + aData[0] + ",'admin_menu')");
            },
            "fnFooterCallback": function (nRow, aaData, iStart, iEnd, aiDisplay) {
            }
        }).fnSetFilteringDelay().dtFilter([
        ], "footer");
    });
</script>


<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
            <?php $this->load->view('admin/layout/breadcrumb') ?>
        </ol>
    </div>
    <form id="xform" onsubmit="return bulkDelete()">
        <div id="content">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <i class="fa fa-table fa-fw "></i> 
                        Menus
                    </h1>

                </div>

            </div>

            <!-- widget grid -->
            <section id="widget-grid" class="">

                <!-- row -->
                <div class="row">

                    <!-- NEW WIDGET START -->

                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">

                            <header>
                                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                <h2>Menus</h2>
                                <div class="jarviswidget-ctrls" role="menu" style="float:right;">
                                    <a class="button-icon"  href="#" onclick="oTable.fnDraw();" data-rel="reload"><i class="fa fa-refresh"></i></a>

                                    <a class="button-icon" href="<?php print base_url(); ?>admin/menus-add"><i class="fa fa-plus-circle"></i></a>
<!--                                    <button type="submit" class="button-icon" title="Delete Menus" style="background-color:rgb(76,79,83);border:none;"><i class="fa fa-trash-o"></i></button>-->
                              </div>
                            </header>
                            <div>
                                <div class="jarviswidget-editbox">
                                </div>

                                <div class="widget-body">


                                    <div class="table-responsive">
                                        <input type="hidden" name="key" value="id"/>
                                        <input type="hidden" name="tab" value="admin_menu"/>
                                        <table class="dataTable table table-bordered " id="getData">
                                            <thead>
                                                <tr>
                                                    <th><input name="select_all" value="1" type="checkbox" class="select_all"/></th>
                                                    <th>Name</th>
                                                    <th>Url</th>
                                                    <th>Icons</th>
                                                    <th>Parent</th>
                                                    <th>Status</th>
                                                    <!--<th>Actions</th>-->
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- end widget content -->

                            </div>
                            <!-- end widget div -->

                        </div>

                        <!-- end widget -->




                    </article>
                    <!-- WIDGET END -->
                </div>
            </section>
            <!-- end widget grid -->
        </div>
    </form>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<script>
    function validateAlpha() {
        var textInput = document.getElementById("cname").value;
        textInput = textInput.replace(/[^A-Za-z ]/g, "");
        document.getElementById("cname").value = textInput;
    }
</script>

