<?php

class MasterPage
{
	public static function WriteHeader($filename, $imagecover)
	{
		echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>:: บ้านร่มไม้ ::</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">
	<link href="css/master.css" rel="stylesheet">
	<link href="css/all.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don"t actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

	<div class="navbar navbar-default navbar-fixed-top visible-xs" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">บ้านร่มไม้</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="'.($filename=="index.php" ? "active" : "").'"><a href="index.php">HOME</a></li>
            <li class="'.($filename=="project.php" ? "active" : "").'"><a href="project.php">PROJECT</a></li>
            <li class="'.($filename=="gallery.php" ? "active" : "").'"><a href="gallery.php">GALLERY</a></li>
			<li class="'.($filename=="location.php" ? "active" : "").'"><a href="location.php">LOCATION</a></li>
			<li class="'.($filename=="contact.php" ? "active" : "").'"><a href="contact.php">CONTACT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

		<header>

		<div class="row pull-right">
			<div class="col-md-12">
				<a href="index.php">
					<img alt="" class="img-responsive" src="images/logo.png">
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<img id="imgCover" alt="" class="img-responsive" src="'.$imagecover.'" style="">
			</div>
		</div>

		';
		
		echo MasterPage::WriteMenu($filename);

		echo '
		</header>
		
		';

	}

	public static function WriteMenu($filename)
	{
		$text = '
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<ul class="menu">
					<li class="'.($filename=="index.php" ? "active" : "").'">
						<a href="index.php">HOME</a>
					</li>
					<li class="'.($filename=="project.php" ? "active" : "").'">
						<a href="project.php">PROJECT</a>
					</li>
					<li class="'.($filename=="gallery.php" ? "active" : "").'">
						<a href="gallery.php">GALLERY</a>
					</li>
					<li class="'.($filename=="location.php" ? "active" : "").'">
						<a href="location.php">LOCATION</a>
					</li>
					<li class="'.($filename=="contact.php" ? "active" : "").'">
						<a href="contact.php">CONTACT</a>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div id="menu-line" class="line"></div>
			</div>
		</div>
		';

		return $text;
	}

	public static function WriteFooter()
	{
		echo '
<footer>
			<div class="row">
				<div class="col-md-12">
					<div class="line"></div>
				</div>
			</div>

			<div class="row pull-right">
				<div class="col-md-12">
					<img alt="" class="img-responsive" src="images/logofooter.png">
				</div>
			</div>
		</footer>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
	<script src="js/script.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

  </body>
</html>
		';
	}

}