<?php
// include file inc.php untuk dieksekusi
include "inc.php";
// print variabel angka dan baris
echo $angka;
echo "<br>";
// menggunakan logika if elseif untuk nilai 100 output memuaskan
if ($angka==100) {
	echo "Memuaskan";
}
// menggunakan logika if elseif untuk nilai kurang dari 100 dan lebih besar sama dengan 85 output sangat baik
elseif ($angka<100&&$angka>=85) {
	echo "Sangat Baik";
}
// menggunakan logika if elseif untuk nilai kurang dari 85 dan lebih besar sama dengan 70 output baik
elseif ($angka<85&&$angka>=70) {
	echo "Baik";
}
// menggunakan logika if elseif untuk nilai kurang dari 70 dan lebih besar sama dengan 55 output cukup
elseif ($angka<70&&$angka>=55) {
	echo "Cukup";
}
// menggunakan logika if elseif untuk nilai kurang dari 55 dan lebih besar sama dengan 0 output kurang
elseif ($angka<55&&$angka>=0) {
	echo "Kurang";
}
?>