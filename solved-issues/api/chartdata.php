<?php
//setting header to json
header('Content-Type: application/json');

//get connection
$mysqli = mysqli_connect("127.0.0.1", "root", "", "rbc_inventory") or die('cant connect');


//query to get data from the table
$query = sprintf("SELECT * FROM `rbctracker` ORDER BY `tracker_id` DESC");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
//print_r(query);
?>