<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo lang('events');?></title> <!-- Edit title -->
</head>
<body>
    <link href="<?php echo base_url().'application/assets/css/leanevent.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().'application/assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div id="container">
        <!-- Common end -->
        <!-- Register -->
        <div class="register-banner">
            <div class="bannerregister"></div>
            <p class="absolute-text"><strong> <?php echo strtoupper(lang('registerevent')); ?> </strong> <br /> <br /> <em><a href="<?php echo base_url(); ?>" id="banner_home_url"><?php echo lang('home');?></a></em> <?php echo lang('registerevent'); ?></p>
            </p>
        </div>
        <center>
            <?php
                if($this->uri->segment(2) == "edit"){
                    echo form_open_multipart('index.php/addevent/update/'.$this->uri->segment(3));
                    $isedit = TRUE;
                    $this->load->model('AddEventModel');
		            $event = $this->AddEventModel->events[0];
                } else {
                    echo form_open_multipart('index.php/addevent/add');
                    $isedit = FALSE;
                }
            ?>
            <div class="card w-75">
                <div class="card-body">
                    <h3 class="card-title" align="left"><?php echo lang('registerevent'); ?></h3>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group" align="left">
                                <label for="profile-nombre"><?php echo lang('firstname'); ?></label>
                                <input type="text" class="form-control" name="profile-nombre" id="profile-nombre" aria-describedby="emailHelp" placeholder="<?php echo ucwords(strtolower(lang('eventname'))); ?>" value="<?php if($isedit) echo $event->nombre_del_evento; ?>">
                            </div>
                            <div class="form-group" align="left">
                                <label for="profile-apellido"><?php echo ucwords(strtolower(lang('responsible'))); ?></label>
                                <input type="text" class="form-control" id="profile-apellido" name="responsable" placeholder="<?php echo ucwords(strtolower(lang('responsible'))); ?> " value="<?php if($isedit) echo $event->encargados; ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="<?php if($isedit) echo base_url().'application/assets/images/events/'.$event->imagen; else echo base_url().'application/assets/images/imagensubir.png'?>" alt="" width="150px" height="150px">
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
                            <label for="profile-correo"><?php echo ucwords(strtolower(lang('place'))); ?></label>
                            <input type="text" class="form-control" name="lugar" id="profile-correo" placeholder="<?php echo ucwords(strtolower(lang('place'))); ?>"  value="<?php if($isedit) echo $event->place; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-4" align="left">
                            <label for="profile-telefono"><?php echo ucwords(strtolower(lang('date'))); ?></label>
                            <input type="date" class="form-control" name="fecha" id="profile-telefono" placeholder=""  value="<?php if($isedit) echo $event->fecha; ?>">
                        </div>
                        <div class="form-group col-md-4" align="left">
                        <label for="profile-contrasena"><?php echo ucwords(strtolower(lang('hour'))); ?></label>
                            <input type="text" name="hora" class="form-control" id="profile-contrasena" placeholder="00:00"  value="<?php if($isedit) echo $event->hora; ?>">
                        </div>
                        <div class="form-group col-md-4" align="left">
                            <label for="profile-contrasena"><?php echo ucwords(strtolower(lang('price'))); ?></label>
                            <input type="text" class="form-control" name="valor_de_boleto" id="profile-contrasena" placeholder="$000.00" value="<?php if($isedit) echo $event->valor_de_boleto; ?>">
                        </div>
                    </div>
                    <button class="guardar-button-event" type="submit">
                        <?php echo lang('save') ?>
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