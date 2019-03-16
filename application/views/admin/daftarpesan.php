<div class="container">
								<h3 class="header smaller lighter blue">Daftar Keseluruhan Peserta : </h3>
								<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>Nama</th>
					<th>Subject</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pesan as $pesan)
				{
				
				$status = $pesan->status;
				if ($status == 1)
				{
				?>
					<tr>
						<td><b><?php echo $pesan->nama;?></b></td>
						<td><b><?php echo $pesan->judul;?></b></td>
						<td><a href="<?php echo site_url('admin/bukapesan/'.$pesan->id);?>">Buka Pesan</a></td>
					</tr>
				<?php
				}
				else
				{
				?>
					<tr>
						<td><?php echo $pesan->nama;?></td>
						<td><?php echo $pesan->judul;?></td>
						<td><a href="<?php echo site_url('admin/bukapesan/'.$pesan->id);?>">Buka Pesan</a></td>
					</tr>
				<?php
				}
				
				}
				?>
			</tbody>
		</table>
	</div>