<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>
    <!-- Memberi tulisan selamat datang dengan h1 center  -->
    <center><h1>Selamat Datang! Silahkan Login</h1></center>
    <!-- Menggunakan method post yang selanjutnya diberikan action ke tugas2hasilkirim.php -->
    <form method="post" action="tugas2hasilkirim.php" >
        <!-- membuat input untuk nama dan email lalu membuat button login -->
    	<center>Nama:</center><center><input type="text" name="nama" ></center> 
        <br>
        <center>E-mail:</center> <center><input type="text" name="email"></center>
    	<br><br>
    	<center><input type="submit" name="Submit" value="Login"></center>  
    </form>
    <!-- memanggil variabel name, email, tanggal -->
    <?php
    $name = "";
    $email = "";
    $tanggal = "";
    // <!-- memanggil variabel name email tanggal yang dikenakan method post untuk dimunculkan -->
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["nama"];
        $email = $_POST["email"];
        $tanggal = $_POST["tanggal"];
        echo "<h2>Hasil:</h2>";
	    echo "Nama : ".$name;
        echo "<br>";
        echo "E-mail : ".$email;
        echo "<br>";
        echo "Tanggal Sekarang : ".$tanggal;
    }
    ?>
</body>
</html>