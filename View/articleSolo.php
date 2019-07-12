<?php

use App\Model\ArticleManager;
use App\Model\CommentManager;

require_once('..\Model\ArticleManager.php');
require_once('..\Model\CommentManager.php');
$id = $_GET['id'];

$articleManager = new articleManager();
$articlesArray = $articleManager->getArticle($id);
while ($data = $articlesArray->fetch()) { ?>
    <div class="chapter">
        <h2>
			<?php echo htmlspecialchars($data['title']) ?>
        </h2>
        <em>par <?php echo $data['author'] ?></em>
        <em>le <?php echo $data['date'] ?></em>
        <p><?php echo $data['content'] ?></p>
    </div>
    <a href="articleList.php">Retour à la liste des chapitres</a>
<?php }; ?>


<h3>Commentaires</h3>
<?php
$commentmanager = new commentmanager();
$commentArray = $commentmanager->getComments($id);
while ($data = $commentArray->fetch()) {
	?>
    <div class="comment" style="background-color: cadetblue">
        <p><?php echo $data['alias'] ?> - <?php echo $data['date'] ?></p>
        <p>"<?php echo $data['content'] ?>"</p>
    </div>

<?php }; ?>


