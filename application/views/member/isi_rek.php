
	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				
<div class="page-header">
  <h3>KONFIRMASI PEMBAYARAN</h3>
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
<form action="<?php echo base_url().'member/k_bayar' ?>" method="post" enctype="multipart/form-data">
     <div class="form-group">
    <label>ID Transaksi</label>
    <?php foreach ($transaksi as $t) { ?>
      <input type="text" name="id" readonly="readonly"  class="form-control"  value="<?php echo $t->id_transaksi; ?>">
        <?php } ?>
     </div>
         <div class="form-group">
    <label>No Rekening Asyka Stir</label>
      <input type="text" name="" readonly="readonly"  class="form-control"  value="274527537544 (BANK MANDIRI)"
     </div>
    <div class="form-group">
    <label>Total Bayar</label>
    <?php foreach ($transaksi as $t) { ?>
      <input type="text" name="" readonly="readonly"  class="form-control"  value=" <?php
                     
                    if($t->nama_paket  == "Paket Pemula"){
                         echo number_format(925000 + 50000);
                    }else if($t->nama_paket == "Paket Memperlancar"){
                        echo number_format(625000 + 50000);
                    }else if($t->nama_paket == "Paket Reguler"){
                        echo number_format(475000 + 50000);
                    }
                
                ?>">
        <?php } ?>
     </div>
      <div class="form-group">
    <label>Metode Pembayaran</label>
    <?php foreach ($transaksi as $t) { ?>
      <input type="text" name="" readonly="readonly"  class="form-control"  value="<?php echo $t->metode_bayar; ?>">
        <?php } ?>
     </div>
      <div class="form-group">
      <label>No Rekening Anda</label>
      <input type="text" name="no_rek" class="form-control">
      <?php echo form_error('no_rek'); ?>
    </div>
     <div class="form-group">
      <label>Foto Bukti Transfer</label>
      <input type="file" name="foto" class="form-control">
    </div>
     <div class="form-group">
      <label>Uang Bayar</label>
      <input type="text" name="ub" class="form-control">
      <?php echo form_error('ub'); ?>
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
	
		