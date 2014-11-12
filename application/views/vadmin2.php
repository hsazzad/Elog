
<!DOCTYPE html>
<html lang="en">
  <head>
    
   
    <link rel="icon" href="<?php echo base_url();?>images/Lock1.ico">
    <title>Admin panel</title>
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
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="collapse navbar-collapse">
       
    <h4> You have signed in as <b> <?php echo $this->session->userdata('Name'); ?> </b> </h4>
        
    </div>
	<div class="navbar-brand navbar-brand-centered1">
       
    <b><a href="<?php  $this->load->helper('url'); echo site_url("/login/do_logout"); ?>"> <span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></b>
    
    </div>
    </div> 
	
	
		
   <div class="jumbotron">
   <div class="container">
	
	<p>No data found </p>
	
	</div>
    </div> 
	
	
  </body>
</html>
