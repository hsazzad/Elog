<?php include 'header.php';?>
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
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>Nama Kursus</th>
                                          <th>Kategori Kursus</th>
                                          <th>Tempat Kursus</th>
						<th>Bil. Hari Kursus</th>
                                          <th>Sijil</th>
                                          <th>Tarikh Kursus</th>
										  <th>Status</th>
                                      </tr>
                                      </thead>
                                      <tbody>
									  <?php 
									 
									 
	if($course>0)
	{
	
	 foreach($course as $row){ ?>
                                      <tr>
                                          <td><?php echo $row->Coursename ;?></td>
                                          <td><?php echo $row->course_catagory ;?></td>
                                          <td><?php echo $row->Place_type ;?></td>
 <td><?php echo $row->Days;?></td>
                                           <td><a href="<?php echo base_url();?>files/<?php echo $row->Cert_file; ?>" target="_blank"><?php echo $row->Cert_file; ?></td>
                                         <td><?php $date=$row->Course_Date; echo date("d/m/Y",strtotime($date)); ?></td>
										 
										   <td><?php if($row->Status == "Belum Selesai"){?> <span class="label label-danger"><?php echo $row->Status ;?></span><?php } elseif($row->Status == "Dalam Proses"){?> <span class="label label-warning"><?php echo $row->Status ;?></span><?php } else {?> <span class="label label-success"> <?php echo $row->Status ; }?></span></td>
				  
                                      </tr>
                                  <?php } }?>
						
								 
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

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
  </body>
</html>