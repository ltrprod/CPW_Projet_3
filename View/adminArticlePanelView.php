<?php ob_start() ?>
<div class="container">
    <br/><div class=" mb-12">
        <h2>Gestionnaire d'articles</h2>
    </div>
</div>
<br/><div class="container">
<?php
foreach($articles as $data) : ?>
        <div class="card mb-12 shadow-lg border">
            <div class="col-sm-2 col-md-3">
		        <?= htmlspecialchars($data['title']) ?>
                <br/><em>par <?= htmlspecialchars($data['author']) ?></em>
                <br/><em>le <?= htmlspecialchars($data['date']) ?></em>
            </div>
        <div class="col-sm-3 col-md-3">
            <br/><a href="index.php?action=soloArticle&amp;id=<?=$data['id']?>">Lien vers l'article article</a>
        </div>
        <div class="col-sm-3 col-md-3">
            <br/>
            <form action="index.php?action=deleteArticle&amp;id=<?= $data['id']?>" method="post">
                <input type="submit" value="Supprimer (définitif)">
                <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token']; ?>"/>
            </form>
            <br/>
        </div>

        <div class="col-sm-3 col-md-3">
            <br/><a href="index.php?action=articleModificationForm&amp;id=<?= $data['id']?>">Modifier l'article</a>
        </div>
    </div><br/>
<?php endforeach;

$content = ob_get_clean();
require('View/header.php');