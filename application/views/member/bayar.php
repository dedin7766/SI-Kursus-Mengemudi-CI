
	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				
<div class="page-header">
  <h3>PILIH METODE PEMBAYARAN</h3>
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
<form action="<?php echo base_url().'member/bayar' ?>" method="post" enctype="multipart/form-data">
     <div class="form-group">
    <label>ID Transaksi</label>
    <?php foreach ($transaksi as $t) { ?>
      <input type="text" name="id" readonly="readonly"  class="form-control"  value="<?php echo $t->id_transaksi; ?>">
        <?php } ?>
     </div>
	   <div class="form-group">
	   	<label>Nama Anda</label>
	   	<input type="hidden" name="" value="<?= $daftar['id_anggota']; ?>">
	   	<input type="text" name="" value="<?= $daftar['nama_anggota']; ?>" class="form-control" readonly>
	   </div>
         <div class="form-group">
    <label>Paket</label>
    <?php foreach ($transaksi as $t) { ?>
      <input type="text" name="" readonly="readonly"  class="form-control"  value="<?php echo $t->nama_paket; ?>"
        <?php } ?>
     </div>
    <div class="form-group">
    <label>Kelas</label>
    <?php foreach ($transaksi as $t) { ?>
      <input type="text" name="" readonly="readonly"  class="form-control"  value="<?php echo $t->kelas; ?>">
        <?php } ?>
     </div>
      <div class="form-group">
    <label>Metode Pembayaran</label>
    <?php foreach ($transaksi as $t) { ?>
      <input type="text" name="" readonly="readonly"  class="form-control"  value="<?php echo $t->metode_bayar; ?>">
        <?php } ?>
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
	
		