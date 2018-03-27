<div class="page-content">
<!--banner-->	
    <?php $this->load->view('admin/layout/breadcrumb') ?>
    <!--//banner-->
    <div class="page-heading page-heading-md">
        <h2>Edit {name}</h2>
    </div>
    <!--content-->
    <div class="container-fluid-md">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit {name}
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                            <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                            <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                    <form action="<?= site_url('admin/update_Settings'); ?>" method="POST">
                        <div class="modal-body">
                                <input type="hidden" name="id" class="form-control"  value="<?php echo $data->id ?>"/>
                                 <div class="form-group">
                                <label>Menu_name</label>
                                <input type="text" class="form-control" id="menu_name" value="<?php echo setValue(set_value('menu_name'),$data->menu_name); ?>"  placeholder="Name" name="menu_name" >
                                <span class="error"><?php echo form_error('menu_name'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <?php echo form_dropdown('status', array('Active' => "Active", 'Deactive' => "Deactive"), set_value('status'), 'class="form-control" placeholder="Select Status"'); ?>
                                <span class="help-block"><?php echo form_error('status'); ?></span>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default">Submit</button>
                            <a href="<?php print base_url(); ?>Admin/Settings/Settings"><button type="button" class="btn default">Cancel</button></a>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>
<script>
    function validateAlpha() {
        var textInput = document.getElementById("cname").value;
        textInput = textInput.replace(/[^A-Za-z ]/g, "");
        document.getElementById("cname").value = textInput;
    }
</script>

