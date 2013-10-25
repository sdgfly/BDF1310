<?php
/**
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
 * @package       app
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

require 'webroot' . DIRECTORY_SEPARATOR . 'index.php';

<h2>User List</h2>
<p>Click on a name for details: </p>
<ul class="user_list">


<?php
$get_users = find_all_onions();

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
	echo "<article class=\"user_details\">";
	echo "<p>Username: " . $current_onion["onionName"] . "<br /> " . "Name: " .  $current_onion["onionFirstName"] ." " . $current_onion["onionLastName"] . "<br /> " . "Current Password: " . $current_onion["onionPassword"] .   "<br />" . "Date of Birth: " .  $current_onion["onionDOB"] . "</p>";
}

?>
