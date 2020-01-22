<link rel="stylesheet" href="<?=base_url().'assets/'?>css/bootstrap-select.min.css">
<script src="<?=base_url().'assets/'?>js/bootstrap-select.min.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Transaksi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <form class="login-form" action="<?=base_url().'main/signup'; ?>" method="post"><!-- 
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3> -->
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="control-label">Pelanggan</label>
                <select class="form-control selectpicker" id="pelanggan" data-live-search="true" name="pelanggan_id" data-size="5" style="width: 40%" placeholder="Pelanggan" required="">
                  <option disabled selected value style="display:none"> -- Pilih Pelanggan -- </option>
                  <option value="tambah_pelanggan">Tambah Baru</option>
                  <?php foreach ($pelanggan->result() as $p) {
                  ?>
                    <option value="<?=$p->id?>"><?=$p->nama?></option>
                  <?php
                  }
                  ?>
                </select>
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
                <input type="submit" name="submit" value="TAMBAH DATA" class="btn btn-primary btn-block">
              </div>
            </div>

            
          </div>
        </form> 
      </div>  
    </section>
    <!-- /.content -->
  </div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="container-fluid">
        
        <form class="login-form" id="ftambah_pelanggan"><!-- 
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3> -->
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="control-label">Nama</label>
                <input class="form-control" type="text" id="nama" autofocus="" required>
              </div>
              <div class="form-group">
                <label class="control-label">Nomor HP</label>
                <input class="form-control" type="number" id="hp" required>
              </div>
              <div class="form-group">
                <label class="control-label">Email</label>
                <input class="form-control" type="email" id="email">
              </div>
              <div class="form-group">
                <label class="control-label">Alamat</label>
                <textarea id="alamat" class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label class="control-label">Kelurahan</label>
                <select class="form-control selectpicker" data-live-search="true" data-size="5" id="kelurahan" style="width: 40%" placeholder="Nama" required="">
                  <?php
                  foreach ($data_pos->result() as $dp) {
                  ?>
                    <option value="<?=$dp->id?>"><?=$dp->urban.','.$dp->sub_district.','.$dp->city?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>            
          </div>
        </form> 
      </div>
          </div>  
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" value="TAMBAH DATA" id="submitpelanggan" class="btn btn-primary btn-block">
          <button type="button" class="btn btn-default" id="closemodal" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<script>
$(document).ready(function(){ //Make script DOM ready
  $('#pelanggan').change(function() { //jQuery Change Function
    var opval = $(this).val(); //Get value from select element
    if(opval=="tambah_pelanggan"){ //Compare it and if true
      $('#myModal').modal("show"); //Open Modal
    }
  });


  $("#submitpelanggan").on("click", function(event) {

    var formData = {
      'nama': $('#nama').val(),
      'hp': $('#hp').val(),
      'email': $('#email').val(),
      'alamat': $('#alamat').val(),
      'kelurahan': $('#kelurahan').val(),
      'submit': 'true'
    };

    $.ajax({
      url: '<?=base_url()?>pelanggan/tambah',
      type: "post",
      data: formData,
      success: function(d) {
        $('#closemodal').click();

        $.ajax({
          url : "<?=base_url().'pelanggan/list_pelanggan'?>",
          method : "POST",
          dataType : 'json',
          success: function(data){
               $('#pelanggan option').remove();
               $('#pelanggan').append(`<option value="tambah_pelanggan">Tambah Baru</option>`).selectpicker('refresh');
               for(var i = 0; i < data.length; i++){

                $('#pelanggan').append(`<option value="`+data[i]['id']+`">`+data[i]['nama']+`</option>`).selectpicker('refresh');
               }
          }
        });
      }
    });
  });

});
</script>