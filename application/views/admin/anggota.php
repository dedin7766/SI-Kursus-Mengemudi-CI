<div class="page-header">
  <h3>Data Member</h3>
</div>
<a href="<?php echo base_url().'admin/tambah_anggota'; ?>" class="btn btn-primary "><span class="glyphicon glyphicon-plus"></span> Member Baru</a>
<a class="btn btn-default btn-md" href="<?php echo base_url().'admin/laporan_print_anggota' ?>">
  <span class="glypicon glypicon-print"></span>
Print</a>
<br><br>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover" id = "table-datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Anggota</th>
        <th>Gender</th>
        <th>No.Telpon</th>
        <th>Alamat</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($anggota as $a) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $a->nama_anggota ?></td>
        <td><?php echo $a->gender ?></td>
        <td><?php echo $a->no_telp ?></td>
        <td><?php echo $a->alamat ?></td>
        <td nowrap="nowrap">
          <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_anggota/'.$a->id_anggota; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
          <a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_anggota/'.$a->id_anggota; ?>"><span class="glyphicon glyphicon-remove"></span></a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
