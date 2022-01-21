<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller {
   function regis_anggota(){
      $this->load->view('regis/header');
      $this->load->view('regis/regis_anggota');
      $this->load->view('regis/footer');
    }
    function regis_anggota_act(){
      $nama_anggota = $this->input->post('nama_anggota');
      $gender = $this->input->post('gender');
      $pt = $this->input->post('pt');
      $ttl = $this->input->post('ttl');
      $pekerjaan = $this->input->post('pekerjaan');
      $agama = $this->input->post('agama');
      $username = $this->input->post('username');
      $no_telp = $this->input->post('no_telp');
      $alamat = $this->input->post('alamat');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $this->form_validation->set_rules('nama_anggota','Nama Anggota','required');
      $this->form_validation->set_rules('no_telp','No.Telpon','required');
      $this->form_validation->set_rules('alamat','Alamat','required');
      $this->form_validation->set_rules('email','Email','required');
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required');
      if($this->form_validation->run() != false){
          $data = array(
            'nama_anggota' => $nama_anggota,
            'gender' => $gender,
            'ttl' => $ttl,
            'pt' => $pt,
            'agama' => $agama,
            'pekerjaan' => $pekerjaan,
            'username' => $username,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'email' => $email,
            'password' => md5($password),
          );
          $this->M_kursus->insert_data($data,'anggota');
          $this->load->view('regis/header');
          $this->load->view('regis/sukses');
        }else{
          $this->load->view('regis/header');
          $this->load->view('regis/regis_anggota');
          $this->load->view('regis/footer');
        }
      }
    }