<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Formulir Pendaftaran</h3>
  </div>
  <div class="panel-body">
  
  <?php
	$info = $this->session->flashdata('info');
	if (!empty($info))
	{
		echo $info;
	}
  ?>
   
<h3>Data Diri Siswa</h3>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    <span class="sr-only">100% Complete</span>
  </div>
</div>
    
			<?= form_open_multipart('ppdb/up_biodata', ['class'=>'form-horizontal']) ?>
  
  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">No Pendaftaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="" name="nopes" value="<?php echo $peserta->nopes;?>" readonly>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">NISN</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 123456789" name="nisn" value="<?php echo $peserta->nisn;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">NIK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 3521....2" name="nik" value="<?php echo $peserta->nik;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Nama Lengkap Siswa" name="nama_siswa" value="<?php echo $peserta->nama_siswa;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Ngawi" name="tempat_lahir" value="<?php echo $peserta->tempat_lahir;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 01/01/2001" name="tanggal_lahir" value="<?php echo $peserta->tanggal_lahir;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <label class="radio-inline">
		<input type="radio" name="jk" id="inlineRadio1" value="Laki-Laki" checked="checked"> Laki-laki
		</label>
		<label class="radio-inline">
		  <input type="radio" name="jk" id="inlineRadio2" value="Perempuan"> Perempuan
		</label>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Asal Sekolah/Madrasah</label>
    <div class="col-sm-10">
      <select class="form-control" name="asal_sek">
         <option><?php echo $peserta->asal_sek;?></option>
            <option>MI</option>
            <option>SD</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Nama Sekolah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh:: SDN Paron 1" name="nama_sekbel" value="<?php echo $peserta->nama_sekbel;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">NPSN SD/MI</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 30042012" name="npsn" value="<?php echo $peserta->npsn;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Status SD/MI</label>
    <div class="col-sm-10">
      <select class="form-control" name="status_sekbel">
         <option><?php echo $peserta->status_sekbel;?></option>
            <option>Negeri</option>
            <option>Swasta</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Kabupaten SD/MI</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Ngawi" name="nama_kabsekbel" value="<?php echo $peserta->nama_kabsekbel;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Hobi</label>
    <div class="col-sm-10">
      <select class="form-control" name="hobi">
         <option><?php echo $peserta->hobi;?></option>
            <option>Olahraga</option>
            <option>Kesenian</option>
            <option>Membaca</option>
            <option>Menulis</option>
            <option>Jalan-jalan</option>
            <option>Lainnya</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Cita-cita</label>
    <div class="col-sm-10">
      <select class="form-control" name="cita">
         <option><?php echo $peserta->cita;?></option>
            <option>PNS</option>
            <option>TNI/POLRI</option>
            <option>Guru/Dosen</option>
            <option>Dokter</option>
            <option>Politikus</option>
            <option>Wiraswasta</option>
            <option>Seniman/Artis</option>
            <option>Ilmuwan</option>
            <option>Agamawan</option>
            <option>Lainnya</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Status Anak</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Kandung" name="status_anak" value="<?php echo $peserta->status_anak;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Anak Ke-</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 2" name="anak_nomer" value="<?php echo $peserta->anak_nomer;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Jumlah Saudara</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 1" name="jmlh_sau" value="<?php echo $peserta->jmlh_sau;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Jenis Tempat Tinggal Siswa</label>
    <div class="col-sm-10">
      <select class="form-control" name="tempat_tinggal_siswa">
         <option><?php echo $peserta->tempat_tinggal_siswa;?></option>
            <option>Tinggal Dengan Orang Tua</option>
            <option>Ikut Saudara</option>
            <option>Asrama Madrasah</option>
            <option>Kontrak/ Kost</option>
            <option>Panti Asuhan</option>
            <option>Rumah Singgah</option>
            <option>Lainnya</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Alat Transportasi</label>
    <div class="col-sm-10">
      <select class="form-control" name="alat_transport">
         <option><?php echo $peserta->alat_transport;?></option>
            <option>Jalan Kaki</option>
            <option>Sepeda</option>
            <option>Sepeda Motor</option>
            <option>Mobil Pribadi</option>
            <option>Antar Jemput Sekolah</option>
            <option>Angkutan Umum</option>
            <option>Perahu/Sampan</option>
            <option>Lainnya</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Jarak Tempat Tinggal</label>
    <div class="col-sm-10">
      <select class="form-control" name="tempat_tinggal_siswa">
         <option><?php echo $peserta->tempat_tinggal_siswa;?></option>
            <option>Kurang dari 5 km</option>
            <option>Antara 5 - 10 km</option>
            <option>Antara 11 - 20 km</option>
            <option>Antara 21 - 30 km</option>
            <option>Lebih dari 30 km</option>
      </select>
    </div>
  </div>
  
  <h3>Informasi Orang Tua</h3>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    <span class="sr-only">100% Complete</span>
  </div>
</div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Alamat Orang Tua</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Jalan Raya Paron No 1" name="alamat_ortu" value="<?php echo $peserta->alamat_ortu;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Propinsi Orang Tua</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Jawa Timur" name="prop_ortu" value="<?php echo $peserta->prop_ortu;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Kabupaten Orang Tua</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Ngawi" name="kab_ortu" value="<?php echo $peserta->kab_ortu;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Kecamatan Orang Tua</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Paron" name="kec_ortu" value="<?php echo $peserta->kec_ortu;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Desa Orang Tua</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Gelung" name="desa_ortu" value="<?php echo $peserta->desa_ortu;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Kodepos Orang Tua</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 63215" name="kodepos_ortu" value="<?php echo $peserta->kodepos_ortu;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Status Kepemilikan Rumah</label>
    <div class="col-sm-10">
      <select class="form-control" name="status_kep_rumah">
         <option><?php echo $peserta->status_kep_rumah;?></option>
            <option>Milik Sendiri</option>
            <option>Rumah Orang Tua</option>
            <option>Rumah Saudara</option>
            <option>Rumah Dinas</option>
            <option>Sewa/Kontrak</option>
            <option>Lainnya</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Nama Kepala Keluarga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Ayahku atau Ibuku" name="nama_kep_kel" value="<?php echo $peserta->nama_kep_kel;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">No KK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 352165487686" name="no_kk" value="<?php echo $peserta->no_kk;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Nama Ayah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Ayahku" name="nama_ayah" value="<?php echo $peserta->nama_ayah;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">NIK Ayah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 3521578987987" name="nik_ayah" value="<?php echo $peserta->nik_ayah;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Tempat Lahir Ayah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="COntoh: Ngawi" name="tempat_lahir_ayah" value="<?php echo $peserta->tempat_lahir_ayah;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Tanggal Lahir Ayah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 01/01/1990" name="tanggal_lahir_ayah" value="<?php echo $peserta->tanggal_lahir_ayah;?>">
    </div>
  </div>

   <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Pendidikan Ayah</label>
    <div class="col-sm-10">
      <select class="form-control" name="pend_ayah">
         <option><?php echo $peserta->pend_ayah;?></option>
            <option>Tidak Berpendidikan</option>
            <option>SD/ Sederajat</option>
            <option>SMP/ Sederajat</option>
            <option>SMA/ Sederajat</option>
            <option>D1</option>
            <option>D2</option>
            <option>D3</option>
            <option>D4/S1</option>
            <option>S2</option>
            <option>S3</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Pekerjaan Ayah</label>
    <div class="col-sm-10">
      <select class="form-control" name="pekerj_ayah">
         <option><?php echo $peserta->pekerj_ayah;?></option>
            <option>Tidak Bekerja</option>
            <option>Pensiunan</option>
            <option>PNS</option>
            <option>TNI/POLRI</option>
            <option>Guru/Dosen</option>
            <option>Pegawai Swasta</option>
            <option>Wiraswasta/Wirausaha</option>
            <option>Pengacara/Hakim/Notaris</option>
            <option>Seniman/Pelukis/Artis/Sejenis</option>
            <option>Dokter/Bidan/Perawat</option>
            <option>Pilot/Pramugara</option>
            <option>Pedagang</option>
            <option>Petani/Peternak</option>
            <option>Nelayan</option>
            <option>Buruh (Tani/Pabrik/Bangunan)</option>
            <option>Sopir/Masinis/Kondektur</option>
            <option>Politikus</option>
            <option>Lainnya</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Status Ayah Kandung</label>
    <div class="col-sm-10">
      <select class="form-control" name="status_ayah">
         <option><?php echo $peserta->status_ayah;?></option>
            <option>Masih Hidup</option>
            <option>Sudah Meninggal</option>
            <option>Tidak Diketahui</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Nama Ibu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Ibuku" name="nama_ibu" value="<?php echo $peserta->nama_ibu;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">NIK Ibu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 352165487686" name="nik_ibu" value="<?php echo $peserta->nik_ibu;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Tempat Lahir Ibu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Ngawi" name="tempat_lahir_ibu" value="<?php echo $peserta->tempat_lahir_ibu;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Tanggal Lahir Ibu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 01/01/1990" name="tanggal_lahir_ibu" value="<?php echo $peserta->tanggal_lahir_ibu;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Pendidikan Ibu</label>
    <div class="col-sm-10">
      <select class="form-control" name="pend_ibu">
         <option><?php echo $peserta->pend_ibu;?></option>
            <option>Tidak Berpendidikan</option>
            <option>SD/ Sederajat</option>
            <option>SMP/ Sederajat</option>
            <option>SMA/ Sederajat</option>
            <option>D1</option>
            <option>D2</option>
            <option>D3</option>
            <option>D4/S1</option>
            <option>S2</option>
            <option>S3</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Pekerjaan Ibu</label>
    <div class="col-sm-10">
      <select class="form-control" name="pekerj_ibu">
         <option><?php echo $peserta->pekerj_ibu;?></option>
            <option>Tidak Bekerja</option>
            <option>Pensiunan</option>
            <option>PNS</option>
            <option>TNI/POLRI</option>
            <option>Guru/Dosen</option>
            <option>Pegawai Swasta</option>
            <option>Wiraswasta/Wirausaha</option>
            <option>Pengacara/Hakim/Notaris</option>
            <option>Seniman/Pelukis/Artis/Sejenis</option>
            <option>Dokter/Bidan/Perawat</option>
            <option>Pilot/Pramugara</option>
            <option>Pedagang</option>
            <option>Petani/Peternak</option>
            <option>Nelayan</option>
            <option>Buruh (Tani/Pabrik/Bangunan)</option>
            <option>Sopir/Masinis/Kondektur</option>
            <option>Politikus</option>
            <option>Lainnya</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Status Ibu Kandung</label>
    <div class="col-sm-10">
      <select class="form-control" name="status_ibu">
         <option><?php echo $peserta->status_ibu;?></option>
            <option>Masih Hidup</option>
            <option>Sudah Meninggal</option>
            <option>Tidak Diketahui</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Nama Wali</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Waliku" name="nama_wali" value="<?php echo $peserta->nama_wali;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">NIK Wali</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 352165487686" name="nik_wali" value="<?php echo $peserta->nik_wali;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Tempat Lahir Wali</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: Ngawi" name="tempat_lahir_wali" value="<?php echo $peserta->tempat_lahir_wali;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Tanggal Lahir Wali</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 01/01/1990" name="tanggal_lahir_wali" value="<?php echo $peserta->tanggal_lahir_wali;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Pendidikan Wali</label>
    <div class="col-sm-10">
      <select class="form-control" name="pend_wali">
         <option><?php echo $peserta->pend_wali;?></option>
            <option>Tidak Berpendidikan</option>
            <option>SD/ Sederajat</option>
            <option>SMP/ Sederajat</option>
            <option>SMA/ Sederajat</option>
            <option>D1</option>
            <option>D2</option>
            <option>D3</option>
            <option>D4/S1</option>
            <option>S2</option>
            <option>S3</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Pekerjaan Wali</label>
    <div class="col-sm-10">
      <select class="form-control" name="pekerj_wali">
         <option><?php echo $peserta->pekerj_wali;?></option>
            <option>Tidak Bekerja</option>
            <option>Pensiunan</option>
            <option>PNS</option>
            <option>TNI/POLRI</option>
            <option>Guru/Dosen</option>
            <option>Pegawai Swasta</option>
            <option>Wiraswasta/Wirausaha</option>
            <option>Pengacara/Hakim/Notaris</option>
            <option>Seniman/Pelukis/Artis/Sejenis</option>
            <option>Dokter/Bidan/Perawat</option>
            <option>Pilot/Pramugara</option>
            <option>Pedagang</option>
            <option>Petani/Peternak</option>
            <option>Nelayan</option>
            <option>Buruh (Tani/Pabrik/Bangunan)</option>
            <option>Sopir/Masinis/Kondektur</option>
            <option>Politikus</option>
            <option>Lainnya</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Penghasilan Orang Tua</label>
    <div class="col-sm-10">
      <select class="form-control" name="rata_pengh">
         <option><?php echo $peserta->rata_pengh;?></option>
            <option>Kurang dari Rp. 500.000</option>
            <option>Rp. 500.000 - Rp. 1.000.000</option>
            <option>Rp. 1.000.001 - Rp. 2.000.000</option>
            <option>Rp. 2.000.001 - Rp. 3.000.000</option>
            <option>Rp. 3.000.001 - Rp. 5.000.000</option>
            <option>Diatas Rp. 5.000.000</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Nomor Kartu Keluarga Sejahtera (KKS)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 123456789" name="no_kks" value="<?php echo $peserta->no_kks;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Nomor Kartu Program Keluarga Harapan (PKH)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 123456789" name="no_pkh" value="<?php echo $peserta->no_pkh;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Nomor Kartu Indonesia Pintar (KIP)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bajigur" placeholder="Contoh: 123456789" name="no_kip" value="<?php echo $peserta->no_kip;?>">
    </div>
  </div>

	
<input type="hidden" name="id_peserta" value="<?php echo $peserta->id_peserta;?>"/>
<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
<?= form_close() ?>
	

	
  <!-- </div>  
</div> -->



