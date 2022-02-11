<?php
$username="root";
$password="";
$database="imail_server_database";

if($connDatabase=mysqli_connect("localhost:3306",$username,$password)){
	echo "Success";
}
else{
die( "Unable to CONNECT database");
}
?>