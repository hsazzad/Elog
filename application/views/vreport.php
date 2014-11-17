<?php include 'header2.php';?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
			 
				  <div class="col-lg-8">
                      <!--work progress start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                              <div class="task-progress">
                                  <h1>Bil Hari Kursus</h1>

                              </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>
                                      Bil. Kakitangan yang menghadiri latihan kurang dari 7 hari
                                  </td>
                                  <td>
								  <?php $Days=0;
										
$daysquery = $this->db->get('course');
foreach ($daysquery->result() as $row1)
{
           $Days+=$row1->Days;		  
}
if($Days>7)
{
echo $Days;
}

 ?>
                                      <span class="badge bg-important"><?php echo $Days; ?></span>
                                  </td>
                                  <td>
                                    <div id="work-progress1"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>
                                       Bil. Kakitangan yang menghadiri latihan kurang dari 7 hari
                                  </td>
                                  <td>
                                      <span class="badge bg-success">43%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress2"></div>
                                  </td>
                              </tr>
                             
                              </tbody>
                          </table>
                      </section>
                      <!--work progress end-->
                  </div>
                  <div class="col-lg-8">
                      <section class="panel">
                            <div class="panel-body progress-panel">
                              <div class="task-progress">
                                  <h1>Senarai Kakitangan</h1>

                              </div>
                          </div>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr> 
                                          <th>Nama Penuh</th>
                                         
                                    
                                          <th>Hari</th>
                                          
										 
                                      </tr>
                                      </thead>
                                      <tbody>
									  <?php $i=0;?>
							<?php foreach ($User as $row){?>
                                      <tr>
									  
                                          <td><?php echo $row->Name ;?></a></td>
                                       
                                         <td>
                                          <?php $Days=0;
										  $UID= $row->UID; 
$querycp = $this->db->get_where('course', array('UID' => $UID));
foreach ($querycp->result() as $row2)
{
           $Days+=$row2->Days;		  
}
echo $Days;
 ?></td>
										  
                                      </tr>
                                <?php } ?>
						
								 
                          </table>
                                </div>
								<div class="tab-pane" id="chartjs">
                  <div class="row">
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  Doughnut
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="doughnut" height="300" width="400"></canvas>
                              </div>
                          </section>
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
