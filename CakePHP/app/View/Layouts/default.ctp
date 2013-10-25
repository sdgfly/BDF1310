<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="author" content="Phillip Moran" />
<meta name="description" content="Assignment 3.1 MVC Read, Back-End Development and Frameworks, October 2013, Full Sail University Online." />
<meta name="keywords" content="MVC, php mvc, MVC Read">
	<title>Phillip Moran - 4.3 Framework MVC Read - BDF1310 FSO</title>
	<link rel="stylesheet" type="text/css" href="/CakePHP/scripts/css/main.css" media="screen" />
</head>
<body>
	<div id="wrapper">
	<div id="header_container">
		<header>
			<h1>Assignment 4.3 Framework MVC Read</h1>
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
		</div>
		<div class="content">

		<?php echo $content_for_layout; ?>

		</div><!-- /.content -->
		<div id="footer_container">
		<footer>
			<p>Phillip Moran - 4.3 Framework MVC Read - BDF 1310</p>
		</footer>
		</div>
	</div><!-- /#wrapper -->
</body>
</html>