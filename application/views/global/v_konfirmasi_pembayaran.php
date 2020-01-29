
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-6 px-4 py-5" style="background-color: #ffffff;">
            <h4 align="center">Konfirmasi Pembayaran</h4>
            <hr>
            <div class="form-group">
              <label class="control-label">NAMA PENGIRIM</label>
              <input class="form-control" type="text" name="sku">
            </div>
            <div class="form-group">
              <label class="control-label">TOTAL TRANSFER</label>
              <input class="form-control" type="number" name="sku">
            </div>
            <div class="form-group">
              <label class="control-label">BANK TUJUAN</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>BCA | 123456789</option>
                <option>BNI | 123456789</option>
                <option>BRI | 123456789</option>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">BUKTI TRANSFER</label>
              <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="gambar" accept="image/*" required="">
                <label class="custom-file-label" for="customFile">Upload File</label>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">KETERANGAN</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <center>
            <input type="submit" class="btn btn-primary" value="KONFIRMASI" style="background-color: #0f4c75; border-color: #0f4c75; width: 50%"></center>
            </center>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
