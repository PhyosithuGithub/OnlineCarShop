<?php
$server_host = "localhost";
$server_name = "root";
$server_password = "";
//Mysql connection
$connection = mysql_connect($server_host,$server_name,$server_password) or die(mysql_error());
//Database connection
$database = "car";
$result =mysql_select_db($database,$connection);
/* if($result){
	echo "Mysql Connection is successfully connected!";
}else{
	echo "Mysql Connection error!";
} */
?>