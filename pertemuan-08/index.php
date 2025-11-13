<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])):
  $sesnama = $_SESSION["sesnama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
      &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="about">
      <?php
      $nim = 2511500014;
      $NIM = '2511500014';
      $nama = "Sachio Arawasu Naoko";
      $Nama = 'Sachio Arawasu Naoko';
      $tempat = "Pangkalpinang";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $NIM;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $Nama;
        ?> &#128526;
      </p>
      <label for="NIM"><span>NIM : </span>
          <input type="text" id="NIM" name="NIM" placeholder="Masukan NIM" required autocomplete="NIM">
        </label>
      <label for="Nama"><span>Nama : </span>
          <input type="text" id="Nama" name="Nama" placeholder="Masukan Nama" required autocomplete="Nama">
        </label>
      <label for="Tempat lahir"><span>Tempat Lahir : </span>
          <input type="text" id="TempatLahir" name="TempatLahir" placeholder="Masukan Tempat Lahir" required autocomplete="">
        </label>
      <label for="Tanggal lahir"><span>Tanggal Lahir : </span>
          <input type="text" id="TanggalLahir" name="TanggalLahir" placeholder="Masukan Tanggal Lahir" required autocomplete="bday">
        </label>
      <label for="Hobi"><span>Hobi : </span>
          <input type="text" id="Hobi" name="Hobi" placeholder="Masukan Hobi" required autocomplete="Hobbi">
        </label>
      <label for="Pasangan"><span>Pasangan : </span>
          <input type="text" id="Pasangan" name="Pasangan" placeholder="Masukan Pasangan" required autocomplete="">
      
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2024 Sachio Arawasu Naoko [2511500014]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>