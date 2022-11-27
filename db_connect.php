<?php
include_once "db.php";

use semestralna\db;

$db = new DB("localhost", "itProjekt", "root", "", 3308);

global $db;

session_start();