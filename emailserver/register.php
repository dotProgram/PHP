<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/captcha.js"></script>
	<script type="text/javascript" src="js/vali_login.js"></script>
	<script type="text/javascript" src="js/reg_validation.js"></script>
   <!-- <script type="text/javascript" src="js/jquery.js"></script> 
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      CSS
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  		<link rel="stylesheet" href="/resources/demos/style.css">

    


    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    		    <script>
	  				$( function() {
	  				  $( "#datepicker" ).datepicker();
	  												} );

  			   </script>
  -->

		<link href="css/main.css" rel="stylesheet"/>
		
	<title>InMail</title>



</head>
<body onload="Captcha();">

	<div id="one"><a href="index.html"><span>InMail</a></span> </div>
	<div id="two">Div 2</div>
	<div id="body_div-regis" class="register">
			<div id="body_div-one" class="ont-two" >
				<div id="table-containing-div">
					<span style="padding-left :10px; font-family: Helvetica;font-size: 30px; color:#455A64;">Registration Form</span>
					<form action="db/register.php" method="POST">
					<table  style="margin-top:15px; margin-left:10px" cellspacing="1px" cellpadding="2" width="87%">
						
						<tr>
							<td align="left"></td>
							<td align="left"></td>
							<td align="left" style="color: whitesmoke; visibility:hidden">*Passwords Do not Match</td>
							</tr>
						<tr>
							<td align="left">First Name</td>
							<td align="left"><input type="text" name="fn" id="fn" class="ip-tb-style" placeholder="Enter First Name"/></td>
							<td align="left">
							<span class="span-validation-style">
									*Enter First Name</span></td>
						</tr> 
						<tr>
					
							<td align="left">Last Name</td>
							<td align="left"><input type="text" name="ln" class="ip-tb-style" id="ln" placeholder="Enter Last Name"/></td>
							<td align="left"><span id="ln-span" class="span-validation-style"></span></td>
						</tr> 
						<tr>
							<td align="left">Choose User Id</td>
							<td align="left"><input type="text" name="uid" class="ip-tb-style" id="uid" placeholder="User Id"/></td>
							<td align="left"><span class="span-validation-style">*Enter User Id</span></td>
						</tr> 
						<tr>
							<td align="left">Email Address</td>
							<td align="left"><input type="email" name="email" class="ip-tb-style" id="eid" placeholder="Enter Email"/></td>
							<td align="left"><span class="span-validation-style">*Enter Email</span></td>
						</tr>
						 
						<tr>						
							<td align="left">Password</td>
							<td align="left"><input type="password"  name="pw" class="ip-tb-style" id="pw" placeholder="Enter Password"/></td>
							<td align="left"><span class="span-validation-style">*Enter Password</span></td>
						</tr>
						<tr>						
							<td align="left">Confirm Password</td>
							<td align="left"><input type="password" id="cpw" name="cpw" class="ip-tb-style" placeholder="Confirm Password"/></td>
							<td align="left"><span class="span-validation-style">*Passwords Do nt Match</span></td>
						</tr>
						<tr>						
							<td align="left">Birthday</td>
							<td align="left"><input type="date" class="ip-tb-style" id="bday" name="bday" placeholder="mm/dd/yyyy" class="ip-tb-style" name="bday"/></td>
							<td align="left"><span class="span-validation-style">*Enter Birthday</span></td>
						</tr>
						<tr>						
							<td align="left">Gender</td>
							<td align="left"><select name="dropdown-gender">
											<option value="Male" selected>Male</option>
											<option value="Female">Female</option>
											</select></td>
							<td align="left"><span class="span-validation-style">*Select Gender</span></td>				
						</tr>
						<tr>						
							<td align="left">Country</td>
							<td align="left">
							<select class="ip-tb-style" name="country">
	    <option value="empty" selected>Select Country</option>
	    <option value="Afghanistan">Afghanistan</option>
	    <option value="Albania">Albania</option>
	    <option value="Algeria">Algeria</option>
	    <option value="American Samoa">American Samoa</option>
	    <option value="Andorra">Andorra</option>
	    <option value="Angola">Angola</option>
	    <option value="Anguilla">Anguilla</option>
	    <option value="Antartica">Antarctica</option>
	    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
	    <option value="Argentina">Argentina</option>
	    <option value="Armenia">Armenia</option>
	    <option value="Aruba">Aruba</option>
	    <option value="Australia">Australia</option>
	    <option value="Austria">Austria</option>
	    <option value="Azerbaijan">Azerbaijan</option>
	    <option value="Bahamas">Bahamas</option>
	    <option value="Bahrain">Bahrain</option>
	    <option value="Bangladesh">Bangladesh</option>
	    <option value="Barbados">Barbados</option>
	    <option value="Belarus">Belarus</option>
	    <option value="Belgium">Belgium</option>
	    <option value="Belize">Belize</option>
	    <option value="Benin">Benin</option>
	    <option value="Bermuda">Bermuda</option>
	    <option value="Bhutan">Bhutan</option>
	    <option value="Bolivia">Bolivia</option>
	    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
	    <option value="Botswana">Botswana</option>
	    <option value="Bouvet Island">Bouvet Island</option>
	    <option value="Brazil">Brazil</option>
	    
	    <option value="Brunei Darussalam">Brunei Darussalam</option>
	    <option value="Bulgaria">Bulgaria</option>
	    <option value="Burkina Faso">Burkina Faso</option>
	    <option value="Burundi">Burundi</option>
	    <option value="Cambodia">Cambodia</option>
	    <option value="Cameroon">Cameroon</option>
	    <option value="Canada">Canada</option>
	    <option value="Cape Verde">Cape Verde</option>
	    <option value="Cayman Islands">Cayman Islands</option>
	    <option value="Central African Republic">Central African</option>
	    <option value="Chad">Chad</option>
	    <option value="Chile">Chile</option>
	    <option value="China">China</option>
	    <option value="Christmas Island">Christmas Island</option>
	    <option value="Cocos Islands">Cocos Islands</option>
	    <option value="Colombia">Colombia</option>
	    <option value="Comoros">Comoros</option>
	    <option value="Congo">Congo</option>
	    
	    <option value="Cook Islands">Cook Islands</option>
	    <option value="Costa Rica">Costa Rica</option>
	    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
	    <option value="Croatia">Croatia (Hrvatska)</option>
	    <option value="Cuba">Cuba</option>
	    <option value="Cyprus">Cyprus</option>
	    <option value="Czech Republic">Czech Republic</option>
	    <option value="Denmark">Denmark</option>
	    <option value="Djibouti">Djibouti</option>
	    <option value="Dominica">Dominica</option>
	    <option value="Dominican Republic">Dominican Republic</option>
	    <option value="East Timor">East Timor</option>
	    <option value="Ecuador">Ecuador</option>
	    <option value="Egypt">Egypt</option>
	    <option value="El Salvador">El Salvador</option>
	    <option value="Equatorial Guinea">Equatorial Guinea</option>
	    <option value="Eritrea">Eritrea</option>
	    <option value="Estonia">Estonia</option>
	    <option value="Ethiopia">Ethiopia</option>
	    <option value="Falkland Islands">Falkland Islands</option>
	    <option value="Faroe Islands">Faroe Islands</option>
	    <option value="Fiji">Fiji</option>
	    <option value="Finland">Finland</option>
	    <option value="France">France</option>
	    <option value="France Metropolitan">France, Metropolitan</option>
	    <option value="French Guiana">French Guiana</option>
	    <option value="French Polynesia">French Polynesia</option>
	    
	    <option value="Gabon">Gabon</option>
	    <option value="Gambia">Gambia</option>
	    <option value="Georgia">Georgia</option>
	    <option value="Germany">Germany</option>
	    <option value="Ghana">Ghana</option>
	    <option value="Gibraltar">Gibraltar</option>
	    <option value="Greece">Greece</option>
	    <option value="Greenland">Greenland</option>
	    <option value="Grenada">Grenada</option>
	    <option value="Guadeloupe">Guadeloupe</option>
	    <option value="Guam">Guam</option>
	    <option value="Guatemala">Guatemala</option>
	    <option value="Guinea">Guinea</option>
	    <option value="Guinea-Bissau">Guinea-Bissau</option>
	    <option value="Guyana">Guyana</option>
	    <option value="Haiti">Haiti</option>
	    
	
	    <option value="Honduras">Honduras</option>
	    <option value="Hong Kong">Hong Kong</option>
	    <option value="Hungary">Hungary</option>
	    <option value="Iceland">Iceland</option>
	    <option value="India">India</option>
	    <option value="Indonesia">Indonesia</option>
	    <option value="Iran">Iran </option>
	    <option value="Iraq">Iraq</option>
	    <option value="Ireland">Ireland</option>
	    <option value="Israel">Israel</option>
	    <option value="Italy">Italy</option>
	    <option value="Jamaica">Jamaica</option>
	    <option value="Japan">Japan</option>
	    <option value="Jordan">Jordan</option>
	    <option value="Kazakhstan">Kazakhstan</option>
	    <option value="Kenya">Kenya</option>
	    <option value="Kiribati">Kiribati</option>
	    <option value="Democratic People's Republic of Korea">Korea, North Korea</option>
	    <option value="Korea">Korea, South Korea</option>
	    <option value="Kuwait">Kuwait</option>
	    <option value="Kyrgyzstan">Kyrgyzstan</option>
	    <option value="Lao">Lao</option>
	    <option value="Latvia">Latvia</option>
	    <option value="Lebanon" >Lebanon</option>
	    <option value="Lesotho">Lesotho</option>
	    <option value="Liberia">Liberia</option>
	    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
	    <option value="Liechtenstein">Liechtenstein</option>
	    <option value="Lithuania">Lithuania</option>
	    <option value="Luxembourg">Luxembourg</option>
	    <option value="Macau">Macau</option>
	    <option value="Macedonia">Macedonia</option>
	    <option value="Madagascar">Madagascar</option>
	    <option value="Malawi">Malawi</option>
	    <option value="Malaysia">Malaysia</option>
	    <option value="Maldives">Maldives</option>
	    <option value="Mali">Mali</option>
	    <option value="Malta">Malta</option>
	    <option value="Marshall Islands">Marshall Islands</option>
	    <option value="Martinique">Martinique</option>
	    <option value="Mauritania">Mauritania</option>
	    <option value="Mauritius">Mauritius</option>
	    <option value="Mayotte">Mayotte</option>
	    <option value="Mexico">Mexico</option>
	    <option value="Micronesia">Micronesia</option>
	    <option value="Moldova">Moldova</option>
	    <option value="Monaco">Monaco</option>
	    <option value="Mongolia">Mongolia</option>
	    <option value="Montserrat">Montserrat</option>
	    <option value="Morocco">Morocco</option>
	    <option value="Mozambique">Mozambique</option>
	    <option value="Myanmar">Myanmar</option>
	    <option value="Namibia">Namibia</option>
	    <option value="Nauru">Nauru</option>
	    <option value="Nepal">Nepal</option>
	    <option value="Netherlands">Netherlands</option>
	    <option value="Netherlands Antilles">Netherlands Antilles</option>
	    <option value="New Caledonia">New Caledonia</option>
	    <option value="New Zealand">New Zealand</option>
	    <option value="Nicaragua">Nicaragua</option>
	    <option value="Niger">Niger</option>
	    <option value="Nigeria">Nigeria</option>
	    <option value="Niue">Niue</option>
	    <option value="Norfolk Island">Norfolk Island</option>
	    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
	    <option value="Norway">Norway</option>
	    <option value="Oman">Oman</option>
	    <option value="Pakistan">Pakistan</option>
	    <option value="Palau">Palau</option>
	    <option value="Panama">Panama</option>
	    <option value="Papua New Guinea">Papua New Guinea</option>
	    <option value="Paraguay">Paraguay</option>
	    <option value="Peru">Peru</option>
	    <option value="Philippines">Philippines</option>
	    <option value="Pitcairn">Pitcairn</option>
	    <option value="Poland">Poland</option>
	    <option value="Portugal">Portugal</option>
	    <option value="Puerto Rico">Puerto Rico</option>
	    <option value="Qatar">Qatar</option>
	    <option value="Reunion">Reunion</option>
	    <option value="Romania">Romania</option>
	    <option value="Russia">Russian Federation</option>
	    <option value="Rwanda">Rwanda</option>
	    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
	    <option value="Saint LUCIA">Saint LUCIA</option>
	    
	    <option value="Samoa">Samoa</option>
	    <option value="San Marino">San Marino</option>
	    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
	    <option value="Saudi Arabia">Saudi Arabia</option>
	    <option value="Senegal">Senegal</option>
	    <option value="Seychelles">Seychelles</option>
	    <option value="Sierra">Sierra Leone</option>
	    <option value="Singapore">Singapore</option>
	
	    <option value="Slovenia">Slovenia</option>
	    <option value="Solomon Islands">Solomon Islands</option>
	    <option value="Somalia">Somalia</option>
	    <option value="South Africa">South Africa</option>
	    
	    <option value="Span">Spain</option>
	    <option value="SriLanka">Sri Lanka</option>
	    <option value="St. Helena">St. Helena</option>
	    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
	    <option value="Sudan">Sudan</option>
	    <option value="Suriname">Suriname</option>
	
	    <option value="Swaziland">Swaziland</option>
	    <option value="Sweden">Sweden</option>
	    <option value="Switzerland">Switzerland</option>
	    <option value="Syria">Syrian Arab Republic</option>
	    <option value="Taiwan">Taiwan</option>
	    <option value="Tajikistan">Tajikistan</option>
	    <option value="Tanzania">Tanzania</option>
	    <option value="Thailand">Thailand</option>
	    <option value="Togo">Togo</option>
	    <option value="Tokelau">Tokelau</option>
	    <option value="Tonga">Tonga</option>
	    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
	    <option value="Tunisia">Tunisia</option>
	    <option value="Turkey">Turkey</option>
	    <option value="Turkmenistan">Turkmenistan</option>
	   
	    <option value="Tuvalu">Tuvalu</option>
	    <option value="Uganda">Uganda</option>
	    <option value="Ukraine">Ukraine</option>
	    <option value="United Arab Emirates">United Arab Emirates</option>
	    <option value="United Kingdom">United Kingdom</option>
	    <option value="United States">United States</option>
	    
	    <option value="Uruguay">Uruguay</option>
	    <option value="Uzbekistan">Uzbekistan</option>
	    <option value="Vanuatu">Vanuatu</option>
	    <option value="Venezuela">Venezuela</option>
	    <option value="Vietnam">Viet Nam</option>
	    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
	    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
	    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
	    <option value="Western Sahara">Western Sahara</option>
	    <option value="Yemen">Yemen</option>
	    <option value="Yugoslavia">Yugoslavia</option>
	    <option value="Zambia">Zambia</option>
	    <option value="Zimbabwe">Zimbabwe</option>
	</select></td>
	<td align="left"><span class="span-validation-style" >*Select Country</span></td>
	
						</tr>
						<tr>						
							<td align="left">State</td>
							<td align="left"><input type="text" name="state" class="ip-tb-style" id="state" placeholder="State"/></td>
							<td align="left"><span class="span-validation-style">*Enter State</span></td>
						</tr>
						<tr>						
							<td align="left">City</td>
							<td align="left"><input type="text" name="city" class="ip-tb-style" id="city" placeholder="City"/></td>
							<td align="left"><span class="span-validation-style">*Enter City</span></td>
						</tr>
						<tr>						
							<td align="left">Pin Code</td>
							<td align="left"><input type="text" name="pincode" class="ip-tb-style" id="pin" placeholder="Pin Code"/></td>
							<td align="left"><span class="span-validation-style">*Enter Pin Code</span></td>
						</tr>
						<tr>						
							<td align="left">Phone Number</td>
							<td align="left"><input type="text" name="pno" class="ip-tb-style" id="number" placeholder="Phone Number"/></td>
							<td align="left"><span class="span-validation-style">*Enter Phone Number</span></td>
						</tr>

						
						<tr><br></tr>
						<tr>
							<td align="left">Captcha</td>
							<td align="center" class="ip-tb-style" style="background-color:lightgreen;"><span disabled="disabled" name="mainCaptcha" id="mainCaptcha" >
								
							</span>

						</td>
						<td align="left">
						<img src="Icons/Refresh_64px.png" id="refresh-image" onclick="setTimeout(Captcha,600);">
						
						</tr>
						<tr>
							<td  align="left">Enter above code</td>
							<td>
	            			<input name="captcha" placeholder="Enter Code" class="ip-tb-style" type="text" id="txtInput"/> 
	            			</td>

	          				<td><span class="span-validation-style">*Code does not match</span></td>
          				</tr>
			
							</td>
						</tr>
							<td  align="left"></td>
							<td align="left"></td>
							<td align="left"></td>
						</tr>				
						
						
							<tr>
							<td align="left"></td>
							<td align="center"><input type="reset" id="reset-button" class="reset-bt"  value="Reset"/></td>
							
										
						
						</tr>
						<tr>
						<td align="left"></td>
							<td align="center">
							<input type="submit" id="sign-up-button" class="button-bule register-bt"  value="Register"  onclick="return ValidCaptcha();"  /></td>
						</tr>
							

							</table></form>
					</div>

			</div>	
			</div>

		















</body>
</html>