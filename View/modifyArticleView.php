<?php ob_start() ?>
    <div class="container">
    <br/><h2>Modifiez votre article</h2>
    <br/><form action="index.php?action=modifyArticle&amp;id=<?= $id ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <h4>Titre:</h4>
                <input type="text" class="form-control" name="title" value="<?= $article->getTitle() ?>">
            </div>
            <div class="col-md-4">
                <h4>Lien image:</h4>
                <input type="text" class="form-control" name="linked_image" value="<?= $article->getImage() ?>">
            </div>
            <div class="col-md-4">
                <h4>Auteur:</h4>
                <input type="text" class="form-control" name="author" value="<?= $article->getAuthor() ?>">
            </div>
        </div><br/>
        <h3>Content:</h3>
        <textarea class="editor" rows="20" cols="100" name="content"><?= $article->getArticleContent() ?></textarea>
            <br/><input type="submit" value="Valider" class="btn btn-primary">
            <a role="button" class="btn btn-secondary"  href="index.php?action=adminPanel" style="margin-left: 20px;">Retour au menu</a>
            <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token']; ?>"/>
    </form>
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector: 'textarea.editor'});</script>
<?php
$content = ob_get_clean();
require('View/header.php');