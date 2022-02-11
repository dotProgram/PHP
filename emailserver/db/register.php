<?php
include_once('connection.php');
		
$first_name = $_POST['fn'];
$last_name = $_POST['ln'];
$user_id = $_POST['uid'];
$email = $_POST['email'];
$password = $_POST['pw'];

$birthday = $_POST['bday'];
$gender = $_POST['dropdown-gender'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$phone_number = $_POST['pno'];
$sha_password = SHA1('password'); 
$uniqid = uniqid();
echo "</br>".$first_name."</br>";
		echo $last_name."</br>";
		echo $user_id."</br>";
		echo $email."</br>";
		echo $sha_password."</br>";
		echo $country."</br>";
		echo $birthday."</br>";
		echo $gender ."</br>";
		echo $country."</br>";
		echo $state."</br>";
		echo $city ."</br>";
		echo $pincode."</br>";
		echo $phone_number."</br>";
		echo $uniqid."</br>";
		


$query1 = "INSERT INTO users( unique_id, first_name, last_name, user_id, email, password, birthday, gender, country, state, city, pincode, phone_number, registration_date) 
VALUES('$uniqid','$first_name', '$last_name', '$user_id', '$email', '$sha_password', '$birthday', '$gender', '$country', '$state', '$city', '$pincode', '$phone_number',NOW())";	

/*
$query= "INSERT INTO users( first_name, last_name, user_id, email, PASSWORD , birthday, gender, country, state, city, pincode, phone_number, registration_date) VALUES ('Syed', 'Aaqib', 'aaqibq', 'aaqibq@gmail.com', SHA1('password') , '20/07/1992', 'Male', 'LSBNA', 'Karnataka', 'Banglore', 190036, 9419983222, NOW())";
*/

echo "</br>";
echo $query1."</br>";


$run1= mysqli_query ($conn,$query1);

if($run1)
{
	echo "Congratulations! Register Query Success"."</br>";

	require('databaseCreator.php');
	echo "<b>Called databaseCreator.php"."</br></b>";
}

else {
echo "Query Failed Real"."</br>";

}


?>