<!DOCTYPE HTML>  
<html>
<head>
    <!-- title untuk memberi judul pada jendela browser -->
    <title>Form Login</title>
</head>
<body>  
    <!-- memberi tulisan dengan h1 "login" -->
    <center><h1>LOGIN</h1></center>
    <!-- membuat form dengan method post yang diberi action selanjutnya setelah submit ke tugas1include.php -->
    <form method="post" action="tugas1include.php">
        <!-- memberi inputan nama -->
    	<center>Nama: <input type="text" name="nama"></center> <br>
        <!-- memberi inputan email -->
        <center>E-mail: <input type="text" name="email"></center>
        <!-- membuat baris baru -->
    	<br><br>
        <!-- memberi input secara tersembunyi untuk tanggal -->
        <input type="hidden" name="tanggal" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('l, d-m-Y H:i:s');?>">
        <!-- memberi input untuk login -->
    	<center><input type="submit" name="Submit" value="Login"></center>  
</form>
    <!-- memanggil variabel name email tanggal yang dikenakan method post untuk dimunculkan -->
    <?php
    $name = "";
    $email = "";
    $tanggal = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["nama"];
        $email = $_POST["email"];
        $tanggal = $_POST["tanggal"];
    }
    ?>
</body>
</html>