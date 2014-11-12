<?php include 'header.php';?>


  <div class="row">
  <div class="col-md-3">
   <ul class="nav nav-pills" role="tablist">
  <li role="presentation"><a>Enter Course Info<span class="badge"></span></a></li>
  
  
  <li role="presentation" class="active"><a href="<?php  $this->load->helper('url'); echo site_url("/evaluate/index"); ?>">Evaluate<span class="badge">
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
  
</ul>
</div>
		<div class="col-md-6 ">
		
	  <div class="panel panel-default">
	  
	  <div class="panel-heading">Course Information</div>
	<form class="form-horizontal" method="post" action="<?php  $this->load->helper('url'); echo site_url("courseinfo/insert"); ?>" enctype="multipart/form-data" >
	
			  <fieldset>
			  
			  
			 <?php $UID=$this->session->userdata('UID');echo "<input type='hidden' id='UID' name='UID' value='$UID'>"; ?>
		  
			<label for="inputName">Course Name</label>
			<input type="text" class="form-control" id ="Coursename" name = "Coursename" placeholder="Course Name" required autofocus>
			<label for="inputID">Place of Course</label>
			<select class="form-control" id= "Place_type" name="Place_type">
			<option value="Internal">Internal</option>
			<option value="External">External</option>
			</select>
			
			<label for="inputGrade">Upload Certificate</label>
			<input class="btn btn-file" type="file" name="Cert_file"   >
		
			<label for="inputDate">Date of Attendance</label>
			<input type="text" class="form-control" name = "Course_Date" placeholder="Day/Month/Year" required>
			
			
			<label for="inputComm">Are you satisfied with Training/Workshop ?</label>
			<br/>
			
  <input type="radio" name="Satisfaction" id="Satisfaction1" value="1"> 1

  <input type="radio" name="Satisfaction" id="Satisfaction2" value="2"> 2

  <input type="radio" name="Satisfaction" id="Satisfaction3" value="3"> 3

  <input type="radio" name="Satisfaction" id="Satisfaction4" value="4"> 4

  <input type="radio" name="Satisfaction" id="Satisfaction5" value="5"> 5
		
<br/>
	<label for="inputComm">Do you acquire the knowledge that will help on your job ?</label>
			<br/>
	<input type="radio" name="Knowledge" id="Knowledge1" value="1"> 1

  <input type="radio" name="Knowledge" id="Knowledge2" value="2"> 2


  <input type="radio" name="Knowledge" id="Knowledge3" value="3"> 3

	
  <input type="radio" name="Knowledge" id="Knowledge4" value="4"> 4


  <input type="radio" name="Knowledge" id="Knowledge5" value="5"> 5
<br/>
	<label for="inputName">Comments</label>
	
    
    <textarea class="form-control" id="Comments" name="Comments" rows="4"></textarea>
 
  <button type="submit" class="btn btn-primary btn-block" type="submit">Submit</button>
  <button class="btn btn-default btn-block" type="reset">Reset</button>
 </fieldset>
</form>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <!-- /container -->
	  </div>
      </div>
	  </div>
	 </div>
      </div>
	  
 <?php include 'footer.php';?>
