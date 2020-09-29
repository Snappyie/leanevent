<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo lang('registration');?></title> <!-- Edit title -->
</head>
<body onload="javascript:document.getElementById('defaultOpen').click();">
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
        <?php
            $this->load->model('BuyFromUsModelTwo');
            $row = $this->BuyFromUsModelTwo->event;
        ?>
        <div class="perdamos">
            <div class="perdamos_column1">
                <div class="nuestro_image_perdamos" style="background: url('<?php echo base_url()."application/assets/images/events/".$row->imagen;?>'); background-size: 310px 400px;">
                    <p class="top-left-text-perdamos">Sale</p>
                </div>
            </div>
            <div class="perdamos_column2">
                <form method="POST" action="<?php echo base_url().'index.php/buyfromustwo/cart/'.$row->id?>">
                    <h2><?php echo strtoupper($row->nombre_del_evento);?></h2>
                    <div>
                        <p class="perdamos-list-column1">$<?php echo strtoupper($row->valor_de_boleto); ?></p>
                        <p class="perdamos-list-column2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            (74 rating)
                        </p>
                    </div>
                    <div>
                        <p align="justify">
                            <?php echo lang('faithpara'); ?>
                            <br>
                            <br>
                            <?php echo lang('numberofentries'); ?>
                        </p>
                        <div class="number-input">
                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                class="plus"></button>
                        </div>
                    </div>
                    <br>
                    <?php
                        if($row->event_count <= 0){
                            echo "Sold Out";
                        }
                        else {
                    ?>
                    <button type="submit" class="comprar-button">
                        <i class="fa fa-shopping-cart fa-1x"></i> &nbsp; <?php echo lang('buy'); ?>
                    </button>
                        <?php }?>
                </form>
            </div>
        </div>
        <br>
        <br>
        <!-- Tabbed content -->
        <div class="tab-data">
            <div class="tab">
                <button type="button" class="tablinks hero" onclick="openTab(event, 'Descripcion')" id="defaultOpen"><?php echo lang('description'); ?></button>
                <button type="button" class="tablinks hero" onclick="openTab(event, 'Encargados')"><?php echo lang('managers'); ?></button>
                <button type="button" class="tablinks hero" onclick="openTab(event, 'Patrocinantes')"><?php echo lang('sponsors'); ?></button>
            </div>
            <div id="Descripcion" class="tabcontent">
                <p><?php echo $row->descripcion; ?></p>
            </div>

            <div id="Encargados" class="tabcontent">
                <p><?php echo $row->encargados; ?></p>
            </div>

            <div id="Patrocinantes" class="tabcontent">
                <p><?php echo $row->patrocinantes; ?></p>
            </div>
        </div>
        <!-- Common Start -->
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row volunteers">
                <div class="col-md-6" align="right"><i class="fa fa-lg fa-paper-plane" aria-hidden="true"></i>&nbsp;<h5 class="newsletter-title"><?php echo lang('registernewslettertitle'); ?></h5></div>
                <div class="col-md-6">
                    <form action="<?php echo base_url().'index.php/welcome/send_email'; ?>" method="POST">
                        <input type="email" placeholder="Introduce to correo electronico" class="newsletter_input" id="newsletter_email" name="newsletter_email" required>
                        <input type="submit" value="Suscribir" class="newsletter_button">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <br>
    <br>
    <br>
</body>
<script src="<?php echo base_url().'application/assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/leanevent.js' ?>"></script>
</html>
<!-- Common end -->