<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
  function __construct(){
    parent::__construct();
     // cek Login
    if($this->session->userdata('status') != "login"){
     $alert=$this->session->set_flashdata('alert', 'Anda Belum Login,Harap Login untuk mengakses halaman selanjutnya');
     redirect(base_url().'login');
   }
 }

 function index(){
  $this->load->view('member/header.php');
  $this->load->view('member/index.php');
  $this->load->view('member/footer.php');
}

function logout(){
  $this->session->sess_destroy();
  redirect(base_url().'welcome?pesan=logout');
}

function daftar(){
  $data['daftar'] = $this->M_kursus->getByDesc();
  $data['paket'] = $this->M_kursus->get_data('paket')->result();
  $data['pengajar'] = $this->M_kursus->get_data('pengajar')->result();
  $this->load->view('member/header.php');
  $this->load->view('member/daftar.php',$data);
  $this->load->view('member/footer.php');
}




function hapus_pen($id){
  $where = array('id_transaksi' => $id);
  
  $this->session->set_flashdata('msg_berhasil','Data Pendaftaran Berhasil Dibatalkan');
  $this->M_kursus->delete_data($where,'transaksi');
  redirect(base_url().'member/pendaftaran');
}

function pendaftaran(){
  $data['daftar'] = $this->M_kursus->getByDesc();
  $id=$this->session->userdata('id_agt');
  $data['transaksi'] = $this->db->query("SELECT * FROM transaksi T, paket B, anggota A , pengajar C  WHERE T.id_paket=B.id_paket and T.id_anggota=A.id_anggota and T.id_pengajar=C.id_pengajar and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
  $this->load->view('member/header.php');
  $this->load->view('member/pendaftaran.php',$data);
  $this->load->view('member/footer.php');
}

function data_kursus(){
  $data['user'] = $this->M_kursus->getByDesc();
  $id=$this->session->userdata('id_agt');
  $data['data_kursus'] = $this->db->query("SELECT * FROM data_kursus D, anggota A , paket B  WHERE D.id_anggota=A.id_anggota and D.id_paket=B.id_paket  and D.id_anggota='$id' ORDER BY  D.id_anggota='$id' ASC" )->result();
  $this->load->view('member/header.php');
  $this->load->view('member/dataKursus.php',$data);
  $this->load->view('member/footer.php');
}


function konfirmasi(){
  $data['daftar'] = $this->M_kursus->getByDesc();
  $id=$this->session->userdata('id_agt');
  $data['transaksi'] = $this->db->query("SELECT * FROM transaksi T, paket B, anggota A , pengajar C  WHERE T.id_paket=B.id_paket and T.id_anggota=A.id_anggota and T.id_pengajar=C.id_pengajar and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
  $this->load->view('member/header.php');
  $this->load->view('member/konfirmasi.php',$data);
  $this->load->view('member/footer.php');
}

function transaksi(){
  $id_paket = $this->input->post('id_paket');
  $id_pengajar = $this->input->post('id_pengajar');
  $id_anggota = $this->input->post('id_anggota');
  $kelas = $this->input->post('kelas');
  $tgl_daftar = $this->input->post('tgl_daftar');
  $this->form_validation->set_rules('id_pengajar','Nama Pengajar','required');
  $this->form_validation->set_rules('id_paket','Nama Paket','required');
  $this->form_validation->set_rules('kelas','Kelas','required');
  $this->form_validation->set_rules('tgl_daftar','Tanggal daftar','required');
  if($this->form_validation->run() != false){
    $data = array(
      'id_pengajar' => $id_pengajar,
      'id_paket' => $id_paket,
      'id_anggota' => $id_anggota,
      'kelas' => $kelas,
      'tgl_daftar' => $tgl_daftar,
    );

    $this->session->set_flashdata('msg_berhasil','Pendaftaran berhasil disimpan');
    $this->M_kursus->insert('transaksi',$data);
    $this->M_kursus->insert('data_kursus',$data);
    redirect(base_url().'member/pendaftaran');
  }else{

    $data['daftar'] = $this->M_kursus->getByDesc();
    $data['paket'] = $this->M_kursus->get_data('paket')->result();
    $data['pengajar'] = $this->M_kursus->get_data('pengajar')->result();
    $this->load->view('member/header.php');
    $this->load->view('member/daftar.php',$data);
    $this->load->view('member/footer.php');
  }
}
function edit_act(){
  $id = $this->input->post('id');
  $id_paket = $this->input->post('id_paket');
  $id_pengajar = $this->input->post('id_pengajar');
  $id_anggota = $this->input->post('id_anggota');
  $kelas = $this->input->post('kelas');
  $tgl_daftar = $this->input->post('tgl_daftar');
  $this->form_validation->set_rules('id_pengajar','Nama Pengajar','required');
  $this->form_validation->set_rules('id_paket','Nama Paket','required');
  $this->form_validation->set_rules('kelas','Kelas','required');
  $this->form_validation->set_rules('tgl_daftar','Tanggal daftar','required');
  if($this->form_validation->run() != false){
    $where = array('id_transaksi' => $id);
    $data = array(
        'id_pengajar' => $id_pengajar,
      'id_paket' => $id_paket,
      'id_anggota' => $id_anggota,
      'kelas' => $kelas,
      'tgl_daftar' => $tgl_daftar,
    );

    $this->M_kursus->update_data('transaksi',$data,$where);
    redirect(base_url().'member/pendaftaran');
  } else{
 
 }
}

function edit_pen($id){
  $where = array('id_transaksi' =>$id);

  $data['transaksi'] = $this->db->query("SELECT * FROM transaksi T, paket B, anggota A , pengajar C  WHERE T.id_paket=B.id_paket and T.id_anggota=A.id_anggota and T.id_pengajar=C.id_pengajar and T.id_transaksi='$id'")->result();
  $data['daftar'] = $this->M_kursus->getByDesc();
  $data['paket'] = $this->M_kursus->get_data('paket')->result();
  $data['pengajar'] = $this->M_kursus->get_data('pengajar')->result();
  $this->load->view('member/header');
  $this->load->view('member/edit_pen',$data);
  $this->load->view('member/footer');
}

function metode_bayar($id){
  $where = array('id_transaksi' =>$id);

  $data['transaksi'] = $this->db->query("SELECT * FROM transaksi T, paket B, anggota A , pengajar C  WHERE T.id_paket=B.id_paket and T.id_anggota=A.id_anggota and T.id_pengajar=C.id_pengajar and T.id_transaksi='$id'")->result();
  $data['daftar'] = $this->M_kursus->getByDesc();
  $data['paket'] = $this->M_kursus->get_data('paket')->result();
  $data['pengajar'] = $this->M_kursus->get_data('pengajar')->result();
  $this->load->view('member/header');
  $this->load->view('member/mp',$data);
  $this->load->view('member/footer');
}

function isi_rek($id){
  $where = array('id_transaksi' =>$id);

  $data['transaksi'] = $this->db->query("SELECT * FROM transaksi T, paket B, anggota A , pengajar C  WHERE T.id_paket=B.id_paket and T.id_anggota=A.id_anggota and T.id_pengajar=C.id_pengajar and T.id_transaksi='$id'")->result();
  $data['daftar'] = $this->M_kursus->getByDesc();
  $data['paket'] = $this->M_kursus->get_data('paket')->result();
  $data['pengajar'] = $this->M_kursus->get_data('pengajar')->result();
  $this->load->view('member/header');
  $this->load->view('member/isi_rek',$data);
  $this->load->view('member/footer');
}

function bayar(){
  $id = $this->input->post('id');
  $metode_bayar = $this->input->post('metode_bayar');
  $this->form_validation->set_rules('metode_bayar','Metode Bayar','required');
  if($this->form_validation->run() != false){
    $where = array('id_transaksi' => $id);
    $data = array(
      'metode_bayar' => $metode_bayar,
    );

    $this->M_kursus->update_data('transaksi',$data,$where);
    redirect(base_url().'member/konfirmasi');
  } else{
   $where = array('id_transaksi' =>$id);

   $data['transaksi'] = $this->db->query("SELECT * FROM transaksi T, paket B, anggota A , pengajar C  WHERE T.id_paket=B.id_paket and T.id_anggota=A.id_anggota and T.id_pengajar=C.id_pengajar and T.id_transaksi='$id'")->result();
   $data['daftar'] = $this->M_kursus->getByDesc();
   $data['paket'] = $this->M_kursus->get_data('paket')->result();
   $data['pengajar'] = $this->M_kursus->get_data('pengajar')->result();
   redirect(base_url().'member/konfirmasi');
 }
}

function k_bayar(){
  $id = $this->input->post('id');
  $ub = $this->input->post('ub');
  $no_rek = $this->input->post('no_rek');
  $this->form_validation->set_rules('ub','Metode Bayar','required');
  $this->form_validation->set_rules('no_rek','no_rek','required');
   if($this->form_validation->run() != false){
   
  
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['file_name'] = 'gambar'.time();

        $this->load->library('upload',$config);

        if($this->upload->do_upload('foto')){
          $image = $this->upload->data();
             $where = array('id_transaksi' => $id);
          $data = array(
            'no_rek' => $no_rek,
            'ub' => $ub,
            'gambar' => $image['file_name'],
    );

    $this->M_kursus->update_data('transaksi',$data,$where);
    redirect(base_url().'member/konfirmasi');
  } else{
   $where = array('id_transaksi' =>$id);

   $data['transaksi'] = $this->db->query("SELECT * FROM transaksi T, paket B, anggota A , pengajar C  WHERE T.id_paket=B.id_paket and T.id_anggota=A.id_anggota and T.id_pengajar=C.id_pengajar and T.id_transaksi='$id'")->result();
   $data['daftar'] = $this->M_kursus->getByDesc();
   $data['paket'] = $this->M_kursus->get_data('paket')->result();
   $data['pengajar'] = $this->M_kursus->get_data('pengajar')->result();
   redirect(base_url().'member/isi_rek');
 }
}
}
}


