<!DOCTYPE html>
<html>
<head>
    <!-- title untuk memberi judul pada jendela browser -->
    <title> Biodata </title>
</head>
<body>
    <!-- menulis "biodata" dengan h1 -->
    <center><h1> BIODATA </h1></center>
    <!-- membuat form method post yang dikenai aksi selanjutnya pada tugas3act.php  -->
    <form method="POST" action="tugas3Act.php">
    <!-- membuat table  -->
    <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
            <!-- mengisi dengan nama lengkap dan memberi sel untuk input nama -->
            <td width="220"> Nama Lengkap </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <!-- mengisi dengan nama panggilan dan memberi sel untuk input nama panggilan-->
            <td width="220"> Nama Panggilan </td>
            <td><input type="text" name="panggilan"></td>
        </tr>
        <tr>
            <!-- mengisi dengan tempat dan tanggal lahir dan memberi sel untuk ttl -->
            <td width="220"> Tempat & Tanggal Lahir </td>
            <td><input type="text" name="ttl"></td>
        </tr>
        <tr>
            <!-- mengisi dengan alamat dan memberi sel untuk alamat -->
            <td width="220"> Alamat </td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <!-- mengisi dengan pekerjaan dan memberi sel untuk input pekerjaan -->
            <td width="220"> Pekerjaan </td>
            <td><input type="text" name="pekerjaan"></td>
        </tr>
        <tr>
            <!-- mengisi dengan hobi dan memberi sel untuk input hobi -->
            <td width="220"> Hobby </td>
            <td><input type="text" name="hobby"></td>
        </tr>
        <tr>
            <!-- mengisi dengan cita" dan memberi sel untuk input cita -->
            <td width="220"> Cita-cita </td>
            <td><input type="text" name="cita"></td>
        </tr>
        <tr>
            <!-- mengisi dengan nomor hp dan memberi sel untuk input nomor -->
            <td width="220"> Nomor HP </td>
            <td><input type="text" name="nomor"></td>
        </tr>
        <tr>
            <!-- mengisi dengan email dan memberi sel untuk input email -->
            <td width="220"> Email </td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>
                <!-- memberi button untuk login dan reset -->
                <input type="submit" name="btnLogin" value="Login">
                <input type="reset" name="reset" value="Reset"></td>
</body>
</html>