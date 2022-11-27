<?php
include_once "db_connect.php";

session_destroy();

header('Location: admin.php');