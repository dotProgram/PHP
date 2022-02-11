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
					require('action.php/mail.php'); 

					?>	

			</div>
			
			</div>

</div>	
		
		















</body>
</html>