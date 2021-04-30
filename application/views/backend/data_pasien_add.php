<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data Pasien</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pasien</li>
            <li class="breadcrumb-item active">tambah pasien</li>
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
          <h3 class="card-title"><b>Form Pasien</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
          <form action="<?php echo base_url() . 'index.php/Backend/data_pasien_add_action' ?>" method="POST">
            <div class="form-group">
              <label>NIK</label>
              <input type="text" class="form-control" name="nik" placeholder="masukan NIK">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nama Pasien</label>
              <input type="text" name="nama" class="form-control" placeholder="masukan nama lengkap">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select name="jk" class="form-control">
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Umur</label>
              <input type="number" name="umur" class="form-control" placeholder="masukan umur pasien">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea name="alamat" class="form-control" placeholder="alamat pasien" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label>Keluhan</label>
              <textarea name="keluhan" class="form-control" placeholder="keluhan pasien" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label>Pelayanan</label>
              <select name="pelayanan" class="form-control">
                <option value="1">Kulit</option>
                <option value="2">Pernafasan</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary float-right" name="submit">tambah</button>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->