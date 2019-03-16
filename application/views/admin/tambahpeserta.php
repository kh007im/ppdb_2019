<div class="panel-heading">
    <h3 class="panel-title">Formulir Pendaftaran</h3>
  </div>
  <div class="panel-body">
  
   
  <h1>Data Siswa</h1>
<div class="progress" data-percent="">
    <div class="bar" style="width:100%;"></div>
</div>

    
  <form class="form-horizontal" action="<?php echo site_url('admin/prosestambahpeserta');?>" method="post">
  
  <div class="control-group">
    <label class="control-label" for="form-field-2">Username</label>
    <div class="controls">
      <input type="text" id="form-field-2" placeholder="" name="username" value="" />            
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="form-field-2">Password</label>
    <div class="controls">
      <input type="text" id="form-field-2" placeholder="" name="password" value="" />            
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="nama_lengkap">Nama Lengkap</label>
    <div class="controls">
      <input type="text" id="nama_lengkap" placeholder="" name="nama_lengkap" value="" />           
    </div>
  </div>
  
  <div class="control-group">
    <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="controls">
      <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
      <option></option>
      <option>Laki-Laki</option>
      <option>Perempuan</option>
  </select>
    </div>
  </div>
    
    <div class="control-group">
    <label class="control-label" for="nama_panggilan">Asal Sekolah</label>
    <div class="controls">
      <input type="text" id="asal_sek" placeholder="" name="asal_sek" value="" />           
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="tempat_lahir">Kelas</label>
    <div class="controls">
      <input type="text" id="kelas" placeholder="" name="kelas" value="" />           
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="tanggal_lahir">Nama Pembina</label>
    <div class="controls">
      <input type="text" id="nama_pemb" placeholder="" name="nama_pemb" value="" /> 
      <!--<input type="text" id="tanggal_lahir" placeholder="" name="bulan_lahir" value="" />
      <input type="text" id="tanggal_lahir" placeholder="" name="tahun_lahir" value="" />-->    
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="tempat_lahir">NIP Pembina</label>
    <div class="controls">
      <input type="text" id="nip_pemb" placeholder="" name="nip_pemb" value="" />           
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="tempat_lahir">HP Pembina</label>
    <div class="controls">
      <input type="text" id="hp_pemb" placeholder="" name="hp_pemb" value="" />           
    </div>
  </div>

  <div class="control-group">
    <label for="agama" class="col-sm-2 control-label">Jenis Lomba</label>
    <div class="controls">
      <select class="form-control" id="agama" name="agama">
      <option></option>
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
      <input type="text" id="kewarganegaraan" placeholder="" name="kewarganegaraan" value="" />           
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="anak_ke">Anak Ke</label>
    <div class="controls">
      <input type="number" id="anak_ke" placeholder="" name="anak_ke" value="" />           
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="jumlah_saudara">Jumlah Saudara</label>
    <div class="controls">
      <input type="number" id="jumlah_saudara" placeholder="" name="jumlah_saudara" value="" />           
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="bahasa">Bahasa Sehari-hari</label>
    <div class="controls">
      <input type="text" id="bahasa" placeholder="" name="bahasa_seharihari" value="" />            
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="berat_badan">Berat Badan</label>
    <div class="controls">
      <input type="text" id="berat_badan" placeholder="" name="berat_badan" value="" />           
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="tinggi_badan">Tinggi Badan</label>
    <div class="controls">
      <input type="text" id="tinggi_badan" placeholder="" name="tinggi_badan" value="" />           
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="golongan_darah">Golongan Darah</label>
    <div class="controls">
      <input type="text" id="golongan_darah" placeholder="" name="golongan_darah" value="" />           
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="penyakit">Penyakit</label>
    <div class="controls">
      <input type="text" id="penyakit" placeholder="Penyakit yg pernah diderita, dapat diinput lebih dari 1" name="penyakit" value="" />            
    </div>
  </div>
  
  <div class="control-group">
    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
    <div class="controls">
      <textarea row="5" class="form-control" id="alamat" name="alamat" value="<?php echo $peserta->alamat;?>" placeholder=""></textarea>
    </div>
  </div>
  
  <div class="control-group">
    <label for="status_anak" class="col-sm-2 control-label">Status Anak</label>
    <div class="controls">
      <select class="form-control" id="status_anak" name="status_anak">
      <option></option>
      <option>Anak Kandung</option>
      <option>Anak Tiri</option>
  </select>
    </div>
  </div>
  
  
  <div class="control-group">
    <label for="nope" class="col-sm-2 control-label">No Handphone</label>
    <div class="controls">
      <input type="number" class="form-control" id="nope" name="no_handphone" value="" placeholder="">
    </div>
  
  <label for="hobi" class="col-sm-3 control-label">Hobi</label>
  <div class="controls">
      <input type="text" class="form-control" id="hobi" name="hobi" value="" placeholder="">
    </div>
  </div>
  
  <div class="control-group">
    <label for="tinggal_pada" class="col-sm-2 control-label">Tinggal Pada</label>
    <div class="controls">
      <select class="form-control" id="tinggal_pada" name="tinggal_pada">
      <option></option>
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
      <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="" placeholder="">
    </div>
  </div>
  
  <div class="control-group">
    <label for="nama_ibu" class="col-sm-3 control-label">Nama Ibu</label>
    <div class="controls">
      <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="" placeholder="">
    </div>
  </div>
  
  <div class="control-group">
    <label for="pendidikan_ayah" class="col-sm-3 control-label">Pendidikan Tertinggi Ayah</label>
    <div class="controls">
      <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" value="" placeholder="">
    </div>
  </div>
  
  <div class="control-group">
    <label for="pendidikan_ibu" class="col-sm-3 control-label">Pendidikan Tertinggi Ibu</label>
    <div class="controls">
      <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" value="" placeholder="">
    </div>
  </div>
  
  <div class="control-group">
    <label for="pekerjaan_ayah" class="col-sm-3 control-label">Pekerjaan Ayah</label>
    <div class="controls">
      <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="" placeholder="">
    </div>
  </div>
  
  <div class="control-group">
    <label for="pekerjaan_ibu" class="col-sm-3 control-label">Pekerjaan Ibu</label>
    <div class="controls">
      <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="" placeholder="">
    </div>
  </div>
  
  <div class="control-group">
    <label for="penghasilan" class="col-sm-3 control-label">penghasilan</label>
    <div class="controls">
      <input type="number" class="form-control" id="penghasilan" name="penghasilan" value="" placeholder="">
    </div>
  </div>-->
<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
</form>
  
  
  
  </div>