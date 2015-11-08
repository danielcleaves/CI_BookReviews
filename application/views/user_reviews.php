<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>User Reviews</title>
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
      			<ul class="nav navbar-nav navbar-right col-md-4">
        			<li><a href= '/books_home'>Home</a></li>
        			<li><a href= '/addbook_view'>Add Book and Review</a></li>
        			<li><a href= '/logout'>Logout</a></li>
          		</ul>
        
    		</div><!-- /.navbar-collapse -->
 		 	</div><!-- /.container-fluid -->
		</nav>
		<div container "container-fluid col-lg-12">
				<h3>User Alias: <?= $user['alias'] ?> </h3>
				<p>Name: <?= $user['name'] ?></p>
				<p>Email: <?= $user['email'] ?></p>
				<p>Posted Reviews on the following books:</p>
				<p>Total Reviews:<?= count($get_reviews) ?></p>
				<?php foreach($get_reviews as $review) { ?>
			<ul>
				
				<p><a href = '/books_home'> <?= $review['title'] ?></a></p>
			</ul>

			<? } ?>
		</div>