<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

if(
    isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true) {
    $employees = $db->getEmployees();

    echo '
    <a href="insert_employees.php"><button style="width: 150px; height: 20px">Pridať zamestnanca</button></a><br>
    <a href="insert_employees_position.php"><button style="width: 150px; height: 20px">Pridať pozíciu</button></a><br>
   <ul>
    ';
    foreach ($employees as $employee) {
        echo '<li>'
            .$employee['name'].
            '<br><a href="delete_employee.php?id='.$employee['id'].'">Delete</a> 
         <br><a href="update_employee.php?id='.$employee['id'].'">Update</a> 
         
        </li><br>';
    }
    echo "</ul>";
}else {
    ?>
    <form method="post" action="login.php">
        Username: <br>
        <input name="username" type="text" placeholder="Username"><br>
        Password: <br>
        <input name="password" type="password"><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <?php
}
?>