<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
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
                            <h2>Add Menus</h2>
                        </header>
                        <div>
                            <div class="jarviswidget-editbox">
                            </div>
                            <div class="widget-body no-padding">
                                <form class="smart-form" action="<?= site_url() ?>admin/menus-save" method="POST">
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="label">Name</label>
                                                <label class="input">
                                                    <input type="text" name="name" id="cname" class="input-sm" value="<?php echo set_value('name'); ?>" oninput="validateAlpha();"  placeholder="Name" required>
                                                    <span class="help-block"><?php echo form_error('name'); ?></span>
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="label">Url</label>
                                                <label class="input">
                                                    <input type="text" name="url" id="cname" class="input-sm" value="<?php echo set_value('url'); ?>" oninput="validateAlpha();"  placeholder="Menu Url" required>
                                                    <span class="help-block"><?php echo form_error('url'); ?></span>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="label">Icon</label>
                                                <label class="input">
                                                    <input type="text" name="icon" id="cname" value="<?php echo set_value('icon'); ?>" class="input-sm" placeholder="Icon" required>
                                                    <span class="help-block"><?php echo form_error('icon'); ?></span>
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="label">Select Parent Menu</label>
                                                <label class="select">
                                                    <?php
                                                    $ge = array(0 => "Parent");
                                                    if ($parent) {
                                                        foreach ($parent as $g) {
                                                            $ge[$g->id] = $g->name;
                                                        }
                                                    }
                                                    echo form_dropdown('parent_id', $ge, set_value('parent_id'), 'class="form-control" placeholder="Select Parent" ');
                                                    ?>
                                                    <i></i>
                                                    <span class="help-block"><?php echo form_error('parent_id'); ?></span>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="label">Controller Name</label>
                                                <label class="select">
                                                    <?php
                                                    $controllers = scandir(FCPATH . "/application/controllers/admin");
                                             
                                                    $ge = array();
                                                    unset($controllers[0]);
                                                    unset($controllers[1]);
                                                    if ($controllers) {
                                                        foreach (array_values($controllers) as $g) {
                                                            $g = pathinfo($g);
                                                            $ge[$g['filename']] = $g['filename'];
                                                        }
                                                    }
                                                    $ge['other'] = "other";
                                                    echo form_dropdown('controller', $ge, set_value('controller'), 'class="form-control" placeholder="Select Controller" ng-model="controller" ng-change="controller==\'other\'?octrl=1:octrl=0"');
                                                    ?>
                                                    <i></i>
                                                    <input type="text" name="controller" id="cname" ng-if="octrl" class="form-control" value="<?php echo set_value('controller'); ?>" placeholder="Controller"/>
                                                    <span class="help-block"><?php echo form_error('controller'); ?></span>
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="label">Models Name</label>
                                                <label class="select">
                                                    <?php
                                                    $models = scandir(FCPATH . "/application/models/admin");
                                                    $ge = array();
                                                    unset($models[0]);
                                                    unset($models[1]);
                                                    if ($models) {
                                                        foreach (array_values($models) as $g) {
                                                            $g = pathinfo($g);
                                                            $ge[$g['filename']] = $g['filename'];
                                                        }
                                                    }
                                                    $ge['other'] = "other";
                                                    echo form_dropdown('model', $ge, set_value('model'), 'class="form-control" placeholder="Select Model" ng-model="model" ng-change="model==\'other\'?omod=1:omod=0"');
                                                    ?>
                                                    <i></i>
                                                    <input type="text" name="model" id="cname" ng-if="omod" class="form-control" value="<?php echo set_value('model'); ?>" placeholder="Model" />
                                                    <span class="help-block"><?php echo form_error('model'); ?></span>
                                                </label>
                                            </section>
                                        </div>

                                        <div class="row">
                                            <section  class="col col-6">
                                                <label class="label">Table Name</label>
                                                <label class="select">
                                                    <?php
                                                    $tables = $this->db->list_tables();
                                                    $ge = array();
                                                    if ($tables) {
                                                        foreach ($tables as $g) {
                                                            $ge[$g] = $g;
                                                        }
                                                    }
                                                    echo form_dropdown('table_name', $ge, set_value('table_name'), 'class="form-control" placeholder="Select Model"');
                                                    ?>
                                                    <i></i>
                                                    <span class="help-block"><?php echo form_error('table_name'); ?></span>
                                                </label>
                                            </section>
                                            <section  class="col col-6">
                                                <label class="label">Template Name</label>
                                                <label class="input">
                                                    <input type="text" name="template_name" id="cname" value="<?php echo set_value('template_name'); ?>" placeholder="Template Name" required>
                                                    <span class = "help-block"><?php echo form_error('template_name'); ?></span>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="label">Fields</label>
                                                <label class="input">
                                                    <input type="text" name="fields" id="cname" value="<?php echo set_value('fields'); ?>" placeholder = "Fields with comma seprated" required>
                                                    <span class = "help-block"><?php echo form_error('fields'); ?></span>
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="label">Table User by Name</label>
                                                <label class="input">
                                                    <input type="text" name="table_userby_name" id="cname" value="<?php echo set_value('table_userby_name'); ?>" placeholder = "Table User by Name [tablename.fieldname]" required>
                                                    <span class = "help-block"><?php echo form_error('table_userby_name'); ?></span>
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
