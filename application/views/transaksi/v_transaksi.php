<head>
    <link href="<?=base_url().'assets/'?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url().'assets/'?>vendor/datatables/buttons.dataTables.min.css" rel="stylesheet">
</head>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Transaksi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        <div class="row">
            <div class="col-xl-10">
            </div>
            <div class="col-xl-2">
                <a href="<?=base_url().'transaksi/tambah'?>" class="float-right d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>     
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="tabel" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>No Order</th>
                              <th>Tgl Dibuat</th>
                              <th>Nama Pelanggan</th>
                              <th>Total</th>
                              <th>Kurir</th>
                              <th>Kode Booking</th>
                              <th>Tindakan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            foreach($data_transaksi->result() as $dt)
                            { 
                            ?>
                                <tr>
                                  <td><?=$dt->id?></td>
                                  <td><?=$dt->tgl_tambah?></td>
                                  <td><?=$dt->pelanggan_nama?></td>
                                  <td><?=$dt->total_harga?></td>
                                  <td><?=$dt->kurir?></td>
                                  <td><?=$dt->kode_booking?></td>
                                  <td>
                                    <a href="<?=base_url().'transaksi/ubah/'.$dt->id?>" class="btn btn-primary btn-circle">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <a href="<?=base_url().'transaksi/hapus/'.$dt->id?>" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Anda yakin untuk menghapus data <?=$dt->id?>?');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                  </td>
                                </tr>
                            <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</div>


<!-- Page level plugins -->
<script src="<?=base_url().'assets/'?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/dataTables.buttons.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/jszip.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/pdfmake.min.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/vfs_fonts.js"></script>
<script src="<?=base_url().'assets/'?>vendor/datatables/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#tabel thead tr').clone(true).appendTo( '#tabel thead' );
        $('#tabel thead tr:eq(1) th').each( function (i) {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Cari '+title+'" />' );
     
            $( 'input', this ).on( 'keyup change', function () {
                if ( table.column(i).search() !== this.value ) {
                    table
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } );
     
        var table = $('#tabel').DataTable( {
            orderCellsTop: true,
            fixedHeader: true,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
</script>