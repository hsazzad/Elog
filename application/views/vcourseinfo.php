<?php include 'header.php';?>

    
    <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
     
              <div class="row">
               
                  <div class="col-md-6 col-md-offset-3">   
		 
	  
	  
	  <section class="panel">
                          <header class="panel-heading">
                         <center><b>    Course Information<b></center>
                          </header>
                          <div class="panel-body">
	  
	   <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
														 $this->load->helper('form');
															?>
	<form role="form" method="post" action="<?php  $this->load->helper('url'); echo site_url("courseinfo/insert"); ?>" enctype="multipart/form-data" >
	
			  <fieldset>
			  
			  
			 <?php $UID=$this->session->userdata('UID');echo "<input type='hidden' id='UID' name='UID' value='$UID'>"; ?>
		 <div class="form-group">
			<label for="inputName">Course Name</label>
			<input type="text" class="form-control" id ="Coursename" name = "Coursename" placeholder="Course Name" required autofocus>
			 </div>
			 <div class="form-group">
			<label for="inputID">Place of Course</label>
			<select class="form-control" id= "Place_type" name="Place_type">
			<option value="Internal">Internal</option>
			<option value="External">External</option>
			</select>
		</div> <div class="form-group">
			<label for="inputGrade">Upload Certificate</label>
			<input class="btn btn-file" type="file" name="Cert_file"   >
		</div>
			<label for="inputDate">Date of Attendance</label>
			<input type="text" class="form-control" name = "Course_Date" placeholder="Day/Month/Year" required>
			<div class="form-group">
			
			<label for="inputComm">Are you satisfied with Training/Workshop ?</label>
			<br/>
			
  <input type="radio" name="Satisfaction" id="Satisfaction1" value="1"> 1

  <input type="radio" name="Satisfaction" id="Satisfaction2" value="2"> 2

  <input type="radio" name="Satisfaction" id="Satisfaction3" value="3"> 3

  <input type="radio" name="Satisfaction" id="Satisfaction4" value="4"> 4

  <input type="radio" name="Satisfaction" id="Satisfaction5" value="5"> 5
		
<br/>
</div><div class="form-group">
	<label for="inputComm">Do you acquire the knowledge that will help on your job ?</label>
			<br/>
	<input type="radio" name="Knowledge" id="Knowledge1" value="1"> 1

  <input type="radio" name="Knowledge" id="Knowledge2" value="2"> 2


  <input type="radio" name="Knowledge" id="Knowledge3" value="3"> 3

	
  <input type="radio" name="Knowledge" id="Knowledge4" value="4"> 4


  <input type="radio" name="Knowledge" id="Knowledge5" value="5"> 5
<br/>
	<label for="inputName">Comments</label>
	
    </div><div class="form-group">
    <textarea class="form-control" id="Comments" name="Comments" rows="4"></textarea>
 </div>
  <button type="submit" class="btn btn-primary btn-block" type="submit">Submit</button>
  <button class="btn btn-default btn-block" type="reset">Reset</button>
 </fieldset>
</form>
 </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <!-- /container -->
	  </section>
      </div>
	  </div>
	 </div>
      </div></section></section></section>
	  
 <?php include 'footer.php';?>
