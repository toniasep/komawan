<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/main.css'; ?>">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Daftar</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Aplikasi Manajemen Penjualan</h1>
      </div>
      <div class="signup-box">
        <form class="login-form" action="<?=base_url().'daftar'?>" method="post" autocomplete="off"><!-- 
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3> -->
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="control-label">NAMA</label>
                <input class="form-control" type="text" placeholder="Nama Lengkap" name="nama" required="">
              </div>
              <div class="form-group">
                <label class="control-label">NO HP</label>
                <input class="form-control" type="number" placeholder="No HP" name="hp" required="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="control-label">EMAIL</label>
                <input class="form-control" type="email" placeholder="Email" name="email" required="">
              </div>
              <div class="form-group">
                <label class="control-label">PASSWORD</label>
                <input class="form-control" type="password" placeholder="Password" name="password" required="">
              </div>
              <div class="form-group">
                <label class="control-label">KONFIRMASI PASSWORD</label>
                <input class="form-control" type="password" placeholder="Konfirmasi Password" name="copassword" required="">
              </div>
            </div>

            <div class="col-lg-12">
              <div class="form-group btn-container">
                <input type="submit" name="submit" value="DAFTAR" class="btn btn-primary btn-block"><br>
                <label>sudah punya akun ?</label>
                <a href="<?=base_url().'masuk'?>" class="btn btn-primary btn-block">MASUK</a>
              </div>
            </div>

            
          </div>
        </form>
      </div>
    </section>
  </body>
</html>