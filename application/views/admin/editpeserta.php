<div class="panel-heading">
    <h3 class="panel-title">Formulir Pendaftaran</h3>
  </div>
  <div class="panel-body">
  
   
  <h1>Data Siswa</h1>
<div class="progress" data-percent="">
	<div class="bar" style="width:100%;"></div>
											</div>

    
			<form class="form-horizontal" action="<?php echo site_url('admin/proseseditpeserta');?>" method="post">
	<div class="control-group">
		<label class="control-label" for="form-field-2">Nama Lengkap</label>
		<div class="controls">
			<input type="text" id="form-field-2" placeholder="" name="nama_lengkap" value="<?php echo $peserta->nama_lengkap;?>" />						
		</div>
	</div>
  
	<div class="control-group">
    <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="controls">
      <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
			<option><?php echo $peserta->jenis_kelamin;?></option>
		  <option>Laki-Laki</option>
		  <option>Perempuan</option>
	</select>
    </div>
  </div>
  
	<div class="control-group">
		<label class="control-label" for="asal_sek">Asal Sekolah</label>
		<div class="controls">
			<input type="text" id="asal_sek" placeholder="" name="asal_sek" value="<?php echo $peserta->asal_sek;?>" />						
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="kelas">Kelas</label>
		<div class="controls">
			<input type="text" id="kelas" placeholder="" name="kelas" value="<?php echo $peserta->kelas;?>" />						
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="nama_pemb">Nama Pembina</label>
		<div class="controls">
			<input type="text" id="nama_pemb" placeholder="" name="nama_pemb" value="<?php echo $peserta->nama_pemb;?>" />						
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="nip_pemb">NIP Pembina</label>
		<div class="controls">
			<input type="text" id="nip_pemb" placeholder="" name="nip_pemb" value="<?php echo $peserta->nip_pemb;?>" />						
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="hp_pemb">HP Pembina</label>
		<div class="controls">
			<input type="text" id="hp_pemb" placeholder="" name="hp_pemb" value="<?php echo $peserta->hp_pemb;?>" />						
		</div>
	</div>
  
  <!--<div class="control-group">
    <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="controls">
      <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
			<option><?php echo $peserta->jenis_kelamin;?></option>
		  <option>Laki-Laki</option>
		  <option>Perempuan</option>
	</select>
    </div>
  </div>-->
    
	<!--<div class="control-group">
		<label class="control-label" for="tempat_lahir">Tempat Lahir</label>
		<div class="controls">
			<input type="text" id="tempat_lahir" placeholder="" name="tempat_lahir" value="<?php echo $peserta->tempat_lahir;?>" />						
		</div>
	</div>
	
	<div class="control-group">
    <label class="control-label" for="tanggal_lahir">Tanggal Lahir</label>
		<div class="controls">
			<input type="text" id="tanggal_lahir" placeholder="" name="tanggal_lahir" value="<?php echo $peserta->tanggal_lahir;?>" />	
			<input type="text" id="tanggal_lahir" placeholder="" name="bulan_lahir" value="<?php echo $peserta->bulan_lahir;?>" />
			<input type="text" id="tanggal_lahir" placeholder="" name="tahun_lahir" value="<?php echo $peserta->tahun_lahir;?>" />			
		</div>
	</div>-->

	
<div class="control-group">
    <label for="lomba" class="col-sm-2 control-label">Jenis Lomba</label>
    <div class="controls">
      <select class="form-control" id="lomba" name="lomba">
			<option><?php echo $peserta->lomba;?></option>
				<option>Volley</option>
	      		<option>Tenis Meja</option>
	      		<option>Catur</option>
	      		<option>Lari</option>
	      		<option>Pidato Bahasa Arab</option>
	            <option>Pidato Bahasa Inggris</option>
	            <option>Pidato Bahasa Indonesia</option>
	            <option>Kaligrafi</option>
	            <option>MTQ</option>
	            <option>Tahfidh</option>
	            <option>Singer</option>
	            <option>Olimpiade IPA</option>
	            <option>Olimpiade Matematika</option>
	            <option>Olimpiade Bahasa Inggris</option>
		</select>
    </div>
 </div>
  
	<!--<div class="control-group">
		<label class="control-label" for="kewarganegaraan">Kewarganegaraan</label>
		<div class="controls">
			<input type="text" id="kewarganegaraan" placeholder="" name="kewarganegaraan" value="<?php echo $peserta->kewarganegaraan;?>" />						
		</div>
	</div>
  
  <div class="control-group">
		<label class="control-label" for="anak_ke">Anak Ke</label>
		<div class="controls">
			<input type="number" id="anak_ke" placeholder="" name="anak_ke" value="<?php echo $peserta->anak_ke;?>" />						
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="jumlah_saudara">Jumlah Saudara</label>
		<div class="controls">
			<input type="number" id="jumlah_saudara" placeholder="" name="jumlah_saudara" value="<?php echo $peserta->jumlah_saudara;?>" />						
		</div>
	</div>
  
  <div class="control-group">
		<label class="control-label" for="bahasa">Bahasa Sehari-hari</label>
		<div class="controls">
			<input type="text" id="bahasa" placeholder="" name="bahasa_seharihari" value="<?php echo $peserta->bahasa_seharihari;?>" />						
		</div>
	</div>
  
  <div class="control-group">
		<label class="control-label" for="berat_badan">Berat Badan</label>
		<div class="controls">
			<input type="text" id="berat_badan" placeholder="" name="berat_badan" value="<?php echo $peserta->berat_badan;?>" />						
		</div>
	</div>
  
  <div class="control-group">
		<label class="control-label" for="tinggi_badan">Tinggi Badan</label>
		<div class="controls">
			<input type="text" id="tinggi_badan" placeholder="" name="tinggi_badan" value="<?php echo $peserta->tinggi_badan;?>" />						
		</div>
	</div>
  
  <div class="control-group">
		<label class="control-label" for="golongan_darah">Golongan Darah</label>
		<div class="controls">
			<input type="text" id="golongan_darah" placeholder="" name="golongan_darah" value="<?php echo $peserta->golongan_darah;?>" />						
		</div>
	</div>
  
  <div class="control-group">
		<label class="control-label" for="penyakit">Penyakit</label>
		<div class="controls">
			<input type="text" id="penyakit" placeholder="Penyakit yg pernah diderita, dapat diinput lebih dari 1" name="penyakit" value="<?php echo $peserta->penyakit;?>" />						
		</div>
	</div>
	
  <div class="control-group">
    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
    <div class="controls">
      <textarea row="5" class="form-control" id="alamat" name="alamat" value="<?php echo $peserta->alamat;?>" placeholder="Alamat"><?php echo $peserta->alamat;?></textarea>
    </div>
  </div>
  
  <div class="control-group">
    <label for="status_anak" class="col-sm-2 control-label">Status Anak</label>
    <div class="controls">
      <select class="form-control" id="status_anak" name="status_anak">
			<option><?php echo $peserta->status_anak;?></option>
		  <option>Anak Kandung</option>
		  <option>Anak Tiri</option>
	</select>
    </div>
  </div>
  
	
  <div class="control-group">
    <label for="nope" class="col-sm-2 control-label">No Handphone</label>
    <div class="controls">
      <input type="number" class="form-control" id="nope" name="no_handphone" value="<?php echo $peserta->no_handphone;?>" placeholder="Mis 0812.....">
    </div>
	
	<label for="hobi" class="col-sm-3 control-label">Hobi</label>
	<div class="controls">
      <input type="text" class="form-control" id="hobi" name="hobi" value="<?php echo $peserta->hobi;?>" placeholder="Hobi">
    </div>
  </div>
  
  <div class="control-group">
    <label for="tinggal_pada" class="col-sm-2 control-label">Tinggal Pada</label>
    <div class="controls">
      <select class="form-control" id="tinggal_pada" name="tinggal_pada">
			<option><?php echo $peserta->tinggal_pada;?></option>
		  <option>Orang Tua</option>
		  <option>Menampung</option>
		  <option>Asrama</option>
	</select>
    </div>
  </div>
  




<h1>Data Orang Tua</h1>
<div class="progress" data-percent="">
												<div class="bar" style="width:100%;"></div>
											</div>


    
	
  <div class="control-group">
    <label for="nama_ayah" class="col-sm-3 control-label">Nama Ayah</label>
    <div class="controls">
      <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?php echo $peserta->nama_ayah;?>" placeholder="Nama Ayah">
    </div>
  </div>
  
  <div class="control-group">
    <label for="nama_ibu" class="col-sm-3 control-label">Nama Ibu</label>
    <div class="controls">
      <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo $peserta->nama_ibu;?>" placeholder="Nama Ibu">
    </div>
  </div>
  
  <div class="control-group">
    <label for="pendidikan_ayah" class="col-sm-3 control-label">Pendidikan Tertinggi Ayah</label>
    <div class="controls">
      <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" value="<?php echo $peserta->pendidikan_ayah;?>" placeholder="Pendidikan Tertinggi Ayah">
    </div>
  </div>
  
  <div class="control-group">
    <label for="pendidikan_ibu" class="col-sm-3 control-label">Pendidikan Tertinggi Ibu</label>
    <div class="controls">
      <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" value="<?php echo $peserta->pendidikan_ibu;?>" placeholder="Pendidikan Tertinggi Ibu">
    </div>
  </div>
  
  <div class="control-group">
    <label for="pekerjaan_ayah" class="col-sm-3 control-label">Pekerjaan Ayah</label>
    <div class="controls">
      <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?php echo $peserta->pekerjaan_ayah;?>" placeholder="PNS/TNI/Peg. Swasta/WiraSwasta/Petani/Buruh">
    </div>
  </div>
  
  <div class="control-group">
    <label for="pekerjaan_ibu" class="col-sm-3 control-label">Pekerjaan Ibu</label>
    <div class="controls">
      <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?php echo $peserta->pekerjaan_ibu;?>" placeholder="PNS/TNI/Peg. Swasta/WiraSwasta/Petani/Buruh">
    </div>
  </div>
  
  <div class="control-group">
    <label for="penghasilan" class="col-sm-3 control-label">penghasilan</label>
    <div class="controls">
      <input type="number" class="form-control" id="penghasilan" name="penghasilan" value="<?php echo $peserta->penghasilan;?>" placeholder="Misal 2000000">
    </div>
  </div>-->

  
  


    <input type="hidden" name="id_peserta" value="<?php echo $peserta->id_peserta;?>"/>

<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
</form>
	
	
	
  </div>