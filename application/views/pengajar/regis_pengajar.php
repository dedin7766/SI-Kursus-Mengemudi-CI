<div class="page-header">
  <h3>Registrasi Akun Pengajar</h3>
</div>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>
<form action="<?php echo base_url().'pengajar/regis_pengajar_act' ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Nama Pengajar</label>
      <input type="text" name="nama_pengajar" class="form-control">
      <?php echo form_error('nama_pengajar'); ?>
    </div>
    <div class="form-group">
      <label>No.Telepon / Hp</label>
      <input type="text" name="no_telp" class="form-control">
    </div>

    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat" class="form-control">
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
