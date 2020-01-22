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
          <a href="<?=base_url()?>buyer" style="text-decoration: none; color: #fff; font-size: 20px; margin-top: 6px; margin-left: 10px;">TOKO JAYA ABADI</a>
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
          <a href="<?=base_url()?>buyer/cart" class="pd-button-list"><span class="fa fa-shopping-cart fa-lg" style="color: #fff; margin-top: 12px; margin-right: 10px;"> (0)</span></a>
        </div>

      </div>
    </div>
  </div>

  <div class="pd-container-full">
    <div class="pd-row">
      <div class="pd-col-md-5">
        <div class="card text-center" style="width:100%">
          <div class="card-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <h5 class="card-title">Nama Produk</h5>
                </div>
                <div class="form-group col-md-4"> 
                  <p class="card-text">Harga</p>
                </div>
                <div class="form-group col-md-4">
                  <input type="number" class="form-control" name="qty" placeholder="Qty">
                </div>
              </div>
              <hr>
            </form>
          </div>
          <div class="card-body">
            
          </div>
        </div>
      </div>

      <div class="pd-col-md-7">
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
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
