
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Produk</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php echo form_open_multipart('produk/tambah'); ?>
        <!-- <form class="login-form" action="<?=base_url()?>produk/tambah" method="post"> -->
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="control-label">Nama</label>
                <input class="form-control" type="text" name="nama" autofocus>
              </div>
              <div class="form-group">
                <label class="control-label">Gambar</label>
                <input type="file" class="form-control" name="gambar" accept="image/*" required>
              </div>
              <div class="form-group">
                <label class="control-label">SKU</label>
                <input class="form-control" type="number" name="sku">
              </div>
              <div class="form-group">
                <label class="control-label">Stok</label>
                <input class="form-control" type="number" name="stok">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="control-label">Harga Beli</label>
                <input class="form-control" type="number" name="harga_beli">
              </div>
              <div class="form-group">
                <label class="control-label">Harga Jual</label>
                <input class="form-control" type="number" name="harga_jual">
              </div>
              <div class="form-group">
                <label class="control-label">Berat(gr)</label>
                <input class="form-control" type="number" name="berat">
              </div>
              <div class="form-group">
                <label class="control-label">Deskripsi</label>
                <input class="form-control" type="number" name="deskripsi">
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
