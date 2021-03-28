<?php
// set cookie ini variable cookies dengan waktu 60
setcookie("variable_cookies","ini adalah variable cookies",time()+60);
// print cek cookies yang ketika diklik menuju cekcookies.php
echo "<a href=cekcookies.php>Cek Cookies</a>"
?>