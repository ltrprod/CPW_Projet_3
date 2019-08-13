<?php ob_start() ?>
    <h2>Modifiez votre article</h2>
    <div class="container">

    <form action="index.php?action=modifyArticle&amp;id=<?= $id ?>" method="post">
        <h3>Title:</h3>
        <input type="text" name="title" value="<?= $article->getTitle() ?>">
        <h3>Linked image:</h3>
        <input type="text" name="linked_image" value="<?= $article->getImage() ?>">
        <h3>Author:</h3>
        <input type="text" name="author" value="<?= $article->getAuthor() ?>">
        <h3>Content:</h3>
        <textarea rows="20" cols="100" name="content"><?= $article->getArticleContent()?></textarea>
        <input type="submit" value="Valider">


    </form>
    <div class="row">
        <div class="col-sm-2 col-md-3">
            <a href="index.php?action=modifyArticle">Retour au menu</a>
        </div>
    </div>

<?php
$content = ob_get_clean();
require('View/header.php');