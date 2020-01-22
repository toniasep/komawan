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
        
        <form class="login-form" action="<?=base_url().'transaksi/tambah'?>" method="post"><!-- 
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3> -->
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="control-label">Pelanggan</label>
                    <select class="form-control selectpicker" id="pelanggan" data-live-search="true" name="pelanggan_id" data-size="5" style="width: 40%" placeholder="Pelanggan" required="">
                      <option disabled selected value style="display:none"> -- Pilih Pelanggan -- </option>
                      <option value="tambah_pelanggan">Tambah Baru</option>
                      <?php foreach ($pelanggan->result() as $p) {
                      ?>
                        <option value="<?=$p->id?>" data-hp="<?=$p->hp?>" data-alamat="<?=$p->alamat.', '.$p->urban.', '.$p->sub_district.', '.$p->city?>"><?=$p->nama?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="control-label">NAMA</label>
                    <input class="form-control" type="text" placeholder="Nama Lengkap" name="nama" readonly>
                  </div>                  
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="control-label">NO HP</label>
                    <input class="form-control" type="number" placeholder="No HP" name="hp" readonly>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="control-label">ALAMAT LENGKAP</label>
                    <textarea class="form-control" placeholder="Alamat Lengkap" name="alamat" readonly></textarea>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="col-lg-12">
            <hr>
              <div class="table-responsive">
                <table class="table table-bordered" id="tabel_produk">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Produk</th>
                      <th>Qty</th>
                      <th>Harga</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>
                        <select name="produk[]" id="produk1" class="form-control selectpicker" data-live-search="true" data-size="5" style="width: 40%" required="" onchange="changeProduk(1)">
                          <?php
                          foreach ($produk->result() as $p) {
                          ?>
                            <option value="<?=$p->id?>" data-harga="<?=$p->harga_jual?>"><?=$p->nama?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </td>
                      <td><input type="number" name="qty[]" id="qty1" class="form-control" value="1" onchange="changeQty(1)"></td>
                      <td><input type="number" name="harga[]" id="harga1" readonly="" class="form-control" onchange="changeHarga()"></td>
                      <td>
                        <button type="button" class="btn btn-primary mx-3" onclick="tambah_baris_produk()"><i class="fa fa-plus"></i></button>
                      </td>
                    </tr>
        
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-lg-6">
              <hr>
              <div class="row">
                <div class="col-lg-4">
                  <input type="text" name="kurir" class="form-control">
                </div>
                <div class="col-lg-4">
                  <input type="text" name="berat" class="form-control">
                </div>
                <div class="col-lg-4">
                  <input type="text" name="ongkir" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-lg-6 flat-right text-right">
              <table rowspan=5 colspan=5 class="float-right">
                <tr>
                  <td>Sub Total</td>
                  <td></td>
                  <td><input type="text" id="sub_total" class="form-control" readonly=""></td>
                </tr>
                <tr>
                  <td>Biaya Pengiriman</td>
                  <td></td>
                  <td><input type="text" name="" class="form-control"></td>
                </tr>
                <tr>
                  <td>Total</td>
                  <td></td>
                  <td><input type="text" name="" class="form-control" readonly=""></td>
                </tr>
              </table>
            </div>

            <div class="col-lg-12">
              <br><br>
              <div class="form-group btn-container">
                <input type="submit" name="submit" value="TAMBAH TRANSAKSI" class="btn btn-primary btn-block">
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
                    <option value="<?=$dp->id?>"><?=$dp->urban.', '.$dp->sub_district.', '.$dp->city?></option>
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
    }else{
      // $.ajax({
      //   url: '<?=base_url()?>pelanggan/cari?id='+opval,
      //   method: "get",
      //   dataType : 'json',
      //   success: function(data) {
      //      $('*[name=nama]').val(data[0]['nama']);
      //      $('*[name=hp]').val(data[0]['hp']);
      //      $('*[name=alamat]').val(data[0]['alamat']+'\n'+data[0]['urban']+', '+data[0]['sub_district']+', '+data[0]['city']);
      //   }
      // });
      var selected = $('#pelanggan').find(':selected');
      $('*[name=nama]').val(selected.text());
       $('*[name=hp]').val(selected.data('hp'));
       $('*[name=alamat]').val(selected.data('alamat'));
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
    var kelurahan_teks = $("#kelurahan option:selected").text();

    $.ajax({
      url: '<?=base_url()?>pelanggan/tambah',
      type: "post",
      data: formData,
      success: function(d) {
        $.ajax({
          url : "<?=base_url().'pelanggan/list_pelanggan'?>",
          method : "POST",
          dataType : 'json',
          success: function(data){
               $('#pelanggan option').remove();
               $('#pelanggan').append(`<option value="tambah_pelanggan">Tambah Baru</option>`).selectpicker('refresh');
               for(var i = 0; i < data.length; i++){
                if(data[i]['nama'] == formData['nama']){
                  $('#pelanggan').append(`<option value="`+data[i]['id']+`" selected>`+data[i]['nama']+`</option>`).selectpicker('refresh');
                }else{
                  $('#pelanggan').append(`<option value="`+data[i]['id']+`" >`+data[i]['nama']+`</option>`).selectpicker('refresh');
                }
                
               }

               $('*[name=nama]').val(formData['nama']);
               $('*[name=hp]').val(formData['hp']);
               $('*[name=alamat]').val(formData['alamat']+'\n'+kelurahan_teks);

               $('#closemodal').click();
          }
        });
      }
    });
  });

});


function changeProduk(no){
   $('#harga'+no).val($('#produk'+no).find(':selected').data('harga'));
   $('#qty'+no).val(1);
}

function changeQty(no){
  $('#harga'+no).val(Number($('#qty'+no).val())*Number($('#produk'+no).find(':selected').data('harga')));
}

function changeHarga(){
  var produks = $('input[name="harga[]"]');
  var sub_total = 0;
  for(var i = 0; i < produks.length; i++){
    sub_total += Number(produks[i].value);
  }
  $('#sub_total').val(sub_total);
}

function tambah_baris_produk(){
  $rowno = $("#tabel_produk tr").length;
  $rowno = $rowno + 1;
    $.ajax({
        url : "<?=base_url().'produk/list_produk'?>",
        method : "POST",
        dataType : 'json',
        success: function(data){
            var html = `<tr id="tabel_produk`+$rowno+`"><td>`+($rowno-1)+`</td><td>
            <select name="produk[]" id="produk`+$rowno+`" class="form-control produk_selectpicker" data-live-search="true" data-size="5" style="width: 40%" required="" onchange="changeProduk(`+$rowno+`)">`;
            var i;
            for(var i = 0; i < data.length; i++){
                html += `<option value="`+data[i]['id']+`" data-harga="`+data[i]['harga_jual']+`">`+data[i]['nama']+`</option>`;
            }
            html += `</select></td><td><input type="number" name="qty[]" id="qty`+$rowno+`" class="form-control" value="1" onchange="changeQty(`+$rowno+`)"></td><td><input type="number" name="harga[]" id="harga`+$rowno+`" readonly="" class="form-control" onchange="changeHarga()"></td><td><button class="btn btn-danger mx-3" onclick=hapus_baris_produk(`+$rowno+`)><i class="fa fa-minus"></i></button></td></tr>`;
            $("#tabel_produk tr:last").after(html); 
            $('.produk_selectpicker').selectpicker('refresh');
        }
    });
}

function hapus_baris_produk(rowno)
{
  $('#tabel_produk'+rowno).remove();
}
</script>