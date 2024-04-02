<?php require "components/heads.php" ?>
<?php require "components/navbar.php" ?>


<h1>Izveido Gramatu</h1>

<form method="POST">
    <label style="color: white;">Title:
        <input name="name"/>
    </label>
    <br/>
    <label style="color: white;">Author:
        <input name="author"/>
    </label>
    <br/>
    <label style="color: white;">Published:
        <input type="date" name="published"/>
    </label>
    <br/>
    <label style="color: white;">Available:
        <input name="available"/>
    </label>
    <button>Save</button>
</form>



<?php require "components/footer.php" ?>