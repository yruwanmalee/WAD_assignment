<!-- |LOGIN PAGE| -->

<?php include("../includes/header.php") ?>
<?php include("../includes/navigations/nav_active_login.php") ?>

<div class="col-b-1">
	<div class="col-c-2-l" >
		
		<div class="col-c-3">
			<h3> Login here </h3>
			<form method="post" action="../php/login.php">
				<table>
					<tr>
						<td>Login:</td>
						<td><input type="text" name="un"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pw"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Login" name="lg"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	
	<div class="col-c-2-l">
		<div class="col-c-3">
			<h3> Sign up here </h3>
			<table border="0">
				<form action="../php/signup.php" method="post">
				<tr>
					<td> User Name: </td>
					<td> <input required type="text" name="un" /> </td>
				</tr>
				<tr>	
					<td> Password: </td>
					<td> <input required type="password" name="pw" /> </td>
				</tr>
				<tr>
					<td> First Name: </td>
					<td> <input required type="text" name="fn" /> </td>
				</tr>
				<tr>
					<td> Last Name: </td>
					<td> <input required type="text" name="ln" /> </td>
				</tr>
				<tr>
					<td> Contact No: </td>
					<td> <input required type="text" name="tele" /> </td>
				</tr>
				<tr>
					<td> E-mail: </td>
					<td> <input required type="text" name="email" /> </td>
				</tr>
				<tr>
					<td></td>
					<td> <input type="submit" name="su" value="Sign Up"/></td>
				</tr>
				</form>
			</table>
		</div>	
	</div>
</div>


<?php include("../includes/footer.php") ?>	
		
