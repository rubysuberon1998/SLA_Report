
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
												$_SESSION['userinfos'] = $row;
													
												}


												//print_r($_SESSION);
												//$rjpassword = $_SESSION['userinfos']['3'];
												//$passSha = hash('sha512', $_POST['password']);
												
												$sessionusername = $_SESSION['userinfos']['2'];
												$usernameset = $_POST['username'];
												$sessionpassword = $_SESSION['userinfos']['3'];
												$rjpassword = $_POST['password'];

												if($sessionusername)
												{
													if($usernameset == $sessionusername)

													{
														if ($sessionpassword)
												 {
													if($rjpassword == $sessionpassword)
													{
													
													 echo "<script>"."window.location.href='http://rjslalocal.ph/index.html'"."</script>";
													}
													else
													{
														 echo "<script>"."window.location.href='http://rjslalocal.ph/loginform.html'"."</script>";
													}
													
												 }
													}
													else
													{
													 echo "<script>"."window.location.href='http://rjslalocal.ph/loginform.html'"."</script>";
													}

												}


												
										


									?>
