<?php include ('View/header.php'); ?>
<h2>Creez votre article</h2>
<div class="container">
<form action="index.php?action=addArticle" method="post">
    <h3>Title:</h3>
    <input type="text" name="title">
    <h3>Linked image:</h3>
    <input type="text" name="linked_image">
    <h3>Author:</h3>
    <input type="text" name="author">
    <h3>Content:</h3>
    <textarea rows="20" cols="100" name="content"></textarea>
  <input type="submit" value="Valider">
</form>
    <div class="row">
        <div class="col-sm-2 col-md-3">
            <a href="index.php">Retour au menu</a>
        </div>
    </div>