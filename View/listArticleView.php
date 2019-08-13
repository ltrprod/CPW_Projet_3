<?php ob_start() ?>
<br/><h2>Titre liste article</h2>
<div class="container">
<?php
foreach($articles as $data) : ?>
    <br/><div class="row">
        <div class="col-sm-2 col-md-3">
		    <?= htmlspecialchars($data['title']) ?>
            <br/><em>par <?= $data['author'] ?></em>
            <br/><em>le <?= $data['date'] ?></em>
            <img src="<?= $data['image']?>" alt="image chapitre" width="100px" height="50px">
        </div>
        <div class="col-sm-3 col-md-6">
			<?= substr($data['content'],0,250).'...' ?>
            <br/><a href="index.php?action=soloArticle&amp;id=<?=$data['id']?>">Lire l'article</a>
        </div>
    </div>
<?php endforeach;

$content = ob_get_clean();
require('View/header.php');