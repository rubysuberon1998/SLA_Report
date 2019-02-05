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

if(isset($_POST['submit']))
{
$sql = 'INSERT INTO `rjusers` (`typeofuser`,`username`, `password`) 

VALUES (
	"'.$_POST['usertypeset'].'","'.$_POST['usernameset'].'", "'.$_POST['passwordset'].'")';

$result = $con->query($sql);
echo "<script>"."window.location.href='http://rjslalocal.ph/index.html'"."</script>";


}
?>
