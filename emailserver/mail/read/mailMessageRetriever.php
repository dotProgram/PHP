<?php
include_once('../db/connectionemail.php');
		
$action = $_POST['fn'];
$table = "inbox";
$message_id = $_POST['no'];
$email = $_POST['email'];
$password = $_POST['pw'];

// Define from which table to retrieve the message contents

/*

$query1 = "INSERT INTO users( first_name, last_name, user_id, email, password, birthday, gender, country, state, city, pincode, phone_number, registration_date) VALUES('$first_name', '$last_name', '$user_id', '$email', '$sha_password', '$birthday', '$gender', '$country', '$state', '$city', '$pincode', '$phone_number',NOW())";	


$query= "INSERT INTO users( first_name, last_name, user_id, email, PASSWORD , birthday, gender, country, state, city, pincode, phone_number, registration_date) VALUES ('Syed', 'Aaqib', 'aaqibq', 'aaqibq@gmail.com', SHA1('password') , '20/07/1992', 'Male', 'LSBNA', 'Karnataka', 'Banglore', 190036, 9419983222, NOW())";
*/
echo $table;
echo "</br>";
$q='select * from yeltsin1235_mail_tables.'.$table.' '.'where '.$table.'.no = 1';
echo $q;			
			$query_result= mysqli_query($conn_mail, $q);
				if($query_result)
					{
						echo "Congratulations! Query Success REal"."</br>";
						// This is to update the read status of Inbox MAils After ClickS
						//-----------------------------------------------------------------
								$q_update_status="update yeltsin1235_mail_tables.inbox set read_status_ = 0 where inbox.no = 2";
								mysqli_query($conn_mail, $q_update_status);
						//-----------------------------------------------------------------
								

								while ($row = mysqli_fetch_array($query_result, MYSQLI_ASSOC)) {
									
									
									echo '<table>';

									 echo '
									  <tr>
									 	
									  <td align="left"><b>From:</b></td><td align="left">'     . $row['source_id'].'</td></tr> 
									  <tr><td align="left"><b>Subject:</b></td><td align="left">' . $row['subject'] .'</td></tr> 
									  <tr><td align="left"><b>Body:</b></td><td align="left">' . $row['email_body'] .'</td></tr>
									  <tr><td align="left"><b>Status:</b></td><td align="left">' . $row['read_status_'] .'</td></tr>'; 
									  echo '</table>';
									}
}
else
{
	echo "INBOX Query Failed"."</br>";
}

?>