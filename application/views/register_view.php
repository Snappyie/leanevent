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
<body>
    <link href="<?php echo base_url().'application/assets/css/leanevent.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().'application/assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div id="container">
        <!-- Common end -->
        <!-- Register -->
        <div class="register-banner">
            <div class="bannerregister"></div>
            <p class="absolute-text"><strong> <?php echo strtoupper(lang('registration')); ?> </strong> <br /> <br /> <em><a href="<?php echo base_url(); ?>" id="banner_home_url"><?php echo lang('home');?></a></em> <?php echo lang('registration'); ?></p>
            </p>
        </div>
        <br>
        <br>
        <br>
        <center>
            <div class="card w-75">
                <div class="card-body">
                    <h3 class="card-title" align="left"><?php echo lang('registertypetitle');?></h3>
                    <br>
                    <br>
                    <button class="btn btn-primary guardar-button" data-toggle="modal" data-target="#registerModalIndividual"><?php echo lang('registerbuttonindividual'); ?></button>
                    <button class="btn btn-primary guardar-button" data-toggle="modal" data-target="#registerModalBusiness"><?php echo lang('registerbuttonbusiness'); ?></button>
                    <button class="btn btn-primary guardar-button" data-toggle="modal" data-target="#registerModalAgent"><?php echo lang('registerbuttonagent'); ?></button>
                    <br>
                    <br>
                </div>
            </div>
        </center>
        <!-- Common Start -->
    </div>
</body>
<!-- Individual Registration -->
<div id="registerModalIndividual" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo lang('registermodalindividualheader'); ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url().'index.php/register/registerUser/individual'?>" enctype="application/x-www-form-urlencoded" onsubmit="return validateRegistrationForm('individual')">
                    <label for="correo-individual">
                        <span><h5><?php echo lang('email'); ?></h5></span>
                        <input type="email" class="form-control" id="correo-individual" name="correo-individual" placeholder="<?php echo lang('email'); ?>" require/><span id="correo-individual-error" class="error-help"></span>
                    </label>
                    <label for="contrasena-register-individual">
                        <span><h5><?php echo lang('password'); ?></h5></span>
                        <input type="password" class="form-control" id="contrasena-register-individual" name="contrasena-register-individual" placeholder="<?php echo lang('password'); ?>" require/><span id="contrasena-register-individual-error" class="error-help"></span>
                    </label>
                    <label for="nombre-register-individual">
                        <span><h5><?php echo lang('firstname'); ?></h5></span>
                        <input type="text" class="form-control" id="nombre-register-individual" name="nombre-register-individual" placeholder="<?php echo lang('firstname'); ?>" require/><span id="nombre-register-individual-error" class="error-help"></span>
                    </label>
                    <label for="apellido-register-individual">
                        <span><h5><?php echo lang('lastname'); ?></h5></span>
                        <input type="text" class="form-control" id="apellido-register-individual" name="apellido-register-individual" placeholder="<?php echo lang('lastname'); ?>" require/><span id="apellido-register-individual-error" class="error-help"></span>
                    </label>
                    <label for="direction-register-individual">
                        <span><h5><?php echo lang('address'); ?></h5></span>
                        <input type="text" class="form-control registration-input" id="direction-register-individual" name="direction-register-individual" placeholder="<?php echo lang('address'); ?>" require/><span id="direcion-register-individual-error" class="error-help"></span>
                    </label><br>
                    <label for="ciudad-register-individual">
                        <span><h5><?php echo lang('city'); ?></h5></span>
                        <input type="text" class="form-control registration-input" id="ciudad-register-individual" name="ciudad-register-individual" placeholder="<?php echo lang('city'); ?>" require/><span id="ciudad-register-individual-error" class="error-help"></span>
                    </label><br>
                    <label for="select-city-individual" class="city-select">
                        <span><h5><?php echo lang('state'); ?></h5></span>
                        <div>
                            <select id="select-city-individual" name="select-city-individual" class="form-control">
                                <option value="arlington" selected>Escoger</option>
                                <option value="dallas">Dallas</option>
                                <option value="austin">Austin</option>
                            </select>
                        </div>
                    </label>
                    <label for="postal-register-individual">
                        <span><h5><?php echo lang('postalcode'); ?></h5></span>
                        <input type="text" class="form-control" id="postal-register-individual" name="postal-register-individual" placeholder="<?php echo lang('postalcode'); ?>" pattern="[0-9]{5}" require/><span id="postal-register-individual-error" class="error-help"></span>
                    </label><br>
                    <button class="btn btn-primary registrate" type="submit">
                        <?php echo lang('register'); ?>
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-button" data-dismiss="modal"><?php echo lang('close');?></button>
            </div>
        </div>
    </div>
</div>
<!-- Agent Registration -->
<div id="registerModalAgent" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo lang('registermodalagentheader'); ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url().'index.php/register/registerUser/agent'?>" enctype="application/x-www-form-urlencoded" onsubmit="return validateRegistrationForm('agent')">
                    <label for="correo-agent">
                        <span><h5><?php echo lang('email'); ?></h5></span>
                        <input type="email" class="form-control" id="correo-agent" name="correo-agent" placeholder="<?php echo lang('email'); ?>" require/><span id="correo-agent-error" class="error-help"></span>
                    </label>
                    <label for="contrasena-register-agent">
                        <span><h5><?php echo lang('password'); ?></h5></span>
                        <input type="password" class="form-control" id="contrasena-register-agent" name="contrasena-register-agent" placeholder="<?php echo lang('password'); ?>" require/><span id="contrasena-register-agent-error" class="error-help"></span>
                    </label>
                    <label for="nombre-register-agent">
                        <span><h5><?php echo lang('firstname'); ?></h5></span>
                        <input type="text" class="form-control" id="nombre-register-agent" name="nombre-register-agent" placeholder="<?php echo lang('firstname'); ?>" require/><span id="nombre-register-agent-error" class="error-help"></span>
                    </label>
                    <label for="apellido-register-agent">
                        <span><h5><?php echo lang('lastname'); ?></h5></span>
                        <input type="text" class="form-control" id="apellido-register-agent" name="apellido-register-agent" placeholder="<?php echo lang('lastname'); ?>" require/><span id="apellido-register-agent-error" class="error-help"></span>
                    </label>
                    <label for="direction-register-agent">
                        <span><h5><?php echo lang('address'); ?></h5></span>
                        <input type="text" class="form-control registration-input" id="direction-register-agent" name="direction-register-agent" placeholder="<?php echo lang('address'); ?>" require/><span id="direcion-register-agent-error" class="error-help"></span>
                    </label><br>
                    <label for="ciudad-register-agent">
                        <span><h5><?php echo lang('city'); ?></h5></span>
                        <input type="text" class="form-control registration-input" id="ciudad-register-agent" name="ciudad-register-agent" placeholder="<?php echo lang('city'); ?>" require/><span id="ciudad-register-agent-error" class="error-help"></span>
                    </label><br>
                    <label for="select-city-agent" class="city-select">
                        <span><h5><?php echo lang('state'); ?></h5></span>
                        <div>
                            <select id="select-city-agent" name="select-city-agent" class="form-control">
                                <option value="arlington" selected>Escoger</option>
                                <option value="dallas">Dallas</option>
                                <option value="austin">Austin</option>
                            </select>
                        </div>
                    </label>
                    <label for="postal-register-agent">
                        <span><h5><?php echo lang('postalcode'); ?></h5></span>
                        <input type="text" class="form-control" id="postal-register-agent" name="postal-register-agent" placeholder="<?php echo lang('postalcode'); ?>" pattern="[0-9]{5}" require/><span id="postal-register-agent-error" class="error-help"></span>
                    </label><br>
                    <button class="btn btn-primary registrate" type="submit">
                        <?php echo lang('register'); ?>
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-button" data-dismiss="modal"><?php echo lang('close');?></button>
            </div>
        </div>
    </div>
</div>
<!-- Business Registration -->
<div id="registerModalBusiness" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo lang('registermodalbusinessheader'); ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url().'index.php/register/registerUser/business'?>" enctype="application/x-www-form-urlencoded" onsubmit="return validateRegistrationForm('business')">
                    <label for="correo-business">
                        <span><h5><?php echo lang('email'); ?></h5></span>
                        <input type="email" class="form-control" id="correo-business" name="correo-business" placeholder="<?php echo lang('email'); ?>" require/><span id="correo-business-error" class="error-help"></span>
                    </label>
                    <label for="contrasena-register-business">
                        <span><h5><?php echo lang('password'); ?></h5></span>
                        <input type="password" class="form-control" id="contrasena-register-business" name="contrasena-register-business" placeholder="<?php echo lang('password'); ?>" require/><span id="contrasena-register-business-error" class="error-help"></span>
                    </label>
                    <label for="nombre-register-business">
                        <span><h5><?php echo lang('firstname'); ?></h5></span>
                        <input type="text" class="form-control" id="nombre-register-business" name="nombre-register-business" placeholder="<?php echo lang('firstname'); ?>" require/><span id="nombre-register-business-error" class="error-help"></span>
                    </label>
                    <label for="apellido-register-business">
                        <span><h5><?php echo lang('lastname'); ?></h5></span>
                        <input type="text" class="form-control" id="apellido-register-business" name="apellido-register-business" placeholder="<?php echo lang('lastname'); ?>" require/><span id="apellido-register-business-error" class="error-help"></span>
                    </label>
                    <label for="direction-register-business">
                        <span><h5><?php echo lang('address'); ?></h5></span>
                        <input type="text" class="form-control registration-input" id="direction-register-business" name="direction-register-business" placeholder="<?php echo lang('address'); ?>" require/><span id="direcion-register-business-error" class="error-help"></span>
                    </label><br>
                    <label for="ciudad-register-business">
                        <span><h5><?php echo lang('city'); ?></h5></span>
                        <input type="text" class="form-control registration-input" id="ciudad-register-business" name="ciudad-register-business" placeholder="<?php echo lang('city'); ?>" require/><span id="ciudad-register-business-error" class="error-help"></span>
                    </label><br>
                    <label for="select-city-business" class="city-select">
                        <span><h5><?php echo lang('state'); ?></h5></span>
                        <div>
                            <select id="select-city-business" name="select-city-business" class="form-control">
                                <option value="arlington" selected>Escoger</option>
                                <option value="dallas">Dallas</option>
                                <option value="austin">Austin</option>
                            </select>
                        </div>
                    </label>
                    <label for="postal-register-business">
                        <span><h5><?php echo lang('postalcode'); ?></h5></span>
                        <input type="text" class="form-control" id="postal-register-business" name="postal-register-business" placeholder="<?php echo lang('postalcode'); ?>" pattern="[0-9]{5}" require/><span id="postal-register-business-error" class="error-help"></span>
                    </label><br>
                    <label class="radio-inline"><input type="radio" name="negocio" value="Tipo de negocio 1" checked>Tipo de negocio 1</label>
                    <label class="radio-inline"><input type="radio" name="negocio" value="Tipo de negocio 2" >Tipo de negocio 2</label>
                    <label class="radio-inline"><input type="radio" name="negocio" value="Tipo de negocio 3" >Tipo de negocio 3</label>
                    <button class="btn btn-primary registrate" type="submit">
                        <?php echo lang('register'); ?>
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-button" data-dismiss="modal"><?php echo lang('close');?></button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url().'application/assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/leanevent.js' ?>"></script>
</html>
<!-- Common end -->