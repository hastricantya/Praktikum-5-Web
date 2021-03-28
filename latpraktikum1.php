<!DOCTYPE html>
<html>
<head>
	<!-- Title untuk memberi judul pada jendela browser -->
	<title>Variabel</title>
</head>
<body>
	<!-- deklarasi php  -->
<?php 
	// inisialisasi variabel dan nilainya lalu diberi operator untuk menghasilkan suatu nilai
	$nilai_1 = 10;
	$nilai_2 = 3;
	$nilai_3 = 2 * $nilai_1 + 8 * $nilai_2;
	// print hasil aritmatika variabel nilai_3
	echo "nilai = ", $nilai_3;
	// membuat baris baru
	echo "<br>";
	// inisialisasi variabel dan diberi operator untuk menghitung variabel nilai_1 + nilai_2
	$jumlah = $nilai_1 + $nilai_2;
	// print yang dituliskan pada echo
	echo "Hasil dari $nilai_1 + $nilai_2 adalah : $jumlah";
	echo "\" Nama : Hastri Cantya Danahiswari\" <br>";
	echo "NPM : 1908201056";
?>
</body>
</html>