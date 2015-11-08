<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>Add Book and Review</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<meta name = "description" content = "Add A New Book"/>
		<meta name = "author" content = "Daniel Cleaves"/>
		<link rel = "stylesheet" type= "text/css" href = "/assets/css/bootstrap.css"/>
	</head>
	<body>
		
  			<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->
   		 	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav navbar-right col-md-2">
      				<li><a href= '/'>Home</a></li>
        			<li><a href= '/logout'>Logout</a></li>
          		</ul>
        
    		</div><!-- /.navbar-collapse -->
 		 	</div><!-- /.container-fluid -->

		<div class = "container-fluid col-md-8">
				<h1>Add a New Book Title and a Review </h1>
			<form action = '/addbook' class = "add_book" method = "post">
			   		<label for="book_title">Book Title:</label>
			    		<input type="text" class="form-control" id="title" name = "title" value = ''  >
			    	<label for="author">Author:</label>
			    		<p id = "topics">Choose from the list</p>
			    			<select name = "author_list" id = "author">
			    			<option></option>
			    			<?php foreach ($author as $authors) { ?>
			    				<option value = "<?= $authors['id'] ?>"> <?= $authors['author_name']?> </option>
			   				<?php } ?>
			   				</select>		
			    	<p id = "topics">Or add a new author</p>
			    		<input type="text" class="form-control" id="authors" name = "authors" value = '' >
			    	<label for = "review">Review : </label>
			    		<input type="text" class="form-control" id="review" name = "review" value = ''  >
			    	<label for="Rating">Rating:</label>
			    			<select name = 'rating'>
			    				<option value = 1>1 </option>
			    				<option value = 2>2 </option>
			    				<option value = 3>3 </option>
			    				<option value = 4>4 </option>
			    				<option value = 5>5 </option>
			    			</select>

			    		

					<button type = 'submit' class= "btn btn-success" role='button'>Add Book and Review</button>
			</form>
		</div>