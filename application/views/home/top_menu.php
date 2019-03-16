<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
        <a class="navbar-brand" data-toggle="modal" data-target="#myModal" href="#">LOGIN ADMIN</a>
	      
    </div>
    
  </div>
</nav>

<script type="text/javascript">
	function cekform()
	{
		if (!$("#username").val())
		{
			alert('Maaf Username tidak boleh kosong');
			$("#username").focus();
			return false;
		}
		if (!$("#password").val())
		{
			alert('Maaf Password tidak boleh kosong');
			$("#password").focus();
			return false;
		}
	}
</script>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modalh4"><h4><span class="icon-lock"></span> LOGIN ADMIN</h4></div>
      </div>
      <div class="modal-body">
        <form role="form" action="<?php echo site_url('admin/login');?>" method="post" onSubmit="return cekform();">
          <div class="form-group">
            <label for="psw"><span class="ace-icon fa fa-user"></span> Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="ace-icon fa fa-lock"></span> Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
		  
		  <?php
			$info = $this->session->flashdata('info');
			if (!empty($info))
			{
				echo $info;
			}
		  ?>
		  
          <button type="submit" class="btn btn-block">Login 
            <span class="icon-log-in"></span>
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="icon-remove"></span> Cancel
        </button>
        <!--<p>Need <a href="#">help?</a></p>-->
      </div>
    </div>
  </div>
</div>