
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
    <?php 
    $data = $data_paket->result()[0];

     ?>
    <!-- Main content -->
    <section class="content">
      <div class="container pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-5 px-3 py-5" style="background-color: #ffffff;">
            <h4 align="center">Terima Kasih Sudah Melakukan Upgrade Paket <?= $data->nama ?></h4>
            <hr style="">
            <center>
            <table border="0">
              <tr>
                <td style="width: 200px; text-align: left;"></td>
                <td style="width: 200px; text-align: right;">Status</td>
              </tr>
              <tr>
                <td style="width: 200px; text-align: left;"></td>
                <td style="width: 200px; text-align: right;">BELUM BAYAR</td>
              </tr>
            </table></center><br><hr>
            <p style="text-align: center;">Silahkan Transfer Dana Sebesar:</p>
            <p class="h5" style="text-align: center;">Rp <?= $data->harga ?></p>
            <p style="text-align: center;">ke salah satu bank dibawah ini:</p>
            <hr>
            <center>
            <table border="0">
              <tr>
                <td style="width: 80px; text-align: left;"><p class="h5">BCA</p></td>
                <td style="width: 100px; text-align: left;"><p>123456789</p></td>
              </tr>
              <tr>
                <td style="width: 80px; text-align: left;"><p class="h5">BNI</p></td>
                <td style="width: 100px; text-align: left;"><p>123456789</p></td>
              </tr>
              <tr>
                <td style="width: 80px; text-align: left;"><p class="h5">BRI</p></td>
                <td style="width: 100px; text-align: left;"><p>123456789</p></td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: center;"><p>A/N KLOLA</p></td>
              </tr>
            </table>
            <hr>
            <a href="http://wa.me/6282283293360" target="_blank" class="btn btn-primary" style="background-color: #0f4c75; border-color: #0f4c75;">KONFIRMASI PEMBAYARAN</a>
            </center>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
