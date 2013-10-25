<?php
/**
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */



if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<h2>User List</h2>
<p>Click on a name for details: </p>
<ul class="user_list">


<?php
include 'model/ReadModel.php';
$getOnion = new ReadModel();

$get_users = $getOnion;

if (isset($_GET["id"])) {
	$selected_id = $_GET["id"];
}else{
	$selected_id = null;
}

while ($row = $get_users) {
	echo "<li><a href=\"?id=" . $row['onionId'] . "\">" . $row['onionFirstName'] . " " . $row['onionLastName'] . "</a></li>";
}
 


 
?>

</ul>

<?php 

if (isset($selected_id)) {
	$current_onion = find_onion_by_id($selected_id);
	echo "<article class=\"user_details\">";
	echo "<p>Username: " . $current_onion["onionName"] . "<br /> " . "Name: " .  $current_onion["onionFirstName"] ." " . $current_onion["onionLastName"] . "<br /> " . "Current Password: " . $current_onion["onionPassword"] .   "<br />" . "Date of Birth: " .  $current_onion["onionDOB"] . "</p>";
}

?>
