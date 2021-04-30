<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Pasien</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pasien</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header float-left">
          <h2 class="card-title"><b>List Pasien</b></h2>
          <div class="float-right">
            <a href="<?php echo base_url() . 'index.php/Backend/data_pasien_add' ?>" class="btn btn-primary">tambah</a>
          </div>
          <!-- <div class="card-tools">
            <ul class="pagination pagination-sm float-right mr-5">
              <li class="page-item"><a class="page-link" href="#">«</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
          </div> -->
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>umur</th>
                <th>keluhan</th>
                <th>Pelayanan</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($tbl_pasien as $key => $pasien) {
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $pasien->nik ?></td>
                  <td><?php echo $pasien->nama_pasien ?></td>
                  <td><?php echo $pasien->jk ?></td>
                  <td><?php echo $pasien->umur ?></td>
                  <td><?php echo $pasien->keluhan ?></td>
                  <td><?php echo $pasien->id_spesialis ?></td>
                  <td>
                    <a href="<?php echo base_url() . 'index.php/Backend/data_pasien_edit/' . $pasien->id_pasien ?>" class="btn btn-success">Edit</a>
                    <a href="<?php echo base_url() . 'index.php/Backend/data_pasien_delete/' . $pasien->id_pasien ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->