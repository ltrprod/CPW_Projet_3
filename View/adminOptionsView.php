<?php ob_start() ?>
<br/><h2>Gestionnaire d'articles</h2>
<div class="container">
<?php
foreach($articles as $data) : ?>
    <br/><div class="row" style="background-color: #86cfda">
        <div class="col-sm-2 col-md-3">
		    <?= htmlspecialchars($data['title']) ?>
            <br/><em>par <?= htmlspecialchars($data['author']) ?></em>
            <br/><em>le <?= htmlspecialchars($data['date']) ?></em>
        </div>
        <div class="col-sm-3 col-md-3">
            <br/><a href="index.php?action=soloArticle&amp;id=<?=$data['id']?>">Lien vers l'article article</a>
        </div>
        <div class="col-sm-3 col-md-3">
            <br/><form action="index.php?action=deleteArticle&amp;id=<?= $data['id']?>" method="post">
                <input type="submit" value="Supprimer (définitif)">
            </form><br/>
        </div>
        <div class="col-sm-3 col-md-3">
            <br/><a href="index.php?action=articleModificationForm&amp;id=<?= $data['id']?>">Modifier l'article</a>
        </div>
    </div>
<?php endforeach;

$content = ob_get_clean();
require('View/header.php');