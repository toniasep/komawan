
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Transaksi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <form class="login-form" action="<?=base_url().'main/signup'; ?>" method="post"><!-- 
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3> -->
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="control-label">Pelanggan</label>
                <input class="form-control" type="text" placeholder="Nama Pelanggan" name="nama" autofocus>
              </div>
              <div class="form-group">
                <label class="control-label">NAMA</label>
                <input class="form-control" type="text" placeholder="Nama Lengkap" name="nama">
              </div>
              <div class="form-group">
                <label class="control-label">NO HP</label>
                <input class="form-control" type="number" placeholder="No HP" name="hp">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="control-label">EMAIL</label>
                <input class="form-control" type="email" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <label class="control-label">PASSWORD</label>
                <input class="form-control" type="password" placeholder="Password" name="password">
              </div>
              <div class="form-group">
                <label class="control-label">KONFIRMASI PASSWORD</label>
                <input class="form-control" type="password" placeholder="Konfirmasi Password" name="copassword">
              </div>
            </div>

            <div class="col-lg-12">
              <div class="form-group btn-container">
                <input type="submit" name="submit" value="TAMBAH DATA" class="btn btn-primary btn-block">
              </div>
            </div>

            
          </div>
        </form> 
      </div>  
    </section>
    <!-- /.content -->
  </div>
