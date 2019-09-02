<?php ob_start();
if ($parameters):?>
    <br/><div>
        <ul>
            <?php foreach ($parameters as $data): ?>
                <li> <?= $data ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif ?>
    <div>
        <a href="index.php">Retourner à la page d'accueil</a>
    </div>
<?php
    $content = ob_get_clean();
    require('View/header.php');