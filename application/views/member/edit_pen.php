
	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				
<div class="page-header">
  <h3>PILIH PAKET</h3>
</div>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
  <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>


              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
             </div>
            <?php } ?>
<form action="<?php echo base_url().'member/edit_act' ?>" method="post" enctype="multipart/form-data">
         <div class="form-group">
    <label>ID Transaksi</label>
    <?php foreach ($transaksi as $t) { ?>
      <input type="text" name="id" readonly="readonly"  class="form-control"  value="<?php echo $t->id_transaksi; ?>">
        <?php } ?>
     </div>
	   <div class="form-group">
	   	<label>Nama Anda</label>
	   	<input type="hidden" name="id_anggota" value="<?= $daftar['id_anggota']; ?>">
	   	<input type="text" name="" value="<?= $daftar['nama_anggota']; ?>" class="form-control" readonly>
	   </div>
    <div class="form-group">
      <label>Tempat,Tanggal Lahir</label>
      <input type="text" value="<?= $daftar['ttl']; ?>" class="form-control" readonly>
    </div>
     <div class="form-group">
      <label>Gender</label>
      <input type="text" value="<?= $daftar['gender']; ?>" class="form-control" readonly>
    </div>
     <div class="form-group">
    <label>Paket</label>
    <select name="id_paket" class="form-control">
      <option value="">--Pilih Paket--</option>
      <?php foreach ($paket as $p) { ?>
        <option value="<?php echo $p->id_paket; ?>"><?php echo $p->nama_paket; ?></option>
      <?php } ?>
    </select>
    <?php echo form_error('id_paket'); ?>
    </div>

     <div class="form-group" style="display:block;">
                  <label for="kelas" style="width:73%;">Kelas</label> 
                  <select name="kelas" class="form-control" style="width:25%;margin-right: 18px;">
                   <option value="">-Pilih-</option>
                   <?php foreach ($transaksi as $t) { ?>
                   <option <?php if($t->kelas == "Kelas Pagi"){echo "selected='selected'";} echo $t->kelas; ?> value="Kelas Pagi"> Kelas Pagi</option>
                   <option <?php if($t->kelas == "Kelas Siang"){echo "selected='selected'";} echo $t->kelas; ?> value="Kelas Siang"> Kelas Siang</option>
                   <option <?php if($t->kelas == "Kelas Malam"){echo "selected='selected'";} echo $t->kelas; ?> value="Kelas Malam"> Kelas Malam</option>
                 </select>
              <?php } ?>
               </div>
    
     <div class="form-group">
    <label>Pengajar</label>
    <select name="id_pengajar" class="form-control">
      <option value="">-Pilih Pengajar-</option>
      <?php foreach ($pengajar as $pe) { ?>
        <option value="<?php echo $pe->id_pengajar; ?>"><?php echo $pe->nama_pengajar; ?></option>
      <?php } ?>
    </select>
    <?php echo form_error('id_pengajar'); ?>
    </div>
   <div class="form-group">
      <label>Tanggal Daftar</label>
      <input type="date" name="tgl_daftar" class="form-control">
      <?php echo form_error('tgl_daftar'); ?>
    </div>
     <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
      <a href="#" class="btn btn-warning" onclick="window.history.go(-1)"> Kembali</a>   
    </div>
  </div>
</form>

					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //welcome-bottom -->

<!--start-video-->
  						
				
			<div class="clearfix"> </div>
		</div>
		</div>
</div>
		<!--//news-->
	
		