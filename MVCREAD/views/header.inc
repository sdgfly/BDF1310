<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="author" content="Phillip Moran" />
<meta name="description" content="Assignment 3.1 MVC Read, Back-End Development and Frameworks, October 2013, Full Sail University Online." />
<meta name="keywords" content="MVC, php mvc, MVC Read">
	<title>Phillip Moran - 3.1 MVC Read - BDF1310 FSO</title>
	<link rel="stylesheet" type="text/css" href="scripts/css/main.css" media="screen" />
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>Assignment 3.1 MVC Read</h1>
			<nav>
				<a href="index.php">Home</a>
				<?php 
					if (!isset($_SESSION)) {
						echo "<a href=\"#\">Login</a>";
					}else{
						echo "<a href=\"#\">Logout</a>";
					}
				?>
			</nav>
		</header>
		<div class="content">