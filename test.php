<?php
require('Framework\ArticleManager.php');
require('Framework\Article.php');
require('Framework\CommentManager.php');
require('Framework\Comment.php');


// ARTICLE FUNCTIONS TEST


$article= new Article('titre','leo', 'test contenu', 'lien image');
$articleManager= new articleManager();
//$articleManager->postArticle($article->getTitle(), $article->getAuthor(), $article->getArticleContent(), $article->getImage());
//$articleManager->modifyArticle('16','mon titre modifié','leo modifié','mon contenu modifié','mon image modifiée');
//$articleManager->deleteArticle(17);
//$articlesArray=$articleManager->getArticles();
//while ($donnees = $articlesArray->fetch()) {
//	echo 'title= "'.$donnees['title'].'", author= "'.$donnees['author'].'", content= "'.$donnees['content'].'", image= "'.$donnees['image'].'"<br/>';
//}



// COMMENT FUNCTION TEST

$comment= new Comment('16', 'leo', 'mon commentaire');
$commentmanager= new commentManager();
//$commentmanager->postComment($comment->getIdArticle(), $comment->getAlias(), $comment->getContentComment());
//$commentmanager->deleteComment(1);
//$commentArray=$commentmanager->getComments(16);
//while ($donnees = $commentArray->fetch()) {
//	echo 'Pseudo= "' . $donnees['alias'] . '", Commentaire= "' . $donnees['comment'] . '"<br/>';
//}
//$commentmanager->reportComment(2);
//$commentmanager->unReportComment(2);
