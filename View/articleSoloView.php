<?php include ('View/header.php'); ?>

<br/><div class="row">
	<div class="col-sm-2 col-md-3">
        <p><?php echo $article->getTitle() ?> par <?php echo $article->getAuthor() ?></p> le <?php echo $article->getArticleDate() ?></p>
		<img src="<?php echo $article->getImage()?>" alt="image chapitre" width="100px" height="50px">
	</div>
    <div class="col-sm-2 col-md-9">
        <p><?php echo $article->getArticleContent() ?></p>
        <br/><a href="index.php">Retour aux chapitres</a>
    </div>
</div>