<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];
$positions = $db->getEmployeePositions();

$employee = $db->getEmployee($_GET['id'])[0];
?>

<form method="post" action="employee_send_update.php">
    <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
    Meno: <br>
    <input type="text" name="name" value="<?php echo $employee['name']; ?>"><br>
    Pozícia: <br>
    <select name="position">
        <?php
        foreach ($positions as $position){
            if ($position['id'] === $employee['position_id']){
                echo '
            <option selected value="'.$position['position'].'">'.$position['position'].'</option>
            ';
            }else{
                echo '
            <option value="'.$position['position'].'">'.$position['position'].'</option>
            ';
            }

        }
        ?>
    </select>
    <br>
    Niečo o zamestnancovi: <br>
    <textarea name="about"><?php echo $employee['about']; ?></textarea><br>
    <br>
    Link na fotku: <br>
    <input type="text" name="image" value="<?php echo $employee['fotka']; ?>"><br>
    Link Youtube: <br>
    <input type="text" name="youtube" value="<?php echo $employee['youtube']; ?>"><br>
    Link LinkedIn: <br>
    <input type="text" name="linkedin" value="<?php echo $employee['linkedin']; ?>"><br>
    Link Twitter: <br>
    <input type="text" name="twitter" value="<?php echo $employee['twitter']; ?>"><br>


    <input type="submit" name="update_employee" value="Uložiť">
</form>