<div class="container">
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
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>