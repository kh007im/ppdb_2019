<div class="container">
								<h3 class="header smaller lighter blue">Peserta Yang Belum Verifikasi : <?php echo $jumlah;?></h3>
								<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Asal Sekolah</th>
					<th>Kelas</th>
					<th>Nama Pembina</th>
					<th>NIP Pembina</th>
					<th>HP Pembina</th>
					<th>Jenis Lomba</th>
					<th align="center"><a href="<?php echo site_url('admin/tambahpeserta');?>">Action</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					<td><?php echo $peserta->asal_sek;?></td>
					<td><?php echo $peserta->kelas;?></td>
					<td><?php echo $peserta->nama_pemb;?></td>
					<td><?php echo $peserta->nip_pemb;?></td>
					<td><?php echo $peserta->hp_pemb;?></td>
					<td><?php echo $peserta->lomba;?></td>
					<td><a href="<?php echo site_url('admin/verifikasipeserta/'.$peserta->id_peserta);?>">Verifikasi</a></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>