<?php
// index page
require_once ('models/db_connection.php');
require_once('controllers/functions.php');
include ('models/viewModel.php');

//make a new view
$views = new viewModel();

//Show header here
$views->getView("views/header.inc");

$get_users = find_all_onions();

while ($row = mysqli_fetch_assoc($get_users)) {
	echo $row["onionFirstName"] . " " . $row["onionLastName"] . "<br />";
}


//show footer
$views->getView("views/footer.inc");

?>
