   <table id="example1" class="table table-bordered table-striped">
                <thead>

              <tr>
            <th>No.Reg</th>
            <th>Nama </th>
            <th>Jenis Paket</th>
            <th>Kelas</th>
            <th>Pengajar</th>
            <th>Tanggal Daftar</th>
            <th>Status Konfirmasi</th>
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
              <td> <?php if ($t->status_konfirmasi == "Belum Dikonfirmasi"): ?>
                   <a class="btn btn-danger">
                   <span> Menunggu...</span></a>
                   <?php else: ?>
                    <a class="btn btn-success">
                   <span> Selesai</span></a>
                 <?php endif ?>
                  </td>
                <?php } ?>
             
            </tr>
        