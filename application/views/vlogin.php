
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="icon" href="<?php echo base_url();?>images/Lock1.ico">
    <title>Log In</title>
	<link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet">

	

  </head>

  <body>



    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.jpg" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Log Masuk</h3>
                    </div>
                    <div class="panel-body">
                         <form class="form-signin" role="form"  method="post" action="<?php  $this->load->helper('url'); echo site_url("/login/process"); ?>">
        
        
		<?php if(! is_null($msg)) echo $msg;?>  
		
                                          <div class="form-group">
                                        <input class="form-control" type="text" class="form-control" id ="UID" name ="UID" placeholder="Username" required autofocus>                                        
                                </div>
									
								
                                          <div class="form-group">
                                        <input type="password" class="form-control" id ="Password" name ="Password" placeholder="Password" required>
                                </div>
								   <div class="form-group">
		<select class="form-control" id= "User_type" name="User_type">
			<option value="User">Kakitangan</option>
			<option value="Admin">Admin</option>			
		</select></div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log Masuk</button>
		<hr></hr>
     <center> <p> <a href="<?php  $this->load->helper('url'); echo site_url("/creg"); ?>" >Daftar</a> untuk penguna baru </p></center>
	  </form>
                    </div>
                </div>
            </div>
        </div>
   

     <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
  </body>
</html>
