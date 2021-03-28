<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<!-- memberi kalimat dengan h1  -->
	<center><h1>Data Diri</h1></center>
<?php
	// menggunakan logika if else untuk per isi biodata diarahkan ke tugas3kosong.php
	if (empty($_POST['nama'])) {
		header("Location:tugas3kosong.php");
	} elseif (empty($_POST['panggilan'])) {
		header("Location:tugas3kosong.php");
	} elseif (empty($_POST['ttl'])) {
		header("Location:tugas3kosong.php");
	} elseif (empty($_POST['alamat'])) {
		header("Location:tugas3kosong.php");	
	} elseif (empty($_POST['pekerjaan'])) {
		header("Location:tugas3kosong.php");
	} elseif (empty($_POST['hobby'])) {
		header("Location:tugas3kosong.php");
	} elseif (empty($_POST['cita'])) {
		header("Location:tugas3kosong.php");
	} elseif (empty($_POST['nomor'])) {
		header("Location:tugas3kosong.php");
	} elseif (empty($_POST['email'])) {
		header("Location:tugas3kosong.php");						
	} else {
	 //print sesuai isi biodata dilanjutkan dengan method post yang diisi yang diisi oleh user 
	echo "<center> Nama :".$_POST['nama']."</center><br>";
	echo "<center> Nama Panggilan :".$_POST['panggilan']."</center><br>";
	echo "<center> Tempat Tanggal Lahir :".$_POST['ttl']."</center><br>";
	echo "<center> Alamat :".$_POST['alamat']."</center><br>";
	echo "<center> Pekerjaan :".$_POST['pekerjaan']."</center><br>";
	echo "<center> Hobi :".$_POST['hobby']."</center><br>";
	echo "<center> Cita - Cita :".$_POST['cita']."</center><br>";
	echo "<center> Nomor HP :".$_POST['nomor']."</center><br>";
	echo "<center> Alamat E-mail :".$_POST['email']."</center><br>";						
	date_default_timezone_set("Asia/Jakarta");
	echo "<center>Login pada ".date("D, d F Y G:i:s"."</center>");
}
?>
</body>
</html>