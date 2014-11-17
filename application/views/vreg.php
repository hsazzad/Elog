<?php 
 
header("cache-Control: no-store, no-cache, must-revalidate");
header("cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
			

    <title>Sylobpsm Daftar</title>
<link rel="icon" href="<?php echo base_url();?>images/Lock1.ico">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="<?php echo base_url();?>stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="<?php echo base_url();?>stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="<?php echo base_url();?>stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

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

  <br/>
     <br/>
      <!--main content start-->
      <section id="main-content">
          
              <!-- page start-->
     
              <div class="row">
                 
              
				
                  <div class="col-md-7 col-md-offset-1">
                      <section class="panel">
                          <header class="panel-heading">
                         <center>    Daftar</center>
                          </header>
                          <div class="panel-body">
						  						  		 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
														 $this->load->helper('form');
															?>
                            <form  method="post" action="<?php  $this->load->helper('url'); echo site_url("/creg/insert"); ?>" role="form">
                                  <div class="form-group">
		
	
                                      <label for="exampleInputEmail1">Nama Penuh</label>
                                      <input type="text" class="form-control" id ="Name" name = "Name"   value="<?php echo set_value('Name'); ?>" required autofocus>
                                  </div>
                                  <div class="form-group">
                                      <label for="ic">No. Kad Pengenalan <?php echo form_error('ID'); ?></label>
                                      <input type="text"  maxlength="12" class="form-control" name = "ID"  value="<?php echo set_value('ID'); ?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="grade">Gelaran Jawatan<?php echo form_error('Grade'); ?></label>
                                 <input type="text" class="form-control" name = "Grade"  value="<?php echo set_value('Grade'); ?>" required>
                                  </div>
								   <div class="form-group">
                                      <label for="grade">Tarikh Lantikan</label>
                            
                                                  <input id="datepicker" type="text" placeholder="" name = "Date" class="form-control" value="<?php echo set_value('Date'); ?>">
                                                 
                                            
                                  </div>
								   <div class="form-group">
                                      <label for="grade">Unit/Bahagian/Jabatan</label>
                               <input type="text" class="form-control" name = "Unit" placeholder="Unit/Bahagian/Jabatan" value="<?php echo set_value('Unit'); ?>" required>
                                  </div>
								   <div class="form-group">
								   <label for="inputUnit">Username <?php echo form_error('UID'); ?></label>
                                    
                               <input type="text" class="form-control" name = "UID" placeholder="User ID" value="<?php echo set_value('UID'); ?>">
                                  </div>
								    <div class="form-group">
								<label for="inputPassword">Kata Laluan <?php echo form_error('Password'); ?></label>
                                    
                               <input type="password" class="form-control" name = "Password" placeholder="Kata Laluan" required>
                                  </div>
								   <div class="form-group">
								<label for="inputPassword">Ulang Kata Laluan <?php echo form_error('passconf'); ?></label>
                                    
                               <input type="password" class="form-control" name = "passconf" required>
                                  </div>
								    <div class="form-group">
								<label for="inputEmail">Email</label><?php echo form_error('Email'); ?>
                                    
                              <input type="email" class="form-control" name = "Email" placeholder="Email" value="<?php echo set_value('Email'); ?>" required>
                                  </div>
                                  
                               <center>   <button type="submit" class="btn btn-info ">Hantar</button></center>
                              </form>

                          </div>
                      </section>
                  </div>
                     

             
                                  </div>
                              </section>
                          </div>
                      </div>

     </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 &copy; SyloBpsm by goldtechsolution.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script src="<?php echo base_url();?>js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="<?php echo base_url();?>js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="<?php echo base_url();?>js/ga.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="<?php echo base_url();?>js/respond.min.js" ></script>

<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  <!--common script for all pages-->
    <script src="<?php echo base_url();?>js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="<?php echo base_url();?>js/form-component.js"></script>

  </body>
</html>
