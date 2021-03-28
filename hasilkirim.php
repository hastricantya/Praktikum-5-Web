<?php
// menggunakan logika if else memanggil variabel nama dengan merhod post yang selanjutnya jika bernilai true redirect ke kosong.php
if (empty($_POST['nama'])) {
	header("Location:kosong.php");
}
// menggunakan logika if else dengan print nama dan memanggil post variabel nama
else{
	echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>