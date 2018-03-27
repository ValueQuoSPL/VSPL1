<div id="main" role="main">
    <div id="ribbon">
        <span class="ribbon-button-alignment"> 
            <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                <i class="fa fa-refresh"></i>
            </span> 
        </span>
        <ol class="breadcrumb" style="width:87%;">
            <?php $this->load->view('admin/layout/breadcrumb') ?>
        </ol>
    </div>
    <div id="content">
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-6">
                    <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Edit contact_message</h2>
                        </header>
                        <div>
                            <div class="jarviswidget-editbox">
                            </div>
                            <div class="widget-body no-padding">
<form class="smart-form" action="<?= site_url('admin/update_contact_message'); ?>" method="POST">
                               

                                    <fieldset>
<input type="hidden" name="id" class="input-sm"  value="<?php echo $data->id ?>"/>
                                        <section  class="col col-6">
                                <label class="label">Name</label>
                                     <label class="input">
                                <input type="text" class="input-sm" id="name" value="<?php echo setValue(set_value('name'),$data->name); ?>"  placeholder="Name" name="name" >
                                <span class="error"><?php echo form_error('name'); ?></span>
                            </label>
                                            </section><section  class="col col-6">
                                <label class="label">Email</label>
                                     <label class="input">
                                <input type="text" class="input-sm" id="email" value="<?php echo setValue(set_value('email'),$data->email); ?>"  placeholder="Name" name="email" >
                                <span class="error"><?php echo form_error('email'); ?></span>
                            </label>
                                            </section><section  class="col col-6">
                                <label class="label">Mobile</label>
                                     <label class="input">
                                <input type="text" class="input-sm" id="mobile" value="<?php echo setValue(set_value('mobile'),$data->mobile); ?>"  placeholder="Name" name="mobile" >
                                <span class="error"><?php echo form_error('mobile'); ?></span>
                            </label>
                                            </section><section  class="col col-6">
                                <label class="label">	message</label>
                                     <label class="input">
                                <input type="text" class="input-sm" id="	message" value="<?php echo setValue(set_value('	message'),$data->	message); ?>"  placeholder="Name" name="	message" >
                                <span class="error"><?php echo form_error('	message'); ?></span>
                            </label>
                                            </section>
                                  <section class="col col-6">
                                            <label class="label">Status</label>
                                            <label class="select">
                                                <?php echo form_dropdown('status', array('Active' => "Active", 'Deactive' => "Deactive"), set_value('status'), 'class="form-control" placeholder="Select Status"'); ?>
                                                <i></i>
                                                <span class="help-block"><?php echo form_error('status'); ?></span>
                                            </label>
                                        </section>
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
