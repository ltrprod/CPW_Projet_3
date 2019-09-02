<?php ob_start() ?>

    <h2>Creez votre article</h2>
    <div class="container">
<?php if ($errors): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> <?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
    <form action="" method="post">
        <h3>Title:</h3>
        <input type="text" name="title">
        <h3>Linked image:</h3>
        <input type="text" name="linked_image">
        <h3>Author:</h3>
        <input type="text" name="author">
        <h3>Content:</h3>
        <textarea class="editor" rows="20" cols="100" name="content"></textarea>
        <input type="submit" value="Valider">
    </form>
    <div class="row">
        <div class="col-sm-2 col-md-3">
            <a href="index.php">Retour au menu</a>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea.editor'});</script>
<?php
$content = ob_get_clean();
require('View/header.php');

