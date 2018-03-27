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
                            <h2>Add Contact Us</h2>
                        </header>
                        <div>
                            <div class="jarviswidget-editbox">
                            </div>
                            <div class="widget-body no-padding">
                                <form class="smart-form" action="<?= site_url('admin/save_contact_us'); ?>" method="POST">
                                    <fieldset>
                                        <section  class="col col-6">
                                            <label class="label">Address</label>
                                            <label class="input">
                                                <input type="text" class="input-sm" id="address" value="<?php echo set_value('address', ''); ?>"  placeholder="Enter Address" name="address" required>
                                                <span class="error"><?php echo form_error('address'); ?></span>
                                            </label>
                                        </section><section  class="col col-6">
                                            <label class="label">Email</label>
                                            <label class="input">
                                                <input type="text" class="input-sm" id="email" value="<?php echo set_value('email', ''); ?>"  placeholder="Enter Email" name="email" required>
                                                <span class="error"><?php echo form_error('email'); ?></span>
                                            </label>
                                        </section><section  class="col col-6">
                                            <label class="label">Contact Number</label>
                                            <label class="input">
                                                <input type="text" class="input-sm" id="mobile" maxlength="10" value="<?php echo set_value('contact_number', ''); ?>"  placeholder="Enter Contact Number" name="contact_number" required>
                                                <span class="error"><?php echo form_error('contact_number'); ?></span>
                                            </label>
                                        </section>
                                        <section  class="col col-6">
                                            <label class="label">Description</label>
                                            <label class="input">
                                                <input type="text" class="input-sm" id="description" value="<?php echo set_value('description', ''); ?>"  placeholder="Enter Description" name="description" required>
                                                <span class="error"><?php echo form_error('description'); ?></span>
                                            </label>
                                        </section>
                                        <section  class="col col-6">
                                            <label class="label">Latitude</label>
                                            <label class="input">
                                                <input type="text" class="input-sm" id="lat" value="<?php echo set_value('lat', ''); ?>"  placeholder="Enter Latitude" name="lat" required>
                                                <span class="error"><?php echo form_error('lat'); ?></span>
                                            </label>
                                        </section>
                                        <section  class="col col-6">
                                            <label class="label">Longitude</label>
                                            <label class="input">
                                                <input type="text" class="input-sm" id="lng" value="<?php echo set_value('lng', ''); ?>"  placeholder="Enter Longitude" name="lng" required>
                                                <span class="error"><?php echo form_error('lng'); ?></span>
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
