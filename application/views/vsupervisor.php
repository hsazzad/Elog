
<!DOCTYPE html>
<html lang="en">
  <head>
    
   
    <link rel="icon" href="<?php echo base_url();?>images/Lock1.ico">
    <title>Registration</title>
    <link href="<?php echo base_url();?>css/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/css/bootstrap.min.css" rel="stylesheet">
<style>

body {
  
  background-color: #eee;
  
}

.form-horizontal {
  max-width: 630px;
  padding: 25px;
  margin: 0 auto;
}
.form-control {
 
  margin-bottom: 10px;
}
  
.navbar-collapse {
        position: absolute;
        left: 40%;
        text-align: center;
     top:15%;
	  font-family: 'Georgia';
    }
	.navbar-brand-centered1 {
        position: absolute;
        left: 22%;
		text-align: center;
		top:-20%;
		 font-family: 'Arial';
    }

</style>
	
	<script src="<?php echo base_url();?>css/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>css/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>css/js/bootstrap.js"></script>
  </head>

  <body>
  <h4> You have signed in as <b> <?php echo $this->session->userdata('Name'); ?> </b> </h4>
  </body>
</html>
