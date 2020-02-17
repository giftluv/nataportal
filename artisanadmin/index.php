<?php
include"connection.php";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style >
	input[type=text]
	{
		height: 26;
		width:  250px;
	}
	input[type=submit]
	{
		height:  39;
		width:  120px;
		background: #ff9800;
		color: white; 
		text-decoration: none;
		border: none;
		font-size 23px;
	}
	
</style>

</head>

<body bgcolor="#ff5722">
	<br><br><br><br><br><br><br><br>
	<form action="loginForm.php" method="post">
		<table  align="center" cellpadding="10" cellpadding="10" bordercolor='#FFFFFF' bgcolor='#90ee90' border="10">
       
			<tr>
				<th colspan="6" align="center" style="background:#90ee90;color: white"><h1>Admin Login </h1>
                 </th>
				</tr>
				<tr>
					<th align="right">Username:</th>
					<td><input type="text" name="username" required placeholder="Username"></td>
				</tr>
				<tr>
					<th align="right">Password:</th>
					<td><input type="password" name="password" required placeholder="Password"></td>
				</tr>
                <tr>
                	<td colspan="2" align="center">
                		<input type="submit" value="log in" name="submit">
                		
                	</td>

				</table>
			</form>
		</body>
		</html>
