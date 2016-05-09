<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $err_msg = "";

  if (isset($_POST["firstname"]) && !empty($_POST["firstname"])) {
   $first_name = strval($_POST["firstname"]);
  } else {
   $err_msg = $err_msg."You did not enter a first name<br>";
  }

  if (isset($_POST["lastname"]) && !empty($_POST["lastname"])) {
   $last_name = strval($_POST["lastname"]);
  } else {
   $err_msg = $err_msg."You did not enter a last name<br>";
  }

  if (isset($_POST["rating"]) && !empty($_POST["rating"])) {
   $rating = intval($_POST["rating"]);
  } else {
   $err_msg = $err_msg."You did not choose a rating<br>";
  }

  if (isset($_POST["review"]) && !empty($_POST["review"])) {
   $review = strval($_POST["review"]);
  } else {
   $err_msg = $err_msg."You did not write a review<br>";
  }

  if ($err_msg == "") {
    $conn = mysqli_connect("localhost", "levizit_user", "FrcbXw7ku-w%", "levizit_missspelt") or die("Couldn't connect to db server");
    $sql = "INSERT INTO review (first_name, last_name, rating, review, approved)
    VALUES ('$first_name', '$last_name', '$rating', '$review', 'false')";
    if ($conn->query($sql) === TRUE) {
      $result = "New record created successfully";
    } else {
      $result = "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  ?>

	<!--Favicons-->
	<link rel="apple-touch-icon" sizes="57x57" href="../apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
	<link rel="manifest" href="../manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="description" content="Delicious, Healthy...Gluten-free">
	<meta name="author" content="">

	<meta property="og:title" content="MissSpelt!" />
	<meta property="og:image" content="http://i.imgur.com/JYD5bDa.jpg">
	<meta property="og:url" content="missspelt.co/pages/reviews.html" />
	<meta property="og:description" content="Delicious, Healthy...Gluten-free" />

	<title>MissSpelt! | Create a Review</title>

	<!--Favicon-->
	<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'>

	<!-- Material Design fonts -->
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- CSS Scripts for material design -->
	<link href="../css/bootstrap-material-design.min.css" rel="stylesheet">
	<link href="../css/ripples.min.css" rel="stylesheet">

	<!-- Custom Sitewide Styles -->
	<link href="../css/global.css" rel="stylesheet">

	<!-- Custom page specific styles -->
	<link href="../css/pages/review.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<div class="main">
	<div class="bs-component">
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="nav-container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="javascript:delay('../index.html')" onfocus="this.blur();"><img src="../img/logo-2.png"></a>
				</div>
				<div class="navbar-collapse collapse navbar-warning-collapse">
				  <ul class="nav navbar-nav">
						<li><a href="javascript:delay('../index.html')" onfocus="this.blur();">Home</a></li>
						<li><a href="javascript:delay('menu.html')" onfocus="this.blur();">Menu</a></li>
						<li><a href="javascript:delay('reservations.html')" onfocus="this.blur();">Reservations</a></li>
						<li><a href="javascript:delay('reviews.html')" onfocus="this.blur();"  class="active-tab">Reviews</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="javascript:delay('contact.html')" onfocus="this.blur();">Contact</a></li>
					<li><a href="javascript:delay('about.html')" onfocus="this.blur();">About</a></li>
				  </ul>
				</div>
			</div>
		</div>
	</div>

	<div class="header-color"></div>
	<div class="container header-element fly-in" produces="intro-animation-up">
		<div class="well">
      <h2 class="text-center">Thank you</h2>
      <br>
      <p class="text-center" style="font-size:24px;">Thank you for submitting that review. We really do appriciate it.</p>
      <br>
      <p class="text-center"><a href="../index.html" class="btn btn-raised btn-warning">Home</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="reviews.html" class="btn btn-raised btn-warning">Reviews</a></p>
		</div>
	</div>
</div>

<footer>
 <div class="row">
 	<div class="col-md-4 copyright">
 		<p>© Copyright 2016 MissSpelt!</p>
 		<br>
 		<p>Credits for technologies and images used<br>can be found <a href="credits.html">here</a></p>
 	</div>
 	<div class="col-md-4 f-logo">
 		<img src="../img/logo.png">
 	</div>
 	<div class="col-md-4 social-btns">
 		<ul>
 			<li id="facebook">
 				<a href="http://www.facebook.com/sharer.php?u=http://missspelt.co/pages/reviews.html" target="_blank"><i class="fa fa-facebook fa-fw fa-5x"></i></a>
 			</li>
 			<li id="twitter">
 				<a href="https://twitter.com/share?url=http://missspelt.co/pages/reviews.html&amp;text=MissSpelt!%20Delicious,%20Helthy...Gluten-free&amp;hashtags=glutenfree" target="_blank"><i class="fa fa-twitter fa-fw fa-5x"></i></a>
 			</li>
 			<li id="googleplus">
 				<a href="https://plus.google.com/share?url=http://missspelt.co/pages/reviews.html" target="_blank">
 					<span class="fa-stack fa-3x">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
						</span>
 				</a>
 			</li>
 			<li id="reddit">
 				<a href="http://reddit.com/submit?url=http://missspelt.co/pages/reviews.html&amp;title=MissSpelt! Delcious, Healthy...Gluten-free" target="_blank"><i class="fa fa-reddit-alien fa-fw fa-5x"></i></a>
 			</li>
 		</ul>
 	</div>
 </div>
</footer>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Javascript files for the material design elements -->
<script src="../js/material.min.js"></script>
<script src="../js/script.js"></script>
<script src="../js/ripples.min.js"></script>

</body>

</html>
