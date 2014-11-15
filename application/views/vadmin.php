<?php include 'header2.php';?>

    <section id="container">
      <!--main content start-->
      
          <section class="wrapper">
              <!-- page start-->
 <div class="row">   
 	<div class="col-md-12 col-offset-0">      
		 
	  <section class="panel">
	 
		<table class="table table-striped table-bordered table-condensed" >


	<thead><tr><th>Nama Kakitangan</th><th>Jawatan</th><th>Nama Kursus</th><th>Ketegori Kursus</th><th>Sijil</th><th>Tarikh</th><th>Tempat</th>
	<th>Penilaian</th><th>Pengetahuan</th><th>Komen</th><th>Pegawai Penilai</th><th>Status</th></tr></thead>

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
	<td><?php echo $row->course_catagory; ?></td>
   <td><a href="<?php echo base_url();?>files/<?php echo $row->Cert_file; ?>" target="_blank"><?php echo $row->Cert_file; ?></td>
    <td><?php $date=$row->Course_Date; echo date("d/m/Y",strtotime($date)); ?></td>
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
        echo  "<option value='".$row3->Grade."'>".$row3->Grade."</option>";
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
		<button type='submit' name='val' id='val'   class='btn btn-primary btn-block' value="<?php echo $j; ?>" >Sahkan</button>
	<?php	echo "</td>";
		}
	
?>

    </tr>
	
<?php $j++;?>
    <?php endforeach; ?>
    </tbody>
</table>
	<form>
	 </section>
      </div>
	  </div>
	 </section>
	  
 


	
		  
 <?php include 'footer.php';?>
