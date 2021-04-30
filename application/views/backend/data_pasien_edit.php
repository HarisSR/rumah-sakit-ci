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
          <?php foreach ($tbl_pasien as $pasien) { ?>
            <form action="<?php echo base_url() . 'index.php/Backend/data_pasien_edit_action' ?>" method="POST">
              <input type="hidden" name="idpasien" value="<?php echo $pasien->id_pasien ?>">
              <div class="form-group">
                <label>NIK</label>
                <input type="text" class="form-control" name="nik" value="<?php echo $pasien->nik ?>" placeholder="masukan NIK">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Pasien</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $pasien->nama_pasien ?>" placeholder="masukan nama lengkap">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jk" class="form-control">
                  <option value="<?php echo $pasien->jk ?>"><?php echo $pasien->jk ?></option>
                  <option value="laki-laki">laki-laki</option>
                  <option value="perempuan">perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Umur</label>
                <input type="number" name="umur" value="<?php echo $pasien->umur ?>" class="form-control" placeholder="masukan umur pasien">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="alamat pasien" rows="5"><?php echo $pasien->alamat ?></textarea>
              </div>
              <div class="form-group">
                <label>Keluhan</label>
                <textarea name="keluhan" class="form-control" placeholder="keluhan pasien" rows="5"><?php echo $pasien->keluhan ?></textarea>
              </div>
              <div class="form-group">
                <label>Pelayanan</label>
                <select name="pelayanan" class="form-control">
                  <?php foreach ($tbl_spesialis as $spesialis) {
                    if ($spesialis->kode_spesialis == $pasien->kode_spesialis) { ?>
                      <option value="<?php echo $spesialis->kode_spesialis ?>" selected><?php echo $spesialis->nama_spesialis ?></option>
                    <?php } else { ?>
                      <option value="<?php echo $spesialis->kode_spesialis ?>"><?php echo $spesialis->nama_spesialis ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>
              <button type="submit" class="btn btn-primary float-right" name="submit">tambah</button>
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