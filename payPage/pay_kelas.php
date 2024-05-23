<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Detail Pembayaran</h2>
        </div>
        
        <div class="box">
            <h3>Detail Kelas</h3>
            <?php
            // Daftar harga kelas
            $harga_kelas = array(
                "Beli Kelas MPS" => array(
                    "harga" => 250000,
                    "deskripsi" => "Pada Kelas ini Anda akan mempelajari tentang penggunaan Mesin MPS(Modular Production System) Pick And Place dengan PLC SIEMENS S7300"
                ),
                "Beli Kelas Scada" => array(
                    "harga" => 275000,
                    "deskripsi" => "Pada Kelas ini Anda akan mempelajari tentang pengoperasian PLC SCADA dan HMI(Human Machine Interface) pada suatu Jaringan"
                ),
                "Beli Kelas SKT" => array(
                    "harga" => 300000,
                    "deskripsi" => "Pada kelas ini anda akan mendapat materi tentang pengkonfigurasian PLC OMRON pada kontrol suatu Motor DC menggunakan Kontaktor"
                ),
                "Beli Kelas SKEP" => array(
                    "harga" => 325000,
                    "deskripsi" => "Pada kelas ini anda akan mempelajari tentang Pneumatic meggunakan PLC SIEMENS S1200 dengan pengoperasion kompressor"
                ),
                "Beli Kelas SKEE" => array(
                    "harga" => 350000,
                    "deskripsi" => "Pada kelas ini anda akan mendapat materi tentang Mikrokontroller Seperti Arduino, NodeMCU, WeMos."
                )
            );

            // Cek apakah parameter mata_pelajaran ada di URL
            if (isset($_GET['kelas'])) {
                $pilihan_kelas = $_GET['kelas'];

                // Cek apakah mata pelajaran tersedia dalam daftar harga_kelas
                if (array_key_exists($pilihan_kelas, $harga_kelas)) {
                    $harga = $harga_kelas[$pilihan_kelas]['harga'];
                    $deskripsi = $harga_kelas[$pilihan_kelas]['deskripsi'];
                    echo "<p>Anda telah memilih untuk $pilihan_kelas.</p>";
                    echo "<p>Deskripsi Kelas:</p>";
                    echo "<p>$deskripsi</p>";
                    echo "<p>Total pembayaran: <b>Rp $harga</b></p>";
            ?>
                    <form action="proses_pembayaran.php" method="post" class="payment-form">
                        <label for="metode_pembayaran">Metode Pembayaran:</label>
                        <select name="metode_pembayaran" id="metode_pembayaran">
                            <option value="OVO">OVO</option>
                            <option value="DANA">DANA</option>
                            <option value="ShopeePay">ShopeePay</option>
                            <option value="BRI">BRI</option>
                            <option value="BCA">BCA</option>
                            <option value="BNI">BNI</option>
                            <option value="MANDIRI">MANDIRI</option>
                            <option value="Gopay">Gopay</option>
                        </select>
                        <input type="hidden" name="mata_pelajaran" value="<?php echo $pilihan_kelas; ?>">
                        <input type="hidden" name="kelas" value="<?php echo $pilihan_kelas; ?>">
                        <input type="hidden" name="harga" value="<?php echo $harga; ?>">
                        <input type="hidden" name="deskripsi" value="<?php echo $deskripsi; ?>">
                        <input type="submit" name="submit" value="Bayar">
                    </form>
            <?php
                } else {
                    echo "<p>Mata pelajaran tidak valid.</p>";
                }
            }
            ?>
        </div>
        
        <div class="back-link">
            <a href="../homePage/index.php">Kembali</a>
        </div>
    </div>
</body>
</html>
