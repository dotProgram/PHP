<?php
$username="root";
$password="";
$database="yeltsin1235_mail_tables";


if($conn_mail=mysqli_connect("localhost:3306",$username,$password,$database)){
	echo "Success";
}
else{
die( "Unable to CONNECT database");
}
?>