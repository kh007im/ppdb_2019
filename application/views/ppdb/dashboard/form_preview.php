<table class="table table-striped table-responsive table-bordered">
 
	<tr>
		<td colspan="3" align="center"><H4>TANDA BUKTI PENDAFTARAN PESERTA DIDIK BARU 2019<br/>MTsN 3 NGAWI</H4></td>
	</TR>
	<tr>
		<td colspan="3">Tanggal Cetak: <?php echo tanggal();?></td>
	</tr>
	<tr class="info">
		<td colspan="3" align="center"><h4>DATA SISWA</h4></td>
	</tr>
	<tr>
		<th style="width:20%;">Nomor Pendaftaran</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nopes;?></td>
	</tr>
	<tr>
		<th style="width:20%;">NISN</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nisn;?></td>
	</tr>
	<tr>
		<th style="width:20%;">NIK</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nik;?></td>
	</tr>
	<tr>
		<th>Nama Lengkap</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nama_siswa;?></td>
	</tr>
	<tr>
		<th>Jenis Kelamin</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->jk;?></td>
	</tr>
	<tr>
		<th>Tempat Lahir</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->tempat_lahir;?></td>
	</tr>
	<tr>
		<th>Tanggal Lahir</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->tanggal_lahir;?></td>
	</tr>
	<tr>
		<th>Nama Ayah</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nama_ayah;?></td>
	</tr>
	<tr>
		<th>Nama Ibu</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nama_ibu;?></td>
	</tr>
	<tr>
		<th>Asal Sekolah</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nama_sekbel;?></td>
	</tr>
	
	<tr>
		<th><a href="<?php echo site_url('ppdb/cetak');?>"> Cetak</a></th>
	</tr>
 
</table>