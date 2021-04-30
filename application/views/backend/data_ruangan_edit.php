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
          <?php foreach ($tbl_ruangan as $ruangan) { ?>
            <form action="<?php echo base_url() . 'index.php/Backend/data_ruangan_edit_action' ?>" method="POST">
              <input type="hidden" name="idruangan" value="<?php echo $ruangan->id_ruangan ?>">
              <div class="form-group">
                <label>Nomor Ruangan</label>
                <input type="text" class="form-control" name="nomor" value="<?php echo $ruangan->nomor_ruangan ?>" placeholder="masukan nomor ruangan">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Ruangan</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $ruangan->nama_ruangan ?>" placeholder="masukan nama ruangan">
              </div>
              <div class="form-group">
                <label>Spesialis</label>
                <select name="spesialis" class="form-control">
                  <option value="<?php echo $ruangan->id_spesialis ?>"><?php echo $ruangan->id_spesialis ?></option>
                  <option value="1">Kulit</option>
                  <option value="2">Pernafasan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Biaya</label>
                <input type="number" name="biaya" class="form-control" value="<?php echo $ruangan->biaya ?>" placeholder="000">
              </div>
              <button type="submit" class="btn btn-primary float-right" name="submit">Edit</button>
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