<?php use App\Framework\Controller;

ob_start() ?>
    <div class="album py-5 bg-light">
        <div class="container">
            <div style="width: 100%; text-align: center">
                <div class="btn-group" style="text-align: center; margin: 1em 5em ; display: inline-block;">
                    <a role="button" class="btn btn-sm btn-outline-secondary" href="index.php?action=listArticle&amp;page=1"
                       style="display: inline"><<</a>
                    <?php
                    $i = 1;
                    while ($i <= $nbPages) { ?>
                        <a role="button" class="btn btn-sm btn-outline-secondary d-inline"
                           href="index.php?action=listArticle&amp;page=<?= $i; ?>"><?= $i; ?></a>
                        <?php $i++;
                    }
                    ?>
                    <a role="button" class="btn btn-sm btn-outline-secondary d-inline"
                       href="index.php?action=listArticle&amp;page=<?= $i - 1; ?>">>></a>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($articles as $data) : ?>
                    <br/>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img alt="Image d'illustration" aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top"
                                 height="300" role="img" src="<?= htmlspecialchars($data['image']) ?>">
                            <title>Image d'illustration</title>
                            <rect width="100%" height="100%" fill="#55595c"/>
                            </img>
                            <div class="card-body">
                                <p><b><?= htmlspecialchars($data['title']) ?></b></p>
                                <p class="card-text"><?= mb_substr(strip_tags($data['content']), 0, 300) . '...' ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a role="button" class="btn btn-sm btn-outline-secondary"
                                           href="index.php?action=soloArticle&amp;id=<?= $data['id'] ?>">Lire</a>

                                        <?php
                                        $check = (new Controller())->checkIsConnectedNavbar();
                                        if ($check): ?>
                                            <a role="button" class="btn btn-sm btn-outline-secondary"
                                               href="index.php?action=articleModificationForm&amp;id=<?= $data['id']; ?>">Modifier</a>
                                        <?php endif ?>
                                    </div>
                                    <small class="text-muted"><?= substr(htmlspecialchars($data['date']), 0, 10) ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div style="width: 100%; text-align: center">
                    <div class="btn-group" style="text-align: center; margin: 1em 5em ; display: inline-block;">
                        <a role="button" class="btn btn-sm btn-outline-secondary" href="index.php?action=listArticle&amp;page=1"
                           style="display: inline"><<</a>
                        <?php
                        $i = 1;
                        while ($i <= $nbPages) { ?>
                            <a role="button" class="btn btn-sm btn-outline-secondary d-inline"
                               href="index.php?action=listArticle&amp;page=<?= $i; ?>"><?= $i; ?></a>
                            <?php $i++;
                        }
                        ?>
                        <a role="button" class="btn btn-sm btn-outline-secondary d-inline"
                           href="index.php?action=listArticle&amp;page=<?= $i - 1; ?>">>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
require('View/header.php');