<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/main.css'?>">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MASUk</title>
  </head>
  <body style="background-color: #3282b8">

    <section class="login-content">
      <div class="logo">
        <h1>Aplikasi Manajemen Penjualan</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="<?=base_url().'main/masuk'?>" method="post"><!-- 
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3> -->
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <div class="form-group">
            <h6><font color="red"><?=$_SESSION['pesan']?></font></h6>
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email" name="email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div>
          <div class="form-group btn-container">
          	<input type="submit" name="submit" value="MASUK" class="btn btn-primary btn-block"><br>
            <label>belum punya akun ?</label>
            <a href="<?=base_url().'daftar'?>" class="btn btn-primary btn-block">DAFTAR</a>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>