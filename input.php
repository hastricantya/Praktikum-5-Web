<!DOCTYPE html>
<html>
<head>
	<!-- title untuk memberi judul pada jendela browser -->
	<title>Input</title>
</head>
<body>
	<!-- menggunakan method post yang dikenai aksi selanjutnya ke hasilkirim.php -->
	<form method="POST" action="hasilkirim.php">
	<!-- membuat table -->
	<table width="400" align="center" cellpadding="2" cellspacing="2">
		<tr>
			<!-- mengisi sel dengan nama dan membuat input untuk nama -->
			<td width="130">Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<!-- membuat input untuk button kirim dan reset -->
			<td colspan="2" align="center">
				<input type="submit" name="btnlogin" value="kirim">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>
</form>
</body>
</html>