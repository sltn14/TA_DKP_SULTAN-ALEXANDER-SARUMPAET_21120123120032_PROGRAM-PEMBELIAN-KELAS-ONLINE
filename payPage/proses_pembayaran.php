<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pembayaran</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container2"> 
        <h2>Proses Pembayaran</h2>

        <?php
        class Kelas {
            private $pilihan_kelas;
            private $harga;
        
            public function setpilihanKelas($pilihan_kelas) {
                $this->pilihan_kelas = $pilihan_kelas;
            }
        
            public function getpilihanKelas() {
                return $this->pilihan_kelas;
            }
        
            public function setHarga($harga) {
                $this->harga = $harga;
            }
        
            public function getHarga() {
                return $this->harga;
            }
        }
        
        $kelas = new Kelas();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pilihan_kelas = $_POST['kelas'];
            $harga = $_POST['harga'];
            $metode_pembayaran = $_POST['metode_pembayaran'];
        
            $kelas->setpilihanKelas($pilihan_kelas);
            $kelas->setHarga($harga);

            echo "<div class='success-message'>";
            echo "Anda telah berhasil membeli kelas $pilihan_kelas dengan harga Rp $harga melalui metode pembayaran $metode_pembayaran.";
            echo "</div>";
        } else {
            echo "<p>Halaman ini tidak dapat diakses secara langsung.</p>";
        }
        
        $pilihan_kelas = $kelas->getpilihanKelas();
        $harga = $kelas->getHarga();
        
        ?>
        <a href="../homePage/index.php" class="btn-home">Beranda</a>
    </div>
</body>
</html>
