
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
	
	
	<table class='table table-striped table-bordered table-condensed' >
	<thead><tr><th>Employee Name</th><th>Employee Grade</th><th>Course Name</th><th>Certificate</th><th>Course Date</th><th>Place</th>
	<th>Satisfaction</th><th>Knowledge</th><th>Comments</th><th>Supervisor Grade</th><th>Status</th></tr></thead>
    <tbody>
	<form method="post" action="<?php  $this->load->helper('url'); echo site_url("admin/do_approve"); ?>" >
        <?php $j=0;?>
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
$querycp2 = $this->db->get_where('user', array('UID' => $UID));
foreach ($querycp2->result() as $row4)
{
          echo $row4->Grade;
}
 ?>
</td>
    <td><?php echo $row->Coursename; ?></td>
	
   <td><a href="<?php echo base_url();?>files/<?php echo $row->Cert_file; ?>" target="_blank"><?php echo $row->Cert_file; ?></td>
    <td><?php echo $row->Course_Date; ?></td>
	 <td><?php echo $row->Place_type; ?></td>
	  <td><?php echo $row->Satisfaction; ?></td>
	   <td><?php echo $row->Knowledge; ?></td>
	    <td><?php echo $row->Comments; ?></td>
		
		<?php $Supervisor_Grade=$row->Supervisor_Grade;
		if($Supervisor_Grade=="")
		{
		 
$query2 = $this->db->get_where('user');
echo "<td><select class='form-control' name='Supervisor_Grade[".$j."]'>";
foreach ($query2->result() as $row3)
{
        echo  "<option value='".$row3->Grade."'>".$row3->Grade." - ".$j."</option>";
}

 echo"</td></select>";
  
		}
		else
		{
		 
		echo "<td>".$Supervisor_Grade."</td>";
		
		
 }
 
  ?>
		
<td><?php echo $row->Status; ?></td>

<?php echo "<input type='hidden' id='UID[".$j."]' name='UID[".$j."]' value='".$row->UID."'>"; ?>

<?php
 $Supervisor_Grade=$row->Supervisor_Grade;
		if($Supervisor_Grade=="")
		{ 
		echo "<td>";?>
		<button type='submit' name='val' id='val'   class='btn btn-primary btn-block' value="<?php echo $j; ?>" >Approve</button>
	<?php	echo "</td>";
		}
?>
    </tr>
	
<?php $j++;?>
    <?php endforeach; ?>
    </tbody>
</table>
	<form>
	
	</div>
    </div> 
	
	
  </body>
</html>
