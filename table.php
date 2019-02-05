<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rbc_inventory";

//create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
$sql = 'SELECT * FROM rbctracker ORDER BY `rbctracker`.`tracker_id` DESC' ;


$result = mysqli_query ( $con,$sql);

// var_dump($result);

	// foreach ($row as mysqli_fetch_row($result)) {
	// 	echo "" + $row[0];
	// }



?>



<!DOCTYPE html>
<html>
<head> <center><h1>INSERTED TICKETS</h1></center>
	<title>
	View Inserted Data
	</title>
</head>
<body>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 250%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    height: 5px;
}

tr:nth-child(even) {
    background-color: #dddddd;
</style>

<table>
          

	<tr>
		<th>id</th>
		<th>Site</th>
		<th>Escalation</th>
		<th>Ticket Number</th>
		<th>Campaign</th>
		<th>Year</th>
		<th>Month</th>
        <th>week</th>
		<th>Day</th>
		<th>Date</th>
		<th>Type</th>
        <th>Type of Issue</th>
        <th>Type of Problem</th>
		<th>Issue</th>
		<th>Severity Level</th>
		<th>Request Description</th>
		<th>Number of Agents Affected</th>
        <th>Number of Agents on Shift</th>
		<th>TL/OIC on board</th>
		<th>Ticket Owner</th>
		<th>Senior</th>
		<th>Start Time</th>
        <th>End Time</th>
		<th>Status</th>
		<th>Duration</th>
		<th>Total Duration</th>
		
	</tr>


<?php

	while ($row = mysqli_fetch_row($result)) {
	echo "
	<tr>
		<td>
			$row[0]
		</td>
		<td>
			$row[1]
		</td>
		<td>
			$row[2]
		</td>
		<td>
			$row[3]
		</td>
		<td>
			$row[4]
		</td>
		<td>
			$row[5]
		</td>
		<td>
			$row[6]
		</td>
		<td>
			$row[7]
		</td>
		<td>
			$row[8]
		</td>
		<td>
			$row[9]
		</td>
		<td>
			$row[10]
		</td>
		<td>
			$row[11]
		</td>
		<td>
			$row[12]
		</td>
		<td>
			$row[13]
		</td>
		<td>
			$row[14]
		</td>
		<td>
			$row[15]
		</td>
		<td>
			$row[16]
		</td>
		<td>
			$row[17]
		</td>
		<td>
			$row[18]
		</td>
		<td>
			$row[19]
		</td>
		<td>
			$row[20]
		</td>
		<td>
			$row[21]
		</td>
		<td>
			$row[22]
		</td>
		<td>
			$row[23]
		</td>
		<td>
			$row[24]
		</td>
		<td>
			$row[25]
		</td>
		
		
	</tr>
	" ;
}
	
?>

</table>

</body>
</html>
