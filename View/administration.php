<?php
use App\Model\ArticleManager;
use App\Model\CommentManager;

require_once('..\Model\ArticleManager.php');
require_once('..\Model\CommentManager.php');




if(isset($_POST['login']) AND isset($_POST['password']) AND $_POST['login'] == "admin" AND $_POST['password'] ==  "root"){
?>
	<p>vous etes connectez</p>
	<style type="text/css">

		#articleCreation, #articleModification, #reportedComment  {
			display:none;
		}
		#articleCreation:target {
			display: block;
		}
		#reportedComment:target {
			display: block;
		}
		#articleModification:target{
			display: block;
		}
		.chapter{
			background-color: cadetblue;
		}
	</style>
	<body>
	<header>
		<p><a href="#articleCreation">Creer un article</a> | <a href="#articleModification">Gerer les articles</a> | <a href="#reportedComment">Gerer les commentaires</a></p>
		<form action="" id="articleCreation">
			<fieldset>
				<form action="articleCreation.php" method="post">
					<p>
						<input type="text" name="title" placeholder="titre"/>
						<input type="text" name="author" placeholder="auteur"/>
						<input type="text" name="image" placeholder="lien de l'image"/>
						<br/><textarea rows="10" cols="100" minlength="10" maxlength="99999" name="content" placeholder="contenu"></textarea>
						<br/><input type="submit" value="Valider" />

					</p>
				</form>
			</fieldset>
		</form>
		<form action="" id="articleModification">
			<fieldset>
				<?php
				$articleManager = new articleManager();
				$articlesArray = $articleManager->getArticles();

				while ($data = $articlesArray->fetch()) { ?>

					<div class="chapter">
						<h3>
							<?php echo htmlspecialchars($data['title']) ?>
							<br/><em>par <?php echo $data['author'] ?></em>
							<br/><em>le <?php echo $data['date'] ?></em>
						</h3>
						<p>
							<?php echo nl2br(htmlspecialchars($data['content'])) ?>
						</p>


						<a href="articleModification.php?id=<?php echo $data['id'] ?>">Modifier l'article</a>


					</div>
					<?php
				} ?>
			</fieldset>
		</form>
		<form action="" id="reportedComment">
			<fieldset>
tset3
			</fieldset>
		</form>
	</header>
	</body>




<?php
}
else{
?>
	<p>login et/ou password incorrect</p>
	<a href="connexion.html">Réessayez</a>
<?php
}
