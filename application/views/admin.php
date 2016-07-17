<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class="cointainer">
		<div class="row panel panel-default">
		<div class="col-md-5">
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Countries">
			Countries
			</button>
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Departments">
			Departments
			</button>
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Committee">
			Committees
			</button>
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Candidates">
			Candidates
			</button>
		</div>
		
	</div>
	



	<!--Modals -->
	<div class="modal fade" id="Countries" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Countries</h4>
				</div>
				<div class="modal-body">
					<form class="form-inline">
						<div class="form-group">
							<label for="country">Country</label>
							<input type="text" class="form-control" id="country" placeholder="Country">
							<button class="btn btn-success">Add</button>
						</div>

					</form>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="Departments" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Countries</h4>
				</div>
				<div class="modal-body">
					<form class="form-inline">
						<div class="form-group">
							<label for="department">Department</label>
							<input type="text" class="form-control" id="department" placeholder="Country">
							<button class="btn btn-success">Add</button>
						</div>

					</form>

					
				</div>
				
			</div>
		</div>
	</div>
	<div class="modal fade" id="Committee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Countries</h4>
				</div>
				<div class="modal-body">
					<form class="form-inline">
						<div class="form-group">
							<label for="country">Country</label>
							<input type="text" class="form-control" id="country" placeholder="Country">
							<button class="btn btn-success">Add</button>
						</div>

					</form>

					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="Candidates" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Countries</h4>
				</div>
				<div class="modal-body">
					<form class="form-inline">
						<div class="form-group">
							<label for="country">Country</label>
							<input type="text" class="form-control" id="country" placeholder="Country">
							<button class="btn btn-success">Add</button>
						</div>

					</form>

					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>



<!-- Javascript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ajax/admin.js"></script>
</body>
</html>