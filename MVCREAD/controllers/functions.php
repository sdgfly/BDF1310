<?php

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

?>