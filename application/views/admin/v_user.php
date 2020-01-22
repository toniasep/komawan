<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Klola</title>
  <link rel="icon" href="<?=base_url()?>img/Untitled-3.png" type="image">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Gridview -->
  <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/pidie-0.0.1.css'?>">
  
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
   
  <script src="<?=base_url().'assets/'?>vendor/jquery/jquery-3.3.1.min.js"></script>
  <script src="<?=base_url().'assets/'?>vendor/jquery/jquery-ui.js"></script>
  <link href="<?=base_url().'assets/'?>vendor/jquery/jquery-ui.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="font-family: lato;">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Super Admin</a>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <a href="<?=base_url().'keluar'?>" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0f4c75">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>" class="brand-link">
      <center><img src="<?=base_url()?>img/Untitled-2.png" style="width: 50%;"/></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #0f4c75">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="<?=base_url().'admin'?>" class="nav-link">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                User Aktif
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?=base_url().'admin/belum_aktif'?>" class="nav-link">
              <i class="nav-icon fas fa-user-clock"></i>
              <p>
                User Belum Aktif
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1 class="m-0 text-dark">Daftar User</h1>
	      </div><!-- /.col -->
	    </div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<div class="container">
		<div class="row">
			<div class="col-xl-10">
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="card shadow mb-4">
					<div class="card-body">
					  <div class="table-responsive">
					    <table class="table table-bordered" id="tabel" width="100%" cellspacing="0">
					      <thead>
					        <tr>
					          <th>No</th>
					          <th>Nama</th>
					          <th>Hp</th>
					          <th>Email</th>
					          <th>Paket</th>
                    <th>Tgl Daftar</th>
                    <th>Tgl Bayar</th>
                    <th>Tgl Aktif</th>
                    <th>Tgl Expire</th>
					          <th>Tindakan</th>
					        </tr>
					      </thead>
					      <tbody>
					      	<?php 
					      	$no = 1;
					      	foreach($data_user->result() as $dp)
							{ 
							?>
						        <tr>
						          <td><?=$no?></td>
						          <td><?=$dp->user_nama?></td>
						          <td><?=$dp->hp?></td>
						          <td><?=$dp->email?></td>
						          <td><?=$dp->paket_nama?></td>
                      <td><?=$dp->tgl_daftar?></td>
                      <td><?=$dp->tgl_bayar?></td>
                      <td><?=$dp->tgl_aktif?></td>
                      <td><?=$dp->tgl_expire?></td>
						          <td>
                        <?php if($status == 'aktif'){
                        ?>
                          <a href="<?=base_url().'admin/hapus/'.$dp->user_id?>" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Anda yakin untuk menghapus data <?=$dp->user_nama?>?');">
                              <i class="fas fa-trash"></i>
                          </a>
                        <?php
                        }else{
                        ?>

                          <a href="<?=base_url().'admin/aktivasi/'.$dp->transaksi_id?>" class="btn btn-primary btn-circle" onclick="return confirm('Apakah Anda yakin untuk mengaktifkan data <?=$dp->user_nama?>?');">
                              <i class="fas fa-edit"></i>
                          </a>
                        <?php
                        }
                        ?>
						          	
						          </td>
						        </tr>


          <!-- Modal -->
          <div class="modal fade" id="myModal<?= $dp->user_id ?>">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title"><?= $dp->user_nama ?></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  
	              <div class="form-group">
	                <label class="control-label">Status</label>
	                <select class="form-control" name="hak_akses">
	                	<option value="1">Aktif</option>
	                	<option value="0">Tidak Aktif</option>
	                </select>
	              </div>
	              <div class="form-group">
	                <label class="control-label">Paket</label>
	                <select class="form-control" class="paket_id">
	                	<option value="01">Starting</option>
	                	<option value="02">Growing</option>
	                </select>
	              </div>

                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>

						    <?php
						    	$no++;
						    }
						    ?>
					      </tbody>
					    </table>
					  </div>
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <center><strong>Copyright &copy; Klola 2020</strong>
    All rights reserved.</center>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Gridview -->
<script src="<?=base_url().'assets/'?>js/pidie-0.0.1.js"></script>
<script>
    var pidie = new Pidie();
    pidie.panel
    pidie.slide
    pidie.gridList
    pidie.filterSearch
    pidie.tabs
    pidie.accordionCollapse
    pidie.filterSort
    pidie.filterPagination
    pidie.filterCheckbox
</script>
<!-- Gridview -->

<script src="<?=base_url().'assets/'?>vendor/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/dataTables.buttons.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/jszip.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/pdfmake.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/vfs_fonts.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/buttons.html5.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?=base_url().'assets/'?>js/demo/datatables-demo.js"></script>


<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?=base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url(); ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url(); ?>assets/dist/js/demo.js"></script>
<script src="<?=base_url().'assets/'?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?=base_url().'assets/'?>vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>
