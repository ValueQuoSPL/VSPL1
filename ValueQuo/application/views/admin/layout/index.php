<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en" ng-app="Shipment"> 
    <?php $this->load->view('admin/layout/head'); ?>
</head>
<body>
   
    <?php $this->load->view('admin/layout/header'); ?>
    <div class="page-wrapper">
        <?php $this->load->view('admin/layout/navbar'); ?>
        <?php $this->load->view('admin/layout/content', $data); ?>
    </div>
    <?php $this->load->view('admin/layout/footer'); ?>
    
    <?php 
    if($template == 'Create Shipment/create_shipment'){
    $this->load->view('admin/layout/footerlink1');
    }else{
         $this->load->view('admin/layout/footerlink');
    }
    ?>
    <?php $this->load->view('admin/layout/script'); ?>
</body>
</html>
