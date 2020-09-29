<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo lang('home');?></title>
</head>
<body onload="javascript:showSlides();showLogoSlides(1);">
<link href="<?php echo base_url().'application/assets/css/leanevent.css' ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url().'application/assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<div id="container">
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
				<h3><?php echo lang('whatwedo'); ?></h3>
			</div>
			<div class="line_div">
				<hr class="line">
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<br>
	<br>
	<br>
	<div class="col-md-8 offset-md-2">
		<p align="center"><?php echo lang('whatwedotext'); ?></p>
	</div>
	<br>
	<br>
	<br>
	<div class="row volunteers">
		<div class="col-md-4 volunteer-media" align="right">
			<h1 class="volunteer-right">478</h1>
            <h3><?php echo lang('volunteers'); ?></h3>
		</div>
		<div class="col-md-4" align="center">
			<h1>60.000</h1>
            <h3><?php echo lang('peoplebenefited'); ?></h3>
		</div>
		<div class="col-md-4 volunteer-media" align="left">
			<h1 class="volunteer-left">45</h1>
            <h3><?php echo lang('allies'); ?></h3>
		</div>
	</div>
	<div class="quienes_somos">
		<div class="aboutbanner"></div>
		<p class="absolute-text"> <b> "La injusticia, en cualquier parte, es una amenaza a la justicia en todas
				partes."</b></p>
		<p class="absolute-text-by"> <br> <i>Martin Luther King</i> </p>
	</div>
	<br>
	<br>
	<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10" align="center">
			<div class="line_div">
				<hr class="line">
			</div>
			<div class="line_div">
				<h3><?php echo lang('allies'); ?></h3>
			</div>
			<div class="line_div">
				<hr class="line">
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	<div class="slideshow-container-logo">
		<div class="mySlides fade">
			<img src="<?php echo base_url().'application/assets/images/logo1.PNG' ?>" width="300px">
			<img src="<?php echo base_url().'application/assets/images/logo2.PNG' ?>" width="300px">
			<img src="<?php echo base_url().'application/assets/images/logo3.PNG' ?>" width="300px">
			<img src="<?php echo base_url().'application/assets/images/logo4.PNG' ?>" width="300px">
		</div>
		<div class="mySlides fade">
			<img src="<?php echo base_url().'application/assets/images/logo5.PNG' ?>" width="300px">
			<img src="<?php echo base_url().'application/assets/images/logo6.PNG' ?>" width="300px">
			<img src="<?php echo base_url().'application/assets/images/logo7.PNG' ?>" width="300px">
			<img src="<?php echo base_url().'application/assets/images/logo8.PNG' ?>" width="300px">
		</div>
		<div class="prev-next-buttons">
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
	</div>
	<br>
	<br>
	<br>
	<?php echo validation_errors(); ?>
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
</div>

</body>
<script src="<?php echo base_url().'application/assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/leanevent.js' ?>"></script>
</html>