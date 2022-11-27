<?php

namespace semestralna;

class db
{
    private $host;
    private $dbName;
    private $username;
    private $password;
    private $port;
    private $connection;

    public function __construct($host, $dbName, $username, $password, $port = 3306)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;

        try {
            $this->connection = new \PDO("mysql:host=$host;dbname=$dbName;port=$port", $username, $password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getIntroData(){
        $introData = [];
        $sql = "SELECT * FROM info WHERE placement='intro'";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $introData[] = [
                    'header' => $row['nadpis'],
                    'text' => $row['text'],
                    'image' => $row['fotka']
                ];
            }
            return  $introData;
        } catch (\PDOException $e) {
            return [];
        }

    }

    public function getInfodata(){
        $infoData = [];
        $sql = "SELECT * FROM info WHERE placement='info'";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $infoData[] = [
                    'header' => $row['nadpis'],
                    'text' => $row['text'],
                    'image' => $row['fotka']
                ];
            }
            return  $infoData;
        } catch (\PDOException $e) {
            return [];
        }

    }
    public function getMenu(){
        $menu = [];
        $sql = "SELECT * FROM menu";
        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $menu[] = [
                    'name' => $row['nazov'],
                    'href' => $row['href']
                ];
            }
            return  $menu;
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function getArticles(){
        $articles = [];
        $sql = "SELECT * FROM articles ORDER BY id desc LIMIT 3";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $articles[] = [
                    'header' => $row['nadpis'],
                    'text' => $row['text'],
                    'id' => $row['id'],
                    'image' => $row['fotka']
                ];
            }
            return  $articles;
        } catch (\PDOException $e) {
            return [];
        }
    }
    public function getAllArticles(){
        $articles = [];
        $sql = "SELECT * FROM articles ORDER BY id desc";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $articles[] = [
                    'header' => $row['nadpis'],
                    'text' => $row['text'],
                    'id' => $row['id'],
                    'image' => $row['fotka']
                ];
            }
            return  $articles;
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function getArticle($id){
        $article = [];
        $sql = "SELECT * FROM articles WHERE id=".$id;

        try {

            $query = $this->connection->query($sql);
            $article = $query->fetchAll(\PDO::FETCH_ASSOC);
            return  $article;

        } catch (\PDOException $e) {
            return [];
        }
    }

    public function getOutro(){
        $outro = [];
        $sql = "SELECT * FROM info WHERE placement='outro'";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $outro[] = [
                    'header' => $row['nadpis'],
                    'text' => $row['text'],
                    'image' => $row['fotka']
                ];
            }
            return  $outro;
        } catch (\PDOException $e) {
            return [];
        }
    }
    public function login($username, $password)
    {
        //$hash = sha1($password);
        $sql = "SELECT COUNT(id) AS is_admin FROM user WHERE username = '".$username."' AND password = '".$password."'";

        try {
            $query = $this->connection->query($sql);
            $userExists = $query->fetch(\PDO::FETCH_ASSOC);
            if(intval($userExists['is_admin']) === 1) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $e) {
            return false;
        }
    }
    public function insertArticle($header, $photo, $text){
        $sql = "INSERT INTO articles VALUES (null, '".$header."', '".$text."', '".$photo."')";

        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
    public function updateArticle($header, $photo, $text, $id){
        $sql = "UPDATE articles SET nadpis='".$header."', text='".$text."', fotka='".$photo."' WHERE id = ".$id;
        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
    public function deleteArticle($id){
        $sql = "DELETE FROM articles WHERE id=".$id;
        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
    public function getEmployees(){
        $sql = "SELECT e.id AS id, e.name AS name, ep.position AS position, e.about AS about, e.fotka AS image, e.youtube AS youtube, e.linkedin AS linkedin, e.twitter AS twitter FROM employees AS e INNER JOIN employee_position AS ep ON e.position_id = ep.id ORDER BY e.id asc;";
        $employees = [];
        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $employees[] = [
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'position' => $row['position'],
                    'image' => $row['image'],
                    'youtube' => $row['youtube'],
                    'linkedin' => $row['linkedin'],
                    'twitter' => $row['twitter'],
                    'about' => $row['about']
                ];
            }
            return  $employees;
        } catch (\PDOException $e) {
            return [];
        }
    }
    public function getEmployeePositions(){
        $sql = "SELECT position FROM employee_position";
        $positions = [];
        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $positions[] = [
                    'position' => $row['position']
                ];
            }
            return  $positions;
        } catch (\PDOException $e) {
            return [];
        }
    }
    public function insertEmployee($name, $position, $about, $image, $youtube, $linkedin, $twitter){

        $sql = "SELECT id FROM employee_position WHERE position='".$position."'";
        try {
            $query = $this->connection->query($sql);

            $id = $query->fetchAll(\PDO::FETCH_ASSOC);
            var_dump($id[0]['id']);
            $sql = "INSERT INTO employees VALUES (null, '".$name."', '".$id[0]['id']."', '".$about."', '".$image."', '".$youtube."', '".$linkedin."', '".$twitter."')";
            var_dump($sql);
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }

    }
}