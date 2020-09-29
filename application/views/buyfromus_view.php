<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo lang('buyfromus');?></title> <!-- Edit title -->
</head>
<body>
    <link href="<?php echo base_url().'application/assets/css/leanevent.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().'application/assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div id="container">
        <!-- Common end -->
        <!-- Comprar Boletos -->
        <div class="comprar_boletos">
            <div class="buybanner"></div>
            <p class="absolute-text"><strong> <?php echo strtoupper(lang('buyfromus')); ?> </strong> <br /> <br /> <em><a href="<?php echo base_url(); ?>" id="banner_home_url"><?php echo lang('home');?></a></em> <?php echo lang('buyfromus'); ?></p>
            </p>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" align="center">
                <div class="line_div">
                    <hr class="line">
                </div>
                <div class="line_div">
                    <h3><?php echo lang('ourevents'); ?></h3>
                </div>
                <div class="line_div">
                    <hr class="line">
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <br>
        <br>
        <h5><p align="center">Tu asistencia es importante para nosotros visitanos en los eventos qu
            estamos realizando</p></h5>
        <br>
        <br>
        <br>
        <!-- Event list -->
        <div class="nuestros_list">
        <?php 
            $this->load->model('BuyFromUsModel');
            if($this->BuyFromUsModel->get_event_count() < 0) {
                echo "<p> No events to show </p>";
            } else {
                $result = $this->BuyFromUsModel->get_events();
                foreach ($result as $row) {
        ?>
            <a href="<?php echo base_url().'index.php/buyfromustwo/getEvent/'.$row->id ?>">
                <div class="nuestros_event_data">
                    <div class="nuestro_image2" style="background: url('<?php echo base_url()."application/assets/images/events/".$row->imagen;?>'); background-size: 200px 250px;">
                        <p class="top-left-text">New</p>
                    </div>
                    <p class="event_title"><?php echo strtoupper($row->nombre_del_evento); ?></p>
                    <?php if($row->valor_de_boleto != "0") {?>
                        <p class="price">$<?php echo $row->valor_de_boleto; ?></p>
                    <?php } else {?>
                        <p class="price"><?php echo lang('freepass'); ?></p>
                    <?php }?>
                </div>
            </a>
        <?php }} ?>
        </div>
        <!-- Common Start -->
    </div>
</body>
<script src="<?php echo base_url().'application/assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/leanevent.js' ?>"></script>
</html>
<!-- Common end -->