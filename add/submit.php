<?php
session_start();

if (isset($_SESSION["csrf_token"]) && $_SESSION["csrf_token"]) {
    echo "Form submited, please wait for moderation action.";
    echo "<br><i>Redirect to main page after 15 sec</i>";
    echo "<script>alert('Form submited, please wait for moderation action.')</script>";
    include("../db/sqlController.php");
    include("../db/webhookNotify.php");
    $srvIP = $_POST["server_ip"];
    $srvNote = $_POST["server_desc"];
    $sqlController = new $sqlController();
    $sqlController->add_server($srvIP,$srvIP,$srvNote,"unknown");
    sendWebhook("### New Server to Verify \n**IP: $srvIP**\n*Note: $srvNote*");
    // session_destroy();
    sleep(4);
    header("Location: /mvlist");
}
else{
    echo "failed";
}