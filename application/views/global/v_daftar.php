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
    <title>Kloka</title>
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
            <div class="signup-box" style="padding: 50px;">
              <form class="login-form" action="<?=base_url().'daftar'?>" method="post" autocomplete="off">
                <center><h3 class="login-head text-primary">Daftar</h3></center><hr>
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="Nama Lengkap" name="nama" required="">
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="number" placeholder="No HP" name="hp" required="">
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="email" placeholder="Email" name="email" required="">
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="password" placeholder="Password" name="password" required="">
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="password" placeholder="Konfirmasi Password" name="copassword" required="">
                    </div>
                    <div class="form-group">
                      <select id="inputState" class="form-control" name="paket_id">
                        <option selected>-- Pilih Paket --</option>
                        <option value="01">Starting</option>
                        <option value="02">Growing</option>
                        <option value="01">Proffesional</option>
                        <option value="01">Enterprise</option>
                      </select><br>
                      <label><a href="<?=base_url().'masuk'?>">Lihat detail paket</a></label>
                    </div>
                    <div class="form-group btn-container">
                      <input type="submit" name="submit" value="DAFTAR" class="btn btn-primary btn-block"><br>
                      <label>Sudah punya akun ? <a href="<?=base_url().'masuk'?>">Masuk</a></label>                      
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>