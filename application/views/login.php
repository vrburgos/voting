<!DOCTYPE html> 

    <head>

        <meta charset="utf-8">
        
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">


    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Voting</h1>
                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        		
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form method="POST" action="">
			                    	<div class="form-group">
			                    		<label  class="sr-only" for="form-username">Username</label>
			                        	<input type="text" id="username" name="username" placeholder="username..." class="form-username form-control">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" id="password" name="password" placeholder="password..." class="form-password form-control">
			                        </div>
			                        <button type="submit" id="btn-login" class="btn">Sign in</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                        	<h3>Create new account</h3>
                        	
                        	<a class="btn btn-link-1 " href="<?= base_url('login/signup') ?>">
                        		Sign Up
                        	</a>
                        </div>
                    </div>
                  
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-2.2.4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
        
    </body>

</html>