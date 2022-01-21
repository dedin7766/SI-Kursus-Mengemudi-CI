	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				<div style="margin-top: 30px; width:100%,height:50px;text-align:center;background:green;color:#fff;line-height:60px;font-size:20px;">
			Data Pertemuan Murid
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
                    <td rowspan="2" align="center" valign="top"><b>No.</b></td>
                    <td rowspan="2" align="center" valign="top"><b>Nama Murid</b></td>
                    <th colspan="11" align="center"><center>PERTEMUAN</center></th>
                  </tr>
              <tr>
             <th>1</th>
             <th>2</th>
             <th>3</th>
             <th>4</th>
             <th>5</th>
             <th>6</th>
             <th>7</th>
             <th>8</th>
             <th>9</th>
             <th>10</th>
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
              <td> <?php if ($t->p1 == "Sudah Belajar"): ?>
                <a class="btn btn-success"><i class="glyphicon glyphicon-check"></i></a>
              <?php  elseif($t->p1 == "Belum Belajar"): ?>
                <a class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a>
              <?php endif ?></td>

               <td> <?php if ($t->p2 == "Sudah Belajar"): ?>
                <a class="btn btn-success"><i class="glyphicon glyphicon-check"></i></a>
              <?php  elseif($t->p2 == "Belum Belajar"): ?>
                <a class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a>
              <?php endif ?></td>

                <td> <?php if ($t->p3 == "Sudah Belajar"): ?>
                <a class="btn btn-success"><i class="glyphicon glyphicon-check"></i></a>
              <?php  elseif($t->p3 == "Belum Belajar"): ?>
                <a class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a>
              <?php endif ?></td>

                <td> <?php if ($t->p4 == "Sudah Belajar"): ?>
                <a class="btn btn-success"><i class="glyphicon glyphicon-check"></i></a>
              <?php  elseif($t->p4 == "Belum Belajar"): ?>
                <a class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a>
              <?php endif ?></td>

                <td> <?php if ($t->p5 == "Sudah Belajar"): ?>
                <a class="btn btn-success"><i class="glyphicon glyphicon-check"></i></a>
              <?php  elseif($t->p5 == "Belum Belajar"): ?>
                <a class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a>
              <?php endif ?></td>

                <td> <?php if ($t->p6 == "Sudah Belajar"): ?>
                <a class="btn btn-success"><i class="glyphicon glyphicon-check"></i></a>
              <?php  elseif($t->p6 == "Belum Belajar"): ?>
                <a class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a>
              <?php endif ?></td>

                <td> <?php if ($t->p7 == "Sudah Belajar"): ?>
                <a class="btn btn-success"><i class="glyphicon glyphicon-check"></i></a>
              <?php  elseif($t->p7 == "Belum Belajar"): ?>
                <a class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a>
              <?php endif ?></td>

                <td> <?php if ($t->p8 == "Sudah Belajar"): ?>
                <a class="btn btn-success"><i class="glyphicon glyphicon-check"></i></a>
              <?php  elseif($t->p8 == "Belum Belajar"): ?>
                <a class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a>
              <?php endif ?></td>

                <td> <?php if ($t->p9 == "Sudah Belajar"): ?>
                <a class="btn btn-success"><i class="glyphicon glyphicon-check"></i></a>
              <?php  elseif($t->p9 == "Belum Belajar"): ?>
                <a class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a>
              <?php endif ?></td>

                <td> <?php if ($t->p10 == "Sudah Belajar"): ?>
                <a class="btn btn-success"><i class="glyphicon glyphicon-check"></i> Lulus</a>
              <?php  elseif($t->p10 == "Belum Belajar"): ?>
                <a class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i> Belum Lulus</a>
              <?php endif ?></td>

               
                <?php } ?>
            </tr>
        </tbody>
    </table>
    <strong>Noted:</strong>
    <p>Tanda&nbsp;<a class="btn btn-success"><i class="glyphicon glyphicon-check"></i></a>&nbsp;Artinya murid hadir dan sudah belajar / mengikuti pelatihan.</p><br>
   <p>Tanda&nbsp;<a class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i></a>&nbsp;Artinya murid belum belajar / belum mengikuti pelatihan.</p>
		

</div>
</div>
</div>