<?php 
 
header("cache-Control: no-store, no-cache, must-revalidate");
header("cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="icon" href="<?php echo base_url();?>images/Lock1.ico">
    <title>Evaluate</title>
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
   background-color: #fff;
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
        left: 70%;
		text-align: center;
		top:0%;
		 font-family: 'Arial';
    }
</style>
	
 <script src="<?php echo base_url();?>css/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>css/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>css/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>css/js/bootstrap-dropdown.js"></script>
  </head>

  

  <body >
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
   
   <ul class="nav navbar-nav">
        <li><a href="<?php  $this->load->helper('url'); echo site_url("/home/index"); ?>">Home</a></li>
   </ul>
  <div class="collapse navbar-collapse">
      <h4> You have signed in as <b> <?php echo $this->session->userdata('UID'); ?> </b> </h4>
        
    </div>
	
	<div class="navbar-brand navbar-brand-centered1">
       
    <b><a href="<?php  $this->load->helper('url'); echo site_url("/login/do_logout"); ?>"> <span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></b>
    
        
    </div>
    </div> 

	
   <div class="jumbotron">
   <div class="container">

  <div class="row">
  <div class="col-md-3">
   <ul class="nav nav-pills" role="tablist">
  <li role="presentation"><a href="<?php  $this->load->helper('url'); echo site_url("/courseinfo/index"); ?>">Enter Course Info<span class="badge"></span></a></li>
  
  <li role="presentation"><a>Evaluate<span class="badge"></span></a></li>
  
</ul>
</div>
		<div class="col-md-6 ">
		
	  <div class="panel panel-default">
	  
	  <div class="panel-heading">Evaluate</div>
	  
	  
	  
	<table class='table table-striped table-bordered table-condensed' >
	<thead><tr><th>Employee Name</th><td>Employee Grade</td></tr><tr><th>Course Name</th><th>Certificate</th><th>Course Date</th><th>Place</th>
	<th>Satisfaction</th><th>Knowledge</th><th>Comments</th><th>Supervisor Grade</th><th>Status</th></tr></thead>
    <tbody>
        
		<?php foreach($query as $row): ?>
<tr> 
<td><?php $UID=$row->UID;
$querycp = $this->db->get_where('user', array('UID' => $UID));
foreach ($querycp->result() as $row2)
{
          echo $row2->Name;
}
 ?></td>
<td>
<?php $UID=$row->UID;
$querycp = $this->db->get_where('user', array('UID' => $UID));
foreach ($querycp->result() as $row2)
{
          echo $row2->Grade;
}
 ?>
</td>
<tr>
    <td><?php echo $row->Coursename; ?></td>
	
   <td><a href="<?php echo base_url();?>files/<?php echo $row->Cert_file; ?>" target="_blank"><?php echo $row->Cert_file; ?></td>
    <td><?php echo $row->Course_Date; ?></td>
	 <td><?php echo $row->Place_type; ?></td>
	  <td><?php echo $row->Satisfaction; ?></td>
	   <td><?php echo $row->Knowledge; ?></td>
	    <td><?php echo $row->Comments; ?></td>
		
		<?php $Supervisor_Grade=$row->Supervisor_Grade;
		if($Supervisor_Grade!="")
		{
		echo "<td>".$Supervisor_Grade."</td>";
		}
		else
		{
		echo "<td><select class='form-control' id='Supervisor_Grade' name='Supervisor_Grade'>";
		 $UID=$row->UID;
$querycp = $this->db->get_where('user');
foreach ($querycp->result() as $row2)
{
        echo  "<option value='".$row2->Grade."'>".$row2->Grade."</option>";
}

 echo"</td></select>";
 }
  ?>
		
<td><?php echo $row->Status; ?></td>

<?php echo "<input type='hidden' id='id' name='id' value='".$row->id."'>"; ?>

<?php
 $Supervisor_Grade=$row->Supervisor_Grade;
		if($Supervisor_Grade=="")
		{ 
		echo "<td>";
		echo "<button type='submit' class='btn btn-primary btn-block' type='submit'>Approve</button>";
		echo "</td>";
		}
?>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <!-- /container -->
	  </div>
      </div>
	  </div>
	 </div>
      </div>
	  
  </body>
</html>
