<?php
// index page
require_once ('models/db_connection.php');
require_once('controllers/functions.php');
include ('models/viewModel.php');

//make a new view
$views = new viewModel();

//Show header here
$views->getView("views/header.inc");

$views->getView("views/body.inc");

//show footer
$views->getView("views/footer.inc");

//find_one_onion($row['onionId']

?>


