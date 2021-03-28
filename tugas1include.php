<html>
<!DOCTYPE html>
<html>
<head>
	<!-- Title Untuk Memberi Judul Pada Jendela Browser -->
	<title>Include Tugas 1</title>
</head>
<body>
	<!-- h1 untuk memberi kalimat selamat datang yang dilanjutkan nama yang diisikan user -->
	<!-- print nama dengan method post nama -->
	<!-- print email dengan method post email -->	
	<!-- untuk mengubah timezone -->	
	<!-- print login pada yang dilanjutkan dengan tanggal yang dideklarasikan -->
	<center><h1>Selamat Datang, <?php echo $_POST['nama']; ?></h1></center>
	<?php
	echo "<center> Nama :".$_POST['nama']."</center><br>";
	echo "<center> Email :".$_POST['email']."</center><br>";
	date_default_timezone_set("Asia/Jakarta");
	echo "<center>Login Pada ".date("l, d-m-y G:i:s"."</center>");
	?>
</body>
</html>