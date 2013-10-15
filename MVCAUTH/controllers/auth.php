<?php
function confirm_query($result_set){

	if (!$result_set) {
		die("Failed to connect to database.");
	}

}

function get_onion_by_username($onion_user, $onion_pass){

	global $connection;

	$safe_onion_user = mysqli_real_escape_string($connection, $onion_user);
	$safe_onion_pass = mysqli_real_escape_string($connection, $onion_pass);

	$query  = "SELECT  ";
	$query .= "onionId AS id, ";
	$query .= "onionName AS username, ";
	$query .= "onionFirstName AS firstname, ";
	$query .= "onionLastName as lastname ";
	$query .= "FROM onion ";
	$query .= "WHERE onionName = {$safe_onion_user} ";
	$query .= "AND onionPassword = {$safe_onion_pass} ";
	$query .= "LIMIT 1 ";
	$onion_set = mysqli_query($connection, $query);
	
	confirm_query($onion_set);

	if($onion = mysqli_fetch_assoc($onion_set)) {
		return $onion;
	}else{
		return null;
	}
}

?>