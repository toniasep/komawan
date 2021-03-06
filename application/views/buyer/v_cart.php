<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Klola</title>
  <link rel="icon" href="<?=base_url()?>img/Untitled-3.png" type="image">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="<?= base_url(); ?>assets/css/pidie-0.0.1.css?v=1.0" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="font-family: lato;">

  <div class="pd-container-full">
    <div class="pd-row-full">
      <div class="">
        <div class="pd-horizontal-filter" style="background-color: #0f4c75; border: #0f4c75">
          <a href="<?=base_url()?>seller/<?= $user->result()[0]->id ?>" style="text-decoration: none; color: #fff; font-size: 20px; margin-top: 6px; margin-left: 10px;">Toko <?= $user->result()[0]->nama ?></a>
          <a href="#" class="pd-button-grid" style="display: none;"><span class="fa fa-list fa-2x"></span></a>
          <a href="#" class="pd-button-list" style="display: none;"><span class="fa fa-th-large fa-2x"></span></a>
          <span class="pd-filter-total" style="display: none"></span>
          <div class="pd-filter-right" style="margin-right: 1%">
            <select class="pd-input-filter" style="display: none;">
              <option value="popular">Popularity</option>
              <option value="low">Price low to high</option>
              <option value="high">Price high to low</option>
            </select>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="pd-container-full">
    <div class="pd-row">
      <div class="pd-col-md-5">
        <div class="card text-center" style="width:100%">
          <div class="card-body">
            <form class="login-form" action="<?=base_url().'main/transaksi_buyer/'.$_GET['id']?>" method="post"><!-- 
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3> -->
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
              <?php 
              $total = 0;
              foreach($keranjang->result() as $k) {
              $total += $k->total;
              ?>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <h5 class="card-title"><?=$k->nama?></h5>
                  </div>
                  <div class="form-group col-md-4"> 
                    <h5 class="card-text">Rp<?=$k->harga_jual?></h5>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="number" class="form-control" placeholder="Qty" value="<?=$k->qty?>" readonly>
                  </div>
                </div>
                <hr>
                <input type="hidden" name="produk[]" value="<?=$k->produk_id?>">
                <input type="hidden" name="harga[]" value="<?=$k->harga_jual?>">
                <input type="hidden" name="qty[]" value="<?=$k->qty?>">
              <?php
              }
              ?>
              
          </div>
          <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                </div>
                <div class="form-group col-md-4"> 
                  <p class="card-text">Total</p>
                </div>
                <div class="form-group col-md-4">
                  <p class="card-text">Rp.<?=$total?></p>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="pd-col-md-7">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="formGroupExampleInput">Nama</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="nama">
            </div>
            <div class="form-group col-md-6">
              <label for="formGroupExampleInput">No. Hp</label>
              <input type="number" class="form-control" id="inputPassword4" placeholder="No. Hp" name="hp">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="formGroupExampleInput">Email</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Alamat Lengkap</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
          </div>
          <button type="submit" class="btn" style="background-color: #0f4c75; color: #fff">Proses</button>
        </form>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="<?= base_url(); ?>assets/js/pidie-0.0.1.js"></script>
  <script>
    var pidie = new Pidie();
    pidie.panel
    pidie.slide
    pidie.gridList
    pidie.filterSearch
    pidie.tabs
    pidie.accordionCollapse
    pidie.filterSort
    pidie.filterPagination
    pidie.filterCheckbox
  </script>
</body>
</html>
