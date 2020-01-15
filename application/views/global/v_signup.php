<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css'; ?>">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Aplikasi Manajemen Penjualan</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="<?php echo base_url().'main/signup'; ?>" method="post"><!-- 
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3> -->
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="control-label">USERNAME</label>
                <input class="form-control" type="text" placeholder="Username" name="username" autofocus>
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
                <button class="btn btn-primary btn-block">SIGN UP</button><br>
                <label>sudah punya akun ?</label>
                <input type="submit" name="submit" value="LOGIN" class="btn btn-primary btn-block">
              </div>
            </div>

            
          </div>
        </form>
      </div>
    </section>
  </body>
</html>