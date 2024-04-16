<?php require "components/heads.php" ?>
<?php require "components/navbar.php" ?>

<h1>Login</h1>

<form method="POST">
    <label style="color: white;">Username:
        <input name="user"/>
    </label>
    <br/>
    <label style="color: white;">Password:
        <input name="password"/>
    </label>
    <button>Login</button>
</form>

<?php require "components/footer.php" ?>