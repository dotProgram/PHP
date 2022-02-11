<?php
$username="root";
$password="";
$database="imail_server_database";

if($conn=mysqli_connect("localhost:3306",$username,$password,$database)){
	echo "Success";
}
else{
die( "Unable to CONNECT database");
}
?>