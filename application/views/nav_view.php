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
            <a class="nav-link <?php if($this->session->userdata('active') == 'home') echo 'nav-active'; ?>" href="<?php echo base_url() ?>"><?php echo lang('home');?>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->session->userdata('active') == 'aboutus') echo 'nav-active'; ?>" href="<?php echo base_url().'index.php/aboutus' ?>"><?php echo lang('aboutus');?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://swapniljangam.uta.cloud/JANGAM_LEANEVENT/blog/"><?php echo lang('blog');?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php if($this->session->userdata('active') == 'register') echo 'nav-active'; ?>" href="<?php echo base_url().'index.php/register' ?>"><?php echo lang('registration');?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php if($this->session->userdata('active') == 'contactus') echo 'nav-active'; ?>" href="<?php echo base_url().'index.php/contactus' ?>"><?php echo lang('contactus');?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->session->userdata('active') == 'login') echo 'nav-active'; ?>" href="<?php echo base_url().'index.php/login' ?>"><?php echo lang('login');?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->session->userdata('active') == 'buyfromus') echo 'nav-active'; ?>" href="<?php echo base_url().'index.php/buyfromus' ?>"><?php echo lang('buyfromus');?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>