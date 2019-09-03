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
        <textarea class="editor" rows="20" cols="100" name="content"><?= $article->getArticleContent() ?></textarea>
        <input type="submit" value="Valider">
        <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token']; ?>"/>


    </form>
    <div class="row">
        <div class="col-sm-2 col-md-3">
            <a href="index.php?action=modifyArticle">Retour au menu</a>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector: 'textarea.editor'});</script>
<?php
$content = ob_get_clean();
require('View/header.php');