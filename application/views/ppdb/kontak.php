<?php echo form_open('ppdb/proses_kontak', ['class'=>'form-horizontal']);?>
<?php echo $this->session->flashdata('info');?>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">No Handphone</label>
    <div class="col-sm-10">
      <input type="number" name="nope" class="form-control" id="inputPassword3" placeholder="081xxx">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail34" class="col-sm-2 control-label">Subject</label>
    <div class="col-sm-10">
      <input type="text" name="judul" class="form-control" id="inputEmail34" placeholder="Judul">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail33" class="col-sm-2 control-label">Isi</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="isi" id="inputEmail33" placeholder="Isi Pesan"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Kirim</button>
    </div>
  </div>
<?php echo form_close();?>