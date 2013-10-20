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

<article class="user_details">
<form action="?" method="POST" class="create_user">
<fieldset>
<legend>Create User</legend>
<label for="username">Username:</label>
<input type="text" name="username" value="" maxlength="20" length="20" /><br />
<label for="password">Password:</label>
<input type="password" name="password" value="" maxlength="20" length="20"/ ><br />
<label for="first_name">First Name:</label>
<input type="text" name="first_name" value="" maxlength="20" length="20" /><br />
<label for="last_name">Last Name:</label>
<input type="text" name="last_name" value="" maxlength="20" length="20" /><br />
<label for="birthday">Birthday:</label>
<input type="date" name="birthday" /><br />
<input type="submit" value="Create User" />
</fieldset>
</form>
</article>