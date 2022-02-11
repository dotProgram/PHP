<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/mail.js"></script>
	<link href="../css/mailreader.css" rel="stylesheet"/>
	

	<title>InMail</title>
</head>
<body>
<div id="main">
	<div id="one" class="transparent-divs"><a href="../index.html">
			<div class="mail-header-div"><span>InMail</a></span>
					</div>
			<div class="mail-header-div" id="email-search" style="color:black; margin-left:135px">
			<input type="text" id="mail-search-input" class="ip-tb-style" placeholder="Search"/>
			<button style="background-color:#2790e6; border-color:#2790e6;border-bottom-color:#2790e6" ><img style="background-color:#2790e6" src="../Icons/Search_25px_2.png"/></button>
					</div>
		<div id="header_Buttons">
			<div id="corrnor-logout" class="header_menu_buttons"></div>
			<div id="corrnor-settings" class="header_menu_buttons"></div>
			<div id="corrnor-dropdownmenu"></div>
		</div>	
		
	</div>
	<div id="body_div-regis" class="register transparent-divs" style="background-color:transparent;">
			<div id="navigation-div" class="ont-two" style="background-color:transparent;">
			<h3>The Mailing options</h3><br>
			<b>Inbox </b>(2)<br> Sent (4)<br>  Drafts<br> Delete(1)
							<div id="table-containing-div">
							
					</div>

			</div>	
			<div id="body_div-email" class="ont-two transparent-divs" style="opacity:.98;">
					
				
					
				
<?php
/*
$table = "inbox";
$message_id = $_GET['no'];

$url_string='action.php/mailMessageRetriever.php?table='.$table.'&message_id='.$message_id;
echo $url_string;
					require($url_string); */
include_once('../db/connectionemail.php');


$table = "inbox";
$message_id = $_GET['no'];
$email = $_POST['email'];
$password = $_POST['pw'];

// Define from which table to retrieve the message contents

/*

$query1 = "INSERT INTO users( first_name, last_name, user_id, email, password, birthday, gender, country, state, city, pincode, phone_number, registration_date) VALUES('$first_name', '$last_name', '$user_id', '$email', '$sha_password', '$birthday', '$gender', '$country', '$state', '$city', '$pincode', '$phone_number',NOW())";	


$query= "INSERT INTO users( first_name, last_name, user_id, email, PASSWORD , birthday, gender, country, state, city, pincode, phone_number, registration_date) VALUES ('Syed', 'Aaqib', 'aaqibq', 'aaqibq@gmail.com', SHA1('password') , '20/07/1992', 'Male', 'LSBNA', 'Karnataka', 'Banglore', 190036, 9419983222, NOW())";
*/
echo $table .'</br>'. $message_id ;
echo "</br>";
$q='select * from yeltsin1235_mail_tables.'.$table.' '.'where '.$table.'.no ='.$message_id;
echo $q;			
			$query_result= mysqli_query($conn_mail, $q);
				if($query_result)
					{
						echo "Congratulations! Query Success REal"."</br>";
						// This is to update the read status of Inbox MAils After ClickS
						//-----------------------------------------------------------------
								$q_update_status='update yeltsin1235_mail_tables.inbox set read_status_ = 1 where inbox.no ='.$message_id;
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

			</div>
			
			</div>

</div>	
		
		















</body>
</html>