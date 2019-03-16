<div class="bajindul">
  <h1>Selamat Datang <?php echo $this->session->userdata('nama_siswa');?>! </h1>
  <p>Jika anda belum melengkapi biodata, silahkan melengkapinya dengan mengklik <b>Biodata</b> dibawah ini</p>
  <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('ppdb/update_biodata/'.$this->session->userdata('id_peserta'));?>" role="button">Biodata</a></p>
  <hr>
  <!--<h3><p><div class="alert alert-success" role="alert">Akun anda <?php echo $this->session->userdata('status');?>!</div> </p></h3>-->
  
</div>