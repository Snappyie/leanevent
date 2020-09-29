<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo lang('contactus');?></title> <!-- Edit title -->
</head>
<body>
    <link href="<?php echo base_url().'application/assets/css/leanevent.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().'application/assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div id="container">
        <!-- Common end -->
        <!-- Contacto -->
        <div class="contact_banner">
            <div class="bannercontacto"></div>
            <p class="absolute-text"><strong> <?php echo strtoupper(lang('contactus')); ?> </strong> <br /> <br /> <em><a href="<?php echo base_url(); ?>" id="banner_home_url"><?php echo lang('home');?></a></em> <?php echo lang('contactus'); ?></p>
            </p>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <strong>
                <h5><?php echo lang('contactinfo'); ?></h5>
                </strong>
                <div class="row">
                    <div class="col-md-3">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        198 West 21st Street, Suite 721 New York NY 10016
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        +1 1235 2355 98
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        info@diazapps.com
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        diazapps.com
                    </div>
                </div>
                <br>
                <strong>
                <h5><?php echo lang('leansocial');?></h5>
                </strong>
                <div class="row">
                    <div class="col-md-3" align="center">
                        <a href="https://www.facebook.com/LeanAyudaHumanitaria/">
                            <figure>
                                <img src="<?php echo base_url().'application/assets/images/facebook.png'?>" alt="facebook link" width="50px" height="50px">
                                <figcaption>LEAN Ayuda Humanitaria</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-3" align="center">
                        <a href="https://twitter.com/leanemergente">
                            <figure>
                                <img src="<?php echo base_url().'application/assets/images/twitter.png'?>" alt="twitter link" width="50px" height="50px">
                                <figcaption>@LeanEmergente</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-3" align="center">
                        <a href="https://www.instagram.com/leanayudahumanitaria/?hl=en">
                            <figure>
                                <img src="<?php echo base_url().'application/assets/images/instagram.png'?>" alt="instagram link" width="50px" height="50px">
                                <figcaption>@LeanAyudaHumanitaria</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-3" align="center">
                        <a href="mailto:lean.emergente@gmail.com">
                            <figure>
                                <img src="<?php echo base_url().'application/assets/images/correo.png'?>" alt="gmail link" width="50px" height="50px">
                                <figcaption>lean.emergente@gmail.com</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="card w-100">
                    <div class="card-body">
                        <h3 class="card-title" align="left"><?php echo lang('keepintouch');?></h3>
                        <br>
                        <br>
                        <form method="POST" id="contact-form" action="<?php echo base_url().'index.php/contactus/sendMessage'; ?>" enctype="application/x-www-form-urlencoded" onsubmit="return validateContactForm()">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" align="left">
                                        <label for="profile-nombre"><?php echo lang('firstname'); ?></label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="<?php echo lang('firstname');?>" pattern="[a-zA-Z]+" required/> <span id="nombre-error" class="error-help"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" align="left">
                                        <label for="profile-apellido"><?php echo ucwords(strtolower(lang('lastname'))); ?></label>
                                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="<?php echo lang('lastname');?>" pattern="[a-zA-Z]+" required/> <span id="apellido-error" class="error-help"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12" align="left">
                                    <label for="correo"><?php echo ucwords(strtolower(lang('email'))); ?></label>
                                    <input type="email" class="form-control" name="correo" id="correo" placeholder="<?php echo lang('email');?>" required><span id="correo-error" class="error-help"></span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-12" align="left">
                                    <label for="tema"><?php echo ucwords(strtolower(lang('topic'))); ?></label>
                                    <input type="text" class="form-control" name="tema" id="tema" placeholder="<?php echo lang('topicmessage');?>" required/>  <span id="tema-error" class="error-help"></span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-12" align="left">
                                    <label for="mensaje"><?php echo ucwords(strtolower(lang('saysomething'))); ?></label>
                                    <input type="text" class="form-control mensaje-contact" name="mensaje" id="mensaje" placeholder="<?php echo lang('saysomething');?>" required></textarea> <span id="mensaje-error" class="error-help"></span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <center>
                                <button class="btn btn-primary enviar" type="submit">
                                    <?php echo lang('sendmessage');?>
                                </button>
                            </center>
                        </form>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!-- Common Start -->
    </div>
</body>
<script src="<?php echo base_url().'application/assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/leanevent.js' ?>"></script>
</html>
<!-- Common end -->