<?php include 'header2.php';?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Maklumat Kursus
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                   <table class="table-bordered table-striped">
                                      <thead>
                                      <tr >
									    
                                          <th  style="width: 70px">Nama Kursus</th>
										  <th  style="width: 70px">Nama</th>
                                          <th  style="width: 70px">Kategori Kursus</th>
                                          <th  style="width: 70px">Tempat Kursus</th>
                                    
										  <th  style="width: 70px">Penilaian Kakitangan</th>
										  <th  style="width: 70px">Penilaian Pengetahuan</th>
										  <th  style="width: 70px">Komen Kakitangan</th>
										  <th  style="width: 70px">Komen Pegawai Penilai</th>
                                          <th  style="width: 70px">Tarikh Kursus</th>
										 
										  <th  style="width: 70px">Status</th>
										   <th  style="width: 70px">Pegawai Penilai</th>
										   
                                      </tr>
                                      </thead>
                                      <tbody><?php $i =0; ?>
									  <?php foreach($coursedetail as $row){ ?>
                                      <tr>
									  <form method="post" action="<?php  $this->load->helper('url'); echo site_url("updateuser/do_approve"); ?>" >
									  <?php echo "<input type='hidden' id='UID[".$i."]' name='UID[".$i."]' value='".$row->UID."'>"; ?>
									  <?php echo "<input type='hidden' id='cid[".$i."]' name='cid[".$i."]' value='".$row->id."'>"; ?>
                                          <td style="width: 70px"><?php echo $row->Coursename ;?></td>
										  <td style="width: 70px"> <?php
										  $UID=$row->UID;
										  $query2 = $this->db->get_where('user', array( 'UID' => $UID)); 
										  foreach ($query2->result() as $row2)
										  {
										  echo $row2->Name;
										  }
										  ?>
                                          <td style="width: 70px"><?php echo $row->course_catagory ;?></td>
                                          <td style="width: 70px"><?php echo $row->Place_type ;?></td>
   
                                         <td style="width: 70px"><?php echo $row->Satisfaction ;?></td>
										 <td style="width: 70px"><?php echo $row->Knowledge ;?></td>
										 <td style="width: 70px"><?php echo $row->Comments ;?></td>
										 <td style="width: 70px"><?php echo $row->Supervisor_comment ;?></td>
									
                                         <td style="width: 70px"><?php $date=$row->Course_Date; echo date("d/m/Y",strtotime($date)); ?></td>
										  
										  <td style="width: 70px"><?php if($row->Status == "Belum Selesai"){?> <span class="label label-danger"><?php echo $row->Status ;?></span><?php } elseif($row->Status == "Dalam Proses"){?> <span class="label label-warning"><?php echo $row->Status ;?></span><?php } else {?> <span class="label label-success"> <?php echo $row->Status ; }?></span></td>

										  
										     <?php $Supervisor_Grade=$row->Supervisor_Grade;
		if($Supervisor_Grade=="")
		{
$query2 = $this->db->get_where('user');
echo "<td><select style='width: 70px' name='Supervisor_Grade[".$i."]'>";
foreach ($query2->result() as $row2)
{
        echo  "<option value='".$row2->Grade."'>".$row2->Name."</option>";
}
 echo"</select></td>";

  echo"<td style='width: 70px'>" ; ?><button type='submit' name='val' id='val' value="<?php echo $i; ?>" class='btn btn-primary'>Sahkan</button></td></tr>
 <?php
 } 	else{
	$query3 = 	$this->db->get_where('user', array('Grade'=>$Supervisor_Grade));
 
foreach ($query3->result() as $row3)
{
         echo "<td style='width: 70px'>".$row3->Name."</td></tr>";
}
  }

 
 
 
 ?>
										
										<?php $i++;?>
											
											<?php  }?>	
                                          
										
						
								 
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 &copy; sylobpsm by goldtechsolution.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="<?php echo base_url();?>js/common-scripts.js"></script>

    <!--script for this page only-->
	<script>
	
  </body>
</html>
