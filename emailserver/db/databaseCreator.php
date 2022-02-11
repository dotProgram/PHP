<?php
// File to be included after REgistration is Successful
$uniqid;
/*$user_id1="'mc1100'";*/
$query123 = "select unique_id from users where user_id =".$user_id;
$run123_unique_id= mysqli_query ($conn,$query123);

	if($run123_unique_id){
	echo "</br>".$query123."</br>";
	echo "Success"."</br>";
	while ($rowqw = mysqli_fetch_array($run123_unique_id, MYSQLI_ASSOC)) {

	echo $rowqw['unique_id'];
}
	}

include_once('connectionDatabase.php');


$query1 = 'CREATE DATABASE db_server_user_id_'.$uniqid;
$query2 = 'CREATE TABLE inbox ( no MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
source_id VARCHAR(20) NOT NULL, subject VARCHAR(120) NOT NULL, email_body VARCHAR(2048) NOT NULL,
message_time DATETIME NOT NULL, read_status_ TINYINT(1) NOT NULL, delete_status_ TINYINT(1) NOT NULL,
PRIMARY KEY (no))';	

$query3='CREATE TABLE sent (
no MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
destination_id VARCHAR(20) NOT NULL,
destination_id_name VARCHAR(60) NOT NULL,
subject VARCHAR(120) NOT NULL,
email_body VARCHAR(2048) NOT NULL,
message_time DATETIME NOT NULL,
read_status_ TINYINT(1) NOT NULL,
delete_status_ TINYINT(1) NOT NULL,
PRIMARY KEY (no))';

/*
$query= "INSERT INTO users( first_name, last_name, user_id, email, PASSWORD , birthday, gender, country, state, city, pincode, phone_number, registration_date) VALUES ('Syed', 'Aaqib', 'aaqibq', 'aaqibq@gmail.com', SHA1('password') , '20/07/1992', 'Male', 'LSBNA', 'Karnataka', 'Banglore', 190036, 9419983222, NOW())";
*/

echo "</br>";
echo $query1."</br>";

//NEW DAtabase Creaton 
$run1= mysqli_query ($connDatabase,$query1);

//NOW THE QUERY FOR DATABSE TABLE CREATION
	//START---------------------------------------------------
$username="root";
$password="";
$database='db_server_user_id_'.$uniqid;

if($connDatabaseCreation=mysqli_connect("localhost:3306",$username,$password,$database)){
	echo "Success db tables CONNECTION."."</br>";
	
}
else{
die( "Unable to create DB TABLES database CONNECTION");
}

// Inbox Creation
$run2= mysqli_query ($connDatabaseCreation,$query2);
if($run1 && $run2)
{
	echo "Congratulations! Query Success REal"."</br>";
}

else {
echo "Query Failed Real"."</br>";

}
//end-------------------------------------------------------------

// SENT Creation
$run3= mysqli_query ($connDatabaseCreation,$query3);
if($run3)
{
	echo "SENT TABLE Query Execution Success"."</br>";
}

else {
echo "SENT TABLE Query Execution Failed Real"."</br>";

}
//end-------------------------------------------------------------

?>