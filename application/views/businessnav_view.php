<!-- Navigation -->
<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="navigation">
  <nav class="navbar navbar-light navbar-expand-lg static-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url() ?>">
        <img src="<?php echo base_url().'application/assets/images/logo-blanco.png';?>" alt="logo" height="50" width="50">
        <h3 class="header-website-name">LEANEVENTOS</h3>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link language-icons" href="<?=base_url().'index.php/navcontroller/changeToEnglish' ?>">
              <img src="<?php echo base_url().'application/assets/images/english.png';?>" alt="english" height="20" width="40">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link language-icons" href="<?=base_url().'index.php/navcontroller/changeToSpanish' ?>">
              <img src="<?php echo base_url().'application/assets/images/spanish.png';?>" alt="spanish" height="20" width="40">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->session->userdata('active') == 'home') echo 'nav-active'; ?>" href="<?php echo base_url().'index.php/businesshome' ?>"><?php echo lang('home');?>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->session->userdata('active') == 'businessprofile') echo 'nav-active'; ?>" href="<?php echo base_url().'index.php/businessprofile' ?>"><?php echo lang('foundation'); ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>