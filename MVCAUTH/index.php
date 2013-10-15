<?php
// index page
require_once ('models/db_connection.php');
require_once('controllers/auth.php');
include ('models/viewModel.php');

//make a new view
$views = new viewModel();

$username = empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
$password = empty($_POST['password']) ? '' : trim($_POST['password']);


if (!empty($username) && !empty($password)) {
	get_onion_by_username($username, $password);
	$contentPage = 'views/success.inc';
}else{
	$contentPage = 'views/form.inc';
}

//Show header here
$views->getView("views/header.inc");


$views->getView($contentPage, $username);
//$views->getView("views/body.inc");   

//show footer
$views->getView("views/footer.inc");

//find_one_onion($row['onionId']

?>

         