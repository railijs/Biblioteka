<?php

function dd($data) {
echo "<pre>";
var_dump($data);
echo "</pre>";
die();
}

function auth() {
    if (!isset($_SESSION["user"])) {
        header("Location: /books");
        die();
    }
}

function guest() {
    if (isset($_SESSION["user"])) {
        header("Location: /");
        die();
    }

}

function admin(){
if($_SESSION['admin'] == 1) {
    header("Location: /books");
    die();
   }
}