	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				<div style="margin-top: 30px; width:100%,height:50px;text-align:center;background:#000000;color:#fff;line-height:60px;font-size:20px;">
			Data Transakasi
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
            <th>Nama </th>
            <th>Jenis Paket</th>
            <th>Kelas</th>
            <th>Pengajar</th>
            <th>Tanggal Daftar</th>
            <th>Metode Bayar</th>
            <th>No Rekening Anda</th>
            <th>Uang Bayar</th>
            
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
              <td><?php echo $t->nama_pengajar ?></td>
              <td><?php echo $t->tgl_daftar ?></td>
              <td><?php echo $t->metode_bayar ?></td>
              <td><?php echo $t->no_rek ?></td>
              <td><?php echo $t->ub ?></td>
              	
              
                  
                <?php } ?>

               
             
            </tr>
        </tbody>
    </table>
		

</div>
</div>
</div>