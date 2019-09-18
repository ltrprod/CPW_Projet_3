<?php
ob_start() ?>
    <div class="container">
        <br/><h2>Bienvenue <?= $_SESSION['isConnected']; ?></h2><br/>
        <div class="row">
            <div class="col-md-6">
                <div class=" mb-6 ">
                    <a href="index.php?action=addArticle" >
                    <img alt="Image d'illustration" aria-label="Placeholder: Thumbnail"
                         class="bd-placeholder-img card-img-top" src="View/img/addArticle.svg"
                         height="200" role="img">
                    <title>Image d'illustration</title>
                    <rect width="200%" height="100%" fill="#55595c"/>
                    </img>
                    </a>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group" style="margin-right: auto; margin-left: auto;">
                                <a role="button" class="btn btn-sm btn-outline-secondary"
                                   href="index.php?action=addArticle">Creer un nouvel article</a>
                            </div>
                            <small class="text-muted">
                            </small>
                        </div>
                    </div>
                </div>
                <br/></div>

            <div class="col-md-6">
                <div class=" mb-6">
                    <a href="index.php?action=adminArticlePanel">
                    <img alt="Image d'illustration" aria-label="Placeholder: Thumbnail"
                         class="bd-placeholder-img card-img-top" src="View/img/gererArticles.svg"
                         height="200" role="img">
                    <title>Image d'illustration</title>
                    <rect width="100%" height="100%" fill="#55595c"/>
                    </img>
                    </a>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group" style="margin-right: auto; margin-left: auto;">
                                <a role="button" class="btn btn-sm btn-outline-secondary"
                                   href="index.php?action=adminArticlePanel">Gerer les Articles</a>
                            </div>
                            <small class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <br/></div>

            <div class="col-md-6">
                <div class=" mb-6 ">
                    <a href="index.php?action=listReportedComments">
                    <img alt="Image d'illustration" aria-label="Placeholder: Thumbnail"
                         class="bd-placeholder-img card-img-top" src="View/img/reportedCom.svg"
                         height="200" role="img">
                    <title>Image d'illustration</title>
                    <rect width="100%" height="100%" fill="#55595c"/>
                    </img>
                    </a>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group" style="margin-right: auto; margin-left: auto;">
                                <a role="button" class="btn btn-sm btn-outline-secondary"
                                   href="index.php?action=listReportedComments">Liste des commentaires signalés</a>
                            </div>
                            <small class="text-muted"></small>
                        </div>
                    </div>
                    <br/></div>
            </div>

            <div class="col-md-6">
                <div class=" mb-6 ">
                    <a href="index.php?action=logout">
                    <img alt="Image d'illustration" aria-label="Placeholder: Thumbnail"
                         class="bd-placeholder-img card-img-top" src="View/img/logout.svg"
                         height="200" role="img">
                    <title>Image d'illustration</title>
                    <rect width="100%" height="100%" fill="#55595c"/>
                    </img>
                    </a>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group" style="margin-right: auto; margin-left: auto;">
                                <a role="button" class="btn btn-sm btn-outline-secondary"
                                   href="index.php?action=logout">Deconnexion</a>
                            </div>
                            <small class="text-muted"></small>
                        </div>
                    </div>
                    <br/></div>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require('View/header.php');
?>