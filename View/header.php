<?php

use App\Controller\ArticleController;
use App\Controller\CommentController;
use App\Framework\Controller;

?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="View/css/navbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

    <title>Titre du blog</title>
</head>
<body>
<div class="topnav">

    <?php
    $action = $_GET['action'] ?? 'home';
    switch ($action) {
        case "home": ?>
            <a class="active" href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "listArticle": ?>
            <a href="index.php?action=home">Home</a>
            <a class="active" href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "login": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a class="active" href="index.php?action=login">Connexion</a>');
            }
            break;

        case "logout": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a class="active" href="index.php?action=login">Connexion</a>');
            }
            break;

        case "adminPanel": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a class="active" href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "soloArticle": ?>
            <a href="index.php?action=home">Home</a>
            <a class="active" href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "addArticle": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a class="active" href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "adminArticlePanel": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a class="active" href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "createArticle": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a class="active" href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;


        case "modifyArticle": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a class="active" href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "deleteArticle": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a class="active" href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "articleModificationForm": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a class="active" href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "addComment": ?>
            break;

        case "listReportedComments": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a class="active" href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "reportComment": ?>
            <a href="index.php?action=home">Home</a>
            <a class="active" href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a class="active" href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "unReportComment": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a href="index.php?action=adminPanel">Panneau d\'administration</><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "deleteComment": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a class="active" href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;

        case "listReportedComments": ?>
            <a href="index.php?action=home">Home</a>
            <a href="index.php?action=listArticle">Chapitres</a>
            <?php
            $check = (new Controller())->checkIsConnectedNavbar();
            if ($check) {
                echo('<a class="active" href="index.php?action=adminPanel">Panneau d\'administration</a><a style="float:right" href="index.php?action=logout">Deconnexion</a><a style="float:right; color:black; background-color: lightgray; border-bottom: black">Connecté sous : ' . $_SESSION['isConnected'] . '</a>');
            } else {
                echo('<a href="index.php?action=login">Connexion</a>');
            }
            break;
    }
    ?>


</div>
<?= $content ?>
<!-- Footer -->
<br/><footer class="card-footer" id="footer" style="background-color: lightgray"><br/>
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Index</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Accueil</a></li>
                    <li><a href="index.php?action=listArticle"><i class="fa fa-angle-double-right"></i>Chapitres</a></li>
                    <li><a href="index.php?action=login"><i class="fa fa-angle-double-right"></i>Connexion</a></li>
                    <li><a href="test.php"><i class="fa fa-angle-double-right"></i>Autre</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Où commencer</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="index.php?action=listArticle"><i class="fa fa-angle-double-right"></i>Chapitre 1 - Départ</a></li>
                    <li><a href="index.php?action=listArticle"><i class="fa fa-angle-double-right"></i>Chapitre 2 - Sur la route</a></li>
                    <li><a href="index.php?action=listArticle"><i class="fa fa-angle-double-right"></i>Chapitre 3 - L'aéroport</a></li>
                    <li><a href="index.php?action=listArticle"><i class="fa fa-angle-double-right"></i>Chapitre 4 - J'ai mal au coeur</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Me contacter</h5>
                <ul class="list-unstyled quick-links">
                    <li>Jean FORTEROCHE</li>
                    <li>67, bd de Montmorency</li>
                    <li>75016 Paris</li>
                    <li>Tel. 01 55 74 60 90</li>
                </ul>
            </div>
        </div>

    </div>
</footer>
<!-- ./Footer -->
</body>

</html>