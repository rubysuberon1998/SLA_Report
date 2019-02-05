<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rbc_inventory";

//create connection
$con = new mysqli($servername, $username, $password, $dbname);

//check connention

if ($con->connect_error) {
	die("Connection failed:" . $con->connect_error);
}


												$rjusername = $_POST['username'];
												$query = "SELECT *FROM `rjusers` where `username` = '".$rjusername."' ";
												$result = mysqli_query ($con,$query);
												while ($row = mysqli_fetch_array ($result))
												{
												session_start();

 												if ((session_is_registered("access")) && ($access == 1)) {
 												print "Welcome in to the secure site";
 												}
 												else {
 												print "Access not allowed!";
 												} 
													
												}


?>