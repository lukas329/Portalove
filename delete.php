<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

if (isset($_GET['id'])) {
    $delete = $db->deleteArticle($_GET['id']);

    if ($delete) {
        header('Location: admin.php');
    } else {
        echo "FATAL ERROR!!";
    }
} else {
    header('Location: admin.php');
}
?>
