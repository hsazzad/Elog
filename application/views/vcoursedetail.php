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
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
									      <th>Tindakan</th>
                                          <th>Nama Kursus</th>
                                          <th>Kategori Kursus</th>
                                          <th>Tempat Kursus</th>
                                          <th>Sijil</th>
                                          <th>Tarikh Kursus</th>
										  <th>Pegawai Penilai</th>
										  <th>Status</th>
                                      </tr>
                                      </thead>
                                      <tbody>
									  <?php 
	
	
	 foreach($coursedetail as $row){ ?>
                                      <tr>
									     <td> <div class="btn-group">
                                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Tindakan <span class="caret"></span></button>
                                  <ul role="menu" class="dropdown-menu">
                                      <li><a data-toggle="modal" href="#myModal">Pilih Pegawai</a></li>
                                
                                      <li class="divider"></li>
                                      <li><a href="#">Padam</a></li>
                                  </ul>
                              </div></td>
                                          <td><?php echo $row->Coursename ;?></td>
                                          <td><?php echo $row->course_catagory ;?></td>
                                          <td><?php echo $row->Place_type ;?></td>
                                          <td><?php echo $row->Cert_file ;?></td>
                                          <td><?php echo $row->Submit_date ;?></td>
										   <td><?php echo $row->Supervisor_Grade ;?></td>
										  <td><?php if($row->Status == "Pending"){?> <span class="label label-danger"><?php echo $row->Status ;?></span><?php } else {?> <span class="label label-success"> <?php echo $row->Status ; }?></span></td>
										  
                                      </tr>
                                  <?php  }?>
						 <!-- Modal -->
                              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Pilih Pegawai</h4>
                                          </div>
                                          <div class="modal-body">
										
 <form class="form-horizontal tasi-form" method="post" action="<?php  $this->load->helper('url'); echo site_url("admin/do_approve"); ?>">
                                             
  
										
								
                                            <div class="form-group">
                                  
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="Supervisor_Grade">
										  		     <?php $query2 = $this->db->get_where('user');
 foreach($query2->result()  as $row){ ?>

                                              <option><?php echo $row->Name ; ?></option>
                                           
											    <?php  }?>
                                          </select>
                                            
                                       </div></div>
										 
  <button class="btn btn-success"  data-dismiss="modal" type="button">Simpan</button></form>
                                          </div>
                                          <div class="modal-footer">
                                              <button data-dismiss="modal" class="btn btn-default" type="button">Tutup</button>
                                             
                                          </div>
                                      </div>
                                  </div>
                              </div>
								 
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
