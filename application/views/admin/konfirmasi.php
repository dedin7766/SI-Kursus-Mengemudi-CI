<div class="page-header">
  <h3>Status Konfirmasi</h3>
</div>
 <form action="<?php echo base_url().'admin/konfirmasi_act' ?>" method="post" enctype="multipart/form-data">
     <div class="form-group" style="width:25%;margin-right: 18px;">
    <label>ID Transaksi</label>
    <?php foreach ($transaksi as $t) { ?>
      <input type="text" name="id" readonly="readonly"  class="form-control"  value="<?php echo $t->id_transaksi; ?>">
    
     </div>
    
  <div class="form-group"  style="width:25%;margin-right: 18px;">
    <label>Status Konfirmasi</label>
     <input type="hidden" name="id" value="<?php echo $t->id_transaksi; ?>">
    <select name="status_konfirmasi" class="form-control">
      <option <?php if($t->status_konfirmasi == "Belum Dikonfirmasi"){echo "selected='selected'";} echo $t->status_konfirmasi; ?> value="Belum Dikonfirmasi"> Belum Dikonfirmasi</option>

       <option <?php if($t->status_konfirmasi == "Sudah Dikonfirmasi"){echo "selected='selected'";} echo $t->status_konfirmasi; ?> value="Sudah Dikonfirmasi"> Sudah Dikonfirmasi</option>
    </select>
    <?php echo form_error('status_konfirmasi'); ?>
  </div>
    <div class="form-group" style="width:25%;margin-right: 18px;">
    <label>Bukti Transaksi</label><br>
      <img src="<?php echo base_url().'/assets/upload/'.$t->gambar; ?>" width="500" height="500" alt="gambar tidak ada">
    
     </div>
       <?php } ?>
     <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
      <a href="#" class="btn btn-warning" onclick="window.history.go(-1)"> Kembali</a>   
    </div>
  </div>
</form>