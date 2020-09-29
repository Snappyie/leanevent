<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo lang('agent');?></title> <!-- Edit title -->
</head>
<body>
    <link href="<?php echo base_url().'application/assets/css/leanevent.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().'application/assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div id="container">
        <!-- Common end -->
        <!-- Register -->
        <div class="contact_banner">
            <div class="bannercontacto"></div>
            <p class="absolute-text"><strong> <?php echo strtoupper(lang('profile')); ?> </strong> <br /> <br /> <em><a href="<?php echo base_url(); ?>" id="banner_home_url"><?php echo lang('home');?></a></em> <?php echo lang('profile'); ?></p>
            </p>
        </div>
        <br>
        <br>
        <center>
            <div class="row">
                <div class="col-md-4">
                    <i class="fa fa-book" aria-hidden="true"></i><?php echo lang('namesinscribed'); ?>
                    <br>
                    <br>
                    <i class="fa fa-book" aria-hidden="true"></i><?php echo lang('namesinscribed'); ?>
                    <br>
                    <br>
                    <i class="fa fa-user" aria-hidden="true"></i><?php echo lang('username'); ?>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                        198 West 21st Street, <br> Suite 721 New York NY 10016
                        <br>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    +1 1235 2355 98
                    <br>
                    <br>
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            info@diazapps.com
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url().'application/assets/images/nologo.png' ?>" alt="" width="150px" height="150px">
                </div>
            </div>
        </center>
        <center>
            <?php 
                $this->load->model('AgentProfileModel');
                $users = $this->AgentProfileModel->get_details();
                $user = $users[0];
            ?>
            <?php echo form_open_multipart('index.php/agentprofile/update')?>
            <div class="card w-75">
                <div class="card-body">
                    <h3 class="card-title" align="left"><?php echo lang('keepintouch'); ?></h3>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group" align="left">
                                <label for="profile-nombre"><?php echo lang('firstname'); ?></label>
                                <input type="text" class="form-control" name="profile-nombre" id="profile-nombre" aria-describedby="emailHelp" value="<?php echo $user->nombre; ?>" readonly>
                            </div>
                            <div class="form-group" align="left">
                                <label for="profile-apellido"><?php echo ucwords(strtolower(lang('lastname'))); ?></label>
                                <input type="text" class="form-control" id="profile-apellido" name="profile-apellido" value="<?php echo $user->apellido; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="<?php if($user->image == NULL) echo base_url().'application/assets/images/nologo.png'; else echo base_url().'application/assets/images/users/'.$user->image;?>" alt="" width="150px" height="150px">
                            <div class="enviar">
                                <label for="files" class="files-label">
                                    <?php echo lang('selectimage'); ?>
                                </label>
                                <input id="files" class="files" name="fileToUpload" style="display:none" type="file">
                                <span id="image-error" class="error-help"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12" align="left">
                            <label for="profile-correo"><?php echo ucwords(strtolower(lang('email'))); ?></label>
                            <input type="text" class="form-control" name="profile-correo" id="profile-correo" value="<?php if($user->correo != NULL) echo $user->correo; ?>" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-4" align="left">
                            <label for="profile-telefono"><?php echo ucwords(strtolower(lang('telephone'))); ?></label>
                            <input type="text" class="form-control" name="profile-telefono" id="profile-telefono" value="<?php if($user->telefono != NULL) echo $user->telefono; ?>" required>
                        </div>
                        <div class="form-group col-md-4" align="left">
                        <label for="profile-usuario"><?php echo ucwords(strtolower(lang('username'))); ?></label>
                            <input type="text" name="profile-usuario" class="form-control" id="profile-usuario" value="<?php if($user->usuario != NULL) echo $user->usuario; ?>" required>
                        </div>
                        <div class="form-group col-md-4" align="left">
                            <label for="profile-contrasena"><?php echo ucwords(strtolower(lang('password'))); ?></label>
                            <input type="password" class="form-control" name="profile-contrasena" id="profile-contrasena" value="<?php if($user->contrasena != NULL) echo $user->contrasena; ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="note-div" align="left">
                            <p class="note"><?php echo lang('note'); ?>:</p>
                            <p><?php echo lang('notechange'); ?></p>
                        </div>
                    </div>
                    <button class="guardar-button-event" type="submit">
                        <?php echo lang('savechanges'); ?>
                    </button>
                </div>
            </div>
            </form>
        </center>
        <!-- Common Start -->
    </div>
</body>
<script src="<?php echo base_url().'application/assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/leanevent.js' ?>"></script>
</html>
<!-- Common end -->