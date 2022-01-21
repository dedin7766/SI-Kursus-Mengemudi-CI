<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginPengajar extends CI_Controller {
function __construct(){
	parent::__construct();
}

	public function index()
	{
		$this->load->view('pengajar/login');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() != false){
			$where = array('username'=>$username, 'password'=>md5($password));

			$data = $this->M_kursus->edit_data($where,'pengajar');
			$d = $this->M_kursus->edit_data($where,'pengajar')->row();
			$cek = $data->num_rows();

			if($cek > 0)
			{
				$session = array('id' => $d->id_pengajar,'nama' => $d->nama_pengajar,'status' =>'login');
				$this->session->set_userdata($session);
				redirect(base_url().'pengajar');
			


 }
 else{             
 		$where = array('username'=>$username, 'password'=>md5($password));
     $dt = $this->M_kursus->edit_data($where, 'anggota'); 
     $hasil = $this->M_kursus->edit_data($where, 'anggota')->row();  
     $proses = $dt->num_rows(); 
 
                if($proses > 0)
                	{                     $session = array('id_agt' => $hasil->id_anggota, 'nama_agt' => $hasil->nama_anggota, 'status' => 'login');                    
                	 $this->session->set_userdata($session);                  
                	    redirect(base_url().'');                 
                	}else{                    
                	 $this->session->set_flashdata('alert', 'Login gagal! Username atau password salah.');                     redirect(base_url().'LoginPengajar');   }      
                	                    }     
                	     }else{
                	              $this->session->set_flashdata('alert', 'Anda Belum mengisi Username atau Password'); 
                		$this->load->view('');
			}
		}
}


