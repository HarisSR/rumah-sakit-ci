<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data Ruangan </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ruangan</li>
            <li class="breadcrumb-item active">Tambah Ruangan</li>
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
        <div class="card-header">
          <h3 class="card-title"><b>Form Ruangan</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
          <?php foreach ($tbl_bidang_spesialis as $spesialis) { ?>
            <form action="<?php echo base_url() . 'index.php/Backend/data_spesialis_edit_action' ?>" method="POST">
              <input type="hidden" name="id" value="<?php echo $spesialis->id_spesialis ?>">
              <div class="form-group">
                <label>Kode Spesialis</label>
                <input type="text" class="form-control" value="<?php echo $spesialis->kode_spesialis ?>" name="kode" placeholder="masukan kode spesialis">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Spesialis</label>
                <input type="text" name="nama" value="<?php echo $spesialis->nama_spesialis ?>" class="form-control" placeholder="masukan nama spesialis">
              </div>
              <button type="submit" class="btn btn-primary float-right" name="submit">update</button>
            </form>
          <?php } ?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->