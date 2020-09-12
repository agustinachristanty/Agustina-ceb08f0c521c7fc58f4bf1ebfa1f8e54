<?php

$db_name = "dbtes";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
//$conn = mysqli_connect("hsms", "root", "", "localhost");
if (!$conn)
{
    die('Could not connect: ' . mysqli_error($conn));
}
else
{
	//echo "database connected";
}	

?>