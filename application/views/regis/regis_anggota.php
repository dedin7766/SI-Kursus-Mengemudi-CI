<div class="page-header">
  <h3>Registrasi Akun</h3>
</div>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>
<form action="<?php echo base_url().'regis/regis_anggota_act' ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Nama Anggota</label>
      <input type="text" name="nama_anggota" class="form-control">
      <?php echo form_error('nama_anggota'); ?>
    </div>
    <div class="form-group">
      <label>Tempat,Tanggal Lahir</label>
      <input type="text" name="ttl" class="form-control">
      <?php echo form_error('ttl'); ?>
    </div>
    <div class="form-group">
      <label>Gender</label>
      <select name="gender" class="form-control">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      <?php echo form_error('gender'); ?>
    </div>

    <div class="form-group">
      <label>Agama</label>
      <select name="agama" class="form-control">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
      </select>
      <?php echo form_error('agama'); ?>
    </div>


    <div class="form-group">
      <label>Pendidikan Terakhir</label>
      <select name="pt" class="form-control">
        <option value="SD">SD</option>
        <option value="SMTP">SMTP</option>
        <option value="SMTA">SMTA</option>
        <option value="AKDM/UNIV">AKDM/UNIV</option>
      </select>
      <?php echo form_error('pt'); ?>
    </div>

   <div class="form-group">
      <label>Pekerjaan</label>
      <input type="text" name="pekerjaan" class="form-control">
      <?php echo form_error('pekerjaan'); ?>
    </div>

    <div class="form-group">
      <label>No.Telpon</label>
      <input type="text" name="no_telp" class="form-control">
    </div>

    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat" class="form-control">
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" class="form-control">
      <?php echo form_error('username'); ?>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
      <a href="#" class="btn btn-warning" onclick="window.history.go(-1)"> Kembali</a>   
    </div>
  </div>
</form>
