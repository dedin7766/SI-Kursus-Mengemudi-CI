
	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				
<div class="page-header">
  <h3>ABSENSI / DATA PERTEMUAN BELAJAR</h3>
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
<form action="<?php echo base_url().'pengajar/isi_pertemuan_act' ?>" method="post" enctype="multipart/form-data">
     <div class="form-group" style="width:25%;margin-right: 18px;">
    <label>Nama Murid</label>
    <?php foreach ($dk as $t) { ?>
      <input type="hidden" name="id" value="<?php echo $t->id_kursus; ?>">
      <input type="text" readonly="readonly"  class="form-control"  value="<?php echo $t->nama_anggota; ?>">
         <?php } ?>
     </div>
	   <div class="form-group" style="display:block;">
                  <label for="p1" style="width:73%;">Pertemuan 1</label> 
                  <select name="p1" class="form-control" style="width:25%;margin-right: 18px;">
                   <option value="">-Pilih-</option>
                   <option <?php if($t->p1 == "Belum Belajar"){echo "selected='selected'";} echo $t->p1; ?> value="Belum Belajar"> Belum Belajar</option>
                    <option <?php if($t->p1 == "Sudah Belajar"){echo "selected='selected'";} echo $t->p1; ?> value="Sudah Belajar"> Sudah Belajar</option>
                 </select>

                
               </div>
                <div class="form-group" style="display:block;">
                  <label for="p2" style="width:73%;">Pertemuan 2</label>
                  <select name="p2" class="form-control" style="width:25%;margin-right: 18px;">
                   <option value="">-Pilih-</option>
                   <option <?php if($t->p2 == "Belum Belajar"){echo "selected='selected'";} echo $t->p2; ?> value="Belum Belajar"> Belum Belajar</option>
                    <option <?php if($t->p2 == "Sudah Belajar"){echo "selected='selected'";} echo $t->p2; ?> value="Sudah Belajar"> Sudah Belajar</option>
                 </select>
                
               </div>
                <div class="form-group" style="display:block;">
                  <label for="p3" style="width:73%;">Pertemuan 3</label>
                  <select name="p3" class="form-control" style="width:25%;margin-right: 18px;">
                   <option value="">-Pilih-</option>
                   <option <?php if($t->p3 == "Belum Belajar"){echo "selected='selected'";} echo $t->p3; ?> value="Belum Belajar"> Belum Belajar</option>
                    <option <?php if($t->p3 == "Sudah Belajar"){echo "selected='selected'";} echo $t->p3; ?> value="Sudah Belajar"> Sudah Belajar</option>
                 </select>
                
               </div>
                <div class="form-group" style="display:block;">
                  <label for="p4" style="width:73%;">Pertemuan 4</label>
                  <select name="p4" class="form-control" style="width:25%;margin-right: 18px;">
                   <option value="">-Pilih-</option>
                   <option <?php if($t->p4 == "Belum Belajar"){echo "selected='selected'";} echo $t->p4; ?> value="Belum Belajar"> Belum Belajar</option>
                    <option <?php if($t->p4 == "Sudah Belajar"){echo "selected='selected'";} echo $t->p4; ?> value="Sudah Belajar"> Sudah Belajar</option>
                 </select>
                
               </div>
                   <div class="form-group" style="display:block;">
                  <label for="p5" style="width:73%;">Pertemuan 5</label>
                  <select name="p5" class="form-control" style="width:25%;margin-right: 18px;">
                   <option value="">-Pilih-</option>
                   <option <?php if($t->p5 == "Belum Belajar"){echo "selected='selected'";} echo $t->p5; ?> value="Belum Belajar"> Belum Belajar</option>
                    <option <?php if($t->p5 == "Sudah Belajar"){echo "selected='selected'";} echo $t->p5; ?> value="Sudah Belajar"> Sudah Belajar</option>
                 </select>
                
               </div>
                  <div class="form-group" style="display:block;">
                  <label for="p6" style="width:73%;">Pertemuan 6</label>
                  <select name="p6" class="form-control" style="width:25%;margin-right: 18px;">
                   <option value="">-Pilih-</option>
                   <option <?php if($t->p6 == "Belum Belajar"){echo "selected='selected'";} echo $t->p6; ?> value="Belum Belajar"> Belum Belajar</option>
                    <option <?php if($t->p6 == "Sudah Belajar"){echo "selected='selected'";} echo $t->p6; ?> value="Sudah Belajar"> Sudah Belajar</option>
                 </select>
                
               </div>
                  <div class="form-group" style="display:block;">
                  <label for="p7" style="width:73%;">Pertemuan 7</label>
                  <select name="p7" class="form-control" style="width:25%;margin-right: 18px;">
                   <option value="">-Pilih-</option>
                   <option <?php if($t->p7 == "Belum Belajar"){echo "selected='selected'";} echo $t->p7; ?> value="Belum Belajar"> Belum Belajar</option>
                    <option <?php if($t->p7 == "Sudah Belajar"){echo "selected='selected'";} echo $t->p7; ?> value="Sudah Belajar"> Sudah Belajar</option>
                 </select>
                
               </div>
              <div class="form-group" style="display:block;">
                  <label for="p8" style="width:73%;">Pertemuan 8</label>
                  <select name="p8" class="form-control" style="width:25%;margin-right: 18px;">
                   <option value="">-Pilih-</option>
                   <option <?php if($t->p8 == "Belum Belajar"){echo "selected='selected'";} echo $t->p8; ?> value="Belum Belajar"> Belum Belajar</option>
                    <option <?php if($t->p8 == "Sudah Belajar"){echo "selected='selected'";} echo $t->p8; ?> value="Sudah Belajar"> Sudah Belajar</option>
                 </select>
                
               </div>
                 <div class="form-group" style="display:block;">
                  <label for="p9" style="width:73%;">Pertemuan 9</label>
                  <select name="p9" class="form-control" style="width:25%;margin-right: 18px;">
                   <option value="">-Pilih-</option>
                   <option <?php if($t->p9 == "Belum Belajar"){echo "selected='selected'";} echo $t->p9; ?> value="Belum Belajar"> Belum Belajar</option>
                    <option <?php if($t->p9 == "Sudah Belajar"){echo "selected='selected'";} echo $t->p9; ?> value="Sudah Belajar"> Sudah Belajar</option>
                 </select>
                
               </div>
                 <div class="form-group" style="display:block;">
                  <label for="p10" style="width:73%;">Pertemuan 10</label>
                  <select name="p10" class="form-control" style="width:25%;margin-right: 18px;">
                   <option value="">-Pilih-</option>
                   <option <?php if($t->p10 == "Belum Belajar"){echo "selected='selected'";} echo $t->p10; ?> value="Belum Belajar"> Belum Belajar</option>
                    <option <?php if($t->p10 == "Sudah Belajar"){echo "selected='selected'";} echo $t->p10; ?> value="Sudah Belajar"> Sudah Belajar</option>
                 </select>
                
               </div>
                <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
      <a href="#" class="btn btn-warning" onclick="window.history.go(-1)"> Kembali</a>   
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
	
		