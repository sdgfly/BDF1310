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
<ul class="user_list">
<?php
if (isset($_GET["id"])) {
	$selected_id = $_GET["id"];
}else{
	$selected_id = null;
}

while ($row = mysqli_fetch_assoc($get_users)) {
	echo "<li><a href=\"?id=" . $row['onionId'] . "\">" . $row['onionFirstName'] . " " . $row['onionLastName'] . "</a></li>";
}
 


 
?>

</ul>

<?php 

if (isset($selected_id)) {
	$current_onion = find_onion_by_id($selected_id);
	echo "<p>Username: " . $current_onion["onionName"] . " " . $current_onion["onionFirstName"] ." " . $current_onion["onionLastName"] . " " . $current_onion["onionDOB"] . "</p>";
}

?>

<?php
//show footer
$views->getView("views/footer.inc");

//find_one_onion($row['onionId']

?>


