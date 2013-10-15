<?php
// index page
require_once ('models/db_connection.php');
require_once('controllers/auth.php');
include ('models/viewModel.php');

//make a new view
$views = new viewModel();

$username = empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
$password = empty($_POST['password']) ? '' : trim($_POST['password']);

$user = null;

if (!empty($_SESSION['userInfo'])) {
	$contentPage = 'views/success.inc';
}

if (!empty($username) && !empty($password)) {
	$user = get_onion_by_username($username, $password);
	if (is_array($user)) {
		$contentPage = 'views/success.inc';
		session_start();
		$_SESSION['userInfo'] = $user;
	}
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

         