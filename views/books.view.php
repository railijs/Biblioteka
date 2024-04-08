<?php require "components/heads.php" ?>
<?php require "components/navbar.php" ?>

<h1>Books</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Published</th>
        <th>availale</th>
    </tr>
<?php foreach($books as $book) { ?>
<tr>
<td> <a class="show" href="/show?id=<?=$book["id"]?>"> <?= htmlspecialchars($book["name"]) ?> <a/> </td>

  
  <td> <?= $book["author"] ?></td>
  <td> <?= $book["published"] ?></td>
  <td> <?= $book["available"] ?> </td>
  <td>
  <form class="delete-form" method="POST" action="/delete"><button class="delete-button" name="id" value="<?= $book["id"] ?>" >Delete</button></form>    </form>
  </td>
</tr>
<?php } ?>
</table>


<?php require "components/footer.php" ?>



