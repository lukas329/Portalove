<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

$employee = $db->getArticle($_GET['id'])[0];
?>

<form method="post" action="update_article.php">
    Nadpis: <br>
    <input type="text" name="header" value="<?php echo $employee['nadpis']; ?>"><br>
    Fotka: <br>
    <input type="text" name="photo" value="<?php echo $employee['fotka']; ?>"><br>
    Text: <br>
    <textarea name="text"><?php echo $employee['text']; ?></textarea><br>
    <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
    <br><br>
    <input type="submit" name="submit_article" value="Update">
</form>