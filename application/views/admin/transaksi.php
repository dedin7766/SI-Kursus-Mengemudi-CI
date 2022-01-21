<div class="page-header">
  <h3>Data Transaksi</h3>
</div>
<a class="btn btn-default btn-md" href="<?php echo base_url().'admin/laporan_print_transaksi' ?>">
  <span class="glypicon glypicon-print"></span>
Print</a>
<br><br>
<div class="table-responsive">
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
            <th>Bukti Transfer</th>
            <th>Status Bayar</th>
            <th align="center"><center>Status Konfirmasi</center></th>
             <th>Opsi</th>
            
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
              <td>Rp. <?php echo ($t->ub) ?></td>
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
                 <td><img src="<?php echo base_url().'/assets/upload/'.$t->gambar; ?>" width="80" height="80" alt="gambar tidak ada"></td>
                   <td> <?php if ($t->ub == "" ): ?>
                   <a class="btn btn-danger">
                      <span> Belum Bayar</span></a>
                   <?php else: ?>
                     <a class="btn btn-success">
                   <span> Sudah Bayar</span></a>
                  
                 <?php endif ?>
             </td>
                  
              
             </td>
              <td> <?php if ($t->status_konfirmasi == "Belum Dikonfirmasi"): ?>
                   <a class="btn btn-danger">
                   <span> Menunggu...</span></a>
                   <?php else: ?>
                    <a class="btn btn-success">
                   <span> Sudah Dikonfirmasi</span></a>
                 <?php endif ?></td>
                   <td> 
                   <a class="btn btn-info"  href="<?php echo base_url().'admin/konfirmasi/'.$t->id_transaksi; ?>">
                   <span> Konfirmasi</span></a>
             </td>
                  
                <?php } ?>

               
             
            </tr>
        </tbody>
    </table>
</div>



		