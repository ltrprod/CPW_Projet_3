<?php ob_start() ?>
<!-- article content -->
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


<!-- comment form -->
    <div class="row">
        <p>Laissez votre commentaire:</p>
    </div>
    <br/><h3> Votre commentaire</h3>
    <form action="index.php?action=addComment&amp;idArticle=<?= $_GET['id']?>" method="post">
        <h4>Alias:</h4>
        <input type="text" name="alias">
        <h4>Content:</h4>
        <textarea rows="10" cols="100" name="content"></textarea>
        <input type="submit" value="Valider">
    </form><br/>


<!-- comment list -->
    <h3>Commentaires</h3>
<?php
foreach($comments as $data) : ?>
	<br/><div class="row">
		<div class="col-sm-2 col-md-3" style="background-color: #b3b7bb">
			<em>par <?= $data['alias'] ?></em>
			<em>le <?= $data['date'] ?></em>
		</div>
		<div class="col-sm-4 col-md-7" style="background-color: #0f6674">
			<?= $data['content']?>
		</div>


<!-- report comment -->
		<div class="col-sm-2 col-md-2" style="background-color: #86cfda">
            <form action="index.php?action=reportComment&amp;id=<?= $data['id']?>&amp;" method="post">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Report comment</label>
                     <select class="form-control" name="reason">
                        <option value="racism">racism</option>
                        <option value="sexual content">sexual content</option>
                        <option value="other">other</option>
                     </select>
                </div>
                <input type="submit" value="Valider">
            </form><br/>
		</div>
	</div>
<?php endforeach;
$content = ob_get_clean();
require ('View/header.php');