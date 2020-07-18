<?php
include ('koneksi.php');
?>
<html>
<head>
<body>
	<form action="login.php" method="post">
		<center>
		<center><h1>LOGIN</h1></center>
		<table border="1">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
		</center>
	</form>
</body>
</html>