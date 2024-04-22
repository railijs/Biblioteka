<?php
auth();

require "Database.php";
$config = require ("config.php");
$db = new Database($config);

$query = "SELECT * FROM books";
$params = [];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $query = "INSERT INTO books (name, author, published, available)
              VALUES (:name, :author, :published, :available);";
    $params = [
        ":name" => $_POST["name"], 
        ":author" => $_POST["author"],
        ":published" => $_POST["published"],
        ":available" => $_POST["available"]
    ];

    $db -> execute($query, $params);
    
    header("Location: /books");
    die();
}

$title = "Izveido Gramatu";
require "views/books-create.view.php";