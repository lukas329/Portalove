<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

if(isset($_POST['submit_message'])) {
    $insert = $db->sendMessage(
        $_POST['name'],
        $_POST['email'],
        $_POST['subject'],
        $_POST['message']
    );

    if($insert) {
        header('Location: contact.php');
    } else {
        echo "FATAL ERROR!!";
    }
}else {
    header('Location: index.php');
}
