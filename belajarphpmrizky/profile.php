<?php
$Nama = "Rizky MPH";
$Umur = "17";
$Tinggi = "170";
$Sekolah = "SMK Negeri 2 Bandung";
$Cita_cita = "Masuk Surga";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Siswa</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="profile-body">
    <div class="info-card">
        <div class="info-card-content">
            <div class="deskripsi">
                <h2>Profil Siswa</h2>
                <?php
                echo "<p>Nama: $Nama</p>";
                echo "<p>Umur: $Umur tahun</p>";
                echo "<p>Tinggi: $Tinggi</p>";
                echo "<p>Asal Sekolah: $Sekolah</p>";
                echo "<p>Cita-cita: $Cita_cita</p>";
                ?>
            </div>
        </div>
    </div>
</body>

</html>
