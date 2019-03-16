<div class="panel panel-info">
	<div class="panel-heading">Form Pendaftaran</div>
  <div class="panel-body">
    <p>
	<form class="form-horizontal" action="<?php echo site_url('ppdb/proses_daftar');?>" method="post">
	<div class="col-sm-10 col-sm-offset-2">
	
	<?php $info=$this->session->flashdata('error');
		if (!empty($info))
		{
			echo $info;
		}
	?>
	
	<?php echo validation_errors();?>
	
	</div>
  
  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" value="<?php echo set_value('username')?>" id="bajigur" placeholder="Username">
    </div>
  </div>
  
  <div class="form-group">
    <label for="bajigur" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="bajigur" placeholder="Password">
    </div>
  </div>
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Daftar</button>
    </div>
  </div>
   
</form>
</p>
  </div>


</div>