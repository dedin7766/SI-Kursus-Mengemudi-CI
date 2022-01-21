<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class M_kursus extends CI_Model
{
  function edit_data($where,$table){
    return $this->db->get_where($table,$where);
  }

  function get_data($table){
    return $this->db->get($table);
  }

  function insert_data($data,$table){
    $this->db->insert($table,$data);
  }

   function insert($tabel,$data)
  {
    $this->db->insert($tabel,$data);
  }
  

  function update_data($table,$data,$where){
    $this->db->update($table,$data,$where);
  }

  function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }


  function insert_detail($where)
  {
    $sql ="insert into detail_pinjam (id_pinjam,id_buku,denda) select transaksi.id_pinjam,transaksi.id_buku,transaksi.denda from transaksi where transaksi.id_anggota='$where'";
    $this->db->query($sql);
  }

  function find($where, $table){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id_buku', $where)
              ->limit(1)
              ->get($table);
    if($hasil->num_rows() > 0){
      return $hasil->row();
    } else {
      return array();
    }
  }

  function kosongkan_data($table){
    return $this->db->truncate($table);
  }

  function kode_otomatis(){
    $this->db->select('right(id_pinjam,3) as kode', false);
    $this->db->order_by('id_pinjam','desc');
    $this->db->limit(1);
    $query=$this->db->get('peminjaman');
    if($query->num_rows()<>0){
      $data=$query->row();
      $kode=intval($data->kode)+1;
    }else{
      $kode=1;
    }

    $kodemax=str_pad($kode,3,"0", STR_PAD_LEFT);
    $kodejadi='PJ'.$kodemax;

    return $kodejadi;
  }

    function detail($id_anggota){
    $query = $this->db->get_where('anggota',array('id_anggota'  => $id_anggota));
    return $query->row();
  }

    public function getByDesc()
  {
    return $this->db->get_where('anggota', ["id_anggota" => $this->session->userdata('id_agt')])->row_array();
  }

    public function getByDesc2()
  {
    return $this->db->get_where('transaksi', ["id_transaksi" => $this->session->userdata('id_agt')])->row_array();
  }

    public function transaksi()
  {
    $data = [
      "paket" => $this->input->post('paket', true),
      "kelas" => $this->input->post('kelas', true),
      "tgl_daftar" => $this->input->post('tgl_daftar', true),
    ];

    $this->db->update('anggota', $data, ["id_anggota" => $this->input->post('id_anggota')]);
  }

    public function getById()
  {
    $this->db->select('*');
    $this->db->from('transaksi ');
    $this->db->join('transaksi.id_paket=paket.id_paket and transaksi.id_anggota=anggota.id_anggota and transaksi.id_pengajar=pengajar.id_pengajar');
    $this->db->where('anggota.id_anggota', $this->session->userdata('id_agt'));
    return $this->db->get()->row_array();

   
 }

 }