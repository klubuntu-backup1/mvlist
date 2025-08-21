<?php

function sendWebhook($msg) {
    $webhookUrl = "https://discord.com/api/webhooks/1219410114898038894/rDvsFL6B27JHj_sakf91AeipFr8cqmoAGza6sygRodFwTkm1VYMwKQ0moLoOD5ujxTr2";
    $message = array('content' => $msg);
    $jsonData = json_encode($message);
    $ch = curl_init($webhookUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);
    echo $response;
}


?>
