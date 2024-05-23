<?php 
session_start();

class UserSession {
    // Method untuk memeriksa apakah pengguna sudah login
    public function isUserLoggedIn() {
        return isset($_SESSION['username']);
    }

    // Method untuk mengarahkan pengguna ke halaman lain
    public function redirectTo($location) {
        header("Location: " . $location);
        exit;
    }
}

// Membuat instance dari kelas UserSession
$userSession = new UserSession();

// Memeriksa status login pengguna
if (!$userSession->isUserLoggedIn()) {
    $userSession->redirectTo('index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelas Online</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./style-profile.css">
</head>
<body>

  <!-- Profile Section -->
  <div class="profile-container">
    <img src="../Image/user.png" alt="Profile Picture" class="profile-img" id="profile-img" onclick="toggleProfile()">
    <div class="profile-dropdown" id="profileDropdown">
      <ul>
        <li><a href="./Profile/index.html">Profil Saya</a></li>
        <li><a href="../help/index.php">Bantuan</a></li>
        <li><a href="../logout.php">Keluar</a></li>
      </ul>
    </div>
  </div>

  <!-- Navigation -->
  <nav>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="../aboutPage/index.php">Tentang</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </nav>
  
  <!-- Hero Section -->
  <div class="hero">
    <h2>Belajar Electrical pada Website ini</h2>
    <p>Akses alat lengkap dan berbasis pada perangkat Industri</p>
    <a href="#features" class="btn">Mulai Belajar</a>
  </div>
  
  <!-- Features Section -->
  <div class="features" id="features">
    <h3>Pilihan Kelas</h3>
    <div class="card-container">
      <!-- Card Example -->
      <div class="card">
        <form action="../payPage/pay_kelas.php" method="GET">
          <img src="./img/mps.jpg" alt="Kelas 1" class="img">
          <h4>MPS Festo</h4>
          <p>Pada kelas ini membahas tentang <b>Pick and Place</b></p>
          <input type="submit" name="kelas" class="btn" value="Beli Kelas MPS">
        </form>
      </div>
      <div class="card">
        <form action="../payPage/pay_kelas.php" method="GET">
          <img src="./img/plcScada.jpg" alt="Kelas 2" class="img">
          <h4>SCADA & HMI</h4>
          <p>Pada kelas ini membahas tentang <b> SCADA dan HMI</b></p>
          <input type="submit" name="kelas" class="btn" value="Beli Kelas Scada">
        </form>
      </div>
      <div class="card">
        <form action="../payPage/pay_kelas.php" method="GET">
          <img src="./img/plcOmron.jpg" alt="Kelas 3" class="img">
          <h4>SKT</h4>
          <p>Pada kelas ini membahas tentang Sistem Kontrol Terprogram dengan <b>PLC OMRON</b></p>
          <input type="submit" name="kelas" class="btn" value="Beli Kelas SKT">
        </form>
      </div>
      <div class="card">
        <form action="../payPage/pay_kelas.php" method="GET"> 
          <img src="./img/plcSiemens.png" alt="Kelas 4" class="img">
          <h4>SKEP</h4>
          <p>Pada kelas ini membahas tentang Sistem Kontrol ElektroPneumatik dengan <b>PLC SIEMENS</b></p>
          <input type="submit" name="kelas" class="btn" value="Beli Kelas SKEP">
        </form>
      </div>
      <div class="card">
        <form action="../payPage/pay_kelas.php" method="GET">
          <img src="./img/arduino.jpg" alt="Kelas 5" class="img">
          <h4>SKEE</h4>
          <p>Pada kelas ini membahas tentang Sistem Kontrol Elektromekanik dan Elektronik dengan <b>mikrokontroller</b></p>
          <input type="submit" name="kelas" class="btn" value="Beli Kelas SKEE">
        </form>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  <footer>&copy; 2024 TA DKP. All rights reserved.</footer>
  
  <!-- Scripts -->
  <script src="./script.js"></script>
</body>
</html>
