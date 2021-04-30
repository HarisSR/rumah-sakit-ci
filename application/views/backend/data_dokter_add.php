<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data Dokter </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Dokter</li>
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
          <h3 class="card-title"><b>Form Data Dokter</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
          <form action="<?php echo base_url() . 'index.php/Backend/data_dokter_add_action' ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>NIP</label>
              <input type="text" class="form-control" name="nip" placeholder="masukan nip dokter">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Kode Dokter</label>
              <input type="text" name="kode" class="form-control" placeholder="masukan kode dokter">
            </div>
            <div class="form-group">
              <label>Nama Dokter</label>
              <input type="text" name="nama" class="form-control" placeholder="masukan nama dokter">
            </div>
            <div class="form-group">
              <label>Spesialis</label>
              <select name="spesialis" class="form-control">
                <?php foreach ($tbl_spesialis as $spesialis) { ?>
                  <option value="<?php echo $spesialis->kode_spesialis ?>"><?php echo $spesialis->nama_spesialis ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea name="alamat" class="form-control" rows="5" placeholder="masukan alamat dokter"></textarea>
            </div>
            <div class="form-group">
              <label>Photo</label>
              <input type="file" name="photo" class="form-control" placeholder="pilih photo">
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