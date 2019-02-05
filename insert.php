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

if(isset($_POST['submitrequest']))
{
$sql = 'INSERT INTO `rbctracker` (`Site`, `Escalation`, `TicketNumber`, `Campaign`, `Year`, `Month`, `Week`, `Date`, `Day`, `Type`, `typeofissue`, `typeofproblem`, `Issue`, `severitylevel`, `requestdescription`, `numberofagentsaffected`, `numberofagentsonshift`, `tloiconboard`, `ticketowner`, `senior`, `starttime`, `endtime`, `status`,`duration`,`totalduration`) 

VALUES (
	"'.$_POST['Site'].'", "'.$_POST['Escalation'].'", "'.$_POST['ticketno'].'", "'.$_POST['Campaign'].'", "'.$_POST['Year'].'", "'.$_POST['month'].'", "'.$_POST['week'].'",  "'.$_POST['day'].'",  "'.$_POST['dates'].'", "'.$_POST['type'].'", "'.$_POST['toir'].'",  "'.$_POST['typeproblem'].'",  "'.$_POST['issue'].'", "'.$_POST['Svrtylvl'].'", "'.$_POST['requestdescription'].'", "'.$_POST['agentsaffect'].'", "'.$_POST['noaos'].'", "'.$_POST['tloic'].'",  "'.$_POST['ticketowner'].'", "'.$_POST['senior'].'", "'.$_POST['starttime'].'",  "'.$_POST['endtime'].'", "'.$_POST['status'].'","'.$_POST['duration'].'","'.$_POST['totalduration'].'")';

$result = $con->query($sql);
 echo "<script>"."window.location.href='http://rjslalocal.ph/tracker.php'"."</script>";
}
?>