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
            <h3>Utilisateur</h3>
            <input type="text" name="user">
            <h3>Mot de passe</h3>
            <input type="password" name="password">
            <input type="submit" value="Valider">
        </form>
    </div>
<?php
$content = ob_get_clean();
require('View/header.php');