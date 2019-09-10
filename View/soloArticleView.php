<?php ob_start() ?>
    <!-- article content -->
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <p>Auteur : <b><?= htmlspecialchars($article->getAuthor()) ?></b></p> Date de publication :
                <b><?= substr(htmlspecialchars($article->getArticleDate()), 0, 10) ?></b></p>
                <img src="<?= htmlspecialchars($article->getImage()) ?>" alt="image chapitre" width=100% height=auto>
            </div>
            <div class="col-sm-9 col-md-9">
                <b><?= htmlspecialchars($article->getTitle()) ?></b>
                <p><?= $article->getArticleContent() ?></p>
                <br/>
                <a href="index.php?action=listArticle" role="button" class="btn btn-sm btn-outline-secondary"
                   style="text-align: center">Retour aux chapitres</a>
            </div>
        </div>


        <!-- comment form -->
        <br/><br/>
        <h2>Commentaires</h2>
        <form action="index.php?action=addComment&amp;idArticle=<?= $_GET['id'] ?>" method="post">
            <div class="form-group">
                <input type="text" name="alias" class="form-control" placeholder="Entrez votre pseudo">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="content" rows="3" placeholder="Votre commentaire"></textarea>
                <small class="form-text text-muted">Un abus dans votre commentaire peut aboutir à une suppression de ce
                    dernier. </small>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form><br/><br/>


        <!-- comment list -->
        <?php
        foreach ($comments as $data) : ?>
        <div class="row border shadow-lg">
            <div class="col-md-8 " >
                <div class=" mb-4 " style="height: 100%">
                    <div class="body">
                        <p><b><?= htmlspecialchars($data['alias']) ?></b></p>
                        <p class="text"><?= htmlspecialchars($data['content']) ?></p>
                        <div style="text-align:right">
                            <small class="text-muted"><?= htmlspecialchars($data['date']) ?></small>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4" >
                <div class=" mb-4 shadow-sm" style="height: 100%">
                    <div class="card-body">
                        <form action="index.php?action=reportComment&amp;id=<?= $data['id'] ?>&amp<?php echo $_GET['id'] ?>;" method="post" >
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Signaler le commentaire</label>
                                <select class="form-control" name="reason">
                                    <option value="Contenu à caractère violent">Contenu à caractère violent</option>
                                    <option value="Racisme">racisme</option>
                                    <option value="Contenu à caractère sexuel">Contenu à caractère sexuel</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                            <input type="hidden" name="idArticle"  value="<?php echo $_GET['id'] ?>"/>
                            <button role="button" type="submit"  class="btn btn-sm btn-outline-secondary" class="btn btn-primary">Valider</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <?php endforeach; ?>
        </div>
    </div>
<?php
$content = ob_get_clean();
require('View/header.php');