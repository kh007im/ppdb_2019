<div class="container">

<?php
	$pengumuman = $pengumuman->status;
	if ($pengumuman == 'dihidupkan')
	{
	?>
		<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>No Urut</th>
					<th>No Pendaftaran</th>
					<th>Nama Lengkap</th>
					<th>Asal Sekolah</th>
					<th>Nilai</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<td><?php echo $peserta->id_peserta;?></td>
					<td><?php echo $peserta->nopes;?></td>
					<td><?php echo $peserta->nama_siswa;?></td>
					<td><?php echo $peserta->nama_sekbel;?></td>
					<td><?php echo $peserta->nilai;?></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	<?php
	}
	else
	{
	?>
		<div class="alert alert-danger" role="alert">Maaf Pengumuman belum dibuka</div>
	<?php
	}
?>

		
	</div>