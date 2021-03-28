<!DOCTYPE html>
<html>
<head>
	<!-- Title untuk memberi judul pada jendela browser -->
	<title>Pemrograman PHP dengan Array</title>
</head>
<body>
	<!-- deklarasi php -->
<?php
	// penulisan array
	$nama[] = "Hastri";
	$nama[] = "Cantya";
	$nama[] = "Danahiswari";
	// print nama dimulai dari array le 1, 2, 0
	echo $nama[1] . $nama[2] . $nama[0] ;
	// print baris baru
	echo "<br>";
	// menghitung jumlah elemen array
	$jum_array = count($nama);
	// print jumlah elemen array dan dipanggil jumlah arraynya
	echo "jumlah elemen array =" .$jum_array;
?>
</body>
</html>