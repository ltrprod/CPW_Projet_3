<?php
require_once('..\Framework\Manager.php');
require_once('..\Model\ArticleManager.php');

use App\Model\ArticleManager;

$articleManager = new articleManager();
$articlesArray = $articleManager->getArticles();

?>
    <h1>Blog Allez simple pour l'Alaska</h1>
    <p>Derniers chapitres :</p>


<?php while ($data = $articlesArray->fetch()) { ?>

    <div class="chapter">
        <h3>
			<?php echo htmlspecialchars($data['title']) ?>
            <br/><em>par <?php echo $data['author'] ?></em>
            <br/><em>le <?php echo $data['date'] ?></em>
        </h3>

        <img src="<?php echo $data['image'] ?>" alt="image chapitre" width="100px" height="50px">
        <p>
			<?php echo nl2br(htmlspecialchars($data['content'])) ?>
        </p>


        <a href="articleSolo.php?id=<?php echo $data['id'] ?>">Lire l'article</a>


    </div>
	<?php
}