<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>SyloBpsm</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="lock-screen">

    <div class="container">

       <form class="form-horizontal" method="post" action="<?php  $this->load->helper('url'); echo site_url("/creg/insert"); ?>">
			
			
			 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->helper('form');
?>
			  <div class="login-wrap">
			<label for="inputName">Full Name</label>
			
			<input type="text" class="form-control" id ="Name" name = "Name" placeholder="Full Name"  value="<?php echo set_value('Name'); ?>" required autofocus>
			<label for="inputID">Identity Card No</label>
			<input type="text" class="form-control" name = "ID" placeholder="Identity Card No" value="<?php echo set_value('ID'); ?>" required>
			<label for="inputGrade">Post/Grade</label>
			<input type="text" class="form-control" name = "Grade" placeholder="Post/Grade" value="<?php echo set_value('Grade'); ?>" required>
			<label for="inputDate">Appointment Date</label>
			<input type="text" class="form-control" name = "Date" placeholder="Day/Month/Year" value="<?php echo set_value('Date'); ?>"required>
			<label for="inputUnit">Division/Branch/Unit</label>
			<input type="text" class="form-control" name = "Unit" placeholder="Division/Branch/Unit" value="<?php echo set_value('Unit'); ?>" required>
			<label for="inputUnit">User ID <?php echo form_error('UID'); ?></label>
		
			<input type="text" class="form-control" name = "UID" placeholder="User ID" value="<?php echo set_value('UID'); ?>">
			<label for="inputPassword">Password <?php echo form_error('Password'); ?></label>
			<input type="password" class="form-control" name = "Password" placeholder="Password" required>
			<label for="inputEmail">Email</label>
            <input type="email" class="form-control" name = "Email" placeholder="Email" value="<?php echo set_value('Email'); ?>" required>

 <button type="submit" class="btn btn-primary btn-block" >Register</button>
  <button class="btn btn-default btn-block" type="reset">Reset</button>
</div></form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>


  </body>
</html>
