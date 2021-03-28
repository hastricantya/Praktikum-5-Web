<!DOCTYPE html>
<html>
<head>
	<!-- Title untuk memberi judul jendela browser -->
	<title>Post Variabel</title>
</head>
<body>
	<!-- membuat method get yang selanjutnya dikenai getact.php -->
	<form method="GET" action="getAct.php">
	<!-- membuat table -->
	<table width="400" align="center" cellpadding="2" cellspacing="2">
		<!-- mengisi sel dengan nama dan membuat input untuk nama -->
		<tr>
			<td width="130">Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<!-- mengisi sel dengan nama dan membuat input untuk email -->
		<tr>
			<td width="130">Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<!-- membuat input untuk button login dan reset -->
		<tr>	
		<td>
			<input type="submit" name="btnlogin" value="Login">
			<input type="reset" name="reset" value="Reset">
		</td>
		</tr>
	</table>	
	</form>
</body>
</html>