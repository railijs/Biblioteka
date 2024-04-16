<?php require "components/heads.php" ?>
<?php require "components/navbar.php" ?>

<h1>Register</h1>

<form action="/register" method="POST">
    <label style="color: white;">Username:
        <input name="user"/>
    </label>

    <br/>
    
    <label style="color: white;">Password:
        <input name="password"/>
    </label>
    <button>Register</button>
</form>

<?php require "components/footer.php" ?>