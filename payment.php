<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | SAHABAT KARIR</title>

    <!-- --------------- icon website --------------- -->
    <link rel="shortcut icon" href="assets/img/icon/logo-sk.png">

    <!-- --------------- css --------------- -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/payment.css">
</head>

<body>
    <header>
        <div class="sahabat-karir-logo">
            <img src="assets/img/icon/logo-sk.png" alt="sahabat karir">
            <h2>SAHABAT KARIR</h2>
        </div>
    </header>


    <!-- // ! TESTING ! -->
    <?php

    if (isset($_POST['kirim'])) {
        echo '<br><br><br><br><br><br><br><br><br><br>';
        var_dump($_POST);
        echo '<br><br><br><br><br><br><br><br><br><br>';
    }

    ?>


    <form action="" id="payment" method="POST">
        <div class="list-kelas">
            <div class="checkout">
                <h1>Checkout</h1>
            </div>

            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="kelas">
                    <img src="" alt="" class="icon__kelas">

                    <div class="paket">
                        <p class="nama-kelas"></p>

                        <span class="jenis-harga">
                            <p class="jenis">Paket Kilat</p>
                            <p class="harga">129.900</p>
                        </span>

                        <span>
                            <input type="checkbox" checked name="paket<?= $i ?>" value="129.900">
                        </span>
                    </div>
                </div>
            <?php endfor ?>

            <div class="total">
                <h1>Sub Total</h1>
                <p class="total"></p>
            </div>
        </div>

        <div class="pembayaran">
            <h1>Ringkasan Belanja</h1>

            <div class="ringkasan">
                <div class="total">
                    <span>
                        <p>Total Harga</p>
                        <p class="total"></p>
                    </span>
                    <span>
                        <p>Biaya Admin</p>
                        <p>Rp. 3000</p>
                    </span>
                </div>
            </div>

            <button type="submit" name="kirim">Pilih Pembayaran</button>
        </div>
    </form>



    <!-- --------------- js --------------- -->
    <script src="assets/js/payment.js"></script>
</body>

</html>