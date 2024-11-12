<!-- Nama    : Riyanto Pebrian
NIM     : 2023310044
Kelas   : TI23B
MatKul  : Pemrogramman Web Dasar (PWD) -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
<div  class="container" >
  <form action="prosesindex.php" method="post" >
      <h1>Cinemas Bina Insani</h1>
      <label for="kode-film">Kode Tiket Film</label>
      <select name="kode-film" id="kode-film" required >
        <option value="">Silakan Pilih Film</option>
        <option value="TRM">Transformers The Last Knight</option>
        <option value="MID">Mission Impossible – Dead Reckoning Part One</option>
        <option value="TMM">The Mummy</option>
        <option value="TWM">Wonder Woman</option>
      </select>
    <label>Waktu Nonton</label>
  <div >
    <input type="radio" name="waktu-nonton" value="12.30" required> 12.30
    <input type="radio" name="waktu-nonton" value="13.15"> 13.15
    <input type="radio" name="waktu-nonton" value="16.15"> 16.15
    <input type="radio" name="waktu-nonton" value="18.15"> 18.15
  </div>
<label for="hari-nonton">Hari Mau Nonton</label>
<select name="hari-nonton" id="hari-nonton" required>
      <option value="">Silahkan Pilih Hari Apa</option>
      <option value="Senin-Minggu">Senin - Minggu</option>
      <option value="Jumat">Jumat</option>
      <option  value="Sabtu-Minggu">Sabtu - Minggu</option>
  </select>
<label for="jumlah-beli">Jumlah Beli Tiket</label>
<input type="number" id="jumlah-beli" name="jumlah-beli" min="1" required >
<button type="submit">Simpan</button>
<button type="reset">Batal</button>
    </form>
    <hr>
    <div class="img">
  <img src="./img/image1.png" alt=""image1-removebg-preview>
</div>
  </div>
</body>
</html>