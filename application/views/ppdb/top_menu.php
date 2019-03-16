<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Beranda</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('ppdb/daftar');?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Pendaftaran</a></li>
        <li><a href="<?php echo site_url('ppdb/daftarpeserta');?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Peserta</a></li>
      </ul>
	  
	  <form class="navbar-form navbar-right" role="search" action="<?php echo site_url('ppdb/proses_login');?>" method="post">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username')?>">
	<input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo set_value('password')?>">
  </div>
  <button type="submit" class="btn btn-default">Masuk</button>
</form>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


































