<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo lang('volunteerlist');?></title> <!-- Edit title -->
</head>
<body>
    <link href="<?php echo base_url().'application/assets/css/leanevent.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().'application/assets/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div id="container">
        <!-- Common end -->
        <br>
        <br>
        <br>
        <center>
            <h3><?php echo lang('volunteerlist'); ?></h3>
        </center>
        <br>
        <br>
        <?php
            $this->load->model('VolunteerListModel');
            $volunteers = $this->VolunteerListModel->volunteers;
            if (count($volunteers) == 0) {
        ?>
        <center>
        <p>No volunteers to display</p>
        </center>
            <?php } else { ?>
        <table class="table table-responsive-xl">
            <thead class="thead-light">
                <tr>
                <th scope="col" colspan="2" class="table-header"><?php echo lang('volunteername'); ?></th>
                <th scope="col" class="table-header"><?php echo lang('email'); ?></th>
                <th scope="col" class="table-header"><?php echo lang('telephone'); ?></th>
                <th scope="col" class="table-header"><?php echo lang('event'); ?></th>
                <th scope="col" class="table-header"><?php echo lang('responsible'); ?></th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach($volunteers as $row) {
            ?>
                <tr>
                <td><img src="<?php echo base_url()."application/assets/images/users/".$row->image; ?>" alt="" width="100px" height="130px"></td>
                <td class="table-header"><strong><?php echo $row->nombre; ?></strong></td>
                <td class="table-header"><?php echo $row->correo; ?></td>
                <td class="table-header"><?php echo $row->telefono; ?></td>
                <td class="table-header"><?php echo $row->nombre_del_evento; ?></td>
                <td class="table-header"><?php echo $row->encargados; ?></td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
        <!-- Common Start -->
    </div>
</body>
<script src="<?php echo base_url().'application/assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'application/assets/js/leanevent.js' ?>"></script>
</html>
<!-- Common end -->