<?php
$user_id = $this->session->userdata('user_id');
$userimg = (array) $this->db->select('f_name,l_name,image,usertype')->get_where("admin_user", array('id' => $user_id))->row();
?>
<aside id="left-panel">
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
            <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                <img src="<?= ADMINASSETS ?>img/avatars/user1.png" alt="me" class="online" /> 
                <span>
                    <?php echo $userimg['f_name'] . " " . $userimg['l_name']; ?> 
                </span>
<!--                <i class="fa fa-angle-down"></i>-->
            </a> 

        </span>
    </div>
    <!-- end user info -->
    <nav>
        <!-- 
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->
        <ul>
            <li>
                <a href="<?php echo BASEURL ?>admin/dashboard" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <?php
            foreach ($menus as $m) {
                ?>
                <li class="<?php empty($m->nodes) ? "active open ": "" ?> <?php $title == $m->name ? "active open " : "" ?>">
                    <?php
                    if (empty($m->nodes)) {
                        ?>
                        <a href="<?php echo site_url($m->url) ?>" title="<?php echo $m->name ?>"><i class="<?php echo $m->icon ?> fa-lg fa-fw "></i> <span class="menu-item-parent"><?php echo $m->name ?></span></a>
                    <?php } else { ?>
                        <a href="#" title="<?php echo $m->name ?>"><i class="<?php echo $m->icon ?> fa-lg fa-fw"></i>  <span class="menu-item-parent"><?php echo $m->name ?></span></a>
                        <ul class="nav-sub <?php echo $title == $m->name ? " active" : "" ?>">
                            <?php foreach ($m->nodes as $n) { ?>
                                <li class="<?php echo $title == $n->name ? " active" : "" ?>">
                                    <a href="<?php echo site_url($n->url) ?>" title="<?php echo $n->name ?>"><i class="<?php echo $n->icon ?>" ></i> <span class="menu-item-parent"><?php echo $n->name ?></span></a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
            <?php } ?> 
        </ul>
    </nav> 
    <span class="minifyme" data-action="minifyMenu"> 
        <i class="fa fa-arrow-circle-left hit"></i> 
    </span>
</aside>