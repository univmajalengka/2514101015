
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Diskon Belanja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="card">

            <div class="icon">🛍️</div>

            <h1>Kalkulator Diskon</h1>
            <p class="subtitle">
                Hitung diskon belanja Anda dengan mudah!
            </p>

            <form action="proses.php" method="POST">

                <label for="totalBelanja">
                    Total Belanja (Rp)
                </label>

                <input
                    type="number"
                    name="totalBelanja"
                    id="totalBelanja"
                    placeholder="Contoh: 150000"
                    min="0"
                    step="1"
                    required
                >

                <button type="submit">
                    Hitung Diskon
                </button>

            </form>

            <div class="info">
                <h3>Ketentuan Diskon</h3>

                <div class="discount-item">
                    <span>Belanja ≥ Rp100.000</span>
                    <strong>10%</strong>
                </div>

                <div class="discount-item">
                    <span>Belanja ≥ Rp50.000</span>
                    <strong>5%</strong>
                </div>

                <div class="discount-item">
                    <span>Belanja < Rp50.000</span>
                    <strong>0%</strong>
                </div>
            </div>

        </div>

        <p class="footer">
            Program Perhitungan Diskon Belanja
        </p>
    </div>

</body>
</html>
