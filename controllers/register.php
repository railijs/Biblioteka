<?php
require "Database.php";
$config = require ("config.php");
$db = new Database($config);

$query = "SELECT * FROM account";
$params = [];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["user"]) && isset($_POST["password"])) {
        $query = "INSERT INTO account (user, password)
                  VALUES (:user, :password);";

        $params = [
            ":user" => $_POST["user"], 
            ":password" => $_POST["password"]
        ];

        $db -> execute($query, $params);
        
        header("Location: /login");
        die();
    } else {
        // Handle the case where the form data is not as expected
        echo "User or password not set in the request";
    }
}

$title = "Register";
require "views/register.view.php";