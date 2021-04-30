<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('masuk') != TRUE) {
      $url = base_url() . 'index.php/Login';
      redirect($url);
    }
  }

  // Controller Pasien

  public function index()
  {
    $this->load->model('M_Pasien');
    $data['tbl_pasien'] = $this->M_Pasien->tampil_data()->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/index.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  public function data_pasien_add()
  {
    $this->load->model('M_Spesialis');
    $data['tbl_spesialis'] = $this->M_Spesialis->tampil_data()->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_pasien_add.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  public function data_pasien_add_action()
  {

    $nik = $this->input->POST('nik');
    $nama = $this->input->POST('nama');
    $jk = $this->input->POST('jk');
    $umur = $this->input->POST('umur');
    $alamat = $this->input->POST('alamat');
    $keluhan = $this->input->POST('keluhan');
    $pelayanan = $this->input->POST('pelayanan');

    $data = array(
      'nik' => $nik,
      'nama_pasien' => $nama,
      'jk' => $jk,
      'umur' => $umur,
      'alamat' => $alamat,
      'keluhan' => $keluhan,
      'kode_spesialis' => $pelayanan
    );

    $this->load->model('M_Pasien');
    $this->M_Pasien->input_data($data, 'tbl_pasien');
    redirect('Backend');
  }

  public function data_pasien_edit($id_pasien)
  {
    $where = array(
      'id_pasien' => $id_pasien
    );

    $this->load->model('M_Pasien');
    $data['tbl_pasien'] = $this->M_Pasien->view_data($where, 'tbl_pasien')->result();

    $this->load->model('M_Spesialis');
    $data['tbl_spesialis'] = $this->M_Spesialis->tampil_data()->result();

    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_pasien_edit.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  public function data_pasien_edit_action()
  {
    $id = $this->input->POST('idpasien');
    $nik = $this->input->POST('nik');
    $nama = $this->input->POST('nama');
    $jk = $this->input->POST('jk');
    $umur = $this->input->POST('umur');
    $alamat = $this->input->POST('alamat');
    $keluhan = $this->input->POST('keluhan');
    $pelayanan = $this->input->POST('pelayanan');

    $data = array(
      'nik' => $nik,
      'nama_pasien' => $nama,
      'jk' => $jk,
      'umur' => $umur,
      'alamat' => $alamat,
      'keluhan' => $keluhan,
      'kode_spesialis' => $pelayanan
    );

    $where = array(
      'id_pasien' => $id
    );

    $this->load->model('M_Pasien');
    $this->M_Pasien->update_data($where, $data, 'tbl_pasien');
    redirect('Backend');
  }

  function data_pasien_delete($id_pasien)
  {
    $where = array(
      'id_pasien' => $id_pasien
    );

    $this->load->model('M_Pasien');
    $this->M_Pasien->delete_data($where, 'tbl_pasien');
    redirect('Backend');
  }

  // Controller Ruangan

  public function data_ruangan()
  {
    $this->load->model('M_Ruangan');
    $data['tbl_ruangan'] = $this->M_Ruangan->tampil_data()->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_ruangan.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  public function data_ruangan_add()
  {
    $this->load->model('M_Spesialis');
    $data['tbl_spesialis'] = $this->M_Spesialis->tampil_data()->result();

    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_ruangan_add.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  public function data_ruangan_add_action()
  {

    $nomor = $this->input->POST('nomor');
    $nama = $this->input->POST('nama');
    $spesialis = $this->input->POST('spesialis');
    $biaya = $this->input->POST('biaya');

    $data = array(
      'nomor_ruangan' => $nomor,
      'nama_ruangan' => $nama,
      'kode_spesialis' => $spesialis,
      'biaya' => $biaya
    );

    $this->load->model('M_Ruangan');
    $this->M_Ruangan->input_data($data, 'tbl_ruangan');
    redirect('Backend/data_ruangan');
  }

  public function data_ruangan_edit($id_ruangan)
  {
    $where = array(
      'id_ruangan' => $id_ruangan
    );

    $this->load->model('M_Ruangan');
    $data['tbl_ruangan'] = $this->M_Ruangan->view_data($where, 'tbl_ruangan')->result();

    $this->load->model('M_Spesialis');
    $data['tbl_spesialis'] = $this->M_Spesialis->tampil_data()->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_ruangan_edit.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  public function data_ruangan_edit_action()
  {
    $id = $this->input->POST('idruangan');
    $nomor = $this->input->POST('nomor');
    $nama = $this->input->POST('nama');
    $spesialis = $this->input->POST('spesialis');
    $biaya = $this->input->POST('biaya');

    $data = array(
      'nomor_ruangan' => $nomor,
      'nama_ruangan' => $nama,
      'kode_spesialis' => $spesialis,
      'biaya' => $biaya
    );

    $where = array(
      'id_ruangan' => $id
    );

    $this->load->model('M_Ruangan');
    $this->M_Ruangan->update_data($where, $data, 'tbl_ruangan');
    redirect('Backend/data_ruangan');
  }

  function data_ruangan_delete($id_ruangan)
  {
    $where = array(
      'id_ruangan' => $id_ruangan
    );

    $this->load->model('M_Ruangan');
    $this->M_Ruangan->delete_data($where, 'tbl_ruangan');
    redirect('Backend/data_ruangan');
  }

  // Controller Spesialis

  public function data_bidang_spesialis()
  {
    $this->load->model('M_Spesialis');
    $data['tbl_spesialis'] = $this->M_Spesialis->tampil_data()->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_bidang_spesialis.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  public function data_spesialis_add()
  {
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_bidang_spesialis_add.php');
    $this->load->view('backend/template/footer.php');
  }

  public function data_spesialis_add_action()
  {

    $kode = $this->input->POST('kode');
    $nama = $this->input->POST('nama');

    $data = array(
      'kode_spesialis' => $kode,
      'nama_spesialis' => $nama
    );

    $this->load->model('M_Spesialis');
    $this->M_Spesialis->input_data($data, 'tbl_bidang_spesialis');
    redirect('Backend/data_bidang_spesialis');
  }

  public function data_spesialis_edit($id_spesialis)
  {
    $where = array(
      'id_spesialis' => $id_spesialis
    );

    $this->load->model('M_Spesialis');
    $data['tbl_bidang_spesialis'] = $this->M_Spesialis->view_data($where, 'tbl_bidang_spesialis')->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_bidang_spesialis_edit.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  public function data_spesialis_edit_action()
  {
    $id = $this->input->POST('id');
    $kode = $this->input->POST('kode');
    $nama = $this->input->POST('nama');

    $data = array(
      'kode_spesialis' => $kode,
      'nama_spesialis' => $nama
    );

    $where = array(
      'id_spesialis' => $id
    );

    $this->load->model('M_Spesialis');
    $this->M_Spesialis->update_data($where, $data, 'tbl_bidang_spesialis');
    redirect('Backend/data_bidang_spesialis');
  }

  function data_spesialis_delete($id_spesialis)
  {
    $where = array(
      'id_spesialis' => $id_spesialis
    );

    $this->load->model('M_Spesialis');
    $this->M_Spesialis->delete_data($where, 'tbl_bidang_spesialis');
    redirect('Backend/data_bidang_spesialis');
  }

  // Controller Dokter

  public function data_dokter()
  {
    $this->load->model('M_Dokter');
    $data['tbl_dokter'] = $this->M_Dokter->tampil_data()->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_dokter.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  public function data_dokter_add()
  {
    $this->load->model('M_Spesialis');
    $data['tbl_spesialis'] = $this->M_Spesialis->tampil_data()->result();

    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_dokter_add.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  public function data_dokter_add_action()
  {

    $config['upload_path'] = "./uploads/";
    $config['allowed_types'] = "jpg|png|gif";
    $config['max_size'] = 2048;
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('photo')) {
      $error = array('error' => $this->upload->display_error());
      redirect('Backend/data_dokter_add', $error);
    } else {
      $nip = $this->input->POST('nip');
      $kode = $this->input->POST('kode');
      $nama = $this->input->POST('nama');
      $alamat = $this->input->POST('alamat');
      $spesialis = $this->input->POST('spesialis');
      $photo = $this->upload->data('file_name');

      $data = array(
        'nip' => $nip,
        'kode_dokter' => $kode,
        'nama_dokter' => $nama,
        'alamat' => $alamat,
        'kode_spesialis' => $spesialis,
        'photo' => $photo
      );

      $this->load->model('M_Dokter');
      $this->M_Dokter->input_data($data, 'tbl_dokter');
      redirect('Backend/data_dokter');
    }
  }

  public function data_dokter_edit($id_dokter)
  {
    $where = array(
      'id_dokter' => $id_dokter
    );

    $this->load->model('M_Spesialis');
    $data['tbl_spesialis'] = $this->M_Spesialis->tampil_data()->result();

    $this->load->model('M_Dokter');
    $data['tbl_dokter'] = $this->M_Dokter->view_data($where, 'tbl_dokter')->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_dokter_edit.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  public function data_dokter_edit_action()
  {
    if (empty($_FILES['photo']['name'])) {
      $id = $this->input->POST('id');
      $nip = $this->input->POST('nip');
      $kode = $this->input->POST('kode');
      $nama = $this->input->POST('nama');
      $alamat = $this->input->POST('alamat');
      $spesialis = $this->input->POST('spesialis');

      $data = array(
        'nip' => $nip,
        'kode_dokter' => $kode,
        'nama_dokter' => $nama,
        'alamat' => $alamat,
        'kode_spesialis' => $spesialis
      );

      $where = array(
        'id_dokter' => $id
      );

      $this->load->model('M_Dokter');
      $this->M_Dokter->update_data($where, $data, 'tbl_dokter');
      redirect('Backend/data_dokter');
    } else {
      $config['upload_path'] = FCPATH . "/uploads/";
      $config['allowed_types'] = "jpg|png|gif|jpeg";
      $config['max_size'] = 2048;
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload');
      $this->upload->initialize($config);

      $id = $this->input->POST('id');
      $nip = $this->input->POST('nip');
      $kode = $this->input->POST('kode');
      $nama = $this->input->POST('nama');
      $alamat = $this->input->POST('alamat');
      $spesialis = $this->input->POST('spesialis');
      $this->upload->do_upload('photo');
      $photo = $this->upload->data('file_name');

      $data = array(
        'nip' => $nip,
        'kode_dokter' => $kode,
        'nama_dokter' => $nama,
        'alamat' => $alamat,
        'kode_spesialis' => $spesialis,
        'photo' => $photo
      );

      $where = array(
        'id_dokter' => $id
      );

      $file = $this->db->get_where('tbl_dokter', ['id_dokter' => $id])->row();
      unlink("./uploads/" . $file->photo);

      $this->load->model('M_Dokter');
      $this->M_Dokter->update_data($where, $data, 'tbl_dokter');
      redirect('Backend/data_dokter');
    }
  }

  function data_dokter_delete($id_dokter)
  {
    $where = array(
      'id_dokter' => $id_dokter
    );

    $file = $this->db->get_where('tbl_dokter', ['id_dokter' => $id_dokter])->row();
    unlink("./uploads/" . $file->photo);

    $this->load->model('M_Dokter');
    $this->M_Dokter->delete_data($where, 'tbl_dokter');
    redirect('Backend/data_dokter');
  }
}
