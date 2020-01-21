<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
                <div class="col-lg-8">
                    <h1 class="m-0 text-dark">Daftar Transaksi</h1>
                </div>
                <div class="col-lg-4">
                    <a href="<?=base_url().'transaksi/tambah'?>" class="float-right d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>     
                </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <nav>
        <div class="container">
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-belum" role="tab" aria-controls="nav-home" aria-selected="true">Belum di Proses</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-sedang" role="tab" aria-controls="nav-profile" aria-selected="false">Sedang di Proses</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-sudah" role="tab" aria-controls="nav-contact" aria-selected="false">Sudah di Proses</a>
          </div>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-belum" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="mb-4" style="background: white;">
                        <div class="">
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
        <div class="tab-pane fade" id="nav-sedang" role="tabpanel" aria-labelledby="nav-profile-tab">
            
        </div>
        <div class="tab-pane fade" id="nav-sudah" role="tabpanel" aria-labelledby="nav-contact-tab">

        </div>
    </div>

</div>

