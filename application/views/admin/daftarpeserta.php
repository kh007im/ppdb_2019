<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">
<div class="container">
								<h3 class="header smaller lighter blue">Daftar Keseluruhan Peserta : <?php echo $jumlah;?></h3>
								<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>No PPDB</th>
					<th>NISN</th>
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Asal Sekolah</th>
					<th align="center">Pilihan</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<td><?php echo $peserta->nopes;?></td>
					<td><?php echo $peserta->nisn;?></td>
					<td><?php echo $peserta->nik;?></td>
					<td><?php echo $peserta->nama_siswa;?></td>
					<td><?php echo $peserta->tempat_lahir;?></td>
					<td><?php echo $peserta->tanggal_lahir;?></td>
					<td><?php echo $peserta->jk;?></td>
					<td><?php echo $peserta->nama_sekbel;?></td>
					<td>
					<!-- <a href="<?php echo site_url('admin/tambahpeserta');?>">Tambah | </a> -->
					<a href="<?php echo site_url('admin/biodatapeserta/'.$peserta->id_peserta);?>">Lihat | </a>
					<a href="<?php echo site_url('admin/editpeserta/'.$peserta->id_peserta);?>">Edit | </a>
					<a href="<?php echo site_url('admin/hapus_peserta/'.$peserta->id_peserta);?>">Hapus</a>
					</td>
					
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>