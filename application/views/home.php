<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Voting</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
					<li><a href="<?= base_url(); ?>vote">Vote</a></li>
					
				</ul>
			
				<ul class="nav navbar-nav navbar-right">
					<li><a><?=$username ?></a></li>
					<li><a href="<?= base_url(); ?>Login/logout">Logout</a></li>		
				</ul>
			</div>
		</div>
	</nav>
	<div class="row">
		
		<div class="col-md-2">
			<label>Country:</label>
			<select class="form-control" id="country" name="country" placeholder="Country">
	                                            
	        </select>
        </div>
	</div>
	<div id="results">

	</div>

	<script src="<?php echo base_url(); ?>assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ajax/home.js"></script>
</body>
</html>