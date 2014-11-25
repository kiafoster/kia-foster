<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Mini Site</title>
   <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link href="css/reset.css" rel="stylesheet" type="text/css" />
  <style type="text/css"> 

  	h2{
  		color: #0080FF;
  	}

  	nav ul li{
  		display: inline;
  		margin-right: 10px;
 	 }

 	 nav ul li a{
  		text-decoration: none;
  		color: #C0C0C0;
  	}

  	 nav ul li a:hover{
  		color: ##004080;
  	}

  	.home .home a,
  	.about .about a,
  	.contact .contact a{
  		color: #0000FF;
  	}
  </style>
</head>
<body class="<?php echo $_GET['content'] ?>">

	<!-- Switches and Query String Variables -->

	<header>
		<h1>Mini Site!</h1>

		<nav> 
			<ul> 
				<li class="home"><a href="index.php?content=home">Home</a></li>
				<li class="about"><a href="index.php?content=about">About</a></li>
				<li class="contact"><a href="index.php?content=contact">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<?php //get the right content depending on which link was clicked
		switch( $_GET['content'] ){
			case 'home': 
				include('content-home.php');
				break;

			case 'about':
				include('content-about.php');
				break;

			case 'contact':
				include('content-contact.php');
				break;

			default:
				echo 'Click the nav to select a page to view content';	

		} ?>
	</main>

	<footer>
		&copy; 2014 Media Paramount!
	</footer>

</body>
</html>