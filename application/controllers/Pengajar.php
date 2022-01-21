<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends CI_Controller {

   function index(){
    $this->load->view('pengajar/home/header.php');
    $this->load->view('pengajar/home/index.php');
     $this->load->view('pengajar/home/footer.php');
  }
   function logout(){
    $this->session->sess_destroy();
    redirect(base_url().'LoginPengajar');
  }
   function regis_pengajar(){
      $this->load->view('pengajar/header');
      $this->load->view('pengajar/regis_pengajar');
      $this->load->view('pengajar/footer');
    }
    function regis_pengajar_act(){
      $nama_pengajar = $this->input->post('nama_pengajar');
      $username = $this->input->post('username');
      $no_telp = $this->input->post('no_telp');
      $alamat = $this->input->post('alamat');
      $password = $this->input->post('password');
      $this->form_validation->set_rules('nama_pengajar','Nama Pengajar','required');
      $this->form_validation->set_rules('no_telp','No.Telpon','required');
      $this->form_validation->set_rules('alamat','Alamat','required');
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required');
      if($this->form_validation->run() != false){
          $data = array(
            'nama_pengajar' => $nama_pengajar,
            'username' => $username,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'password' => md5($password),
          );
          $this->M_kursus->insert_data($data,'pengajar');
          
    redirect(base_url().'LoginPengajar');
        }else{
          $this->load->view('pengajar/header');
          $this->load->view('pengajar/regis_pengajar');
          $this->load->view('pengajar/footer');
        }
      }

    function data_murid(){
      $data['user'] = $this->M_kursus->getByDesc();
      $id=$this->session->userdata('id');
         $data['data_kursus'] = $this->db->query("SELECT * FROM data_kursus D, anggota A , pengajar C, paket B WHERE D.id_anggota=A.id_anggota and D.id_paket=B.id_paket and D.id_pengajar=C.id_pengajar and D.id_pengajar='$id' ORDER BY  C.id_pengajar='$id' ASC")->result();
      $this->load->view('pengajar/home//header');
      $this->load->view('pengajar/home/datamurid',$data);
      $this->load->view('pengajar/home/footer');
    }

  function data_k_murid(){
      $data['user'] = $this->M_kursus->getByDesc();
      $id=$this->session->userdata('id');
    $data['data_kursus'] = $this->db->query("SELECT * FROM data_kursus D, anggota A , pengajar C, paket B WHERE D.id_anggota=A.id_anggota and D.id_paket=B.id_paket and D.id_pengajar=C.id_pengajar and D.id_pengajar='$id' ORDER BY  C.id_pengajar='$id' ASC")->result();
      $this->load->view('pengajar/home//header');
      $this->load->view('pengajar/home/dataKursusMurid',$data);
      $this->load->view('pengajar/home/footer');
    }


function isi_pertemuan($id){
  $where = array('id_kursus' =>$id);
  $data['dk'] = $this->db->query("select * from data_kursus A , anggota B where A.id_anggota=B.id_anggota and id_kursus='$id'")->result();
  $this->load->view('pengajar/home//header');
    $this->load->view('pengajar/home/isi_pertemuan',$data);
    $this->load->view('pengajar/home/footer');
}

function isi_pertemuan_act(){
 $id = $this->input->post('id');
  $p1= $this->input->post('p1');
  $p2= $this->input->post('p2');
  $p3= $this->input->post('p3');
  $p4= $this->input->post('p4');
  $p5= $this->input->post('p5');
  $p6= $this->input->post('p6');
  $p7= $this->input->post('p7');
  $p8= $this->input->post('p8');
  $p9= $this->input->post('p9');
  $p10= $this->input->post('p10');
  $this->form_validation->set_rules('p1','Pertemuan 1','required');
    if($this->form_validation->run() != false){
    $where = array('id_kursus' => $id);
    $data = array(
      'p1' => $p1,
      'p2' => $p2,
      'p3' => $p3,
      'p4' => $p4,
      'p5' => $p5,
      'p6' => $p6,
      'p7' => $p7,
      'p8' => $p8,
      'p9' => $p9,
      'p10' => $p10,
    );

    $this->M_kursus->update_data('data_kursus',$data,$where);
    redirect(base_url().'pengajar/data_k_murid');
  } else{
    $where = array('id_kursus' =>$id);
   redirect(base_url().'pengajar/isi_pertemuan');
  }
}



    }