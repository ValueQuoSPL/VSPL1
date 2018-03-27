<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
            <?php $this->load->view('admin/layout/breadcrumb') ?>
        </ol>
    </div>

    <div id="content">
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-12">
                    <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Add Menus</h2>
                        </header>
                        <div>
                            <div class="jarviswidget-editbox">
                            </div>
                            <div class="widget-body no-padding">
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
                                                                <?php foreach ($m->nodes as $n) { ?>
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

                                    <footer style="float:right;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-default" onclick="window.history.back();">Back</button>
                                        
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
