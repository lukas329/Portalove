<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

if(isset($_POST['update_employee'])) {
    $update = $db->updateEmployee(
        $_POST['id'],
        $_POST['name'],
        $_POST['position'],
        $_POST['about'],
        $_POST['image'],
        $_POST['youtube'],
        $_POST['linkedin'],
        $_POST['twitter']
    );
    if($update) {
        header('Location: admin.php');
    } else {
        echo "FATAL ERROR!!";
    }
} else {
    header('Location: admin.php');
}