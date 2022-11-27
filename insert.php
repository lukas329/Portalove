<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

if(isset($_POST['submit_article'])) {
    $insert = $db->insertArticle(
        $_POST['article_header'],
        $_POST['article_photo'],
        $_POST['article_text']
    );

    if($insert) {
        header('Location: admin.php');
    } else {
        echo "FATAL ERROR!!";
    }
}elseif (isset($_POST['submit_employee'])){
    $insert = $db->insertEmployee(
        $_POST['name'],
        $_POST['position'],
        $_POST['about'],
        $_POST['image'],
        $_POST['youtube'],
        $_POST['linkedin'],
        $_POST['twitter']
    );

    if($insert) {
        header('Location: admin.php');
    } else {
        echo "FATAL ERROR!!";
    }
} else {
    header('Location: admin.php');
}