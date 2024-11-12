<?php
function hitungHarga($hariNonton) {
$harga = 0;
if ($hariNonton == "Senin-Minggu") {
    $harga = 40000;
} elseif ($hariNonton == "Jumat") {
    $harga = 50000;
} elseif ($hariNonton == "Sabtu-Minggu") {
    $harga = 60000;
}
    return $harga;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$kodeFilm = $_POST['kode-film'];
$waktuNonton = $_POST['waktu-nonton'];
$hariNonton = $_POST['hari-nonton'];
 $jumlahBeli = intval($_POST['jumlah-beli']);
$harga = hitungHarga($hariNonton);
$namaFilm = "";
switch ($kodeFilm) {
   case "TRM":
        $namaFilm = "Transformers The Last Knight";
        break;
      case "MID":
        $namaFilm = "Mission Impossible – Dead Reckoning Part One";
            break;
      case "TMM":
         $namaFilm = "The Mummy";
         break;
        case "TWM":
        $namaFilm = "Wonder Woman";
    break;
}
 $totalBayar = $harga * $jumlahBeli;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleproses.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>Struk Pembayaran</h2>
    <p class="cinema">Cinema Bina Insani 21</p>
    <hr>
     <p><strong>Kode Film :</strong> <?php echo $kodeFilm; ?></p>
     <p><strong>Nama Film :</strong> <?php echo $namaFilm; ?></p>
     <p><strong>Harga :</strong> Rp <?php echo number_format($harga, 0, ',', '.'); ?></p>
     <p><strong>Waktu :</strong> <?php echo $waktuNonton; ?></p>
      <p><strong>Jumlah Beli :</strong> <?php echo $jumlahBeli; ?></p>
     <p><strong>Hari :</strong> <?php echo $hariNonton; ?></p>
     <p><strong>Total Bayar :</strong> Rp <?php echo number_format($totalBayar, 0, ',', '.'); ?></p>
    <hr>
    <p class="tk">Terima Kasih</p>
        <a href="index.php" class="input">Input Lagi</a>
    </div>
</body>
</html>
