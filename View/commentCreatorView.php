<br/><h3> Votre commentaire</h3>
<div class="container">
<form action="index.php?action=addComment&amp;idArticle=<?= $_GET['id']?>" method="post">
    <h3>Alias:</h3>
    <input type="text" name="alias">
    <h3>Content:</h3>
    <textarea rows="20" cols="100" name="content"></textarea>
  <input type="submit" value="Valider">
</form>
