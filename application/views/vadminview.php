<?php include 'header2.php';?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Maklumat Kakitangan
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr> <th>Tindakan</th>
                                          <th>Nama Penuh</th>
                                          <th>No. Kad Pengenalan</th>
                                          <th>Jawatan</th>
                                          <th>Tarikh Lantikan</th>
                                          <th>Unit/Jabatan</th>
										  <th>Email</th>
										 
                                      </tr>
                                      </thead>
                                      <tbody>
									  <?php $i=0;?>
							<?php foreach ($User as $row){?>
                                      <tr>
									   <td> <div class="btn-group">
                                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Tindakan <span class="caret"></span></button>
                                  <ul role="menu" class="dropdown-menu">
								  <?php  echo "<input type='hidden' name='UID' id='UID' value='".$row->UID."'>"; ?>
                                      <li><a href="<?php  $this->load->helper('url'); echo site_url("/updateuser/viewuser") ; echo "?UID="; echo $row->UID; ?>">Kemaskini</a></li>
                                
                                      <li class="divider"></li>
                                      <li><a href="<?php  $this->load->helper('url'); echo site_url("/updateuser/delete") ; echo "?UID="; echo $row->UID; ?>"  onclick="return confirm('Are you sure you want to delete <?php echo $row->Name ;?>?')" >Padam</a></li>
									  
                                  </ul>
                              </div></td>
                                          <td><a href="<?php  $this->load->helper('url'); echo site_url("/updateuser/detail") ; echo "?UID="; echo $row->UID; ?>" ><?php echo $row->Name ;?></a></td>
                                          <td><?php echo $row->ID ;?></td>
                                          <td><?php echo $row->Grade ;?></td>
                                         <td><?php  echo $row->Date; ?></td>
                                          <td><?php echo $row->Unit ;?></td>
										  <td><?php echo $row->Email ;?></td>
										
										  
                                      </tr>
                                <?php } ?>
						
								 
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
