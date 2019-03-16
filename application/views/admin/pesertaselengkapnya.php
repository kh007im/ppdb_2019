<table class="table table-striped table-responsive table-bordered">
 
	 
	
	<tr class="info">
		<td colspan="3" align="center"><h4>DATA SISWA</h4></td>
	</tr>
	<tr>
		<th style="width:20%;">Nomor Pendaftaran</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->id_peserta;?></td>
	</tr>
	<tr>
		<th>Nama Lengkap</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nama_lengkap;?></td>
	</tr>
	<tr>
		<th>Jenis Kelamin</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->jenis_kelamin;?></td>
	</tr>
	<tr>
		<th>Asal Sekolah</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->asal_sek;?></td>
	</tr>
	<tr>
		<th>Kelas</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->kelas;?></td>
	</tr>
	<tr>
		<th>Nama Pembina</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nama_pemb;?></td>
	</tr>
	<tr>
		<th>NIP Pembina</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nip_pemb;?></td>
	</tr>
	<tr>
		<th>HP Pembina</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->hp_pemb;?></td>
	</tr>
	<tr>
		<th>Jenis Lomba</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->lomba;?></td>
	</tr>
	
	<tr>
		<th><a href="<?php echo site_url('admin/cetak/'.$peserta->id_peserta);?>"> Cetak</a></th>
	</tr>
 
</table>