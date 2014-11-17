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
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
<style>
.scrollable-menu {
    height: auto;
    max-height: 900px;
    overflow: scroll;
}


  input {
  text-transform: uppercase;
}
  


</style>
  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
        
          <div class="sidebar-toggle-box">
		   <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo" >Sylo<span>Bpsm</span>  Admin</a>
          <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
              <!-- settings start -->
             
              <!-- inbox dropdown start-->
			   <?php
  $UID=$this->session->userdata('UID');

	$Status = "Belum Selesai";
		  $query2 = $this->db->get_where('course', array( 'Status' => $Status));
	 
	$num=$query2->num_rows();
	


	
	
	
	
				   
				   ?>
              <li id="header_inbox_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <i class="icon-envelope-alt"></i>
                      <span class="badge bg-important"><?php echo $num; ?></span>
                  </a>
				 
                  <ul class="dropdown-menu extended inbox scrollable-menu">
                      <div class="notify-arrow notify-arrow-red"></div>
                      <li>
                          <p class="red"><?php echo $num; ?> Permohonan Baru</p>
                      </li>
					   <li>
					   
					<?php   foreach ($query2->result() as $row2) { 
					$cid= $row2->id;
					$query1 = $this->db->get_where('user', array('UID' => $cid));
foreach ($query1->result() as $row1)
{
          $name= $row1->Name;
		  echo "<input type='hidden' id='name' name='name' value='".$name."'>"; 
}
	echo "<input type='hidden' id='cid' name='cid' value='".$cid."'>"; ?>
	
	

                          <a href="<?php  $this->load->helper('url'); echo site_url("coursedetail/detail2?cid=").$cid ;?> ">

                       
                                    <span class="subject">
                                    <span class="from"><?php echo $row2->UID; ?></span>
                                    <span class="time"><?php echo $row2->Course_Date; ?></span>
                                    </span>
                                    <span class="message">
                                       <?php echo $row2->Coursename;?>
                                    </span>
                          </a>
						  <?php } ?>
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
		 <li><a href="<?php  $this->load->helper('url'); echo site_url("/adminview/index"); ?>">Senarai Kakitangan </a></li>
			   <li><a href="<?php  $this->load->helper('url'); echo site_url("/courseview/viewallcourse"); ?>">Senarai Latihan</a></li>
			    <li><a href="<?php  $this->load->helper('url'); echo site_url("/report/index"); ?>">Laporan</a></li>
  
  
  
  

              


                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
     