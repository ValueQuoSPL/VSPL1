<div class="page-content">
    <?php $this->load->view('admin/layout/breadcrumb') ?>
    <div class="page-heading page-heading-md">
        <h2>Add Menu Allocation</h2>
    </div>
    <div class="container-fluid-md">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add Menu Allocation
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                            <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                            <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php
                        $x = array();
                        if (isset($group->menu_ids)) {
                            $x = json_decode($group->menu_ids, true);
                        }
                        ?>
                        <form action="<?= site_url() ?>admin/group-menu-alloc-save/<?= $id ?>" method="POST">
                            <div class="modal-body">
                                <div id="jstree_demo_div">
                                    <ul>
                                        <?php foreach ($menus as $m) { ?>
                                            <li>
                                                <a href="#" class="hvr-bounce-to-right <?php echo in_array($m->name . ":" . $m->id, $x) ? "jstree-clicked" : "" ?>  "><?= $m->name . ":" . $m->id ?></a>
                                                <?php if (!empty($m->nodes)) { ?>
                                                    <ul>
                                                        <?php
                                                    
                                                        foreach ($m->nodes as $n) { ?>
                                                            <li><a href="#" class="hvr-bounce-to-right <?php echo in_array($n->name . ":" . $n->id, $x) ? "jstree-clicked" : "" ?>  "><?= $n->name . ":" . $n->id ?></a></li>
                                                        <?php } ?>
                                                    </ul>
                                                <?php } ?>
                                            </li>
                                        <?php }
                                        ?>
                                    </ul>
                                </div>

                            </div>
                            <input type="hidden" name="menu_ids" id="menu_ids"/>
                            <input type="hidden" name="admin_id" value="<?= $id ?>"/>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Submit</button>
                                <a href="<?php print base_url(); ?>Admin/MenuAllocation/MenuAllocation"><button type="button" class="btn default">Cancel</button></a>
                            </div>
                        </form>
                    </div>
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
