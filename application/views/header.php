<!DOCTYPE html>
<html lang="en">
  <head>
   

    <title>Sylobpsm</title>
 <link rel="icon" href="<?php echo base_url();?>images/Lock1.ico">
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
	 <link href="<?php echo base_url();?>assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
   
      <script src="<?php echo base_url();?>js/html5shiv.js"></script>
      <script src="<?php echo base_url();?>js/respond.min.js"></script>
  
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
					   <?php $i=0;?>
					<?php   foreach ($query2->result() as $row2) { 
					$cid= $row2->id;
	echo "<input type='hidden' id='cid' name='cid' value='".$cid."'>"; ?>
	
                          <a href="<?php  $this->load->helper('url'); echo site_url("/evaluate/show?cid=").$cid; ?>">
                           
                                    <span class="subject">
                                    <span class="from"><?php echo $row2->UID; ?></span>
                                    <span class="time">11.00 AM</span>
                                    </span>
                                    <span class="message">
                                       <?php echo $row2->Coursename;?>
                                    </span>
                          </a>
						  <?php $i++;} ?>
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
                        
                         <li><a href="<?php  $this->load->helper('url'); echo site_url("/login/do_logout"); ?>"><i class="icon-key"></i> Log keluar</a></li>
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
		 <li><a href="<?php  $this->load->helper('url'); echo site_url("/courseview/index"); ?>">Senarai Latihan </a></li>
			   <li><a href="<?php  $this->load->helper('url'); echo site_url("/courseinfo/index"); ?>">Tambah Maklumat Latihan</a></li>
  
  
  
  
   <li><a href="<?php  $this->load->helper('url'); echo site_url("/evaluate/index"); ?>">Senarai Latihan untuk disahkan</a></li>
              


                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->