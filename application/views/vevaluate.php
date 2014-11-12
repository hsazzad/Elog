<?php include 'header.php';?>

    
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			  <div class="row">
  <div class="col-md-3">
   
</div>
		<div class="col-md-6 ">
		
	  <div class="panel panel-default">
	  
	  <div class="panel-heading">Evaluate</div>
	  
	
	<?php $i=1;$j=0;?>
	<?php foreach($query as $row): ?>
	<form method="post" action="<?php  $this->load->helper('url'); echo site_url("evaluate/do_approve"); ?>" >
		<table class='table table-striped table-bordered table-condensed' >
	<tr><th><?php echo $i.".";
		$i++;
		?></th></tr>
	<tr><th>Employee Name</th>
	
	<?php  $UID= $row->UID;
	echo "<input type='hidden' id='UID[".$j."]' name='UID[".$j."]' value='".$UID."'>"; ?>
	<td><?php $UID= $row->UID; 
$querycp = $this->db->get_where('user', array('UID' => $UID));
foreach ($querycp->result() as $row2)
{
          echo $row2->Name;
}
 ?></td></tr>
	<tr><th>Course Name</th>
	 <td><?php echo $row->Coursename; ?></td>
	</tr>
	<tr><th>Course Date</th>
	 <td><?php echo $row->Course_Date; ?></td>
	</tr>
	<tr><th>Place</th>
	 <td><?php echo $row->Place_type; ?></td>
	</tr>
	<tr><th>Certificate</th>
	 <td><a href="<?php echo base_url();?>files/<?php echo $row->Cert_file; ?>" target="_blank"><?php echo $row->Cert_file; ?></td>
	</tr>
	<tr><th>Satisfaction</th>
	 <td><?php echo $row->Satisfaction; ?></td>
	</tr>
	<tr><th>Knowledge</th>
	 <td><?php echo $row->Knowledge; ?></td>
	</tr>
	<tr><th>Employee Comments</th>
	 <td><?php echo $row->Comments; ?></td>
	</tr>
	<tr><th>Your Comments</th>    
   <td><textarea class="form-control" id="Supervisor_comment[<?php echo $j;?>]" name="Supervisor_comment[<?php echo $j;?>]" rows="4"></textarea></td>
	</tr>
	<th><button type='submit' name="val" id="val"  value="<?php echo $j;?>" class='btn btn-primary btn-block' >Approve</button></th>
</table>
<hr/>
<?php $j++;?>
    <?php endforeach; ?>
	
	    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <!-- /container -->
	  </div>
      </div>
 
 </section></section></section>
	  
 <?php include 'footer.php';?>
