
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
        
        <form class="login-form" action="<?=base_url().'produk/ubah'?>" method="post">
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <input type="hidden" name="id" value="<?=$produk->id?>">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="control-label">Nama</label>
                <input class="form-control" type="text" name="nama" value="<?=$produk->nama?>">
              </div>
              <div class="form-group">
                <label class="control-label">Gambar</label>
                <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="customFile" name="gambar" accept="image/*" required="">
                  <label class="custom-file-label" for="customFile">Upload File</label>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">SKU</label>
                <input class="form-control" type="number" name="sku" value="<?=$produk->sku?>">
              </div>
              <div class="form-group">
                <label class="control-label">Stok</label>
                <input class="form-control" type="number" name="stok" value="<?=$produk->stok?>">
              </div>
              <div class="form-group">
                <label class="control-label">Berat(gr)</label>
                <input class="form-control" type="number" name="berat" value="<?=$produk->berat?>">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="control-label">Harga Beli</label>
                <input class="form-control" type="number" name="harga_beli" value="<?=$produk->harga_beli?>">
              </div>
              <div class="form-group">
                <label class="control-label">Harga Jual</label>
                <input class="form-control" type="number" name="harga_jual" value="<?=$produk->harga_jual?>">
              </div>
              <div class="form-group">
                <label class="control-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" style="height: 211px;"><?=$produk->deskripsi?></textarea>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group btn-container">
                <input type="submit" name="submit" value="UBAH DATA" class="btn btn-primary btn-block" style="background-color: #0f4c75; border-color: #0f4c75; width: 100%;">
              </div>
            </div>

            
          </div>
        </form> 
      </div>  
    </section>
    <!-- /.content -->
  </div>
