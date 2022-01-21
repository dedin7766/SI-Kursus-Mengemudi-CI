	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				<div style="margin-top: 30px; width:100%,height:50px;text-align:center;background:green;color:#fff;line-height:60px;font-size:20px;">
			Data Kursus Murid
		</div><br>
		  <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <?php if($this->session->flashdata('msg_berhasil_keluar')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil_keluar');?>
               </div>
              <?php } ?>
		   <table id="example1" class="table table-bordered table-striped">
                <thead>

              <tr>
            <th>No.</th>
            <th>Nama Murid</th>
            <th>Jenis Paket</th>
            <th>Kelas</th>
            <th>No Hp</th>
            <th>Opsi</th>
            
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($data_kursus as $t) {
            ?>
            <tr>

              <td><?php echo $no++; ?></td>
              <td><?php echo $t->nama_anggota ?></td>
              <td><?php echo $t->nama_paket ?></td>
               <td><?php echo $t->kelas ?></td>
                <td><?php echo $t->no_telp ?></td>
                <td> <?php if ($t->status_belajar == "Belum Belajar"): ?>
                    <a class="btn btn-info" href="<?php echo base_url().'pengajar/isi_pertemuan/'.$t->id_kursus; ?>"> Belajar</a>
                   <?php else: ?>
                    <a class="btn btn-success"> Belajar Selesai</a>
                 <?php endif ?>
                  </td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
		

</div>
</div>
</div>