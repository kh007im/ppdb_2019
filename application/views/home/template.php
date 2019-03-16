<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>MTsN 3 NGAWI</title>
	
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootstrap/css/custom.css');?>" rel="stylesheet">

	<!--[if lt IE 9]>
			<script src="<?php echo base_url('assets/html5shiv.min.js');?>"></script>
			<script src="<?php echo base_url('assets/respond.min.js');?>"></script>
		<![endif]-->
	
	
	
</head>
<style>.navbar-default {
    background-color: #35d366;
    border-color: #e7e7e7;
}</style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	
	
		<div class="row">
			<div class="col-md-12">
				<?php echo $_top_menu;?>
			</div>
		</div>
		
		
			<div class="row">
				<div class="col-md-12">
					<?php echo $_menu2;?>
				</div>
			
		</div>
		
		
		<div class="row">
				<div class="col-md-12">
					<?php echo $_footer;?>
				</div>
			
		</div>
		
	</div>
	
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Prevent default anchor click behavior
  event.preventDefault();

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>

</body>
</html>



















