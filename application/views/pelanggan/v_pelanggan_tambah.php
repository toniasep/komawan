<link rel="stylesheet" href="<?=base_url().'assets/'?>css/bootstrap-select.min.css">
<script src="<?=base_url().'assets/'?>js/bootstrap-select.min.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Pelanggan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <form class="login-form" action="<?=base_url().'pelanggan/tambah'?>" method="post"><!-- 
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3> -->
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="control-label">Nama</label>
                <input class="form-control" type="text" name="nama" autofocus>
              </div>
              <div class="form-group">
                <label class="control-label">Nomor HP</label>
                <input class="form-control" type="number" name="hp">
              </div>
              <div class="form-group">
                <label class="control-label">Email</label>
                <input class="form-control" type="number" name="email">
              </div>
              <div class="form-group">
                <label class="control-label">Alamat</label>
                <input class="form-control" type="number" name="alamat">
              </div>
              <div class="form-group">
                <label class="control-label">Kelurahan</label>
                <select class="form-control selectpicker" data-live-search="true" name="kelurahan" style="width: 40%" placeholder="Nama" required="">
                </select>
              </div>
              <div class="form-group">
                <label class="control-label">Kode Pos</label>
                <input class="form-control" type="number" name="pos_id">
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

<script>
$.fn.selectpicker.Constructor.BootstrapVersion = '4';
$("[aria-label='Search']").keypress(function() {
  console.log( "Handler for .keypress() called." );
});
</script>