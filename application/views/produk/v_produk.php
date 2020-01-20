<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Produk</h1>
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
                <a href="<?=base_url().'produk/tambah'?>" class="float-right d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>     
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
                              <th>No</th>
                              <th>SKU</th>
                              <th>Nama Barang</th>
                              <th>Harga Beli</th>
                              <th>Harga Jual</th>
                              <th>Sisa Stok</th>
                              <th>Tindakan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $no = 1;
                            foreach($data_produk->result() as $dp)
                            { 
                            ?>
                                <tr>
                                  <td><?=$no?></td>
                                  <td><?=$dp->sku?></td>
                                  <td><?=$dp->nama?></td>
                                  <td><?=$dp->harga_beli?></td>
                                  <td><?=$dp->harga_jual?></td>
                                  <td><?=$dp->stok?></td>
                                  <td>
                                    <a href="<?=base_url().'produk/ubah/'.$dp->id?>" class="btn btn-primary btn-circle">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <a href="<?=base_url().'produk/hapus/'.$dp->id?>" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Anda yakin untuk menghapus data <?=$dp->sku?>?');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                  </td>
                                </tr>
                            <?php
                              $no++;
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