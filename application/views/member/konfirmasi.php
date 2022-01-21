	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				<div style="margin-top: 30px; width:100%,height:50px;text-align:center;background:green;color:#fff;line-height:60px;font-size:20px;">
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
             <th>Total Biaya</th>
              <th>Sisa Bayar</th>
             <th>Opsi</th>
            <th align="center"><center>Status Konfirmasi</center></th>
             <th>Data Kursus</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($transaksi as $t) {
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
              <td>Rp. <?php echo $t->ub ?></td>
              <td>Rp. <?php
                    if($t->nama_paket  == "Paket Pemula"){
                         echo number_format(925000 + 50000);
                    }else if($t->nama_paket == "Paket Memperlancar"){
                        echo number_format(625000 + 50000);
                    }else if($t->nama_paket == "Paket Reguler"){
                        echo number_format(475000 + 50000);
                    }
                ?></td>
               <td>Rp. <?php
                    if($t->nama_paket  == "Paket Pemula"){
                         echo number_format(925000 + 50000 - $t->ub);
                    }else if($t->nama_paket == "Paket Memperlancar"){
                        echo number_format(625000 + 50000 - $t->ub);
                    }else if($t->nama_paket == "Paket Reguler"){
                        echo number_format(475000 + 50000 - $t->ub);
                    }
                ?></td>
              	
                <td> <?php if ($t->metode_bayar == "Transfer BANK"): ?>
                   <a class="btn btn-info"  href="<?php echo base_url().'member/isi_rek/'.$t->id_transaksi; ?>">
                   <span> Konfirmasi</span></a>
                   <?php else: ?>
                  
                 <?php endif ?>
             </td>
              <td> <?php if ($t->status_konfirmasi == "Belum Dikonfirmasi"): ?>
                   <a class="btn btn-danger">
                   <span> Menunggu...</span></a>
                   <?php else: ?>
                    <a class="btn btn-success">
                   <span> Sudah Dikonfirmasi</span></a>
                 <?php endif ?>
             </td>
                  
                  <td> <?php if ($t->status_konfirmasi == "Sudah Dikonfirmasi"): ?>
                  <a class="btn btn-info"  href="<?php echo base_url().'member/data_kursus' ?>">
                    <span> Lihat</span></a>
                   <?php else: ?>
                    <a class="btn btn-danger">
                   <span> Belum dapat dilihat</span></a>
                 <?php endif ?>
             </td>
                <?php } ?>

               
             
            </tr>
        </tbody>
    </table>
		

</div>
</div>
</div>