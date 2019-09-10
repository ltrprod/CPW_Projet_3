<?php ob_start() ?>

<?php
if ($errors) { ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> <?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php } ?>
    <div class="container">
        <form action="index.php?action=login" method="post">
            <br/><h3>Utilisateur</h3>
            <input type="text" name="user" class="form-control">
            <h3>Mot de passe</h3>
            <input type="password" name="password" class="form-control">
            <br/><input type="submit" value="Valider" class="btn btn-primary">
        </form>
    </div>
<?php
$content = ob_get_clean();
require('View/header.php');