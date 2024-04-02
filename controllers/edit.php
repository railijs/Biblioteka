<?php
require "Database.php";
$config = require ("config.php");
$db = new Database($config);

$query = "SELECT * FROM books WHERE id = :id"; 
$params = [':id' => ":id"]; 
$books = $db->execute($query, $params);

$title = "Edit";

require "views/edit.view.php";