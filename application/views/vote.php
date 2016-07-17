<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				
				<a class="navbar-brand" href="#">Voting</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li ><a href="<?= base_url(); ?>home">Home</a></li>
					<li class="active"><a href="<?= base_url(); ?>vote">Vote</a></li>
					
				</ul>
			
				<ul class="nav navbar-nav navbar-right">
					<li><a><?=$username ?></a></li>

					
					<li><a href="<?= base_url(); ?>Login/logout">Logout</a></li>
					
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div id="committess">
		
	</div>


	<!-- Javascript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ajax/vote.js"></script>

    

</body>
</html>