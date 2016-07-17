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
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        		
                            		<p>Registration:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-user-plus"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form method="POST" action="<?= base_url(); ?>Login/register">
                                <div class="form-group">
                                        <label  class="sr-only" for="form-name">Names</label>
                                        <input type="text" id="name" name="name" placeholder="Names..." class="form-name form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label  class="sr-only" for="form-surname">Surnames</label>
                                        <input type="text" id="surname" name="surname" placeholder="Surnames..." class="form-surname form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label  class="sr-only" for="form-email">E-mail</label>
                                        <input type="text" id="email" name="email" placeholder="E-mail..." class="form-email form-control"  required>
                                    </div>
                                    <div class="form-group">
                                        <label  class="sr-only" for="form-document">Document ID</label>
                                        <input type="text" id="document" name="document" placeholder="Document ID..." class="form-document form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label  class="sr-only" for="sel1">Country:</label>
                                        <select class="form-control" id="sel1" name="sel1" placeholder="Country">
                                            
                                        </select>
                                    </div>
			                    	<div class="form-group">
			                    		<label  class="sr-only" for="form-username">Username</label>
			                        	<input type="text" id="username" name="username" placeholder="username..." class="form-username form-control" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" id="password" name="password" placeholder="password..." class="form-password form-control" required>
			                        </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Confirm Password</label>
                                        <input type="password" id="re-password" name="re-password" placeholder=" Confirm password..." class="form-password form-control" required>
                                    </div>
                                    
                                    
			                        <button type="submit" id="btn-login" class="btn">Sign up</button>
			                    </form>
		                    </div>
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
        <script src="<?php echo base_url(); ?>assets/js/ajax/login.js"></script>
        
    </body>

</html>