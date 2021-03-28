<!DOCTYPE html>
<html>
<head>
	<!-- title untuk memberi judul pada jendela browser -->
	<title>Konversi Tipe</title>
</head>
<body>
	<!--deklarasi php  -->
<?php
	// memberi variabel baru bernama a beserta isi variabel
	$a = 300.4;
	// print nilai variabel a
	echo $a;
	// print baris baru
	echo "<br>";
	// print tipe double yang dikonversi tipe datanya menjadi double dan beri baris baru
	echo "tipe double :", doubleval($a), "<br>";
	// print tipe double yang dikonversi tipe datanya menjadi integer dan beri baris baru
	echo "tipe integer :", intval($a), "<br>";
	// print tipe double yang dikonversi tipe datanya menjadi string 
	echo "tipe string :", strval($a) ;
?>
</body>
</html>