<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

if(
    isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true) {
    $articles = $db->getAllArticles();

    echo '
    <a href="insert_article.php"><button style="width: 150px; height: 20px">Pridať článok</button></a><br>
   <ul>
    ';
    foreach ($articles as $article) {
        echo '<li>'
            .$article['header'].
            '<br><a href="delete.php?id='.$article['id'].'">Delete</a> 
         <br><a href="update.php?id='.$article['id'].'">Update</a> 
         
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

