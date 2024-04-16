<?php require "views/components/heads.php" ?>
<?php require "views/components/navbar.php" ?>


<h1>Edit <?= htmlspecialchars($book["name"]) ?></h1>

<form method="POST">
    <input name="id" value=" <?= $book["id"] ?>" type="hidden" />
    <label style="color: white;">Nosaukums:
        <input name="name" value="<?= $_POST["name"] ?? $book["name"] ?>"/>
        <?php if (isset($errors["name"])) { ?>
            <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
    </label>

    <br/>

    <label style="color: white;">Published:
        <input type="date" name="published" value="<?= $_POST["published"] ?? $book["published"] ?>"/>
        <?php if (isset($errors["published"])) { ?>
            <p class="invalid-data"><?= $errors["published"] ?></p>
            <?php } ?>
    </label>

    <br/>

    <label style="color: white;">Author:
        <input name="author" value="<?= $_POST["author"] ?? $book["author"] ?>"/>
        <?php if (isset($errors["author"])) { ?>
            <p class="invalid-data"><?= $errors["author"] ?></p>
            <?php } ?>
    </label>

    <br/>

    <label style="color: white;">Available:
        <input name="available" value="<?= $_POST["available"] ?? $book["available"] ?>"/>
        <?php if (isset($errors["available"])) { ?>
            <p class="invalid-data"><?= $errors["available"] ?></p>
            <?php } ?>
    </label>
    
    <button>Save</button>
</form>