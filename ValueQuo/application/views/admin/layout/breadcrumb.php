<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb" style='padding: 3px 0px;'>
        <?php
        foreach ($bc as $b) {
            if ($b['link'] != '#') {
                echo '<li><a href="' . $b['link'] . '"> ' . $b['page'] . ' </a></li>';
            } else {
                echo '<li class="active"><span>' . $b['page'] . '</span></li>';
            }
        }
        ?>
    </ol>
</div>
<div >
    <?= flash_message(); ?>
</div>
