<?php
require "Database.php";
$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["user"]) && isset($_POST["password"])) {
        $query = "SELECT * FROM account WHERE user = :user AND password = :password";

        $params = [
            ":user" => $_POST["user"], 
            ":password" => $_POST["password"]
        ];

        $result = $db -> execute($query, $params) -> fetch();
        if($result) {
            $_SESSION["user"] = true;
            $_SESSION["username"] = $_POST["user"];
            header("Location: /books");

        } else {
           
            header("Location: /register");
           
        }
        die();
    }
}

       

$title = "login";
require "views/login.view.php";
?>