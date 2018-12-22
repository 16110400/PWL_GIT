<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
<style type="text/css">
	.css{
		font-size: 10px;
		color: red;
		font-weight: bold;
	}
	input {
		font-size: 10px;
		color: red;	
		font-weight: bold;
	}
</style>
</head>
<body>
<form class="css" action="session.php" method="POST">
<table >
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" placeholder="Masukkan Username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="Password" name="password" placeholder="Masukkan Password"></td>
	</tr>
	<tr align="center">
		<td colspan="3"><input type="submit" name="masuk" value="Login"></td>
	</tr>
</table>
</form>
</body>
</html>