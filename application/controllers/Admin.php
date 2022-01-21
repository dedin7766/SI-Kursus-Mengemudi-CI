<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    //cek Login
    if($this->session->userdata('status') != "login"){
      redirect(base_url().'welcome?pesan=belumlogin');
    }
  }

  function index(){

    $this->load->view('admin/header');
    $this->load->view('admin/index');
    $this->load->view('admin/footer');
  }
  
function transaksi(){
  $data['daftar'] = $this->M_kursus->getByDesc();
  $data['transaksi'] = $this->db->query("SELECT * FROM transaksi T, paket B, anggota A , pengajar C  WHERE T.id_paket=B.id_paket and T.id_anggota=A.id_anggota and T.id_pengajar=C.id_pengajar")->result();
    $this->load->view('admin/header');
    $this->load->view('admin/transaksi',$data);
    $this->load->view('admin/footer');
}
  function logout(){
    $this->session->sess_destroy();
    redirect(base_url().'welcome?pesan=logout');
  }



   function konfirmasi($id){
  $where = array('id_transaksi' =>$id);
  $data['transaksi'] = $this->db->query("SELECT * FROM transaksi T, paket B, anggota A , pengajar C  WHERE T.id_paket=B.id_paket and T.id_anggota=A.id_anggota and T.id_pengajar=C.id_pengajar and T.id_transaksi='$id'")->result();
  $data['daftar'] = $this->M_kursus->getByDesc();
  $data['paket'] = $this->M_kursus->get_data('paket')->result();
  $data['pengajar'] = $this->M_kursus->get_data('pengajar')->result();
  $this->load->view('admin/header');
    $this->load->view('admin/konfirmasi',$data);
    $this->load->view('admin/footer');
}
   
function konfirmasi_act(){
   $id = $this->input->post('id');
  $status_konfirmasi = $this->input->post('status_konfirmasi');
   $this->form_validation->set_rules('status_konfirmasi','Status konfirmasi','required');
  if($this->form_validation->run() != false){
    $where = array('id_transaksi' => $id);
    $data = array(
      'status_konfirmasi' => $status_konfirmasi,
    );

    $this->M_kursus->update_data('transaksi',$data,$where);
    redirect(base_url().'admin/transaksi');
  }else{

    redirect(base_url().'admin/konfirmasi');
  }
}
    function anggota(){
      $data['anggota'] = $this->M_kursus->get_data('anggota')->result();
      $this->load->view('admin/header');
      $this->load->view('admin/anggota',$data);
      $this->load->view('admin/footer');
    }
      function hapus_anggota($id){
      $where = array('id_anggota' => $id );
      $this->M_kursus->delete_data($where, 'anggota');
      redirect(base_url().'admin/anggota');
  }

    function tambah_anggota(){
      $this->load->view('admin/header');
      $this->load->view('admin/tambahanggota');
      $this->load->view('admin/footer');
    }

    function tambah_anggota_act(){
      $nama_anggota = $this->input->post('nama_anggota');
      $gender = $this->input->post('gender');
      $no_telp = $this->input->post('no_telp');
      $alamat = $this->input->post('alamat');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $this->form_validation->set_rules('nama_anggota','Nama Anggota','required');
      $this->form_validation->set_rules('no_telp','No.Telpon','required');
      $this->form_validation->set_rules('alamat','Alamat','required');
      $this->form_validation->set_rules('email','Email','required');
      $this->form_validation->set_rules('password','Password','required');
      if($this->form_validation->run() != false){
          $data = array(
            'nama_anggota' => $nama_anggota,
            'gender' => $gender,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'email' => $email,
            'password' => md5($password),
          );
          $this->M_perpus->insert_data($data,'anggota');
          redirect(base_url().'admin/anggota');
        }else{
          $this->load->view('admin/header');
          $this->load->view('admin/tambahanggota');
          $this->load->view('admin/footer');
        }
      }

      function edit_anggota($id){
        $where = array('id_anggota' =>$id);
        $data['anggota'] = $this->db->query("select * from anggota where id_anggota='$id'")->result();

        $this->load->view('admin/header');
        $this->load->view('admin/editanggota',$data);
        $this->load->view('admin/footer');
      }

      function update_anggota(){
        $id = $this->input->post('id');
        $nama_anggota = $this->input->post('nama_anggota');
        $gender = $this->input->post('gender');
        $penerbit = $this->input->post('penerbit');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('nama_anggota','Nama Anggota','required');
        $this->form_validation->set_rules('no_telp','No.Telpon','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() != false){
            $where = array('id_anggota' => $id);
            $data = array(
              'nama_anggota' => $nama_anggota,
              'gender' => $gender,
              'no_telp' => $no_telp,
              'alamat' => $alamat,
              'email' => $email,
              'password' => md5($password),
            );

            $this->M_kursus->update_data('anggota',$data,$where);
            redirect(base_url().'admin/anggota');
          } else{
              $where = array('id_anggota' =>$id);
              $data['anggota'] = $this->db->query("select * from anggota where id_anggota='$id'")->result();
              $this->load->view('admin/header');
              $this->load->view('admin/editanggota',$data);
              $this->load->view('admin/footer');
          }
      }

      function peminjaman(){
        $data['peminjaman'] = $this->db->query("SELECT * FROM transaksi T, buku B, anggota A WHERE T.id_buku=B.id_buku and T.id_anggota=A.id_anggota")->result();

        $this->load->view('admin/header');
        $this->load->view('admin/peminjaman',$data);
        $this->load->view('admin/footer');
      }

      function tambah_peminjaman(){
        $w = array('status_buku'=>'1');
        $data['buku'] = $this->M_perpus->edit_data($w,'buku')->result();
        $data['anggota'] = $this->M_perpus->get_data('anggota')->result();
        $data['peminjaman'] = $this->M_perpus->get_data('transaksi')->result();

        $this->load->view('admin/header');
        $this->load->view('admin/tambah_peminjaman',$data);
        $this->load->view('admin/footer');
      }

      function tambah_peminjaman_act(){
        $tgl_pencatatan = date('Y-m-d H:i:s');
        $anggota = $this->input->post('anggota');
        $buku = $this->input->post('buku');
        $tgl_pinjam = $this->input->post('tgl_pinjam');
        $tgl_kembali = $this->input->post('tgl_kembali');
        $denda = $this->input->post('denda');
        $this->form_validation->set_rules('anggota','Anggota','required');
        $this->form_validation->set_rules('buku','Buku','required');
        $this->form_validation->set_rules('tgl_pinjam','Tanggal Pinjam','required');
        $this->form_validation->set_rules('tgl_kembali','Tanggal Kembali','required');
        $this->form_validation->set_rules('denda','Denda','required');
        if($this->form_validation->run() != false){
            $data = array(
              'tgl_pencatatan' => $tgl_pencatatan,
              'id_anggota' => $anggota,
              'id_buku' => $buku,
              'tgl_pinjam' => $tgl_pinjam,
              'tgl_kembali' => $tgl_kembali,
              'denda' => $denda,
              'tgl_pengembalian' => '0000-00-00',
              'total_denda' => '0',
              'status_pengembalian' =>'0',
              'status_peminjaman' =>'0'
            );
            $this->M_perpus->insert_data($data,'transaksi');

            $d = array('status_buku' =>'0','tgl_input' => substr($tgl_pencatatan,0,10));
            $w = array('id_buku' => $buku);
            $this->M_perpus->update_data('buku',$d,$w);
            redirect(base_url().'admin/peminjaman');
          }else{
            $w = array('status_buku' => '1');
            $data['buku'] = $this->M_perpus->edit_data($w,'buku')->result();
            $data['anggota'] = $this->M_perpus->get_data('anggota')->result();

            $this->load->view('admin/header');
            $this->load->view('admin/tambah_peminjaman',$data);
            $this->load->view('admin/footer');
          }
        }

        function transaksi_hapus($id){
          $w = array('id_pinjam' => $id);
          $data = $this->M_perpus->edit_data($w,'transaksi')->row();
          $ww = array('id_buku' => $data->id_buku);
          $data2 = array('status_buku' => '1');
          $this->M_perpus->update_data('buku',$data2,$ww);
          $this->M_perpus->delete_data($w,'transaksi');
          redirect(base_url().'admin/peminjaman');
        }

        function transaksi_selesai($id){
          $data['buku'] = $this->M_perpus->get_data('buku')->result();
          $data['anggota'] = $this->M_perpus->get_data('anggota')->result();
          $data['peminjaman'] = $this->db->query("select * from transaksi t, anggota a, buku b where t.id_buku = b.id_buku and t.id_anggota=a.id_anggota and t.id_pinjam='$id'")->result();

          $this->load->view('admin/header');
          $this->load->view('admin/transaksi_selesai',$data);
          $this->load->view('admin/footer');
        }

        function transaksi_selesai_act(){
          $id = $this->input->post('id');
          $tgl_dikembalikan = $this->input->post('tgl_dikembalikan');
          $tgl_kembali = $this->input->post('tgl_kembali');
          $buku = $this->input->post('buku');
          $denda = $this->input->post('denda');
          $this->form_validation->set_rules('tgl_dikembalikan','Tanggal dikembalkan','required');

          if($this->form_validation->run() !=false){
            //hitung selisih hari
            $batas_kembali = strtotime($tgl_kembali);
            $dikembalikan = strtotime($tgl_dikembalikan);
            $selisih = abs(($batas_kembali - $dikembalikan)/(60*60*24));
            $total_denda = $denda*$selisih;
            //update status Peminjaman
            $data = array('status_peminjaman' => '1','total_denda' => $total_denda,'tgl_pengembalian' => $tgl_dikembalikan,'status_pengembalian' => '1');
            $w = array('id_pinjam' =>$id);
            $this->M_perpus->update_data('transaksi',$data,$w);
            //update status Buku
            $data2 = array('status_buku' => '1');
            $w2 = array('id_buku' => $buku);
            $this->M_perpus->update_data('buku',$data2,$w2);

            redirect(base_url().'admin/peminjaman');
          }else{
            $data['buku'] = $this->M_perpus->get_data('buku')->result();
            $data['anggota'] = $this->M_perpus->get_data('anggota')->result();
            $data['peminjaman'] = $this->db->query("select * from peminjaman p, anggota a, detail_pinjam d, buku b where p.id_anggota = a.id_anggota and p.id_pinjam=d.id_pinjam and d.id_buku=b.id_buku and p.id_pinjam='$id'")->result();

            $this->load->view('admin/header');
            $this->load->view('admin/transaksi_selesai',$data);
            $this->load->view('admin/footer');
          }
        }

        function cetak_laporan_buku(){
          $data['buku'] = $this->M_perpus->get_data('buku')->result();
          $this->load->view('admin/header');
          $this->load->view('admin/laporan_buku',$data);
          $this->load->view('admin/footer');
        }

        function laporan_print_buku(){
          $data['buku'] = $this->M_perpus->get_data('buku')->result();
          $this->load->view('admin/laporan_print_buku',$data);
        }

        function laporan_pdf_buku(){
          $this->load->library('dompdf_gen');
          $data['buku'] = $this->M_perpus->get_data('buku')->result();
          $this->load->view('admin/laporan_pdf_buku',$data);

          $paper_size = 'A4' ;
          $orientation = 'landscape';
          $html = $this->output->get_output();

          $this->dompdf->set_paper($paper_size,$orientation);
          //convert to pdf
          $this->dompdf->load_html($html);
          $this->dompdf->render();
          $this->dompdf->stream("laporan_data_buku.pdf", array('Attachment'=>0));
          //nama file pdf yg di hasilkan
        }

  
        function cetak_laporan_anggota(){
          $data['anggota'] = $this->M_kursus->get_data('anggota')->result();
          $this->load->view('admin/header');
          $this->load->view('admin/laporan_anggota',$data);
          $this->load->view('admin/footer');
        }

        function laporan_print_anggota(){
          $data['anggota'] = $this->M_kursus->get_data('anggota')->result();
          $this->load->view('admin/laporan_print_anggota',$data);
        }
        

        function laporan_pdf_anggota(){
          $this->load->library('dompdf_gen');
          $data['anggota'] = $this->M_perpus->get_data('anggota')->result();
          $this->load->view('admin/laporan_pdf_anggota',$data);

          $paper_size = 'A4' ;
          $orientation = 'landscape';
          $html = $this->output->get_output();

          $this->dompdf->set_paper($paper_size,$orientation);
          //convert to pdf
          $this->dompdf->load_html($html);
          $this->dompdf->render();
          $this->dompdf->stream("laporan_data_anggota.pdf", array('Attachment'=>0));
          //nama file pdf yg di hasilkan
        }

     function laporan_transaksi(){
      $dari = $this->input->post('dari');
      $sampai = $this->input->post('sampai');
      $this->form_validation->set_rules('dari','Dari Tanggal','required');
      $this->form_validation->set_rules('sampai','Sampai Tanggal','required');
      
      if($this->form_validation->run() != false){
        
        $data['laporan'] = $this->db->query("select * from transaksi t, buku b, anggota a where t.id_buku=b.id_buku and t.id_anggota=a.id_anggota 
          and date(tgl_pencatatan) >= '$dari'")->result();
        
        $this->load->view('admin/header');
        $this->load->view('admin/laporan_filter_transaksi',$data);
        $this->load->view('admin/footer');
        }else{
        $this->load->view('admin/header');
        $this->load->view('admin/laporan_transaksi');
        $this->load->view('admin/footer');
        
      }
    }

      function laporan_print_transaksi(){
      $dari = $this->input->get('dari');
      $sampai = $this->input->get('sampai');
      
      if($dari != "" && $sampai != ""){
        $data['laporan'] = $this->db->query("select * from transaksi t,buku b, anggota a where t.id_buku=b.id_buku and t.id_anggota=a.id_anggota and date(tgl_pencatatan) >= '$dari'")->result();
        $this->load->view('admin/laporan_print_transaksi',$data);
      }else{
        redirect("admin/laporan_transaksi");
      }
    }

      function laporan_pdf_transaksi(){
      $this->load->library('dompdf_gen');
      $dari = $this->input->get('dari');
      $sampai = $this->input->get('sampai');
      
      $data['laporan'] = $this->db->query("select * from transaksi t, buku b, anggota a where t.id_buku=b.id_buku and t.id_anggota=a.id_anggota and date(tgl_pencatatan) >= '$dari'")->result();

      $this->load->view('admin/laporan_pdf_transaksi', $data);
      
      $paper_size = 'A4'; //ukuran kertas
      $orientation = 'landscape'; //tipe format kertas portait atau landscape
      $html = $this->output->get_output();
      
      $this->dompdf->set_paper($paper_size, $orientation);
      //convert to pdf
      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream("laporan_data_transaksi.pdf", array('Attachment'=>0));
     }

}
