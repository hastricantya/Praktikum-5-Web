<!-- menggunakan logika if else untuk per isi nama dan email yang diarahkan ke tugas2kosong.php selain itu include ke tugas2isi.php -->
<?php
if (empty($_POST['nama'])) {
	header("Location:tugas2kosong.php");
} 
elseif (empty($_POST['email'])) {
	header("Location:tugas2kosong.php");
} else {
	include "tugas2isi.php";
}
?>