<?php require "components/heads.php" ?>
<?php require "components/navbar.php" ?>


<h1><?= htmlspecialchars($book["name"]) ?></h1>

<a href="/edit?id=<?=$book["id"]?>">Edit Book</a>

<?php require "components/footer.php" ?>