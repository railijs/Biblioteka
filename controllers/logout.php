<?php

$_SESSION["user"] = false;
session_destroy();
header("Location: /login");
die();