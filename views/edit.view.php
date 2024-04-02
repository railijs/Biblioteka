<?php require "components/heads.php" ?>
<?php require "components/navbar.php" ?>

<h1>Edit</h1>


<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Published</th>
        <th>availale</th>
    </tr>
<?php foreach($books as $book) { ?>
<tr>
  <td> <?= $book["name"] ?> </td>
  <td> <?= $book["author"] ?></td>
  <td> <?= $book["published"] ?></td>
  <td> <?= $book["available"] ?> </td>
</tr>
<?php } ?>
</table>
<?php require "components/footer.php" ?>