<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

if(
    isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true) {
    $articles = $db->getAllArticles();

    echo '<a href="insert_article.php">Insert Article</a><br>
          <a href="insert_employees.php">Insert Employee</a><br>
          <a href="index.php">Web page</a><br>
          <a href="logout.php">Logout</a><br';

    echo "<ul>";

    foreach ($articles as $article) {
        echo '<li>'
            .$article['header'].
            '<br><a href="delete.php?id='.$article['id'].'">Delete</a> 
         <br><a href="update.php?id='.$article['id'].'">Update</a> 
        </li>';
    }
    echo "</ul>";
} else {
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