<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>Books Home</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<meta name = "description" content = "User Reviews"/>
		<meta name = "author" content = "Daniel Cleaves"/>
		<link rel = "stylesheet" type= "text/css" href = "/assets/css/bootstrap.css"/>
	</head>
	<body>
		
  			
    <!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
	      		<a class="navbar-brand">Welcome, <?= $this->session->userdata('user')['name']?>!</a>
    		</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
   		 	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav navbar-right col-md-4">
        			<li><a href= '/addbook_view'>Add Book and Review</a></li>
        			<li><a href= '/logout'>Logout</a></li>
          		</ul>
        
    		</div><!-- /.navbar-collapse -->
 		 	</div><!-- /.container-fluid -->
		
	
		<div container "container-fluid col-lg-4" id = "breviews">
			<h2>Recent Book Reviews:</h2>

			<ul class = "recent_reviews">
				<?php $number_output = 0 ?>
				<?php foreach($book as $books)  { ;
					$number_output++;
				if($number_output > 3) break; ?>
					<li><a href = "/get_book/<?=$books['Book_id'] ?>" > <?= $books['title']?></a></li>
					<p>Rating <?php 
						$x = $books['rating'];
						for ($i = 0; $i < $x; $i++)
						{ ?>
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<? } ?> </p>
					<p id = "quote"><a href = "/user_reviews/<?=$books['id']?>" > <?=$books['name']?>:</a></p>
					<p id = "quotes"><?= $books['review'] ?></p>
					<p>Posted on: <?= $books['reviews_created_at'] = date("F j , Y") ?></p>
				<?php } ?>
			</ul>
		</div>

		<div container "container-fluid col-lg-6" id = "other_reviews">
			<h2>Other Books and Reviews</h2>
			<ul class = "other reviews">
				<?php foreach($book as $books) { ?>
					<li><a href = "/get_book/<?=$books['Book_id']?>" > <?= $books['title'] ?></a></li>
				<?php } ?>
			</ul>
		</div>

	</body>
</html>