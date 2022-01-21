	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				<div style="margin-top: 30px; width:100%,height:50px;text-align:center;background:#000000;color:#fff;line-height:60px;font-size:20px;">
			Data Pendaftaran & Rincian Biaya
		</div><br>
		<h4>Data Pendaftar</h4>
			<h5><span style="font-weight: bold;">Nama</span> : <?= $daftar['nama_anggota']; ?></h5>
		
		<h5><span style="font-weight: bold;">Gender</span> : <?= $daftar['gender']; ?></h5>
		<h5><span style="font-weight: bold;">Alamat</span> : <?= $daftar['alamat']; ?></h5></h5>
		<h5><span style="font-weight: bold;">Nomor Telepon</span> : <?= $daftar['no_telp']; ?></h5>
		<h5><span style="font-weight: bold;">Tanggal Daftar</span> : <?= $daftar['tgl_daftar']; ?></h5>
		<hr>
		<h4>Rincian Biaya</h4>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Jenis Paket</th>
					<th>Kelas</th>
					<th>Biaya</th>
					<th>Total Biaya</th>
				</tr>
			</thead>
			<tbody>
				 <?php
              foreach ($transaksi as $t) {
                ?>
				<tr>
					<td><?php echo $t->nama_paket?></td>
					<td><?php echo $t->kelas?></td>
					<td>Rp. <?php
                    if($daftar['paket']  == "Paket Pemula"){
                        echo number_format(925000);
                    }else if($daftar['paket']== "Paket Memperlancar"){
                        echo number_format(625000);
                    }else if($daftar['paket']== "Paket Reguler"){
                        echo number_format(475000);
                    }
                ?></td>
               <td>Rp. <?php
                    if($daftar['paket']  == "Paket Pemula"){
                        echo number_format(925000);
                    }else if($daftar['paket']== "Paket Memperlancar"){
                        echo number_format(625000);
                    }else if($daftar['paket']== "Paket Reguler"){
                        echo number_format(475000);
                    }
                ?></td>
				</tr>
		
			</tbody>
			<tfoot>
				<tr>
					<th colspan="3">Total Biaya Keseluruhan</th>
					<th>Rp. <?php
                    if($daftar['paket']  == "Paket Pemula"){
                        echo number_format(925000);
                    }else if($daftar['paket']== "Paket Memperlancar"){
                        echo number_format(625000);
                    }else if($daftar['paket']== "Paket Reguler"){
                        echo number_format(475000);
                    }
                ?></th>
				</tr>
				<tr>
					<th colspan="3">Biaya Pendaftaran</th>
					<th>Rp. <?php echo number_format(50000); ?></th>
				</tr>
				<tr>
					<th colspan="3">Total Bayar</th>
					<th>Rp. <?php
                    if($daftar['paket']  == "Paket Pemula"){
                         echo number_format(925000 + 50000);
                    }else if($daftar['paket']== "Paket Memperlancar"){
                        echo number_format(625000 + 50000);
                    }else if($daftar['paket']== "Paket Reguler"){
                        echo number_format(475000 + 50000);
                    }
                ?></th>
				</tr>
				  
			</tfoot>
		</table>
		<p>Selanjutnya anda harus melakukan pembayaran sesuai dengan rincian,<b>silahkan klik tombol bayar,maka anda akan memilih metode pembayaran.</p><br><br>
		<center><b><a href="<?= base_url(); ?>member/metode_bayar" class="btn btn-success"> Pembayaran</a></b></center>

</div>
</div>
</div>