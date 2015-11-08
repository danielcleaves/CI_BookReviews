<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>Welcome</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		
		<meta name = "description" content = "Welcome"/>
		<meta name = "author" content = "Daniel Cleaves"/>
		<link rel = "stylesheet" type= "text/css" href = "/assets/css/bootstrap.css"/>
	</head>
	<body>
		<div class = "container-fluid col-md-">
				<h1>Welcome </h1>
			<form action = '/register' method = "post" id ="edit_form">
				<h2>Register</h2>
				<?= $this->session->flashdata('Success') ?>
	  			<div class="form-group">
			   		<label for="name">Name:</label>
			    		<input type="text" class="form-control" id="name" name = "name" value = ''  >
			    	<label for="alias">Alias:</label>
			    		<input type="text" class="form-control" id="alias" name = "alias" value = '' >
			    	<label for="last_name">Email:</label>
			    		<input type="email" class="form-control" id="email" name = "email" value = '' >
			    	<label for="password">Password:</label>
			    		<input type="password" class="form-control" id="password" name = "password" value = '' > 
			    	<label for="confirm_password">Confirm Password:</label>
			    		<input type="password" class="form-control" id="confirm_password" name = "confirm_password" value = '' >  	
					<button type = 'submit' class= "btn btn-success" role='button'>Register</button>
				</form>
				<?= $this->session->flashdata('registration_errors') ?>
				</div>

				
		

			<form action = '/login' method = "post" id = "edit_form">
				<h2>Login</h2>
	  			<div class="form-group">
			   		<label for="email">Email</label>
			    		<input type="email" class="form-control" id="email" name = "email" value = "">
			    	<label for="password">Password:</label>
			    		<input type="password" class="form-control" id="password" name = "password">
			    	<button type = 'submit' class= "btn btn-success" role='button'>Login</button>
			    </form>
			    <?= $this->session->flashdata('errors') ?>
			    </div>
			
	</body>