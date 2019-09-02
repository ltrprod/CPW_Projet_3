<?php
ob_start() ?>
    <h2>Bienvenue Administrateur</h2><br/>
<?php
$content = ob_get_clean();
require('View/header.php');
?>


    <a href="index.php?action=addArticle">Creer chapitre</a><br/>
    <a href="index.php?action=adminArticlePanel">Gerer les Articles</a><br/>
    <a href="index.php?action=listReportedComments">Commentaires signalés</a><br/>
    <a href="index.php?action=listReportedComments">Deconnexion</a><br/>