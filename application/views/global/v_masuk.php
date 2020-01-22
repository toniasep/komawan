<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/main.css?v=1.0'?>">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Klola</title>
    <link rel="icon" href="<?=base_url()?>img/Untitled-3.png" type="image">
  </head>
  <body style="background-color: #fcfcfc">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <section class="login-content">
          <img src="<?=base_url().'img/Untitled-1.png'?>"/>
        </section>
      </div>
      <div class="col-md-5">
        <section class="login-content">
          <div class="login-box">
            <form class="login-form" action="<?=base_url().'main/masuk'?>" method="post"> 
              <h3 class="login-head text-primary pt-3">Masuk</h3>
              <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
              <div class="form-group">
                <h6><font color="red"><?=$_SESSION['pesan']?></font></h6>
                <input class="form-control" type="text" placeholder="Email" name="email" autofocus>
              </div>
              <div class="form-group">
                <input class="form-control" type="password" placeholder="Password" name="password">
              </div>
              <div class="form-group btn-container">
                <input type="submit" name="submit" value="MASUK" class="btn btn-primary btn-block"><br>
                <label>Belum punya akun ? <a href="<?=base_url().'daftar'?>">Daftar</a></label>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
  </body>
</html>