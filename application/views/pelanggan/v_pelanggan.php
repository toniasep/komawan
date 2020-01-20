<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1 class="m-0 text-dark">Daftar Pelanggan</h1>
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
					          <th>Tindakan</th>
					        </tr>
					      </thead>
					      <tbody>
					      	<?php 
					      	$no = 1;
					      	foreach($data_pelanggan->result() as $dp)
							{ 
							?>
						        <tr>
						          <td><?=$no?></td>
						          <td><?=$dp->nama?></td>
						          <td><?=$dp->hp?></td>
						          <td><?=$dp->email?></td>
						          <td>
						          	<a href="<?=base_url().'pelanggan/hapus/'.$dp->id?>" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Anda yakin untuk menghapus data <?=$dp->nama?>?');">
						          		<i class="fas fa-trash"></i>
					                </a>
						          </td>
						        </tr>
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
