<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>Add Book and Review</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<meta name = "description" content = "User Reviews"/>
		<meta name = "author" content = "Daniel Cleaves"/>
		<link rel = "stylesheet" type= "text/css" href = "/assets/css/bootstrap.css"/>
	</head>
	<body>
	

    <!-- Collect the nav links, forms, and other content for toggling -->
   		 	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav navbar-right col-md-2">
        			<li><a href= '/'>Home</a></li>
        			<li><a href= '/logout'>Logout</a></li>
          		</ul>
        
    		</div><!-- /.navbar-collapse -->
 		 	</div><!-- /.container-fluid -->
		</nav>
	
		<div container "container-fluid col-lg-12">
			<h2><?= $get_book[0]['title'] ?></h2>
			<p>Author:<?= $get_book[0]['author_name'] ?> </p>

			<ul class = "book_review">
				<h3>Reviews</h3>
				<?php foreach ($get_book as $books)  { ?>
				<h4> Rating <?php 
						$x = $books['rating'];
						for ($i = 0; $i < $x; $i++)
						{ ?>
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<? } ?> </h4>
				<p><a href = '/user_reviews' > </a> <?= $books['name']?>  says:</p>
				<p><?= $books['review'] ?> </p> <br>
				<p>Posted On: <?= date('m-d-Y',strtotime($books['Created'])) ?> </p>
				 <?php if ($this->session->userdata('user')['name'] == $books['name']) { ?>
						<a href = "/delete/<?=$books['review_id'] ?>" id = 'delete'>Delete this Review</a>
				<?php } ?>
				<?php } ?>
				

			</ul>
			<form action = "/quick_add/<?=$books['Book_id'] ?>" method = "post" id = "addreview">
			   		<label for="review">Add a Review:</label>
			    		<input type="text" class="form-control" id="add_review" name = "add_review" value = '' >
			    	<label for="Rating">Rating:</label>
			    			<select name = "rating">
			    				<option value = 1>1</option>
			    				<option value = 2>2</option>
			    				<option value = 3>3</option>
			    				<option value = 4>4</option>
			    				<option value = 5>5</option>
			    			</select>
			    			<p>stars</p>

					<button type = 'submit' class= "btn btn-success" role='button'>Submit Review</button>
			</form>

		</div>

	</body>
</html>