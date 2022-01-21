	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				<div style="margin-top: 30px; width:100%,height:50px;text-align:center;background:green;color:#fff;line-height:60px;font-size:20px;">
         Data Pendaftaran Anda
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
            <th>Jam Belajar</th>
            <th>No.Hp Pengajar</th>
            <th>Tanggal Daftar</th>
            <th colspan="2">Opsi</th>
            <th colspan="2" align="center"><center>Status Bayar</center></th>
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
                   <td> <?php if ($t->kelas == "Kelas Pagi"): ?>
                        08.00 s/d 11.30
              <?php  elseif($t->kelas == "Kelas Siang"): ?>
                         12.30 s/d 17.00
               <?php  elseif($t->kelas == "Kelas Malam"): ?>
                         18.30 s/d Selesai
              <?php endif ?></td>
               <td><?php echo $t->no_telp ?></td>
              <td><?php echo $t->tgl_daftar ?></td>
                <?php if ($t->status_konfirmasi == "Belum Dikonfirmasi"): ?>
              <td nowrap="nowrap">
                <a class="btn btn-info " href="<?php echo base_url().'member/edit_pen/'.$t->id_transaksi; ?>">Edit</a>
              </td>
               <td nowrap="nowrap">
                <a class="btn btn-danger " href="<?php echo base_url().'member/hapus_pen/'.$t->id_transaksi; ?>"  onclick="return confirm('Batalkan Pendaftaran?')"><i class="glyphicon glyphicon-remove-sign"></i></a>
              </td>
                <?php else: ?>
                       <td nowrap="nowrap">
                <a class="btn btn-default " href=""  onclick="return confirm('Anda sudah tidak bisa edit Pendaftaran')">Edit</a>
              </td>
               <td nowrap="nowrap">
                <a class="btn btn-default " href=""  onclick="return confirm('Tidak bisa Membatalkan')"><i class="glyphicon glyphicon-remove-sign"></i></a>
              </td>
                <?php endif ?>
              <td> <?php if ($t->status_konfirmasi == "Belum Dikonfirmasi"): ?>
              <a class="btn btn-danger">
               <span> Belum Bayar</span></a>
               <?php else: ?>
                <a class="btn btn-success">
                 <span> Sudah Bayar</span></a>
               <?php endif ?>
             </td>
             <td> <?php if ($t->status_konfirmasi == "Belum Dikonfirmasi"): ?>
             <a class="btn btn-warning" href="<?php echo base_url().'member/metode_bayar/'.$t->id_transaksi; ?>"> Bayar</a>
             <?php else: ?>
              <a class="btn btn-success">
               <span> Lunas</span></a>
             <?php endif ?>
           </td>
         <?php } ?>



       </tr>
     </tbody>
   </table>


 </div>
</div>
</div>