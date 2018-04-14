<!DOCTYPE html>
<html>
<head>
	<title>Contact-Us</title>
	<?php include"includes/components/head.php";?>
	<style >
		body{
			color: black;
			margin-top: 165px;
			background-color: skyblue;

		}
		h1{
			color: black;
		}
		
	</style>
</head>

<body>
	<div class="header-wrapper">
		<?php include"includes/components/header.php";?>
	</div>
	<?php include"includes/components/main-nav.php";?>
	<?php include"includes/components/login.php";?>

		<h1>User Registration</h1>
		<div>
			<form>
				<fieldset>
					<legend>Personal Data</legend>
							<table>
								<tr>
									<td><label for="f_name">First Name  </label></td>
									<td> : <input id="f_name" type="text" name="f_name"></td>
								</tr>
								<tr>
									<td><label for="l_name">Last Name  </label></td>
									<td> : <input id="l_name" type="text" name="l_name"></td>
								</tr>
								
								<tr>
									<td><label>Gender  </label></td>
									<td> : <input type="radio" checked name="gender" id="male">
										<label for="male">Male</label>
										<input type="radio" name="gender" id="female">
										<label for="female">Female</label>
									</td>
								</tr>
								<tr>
									<td><label for="dob">Date Of Birth  </label></td>
									<td> : <input type="text" name="dob" id="dob" maxlength="10" size="10" placeholder="DD/MM/YYYY"></td>
								</tr>
									<tr>
										<td><label for="address_line1">Street Line 1  </label></td>
										<td> : <input type="text" id="address_line1" name="address_line1"></td>
									</tr>
									<tr>
										<td><label for="address_line2">Street Line 2  </label></td>
										<td> : <input type="text" id="address_line2" name="address_line2"></td>
									</tr>
									<tr>
										<td><label for="city">City  </label></td>
										<td> :
											<select>
												<optgroup label="Western Province">
													<option>Colombo</option>
													<option selected="Kaluthara">Kaluthara</option>
													<option>Gampaha</option>
												</optgroup>
												<optgroup label="Southern Province">
													<option>Galle</option>
													<option>Matara</option>
													<option disabled="Hambanthota">Hambanthota</option>
												</optgroup>
											</select> 
											
										</td>
									</tr>
									<tr>
										<td><label for="postal_code">Postal Code  </label></td>
										<td> : <input type="text" id="postal_code" maxlength="6" name="postal_code"></td>
									</tr>
									<tr>
										<td><label>Country </label></td>
										<td> : 
											<select>
													<option>Sri lanka</option>
													<option>India</option>
											</select>
										</td>
									</tr>
							</table>
				</fieldset>
				<fieldset>
					<legend>Contact Details</legend>
							<table>
									<tr>
										<td><label for="email">Email Address  </label></td>
										<td> : <input type="email" id="email" placeholder="@" name="email"></td>
									</tr>
									<tr>
										<td><label for="twitter">Twitter : </label></td>
										<td> : <input type="text" id="twitter" name="twitter"></td>
									</tr>
									<tr>
										<td><label for="mobile">Mobile </label></td>
										<td> : <input type="text" id="mobile" name="mobile" maxlength="11"></td>
									</tr>
									<tr>
										<td><label for="phone">Fixed Line </label></td>
										<td> : <input type="text" id="phone" name="phone" maxlength="11"></td>
									</tr>
									<tr>
										<td><label for="fax">Fax </label></td>
										<td> : <input type="text" id="fax" name="fax" maxlength="11"></td>
									</tr>
									<tr>
										<td><label>Contact preferences </label></td>
										<td> : 
											<input type="checkbox" name="contact_preferences">
											<label>Mobile</label>

											<input type="checkbox" name="contact_preferences">
											<label>Fixed Phone</label>

											<input type="checkbox" name="contact_preferences">
											<label>Email</label>

											<input type="checkbox" name="contact_preferences">
											<label>Twitter</label>
										</td>
									</tr>
									<tr>
										
										<td>
											<input type="submit" value="Submit" name="submit">
											<input type="reset" value="Clear All" name="cansel">
										</td>
									</tr>
							</table>
				</fieldset>
									
							
			
						
			</form>
		</div>
		
		
		<?php include"includes/components/footer.php";?>
		<script>
			$(function(){
				$("#dob").datepicker({
					changeMonth: true,
					changeYear: true,
					yearRange: "1980:2009",
					dateFormat:"dd-mm-yy"
				});
			})

		</script>
</body>
</html>