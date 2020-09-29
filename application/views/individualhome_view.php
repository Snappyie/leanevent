<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo lang('home');?></title> <!-- Edit title -->
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
            <h3><?php echo lang('eventlist'); ?></h3>
        </center>
        <?php
            $this->load->model('IndividualHomeModel');
            $events = $this->IndividualHomeModel->events;
            if (count($events) == 0) {
        ?>
        <center>
        <p>No events to display</p>
        </center>
            <?php } else { ?>
        <table class="table table-responsive-xl">
            <thead class="thead-light">
                <tr>
                <th scope="col" colspan="2" class="table-header"><?php echo lang('eventdetails'); ?></th>
                <th scope="col" class="table-header"><?php echo lang('place'); ?></th>
                <th scope="col" class="table-header"><?php echo lang('date'); ?></th>
                <th scope="col" class="table-header"><?php echo lang('hour'); ?></th>
                <th scope="col" class="table-header"><?php echo lang('assistance'); ?></th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach($events as $row) {
            ?>
                <tr>
                <td><img src="<?php echo base_url()."application/assets/images/events/".$row->imagen; ?>" alt="" width="100px" height="130px"></td>
                <td class="table-header"><strong><?php echo $row->nombre_del_evento; ?></strong></td>
                <td class="table-header"><?php echo $row->place; ?></td>
                <td class="table-header"><?php echo $row->fecha; ?></td>
                <td class="table-header"><?php echo $row->hora; ?></td>
                <td class="table-header">
                    <form action="<?php echo base_url().'index.php/individualhome/registerEvent/'.$row->id?>" method="POST">
                        <button type="submit" class="enviar">
                            <?php echo lang('confirm'); ?>
                        </button>
                    </form>
                </td>
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