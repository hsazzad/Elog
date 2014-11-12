<!DOCTYPE html>
<html lang="en">
  <head>
   

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/jquery-multi-select/css/multi-select.css" />


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo" >Sylo<span>Bpsm</span></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
              <!-- settings start -->
             
              <!-- inbox dropdown start-->
			   <?php
  $UID=$this->session->userdata('UID');
   	  
		  $query1 = $this->db->get_where('user', array('UID' => $UID));
foreach ($query1->result() as $row1)
{
          $egrade= $row1->Grade;
		  $name= $row1->Name;
		  $email= $row1->Email;
}
	$Status = "Pending";
		  $query2 = $this->db->get_where('course', array('Supervisor_Grade' => $egrade, 'Status' => $Status));
	 
	$num=$query2->num_rows();
	
				   
				   ?>
              <li id="header_inbox_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <i class="icon-envelope-alt"></i>
                      <span class="badge bg-important"><?php echo $num; ?></span>
                  </a>
				 
                  <ul class="dropdown-menu extended inbox">
                      <div class="notify-arrow notify-arrow-red"></div>
                      <li>
                          <p class="red">You have <?php echo $num; ?> new messages</p>
                      </li>
					   <li>
                          <a href="#">
                           
                                    <span class="subject">
                                    <span class="from"><?php echo $name; ?></span>
                                    <span class="time"><?php echo $egrade; ?></span>
                                    </span>
                                    <span class="message">
                                        <?php echo $email; ?>
                                    </span>
                          </a>
                      </li>
                   
              <!-- inbox dropdown end -->
           
              <!-- notification dropdown end -->
          </ul>
          </div>
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                 
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      
						  <?php $UID=$this->session->userdata('UID'); ?>
                          <span class="username"><?php echo $UID; ?> </span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                        
                          <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
		
			   <li role="presentation"><a href="<?php  $this->load->helper('url'); echo site_url("/courseinfo/index"); ?>">Maklumat Program Latihan</a></li>
  
  
  <li role="presentation" class="active"><a href="<?php  $this->load->helper('url'); echo site_url("/evaluate/index"); ?>">Pengesahan <span class="badge">
  <?php
  $UID=$this->session->userdata('UID');
   	  
		  $query1 = $this->db->get_where('user', array('UID' => $UID));
foreach ($query1->result() as $row1)
{
          $egrade= $row1->Grade;
}
	$Status = "Pending";
		  $query2 = $this->db->get_where('course', array('Supervisor_Grade' => $egrade, 'Status' => $Status));
	 
	$num=$query2->num_rows();
	if($num>0)
	{
	echo $num;
	}
				   
				   ?>
  </span></a></li>
              


                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->