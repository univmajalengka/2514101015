
<?php

// Prosedur/fungsi untuk menghitung diskon
function hitungDiskon($totalBelanja) {

    if ($totalBelanja >= 100000) {
        $diskon = $totalBelanja * 0.10;
    }
    elseif ($totalBelanja >= 50000) {
        $diskon = $totalBelanja * 0.05;
    }
    else {
        $diskon = 0;
    }

    return $diskon;
}

// Mengambil data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $totalBelanja = filter_input(
        INPUT_POST,
        "totalBelanja",
        FILTER_VALIDATE_INT
    );

    if ($totalBelanja === false || $totalBelanja === null || $totalBelanja < 0) {
        die("Input tidak valid. <a href='index.php'>Kembali</a>");
    }

    // Memanggil fungsi hitungDiskon()
    $diskon = hitungDiskon($totalBelanja);

    // Menghitung total pembayaran
    $totalBayar = $totalBelanja - $diskon;

} else {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Diskon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="card result-card">

            <div class="icon">✅</div>

            <h1>Hasil Perhitungan</h1>
            <p class="subtitle">
                Berikut rincian pembayaran belanja Anda.
            </p>

            <div class="result-box">

                <div class="result-item">
                    <span>Total Belanja</span>
                    <strong>
                        Rp <?= number_format($totalBelanja, 0, ',', '.') ?>
                    </strong>
                </div>

                <div class="result-item">
                    <span>Diskon Diperoleh</span>
                    <strong class="discount">
                        - Rp <?= number_format($diskon, 0, ',', '.') ?>
                    </strong>
                </div>

                <div class="result-item">
                    <span>Persentase Diskon</span>
                    <strong>
                        <?= $totalBelanja >= 100000 ? '10%' : ($totalBelanja >= 50000 ? '5%' : '0%') ?>
                    </strong>
                </div>

                <hr>

                <div class="total-payment">
                    <span>Total yang Harus Dibayar</span>
                    <h2>
                        Rp <?= number_format($totalBayar, 0, ',', '.') ?>
                    </h2>
                </div>

            </div>

            <a href="index.php" class="back-button">
                ← Kembali ke Halaman Utama
            </a>

        </div>

        <p class="footer">
            Program Perhitungan Diskon Belanja
        </p>
    </div>

</body>
</html>
