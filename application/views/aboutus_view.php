<!-- Common Start -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo lang('aboutus');?></title> <!-- Edit title -->
</head>
<body>
    <link href="<?php echo base_url().'application/assets/css/leanevent.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().'application/assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div id="container">
        <!-- Common end -->

        <!-- Quienes Somos -->
        <div class="quienes_somos">
            <div class="aboutbanner"></div>
            <p class="absolute-text"><strong> <?php echo strtoupper(lang('aboutus')); ?> </strong> <br /> <br /> <em><a href="<?php echo base_url(); ?>" id="banner_home_url"><?php echo lang('home');?></a></em> <?php echo lang('aboutus'); ?></p>
        </div>
        <br>
        <br>
        <br>
        <!-- About us -->
        <div class="aboutus">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <h3><?php echo lang('whatisleantitle'); ?></h3>
                    <p align="justify"><?php echo lang('whatisleandata'); ?></p>
                    <br>
                    <br>
                    <h3><?php echo lang('leanpurposetitle'); ?></h3>
                    <p align="justify"><?php echo lang('leanpurposedata'); ?></p>
                    <br>
                    <br>
                    <h3><?php echo lang('leanactivitiestitle'); ?></h3>
                    <p align="justify"><?php echo lang('leanactivitiesdata'); ?></p>
                    <br>
                    <br>
                    <h3><?php echo lang('whatwedotitle'); ?></h3>
                    <p align="justify"><?php echo lang('whatwedodata'); ?></p>
                </div>
                <div class="col-md-5">
                    <h3><?php echo lang('howcanyouhelptitle'); ?></h3>
                    <h5><?php echo lang('howcanyouhelpsubtitle'); ?></h5>
                    <p align="justify">
                        <ul>
                        <?php 
                            $arr = explode(':',lang('howcanyouhelpbullets'));
                            foreach($arr as &$value){
                                echo '<li>'.$value.'</li>';
                            }
                        ?>
                        </ul>
                    </p>
                    <br>
                    <br>
                    <h3><?php echo lang('wherewearetitle'); ?></h3>
                    <h5><?php echo lang('wherewearesubtitle'); ?></h5>
                    <p align="justify"><?php echo lang('wherewearedata'); ?></p>
                    <br>
                    <br>
                    <h5><?php echo lang('institutionssubtitle'); ?></h5>
                    <p align="justify"><?php echo lang('institutionsdata'); ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>LEAN Anzoátegui</li>
                                <li>Funsaluz Barcelona, Valencia y Maracaibo</li>
                                <li>Fundación La Pastillita</li>
                                <li>LEAN Aragua 1</li>
                                <li>Parroquia Michelena</li>
                                <li>LEAN Caracas 1, 2, 3, 4, 5,
                                    6.7,8 y 9.</li>
                                <li>Seno Salud</li>
                                <li>Somos Ayuda</li>
                                <li>FDIV</li>
                                <li>Parroq. San Fco. de Asis</li>
                                <li>ONG Pan y Vino</li>
                                <li>LEAN Nueva Esparta</li>
                                <li>Parroquia San Félix</li>
                                <li>Fundación Esperanza de
                                    Vida</li>
                                <li>Caritas de Venezuela</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Fund. Denzel El Guerrero</li>
                                <li>Mensajeras de la Alegria</li>
                                <li>Caritas Valle de la Pascua</li>
                                <li>Caritas Diocesana
                                    Barquisimeto</li>
                                <li>Hogar de Niños impedidos
                                    Don Orione</li>
                                <li>AVEPEII</li>
                                <li>Casa Hogar Madre Teresa
                                    de Calcuta</li>
                                <li>Seminario Santa Rosa de
                                    Lima</li>
                                <li>Casa Aragón</li>
                                <li>Caritas Parroquial de
                                    Mérida</li>
                                <li>Asociación Dr. Paúl
                                    Moreno Camacho</li>
                                <li>FUNDAYÚDANOS</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>


        <!-- Newsletter -->
        <div class="row volunteers">
            <div class="col-md-3"></div>
            <div class="col-md-3"><i class="fa fa-lg fa-paper-plane" aria-hidden="true"></i>&nbsp;<h5 class="newsletter-title"><?php echo lang('registernewslettertitle'); ?></h5></div>
            <div class="col-md-3">
                <form action="<?php echo base_url().'index.php/welcome/send_email'; ?>" method="POST">
                    <input type="email" placeholder="Introduce to correo electronico" class="newsletter_input" id="newsletter_email" name="newsletter_email" required>
                    <input type="submit" value="Suscribir" class="newsletter_button">
                </form>
            </div>
            <div class="col-md-3"></div>
	    </div>
        <!-- Common Start -->
    </div>
</body>
<script src="<?php echo base_url().'application/assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/leanevent.js' ?>"></script>
</html>
<!-- Common end -->