<html>
<!DOCTYPE html>
<html>
<head>
	<!-- title untuk memberi judul pada jendela browser -->
	<title>Hasil Login</title>
</head>
<body>
	<!-- membuat h1 dengan kalimat selamat datang yang dilanjutkan dengan method post variabel nama -->
	<center><h1>Selamat Datang, <?php echo $_POST['nama']; ?></h1></center>
	<!-- print nama dan email dengan method post, membuat default waktu jakarta dengan menampilkan hari, tanggal, dan jam -->
<?php
	echo "<center> Nama :".$_POST['nama']."</center><br>";
	echo "<center> Email :".$_POST['email']."</center><br>";
	date_default_timezone_set("Asia/Jakarta");
	echo "<center>Login Pada ".date("l, d-m-y G:i:s"."</center>");
	?>
</body>
</html>