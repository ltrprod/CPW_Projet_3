<?php ob_start() ?>
    <br/><div class="container">
        <h2>Creez votre article</h2>
        <br/>
<?php if (isset($errors)): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> <?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
    <form action="index.php?action=createArticle" method="post" class="form">
        <div class="row">
            <div class="col-md-4">
                <h4>Titre:</h4>
                <input type="text" class="form-control" name="title" placeholder="Titre exemple">
            </div>
            <div class="col-md-4">
                <h4>Lien image:</h4>
                <input type="text" class="form-control" name="linked_image" placeholder="https://images.com/monimage.png">
            </div>
            <div class="col-md-4">
                <h4>Auteur:</h4>
                <input type="text" class="form-control" name="author" placeholder="Auteur exemple">
            </div>
        </div><br/>
        <h4>Contenu:</h4>
        <textarea class="editor" rows="20" cols="100" name="content"></textarea>
        <br/><input type="submit" value="Valider" class="btn btn-primary">
        <a role="button" class="btn btn-secondary"  href="index.php?action=adminPanel" style="margin-left: 20px;">Retour au menu</a>
        <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token']; ?>"/>
    </form>
    <br/>
</div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector: 'textarea.editor'});</script>
<?php
$content = ob_get_clean();
require('View/header.php');

