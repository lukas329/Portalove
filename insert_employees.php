<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];
$positions = $db->getEmployeePositions();
?>

<form method="post" action="insert.php">
    Meno: <br>
    <input type="text" name="name" value=""><br>
    Pozícia: <br>
    <select name="position">
        <?php
        foreach ($positions as $position){
            echo '
            <option value="'.$position['position'].'">'.$position['position'].'</option>
            ';
        }
        ?>
    </select>
    <br>
    Niečo o zamestnancovi: <br>
    <textarea name="about"></textarea><br>
    <br>
    Link na fotku: <br>
    <input type="text" name="image" value=""><br>
    Link Youtube: <br>
    <input type="text" name="youtube" value=""><br>
    Link LinkedIn: <br>
    <input type="text" name="linkedin" value=""><br>
    Link Twitter: <br>
    <input type="text" name="twitter" value=""><br>


    <input type="submit" name="submit_employee" value="Insert">
</form>