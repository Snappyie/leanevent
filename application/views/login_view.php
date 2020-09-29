<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo lang('login');?></title> <!-- Edit title -->
</head>
<body>
    <link href="<?php echo base_url().'application/assets/css/leanevent.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().'application/assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div id="container">
        <!-- Common end -->
        <!-- login -->
        <div class="login-banner">
            <div class="bannerlogin"></div>
            <p class="absolute-text"><strong> <?php echo strtoupper(lang('login')); ?> </strong> <br /> <br /> <em><a href="<?php echo base_url(); ?>" id="banner_home_url"><?php echo lang('home');?></a></em> <?php echo lang('login'); ?></p>
            </p>
        </div>
        <br>
        <br>
        <br>
        <center>
            <div class="card w-75">
                <div class="card-body">
                    <h3 class="card-title" align="left"><?php echo lang('login');?></h3>
                    <br>
                    <br>
                    <form method="POST" action="login/loginRequest" enctype="application/x-www-form-urlencoded" onsubmit="return validateLogin()">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="usuario" align="left">
                                    <span><?php echo lang('email'); ?></span>
                                    <input type="email" class="form-control input-block-level" id="usuario" name="usuario" placeholder="<?php echo lang('email'); ?>" required/> <span id="user-error" class="error-help"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="contrasena" align="left">
                                    <span><?php echo lang('password'); ?></span>
                                    <input type="password" class="form-control input-block-level" id="contrasena" name="contrasena" placeholder="<?php echo lang('password'); ?>" required/> <span id="pass-error" class="error-help"></span>
                                </label>
                            </div>
                        </div>
                        <br>
                        <br>
                        <a href="#" data-target="#myModal" data-toggle="modal" ><?php echo lang('forgotpassword'); ?></a><br>
                        <button class="enviar" type="submit">
                            <?php echo lang('enter'); ?>
                        </button>
                    </form>
                    <br>
                    <br>
                </div>
            </div>
        </center>
        <!-- Common Start -->
    </div>
</body>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form method="POST" action="login.php?action=reset" enctype="application/x-www-form-urlencoded" onsubmit="return validateReset()">
        <div class="modal-header">
            <h4 class="modal-title"><?php echo lang('retrievepass'); ?></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <label for="correo">
                <span><?php echo lang('email');?></span>
                <input type="email" class="form-control input-block-level" id="correo" name="correo" placeholder="<?php echo lang('email');?>" required/> <span id="correo-error" class="error-help"></span>
            </label>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default close-button" data-dismiss="modal"><?php echo lang('close');?></button>
            <button class="btn btn-primary registrate" type="submit">
            <?php echo lang('enter'); ?>
            </button>
        </div>
      </form>
    </div>

  </div>
</div>
<script src="<?php echo base_url().'application/assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/leanevent.js' ?>"></script>
</html>
<!-- Common end -->