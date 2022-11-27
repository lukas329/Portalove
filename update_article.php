<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

if(isset($_POST['submit_article'])) {
    $update = $db->updateArticle(
        $_POST['header'],
        $_POST['photo'],
        $_POST['text'],
        $_POST['id']
    );

    if($update) {
        header('Location: admin.php');
    } else {
        echo "FATAL ERROR!!";
    }
} else {
    header('Location: admin.php');
}