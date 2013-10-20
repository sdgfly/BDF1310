<?php


function mysql_prep($string) {
	global $connection;
	
	$escaped_string = mysqli_real_escape_string($connection, $string);
	return $escaped_string;
}

function confirm_query($result_set){

	if (!$result_set) {
		die("Database connection failed.");
	}

}

function find_all_onions() {
	
	global $connection;

	$query  = "SELECT * ";
	$query .= "FROM onion ";
	$query .= "ORDER BY onionName ASC";
	$onion_set = mysqli_query($connection, $query);
	confirm_query($onion_set);

	return $onion_set;
}

function find_onion_by_id($onion_id){

	global $connection;

	$safe_onion_id = mysqli_real_escape_string($connection, $onion_id);

	$query  = "SELECT * ";
	$query .= "FROM onion ";
	$query .= "WHERE onionId = {$safe_onion_id} ";
	$query .= "LIMIT 1 ";
	$onion_set = mysqli_query($connection, $query);
	
	confirm_query($onion_set);

	if($onion = mysqli_fetch_assoc($onion_set)) {
		return $onion;
	}else{
		return null;
	}

	


}
 
function find_one_onion($user) {

	global $connection;

	//$safe_onion = mysqli_real_escape_string($connection, $user);

	$query = "SELECT * ";
	$query .="FROM onion ";
	$query .="WHERE onionId = {$user} ";

	$onion_set = mysqli_query($connection, $query);
	confirm_query($onion_set);

	return $onion_set;
}

?>