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

  if (isset($_POST["contact"])){
    if ($_POST["contact"] == "phone") {
      if (isset($_POST["phone"]) && !empty($_POST["phone"])){
        $contact_type = "phone";
        $contact = strval($_POST["phone"]);
        $contact = preg_replace("/[^0-9]/","",$contact);
      } else {
        $err_msg = $err_msg."You selected phone number but did not enter a phone number<br>";
      }
    } else if ($_POST["contact"] == "email") {
      if (isset($_POST["email"]) && !empty($_POST["email"])){
        $contact_type = "email";
        $contact = strval($_POST["email"]);
      } else {
        $err_msg = $err_msg."You selected email but did not enter an email<br>";
      }
    }
  } else {
    $err_msg = $err_msg."There was an unknown error with the contact section of the form<br>";
  }

  if (isset($_POST["party_members"]) && !empty($_POST["party_members"])) {
    $party_members = intval($_POST["party_members"]);
  } else {
    $err_msg = $err_msg."You must enter the number of party members<br>";
  }

  if (isset($_POST["location"]) && $_POST["location"] != "none") {
    $location = strval($_POST["location"]);
  } else {
    $err_msg = $err_msg."You must choose a location<br>";
  }

  if (isset($_POST["date"]) && !empty($_POST["date"])) {
    $date = strval($_POST["date"]);
  } else {
    $err_msg = $err_msg."You must provide a date<br>";
  }

  if (isset($_POST["time"]) && $_POST["time"] != "none") {
    $time = strval($_POST["time"]);
  } else {
    $err_msg = $err_msg."You must choose a time<br>";
  }

  if ($err_msg == "") {
    $conn = mysqli_connect("localhost", "root", "", "missspelt") or die("Couldn't connect to db server");
    $sql = "INSERT INTO reservations (first_name, last_name, contact_type, contact, party_members, location, date, time)
    VALUES ('$first_name', '$last_name', '$contact_type', '$contact', $party_members,  '$location', '$date', '$time')";
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
	<meta property="og:url" content="missspelt.co/pages/create.html" />
	<meta property="og:description" content="Delicious, Healthy...Gluten-free" />

	<title>MissSpelt! | Create a Reservation</title>

	<!--Favicon-->
	<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >

	<!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- CSS Scripts for material design -->
	<link href="../css/bootstrap-material-design.min.css" rel="stylesheet">
	<link href="../css/ripples.min.css" rel="stylesheet">

	<!-- CSS Scripts for date and time picker -->
	<link href="../css/date-time.css" rel="stylesheet">

	<!-- Custom Sitewide Styles -->
	<link href="../css/global.css" rel="stylesheet">

	<!-- Custom page specific styles -->
	<link href="../css/pages/create-check.css" rel="stylesheet">

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
						<li><a href="javascript:delay('reservations.html')" onfocus="this.blur();" class="active-tab">Reservations</a></li>
						<li><a href="javascript:delay('reviews.html')" onfocus="this.blur();">Reviews</a></li>
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
	<div class="container fly-in" produces="intro-animation-up">
		<div class="well form-card">
			<h2 class="text-center">
        <?php
          if ($err_msg != "") {
            echo "Error";
          } else {
            echo "Thank You";
          }
       ?>
      </h2>
        <?php
        if ($err_msg != "") {
          echo $err_msg;
          echo "<a class=\"btn btn-raised btn-warning\" href=\"create.html\">Back</a>";
        } else {
          ?>
      <br>
      <h4 class="text-center">Your reservation has been saved succesfully.</h4>
      <br>
      <table class="table">
        <tbody>
          <tr>
            <td>Name</td>
            <td><?php echo $first_name." ".$last_name;?></td>
          </tr>
          <tr>
            <td>Contact</td>
            <td><?php echo $contact;?></td>
          </tr>
          <tr>
            <td># of party menbers</td>
            <td><?php echo $party_members;?></td>
          </tr>
          <tr>
            <td>Location</td>
            <td><?php echo $location;?></td>
          </tr>
          <tr>
            <td>Date</td>
            <td><?php echo $date;?></td>
          </tr>
          <tr>
            <td>Time</td>
            <td><?php echo $time;?></td>
          </tr>
        </tbody>
      </table>
      <p class="text-center">Remeber that you can check the details of your reservation at anytime <a href="check.html">here</a></p>
        <?php
        }
        ?>
		</div>
	</div>
</div>

<footer>
  <div class="row">
  	<div class="col-md-4 copyright">
  		<p>© Copyright 2016 MissSpelt!</p>
  		<br>
  		<p>Credits for technologies and images used<br>can be found <a href="credits.html">here.</a></p>
  	</div>
  	<div class="col-md-4 f-logo">
  		<img src="../img/logo.png">
  	</div>
  	<div class="col-md-4 social-btns">
  		<ul>
  			<li id="facebook">
  				<a href="http://www.facebook.com/sharer.php?u=http://missspelt.co/pages/create.html" target="_blank"><i class="fa fa-facebook fa-fw fa-5x"></i></a>
  			</li>
  			<li id="twitter">
  				<a href="https://twitter.com/share?url=http://missspelt.co/pages/create.html&amp;text=MissSpelt!%20Delicious,%20Helthy...Gluten-free&amp;hashtags=glutenfree" target="_blank"><i class="fa fa-twitter fa-fw fa-5x"></i></a>
  			</li>
  			<li id="googleplus">
  				<a href="https://plus.google.com/share?url=http://missspelt.co/pages/create.html" target="_blank">
  					<span class="fa-stack fa-3x">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
						</span>
  				</a>
  			</li>
  			<li id="reddit">
  				<a href="http://reddit.com/submit?url=http://missspelt.co/pages/create.html&amp;title=MissSpelt! Delcious, Healthy...Gluten-free" target="_blank"><i class="fa fa-reddit-alien fa-fw fa-5x"></i></a>
  			</li>
  		</ul>
  	</div>
  </div>
</footer>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

<script type="text/javascript" src="../js/date-time.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Script for date and time picker -->
<script type="text/javascript" src="../js/date-time.js"></script>

<!-- Custom scripts for this page -->
<script src="../js/pages/create_check.js"></script>

<!-- Javascript files for the material design elements -->
<script src="../js/material.min.js"></script>
<script src="../js/script.js"></script>
<script src="../js/ripples.min.js"></script>


</body>

</html>
