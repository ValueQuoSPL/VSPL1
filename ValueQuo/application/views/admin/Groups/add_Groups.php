<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb" >
            <?php $this->load->view('admin/layout/breadcrumb') ?>
        </ol>
    </div>
    <div id="content">
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Add groups</h2>
                        </header>
                        <div>
                            <div class="jarviswidget-editbox">
                            </div>
                            <div class="widget-body no-padding">
                                <form class="smart-form" action="<?= site_url('admin/save_groups'); ?>" method="POST">
                                    <fieldset>
                                        <div class="row">
                                            <section  class="col col-6">
                                                <label class="label">Group Name</label>
                                                <label class="input">
                                                    <input type="text" class="input-sm" id="name" value="<?php echo set_value('name', ''); ?>"  placeholder="Enter Group Name" name="name" required>
                                                    <span class="error"><?php echo form_error('name'); ?></span>
                                                </label>
                                            </section>
                                            <section  class="col col-6">
                                                <label class="label">Description</label>
                                                <label class="input">
                                                    <input type="text" class="input-sm" id="description" value="<?php echo set_value('description', ''); ?>"  placeholder="Enter Description" name="description">
                                                    <span class="error"><?php echo form_error('description'); ?></span>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="row">
                                            <section  class="col col-6">
                                                <label class="label">Status</label>
                                                <label class="input">
                                                    <?php echo form_dropdown('status', array('Active' => "Active", 'Deactive' => "Deactive"), set_value('status'), 'class="form-control" placeholder="Select Status"'); ?>
                                                    <span class="help-block"><?php echo form_error('status'); ?></span>
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <footer>
                                        <button type="button" class="btn btn-default" onclick="window.history.back();">Back</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </footer>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
</div>
<script>
    function validateAlpha() {
        var textInput = document.getElementById("cname").value;
        textInput = textInput.replace(/[^A-Za-z ]/g, "");
        document.getElementById("cname").value = textInput;
    }
</script>
