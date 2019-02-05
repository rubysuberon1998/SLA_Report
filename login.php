<?php
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

if(isset($_POST['button']))
{
$sql = "SELECT *FROM `rjusers` where username =  '".$username."'";



$result = $con->query($sql);
 echo "<script>"."window.location.href='http://localhost/dashboard1/index.html'"."</script>";
}
?>