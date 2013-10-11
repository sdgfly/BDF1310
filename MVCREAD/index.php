<?php
// index page
require_once('controllers/functions.php');
include ('models/viewModel.php');
//make a new view
$views = new viewModel();

//Show header here
$views->getView("views/header.inc");

$get_users = find_all_onions();

echo $get_users;


//show footer
$views->getView("views/footer.inc");

?>
