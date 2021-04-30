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
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_pasien_add.php');
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
      'id_spesialis' => $pelayanan
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
      'id_spesialis' => $pelayanan
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
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_ruangan_add.php');
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
      'id_spesialis' => $spesialis,
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
      'id_spesialis' => $spesialis,
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
}
