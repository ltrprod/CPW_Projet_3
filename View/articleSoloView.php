<?php include ('View/header.php'); ?>
<br/><h2>Titre article solo</h2>
<div class="container">
<br/><div class="row">
	<div class="col-sm-2 col-md-3">
        <p><?= $article->getTitle() ?> par <?= $article->getAuthor() ?></p> le <?= $article->getArticleDate() ?></p>
		<img src="<?= $article->getImage()?>" alt="image chapitre" width="100px" height="50px">
	</div>
    <div class="col-sm-2 col-md-9">
        <p><?= $article->getArticleContent() ?></p>
        <br/><a href="index.php">Retour aux chapitres</a>
    </div>
</div>