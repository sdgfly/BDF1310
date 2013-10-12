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
?>
<ul>
<?php
while ($row = mysqli_fetch_assoc($get_users)) {
	echo "<li><a href=\"?info=" . $row['onionName'] . "\">" . $row['onionFirstName'] . " " . $row['onionLastName'] . "</a></li>";
}

?>

</ul>
<?php
//show footer
$views->getView("views/footer.inc");

//<a href="info?=" test['test'] . "\">"Test</a>

//<a href=\"info?="$row['onionName'] "\">" . $row["onionFirstName"] . " " . $row["onionLastName"] . "</a>

?>


