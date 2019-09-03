<h3>Commentaires signalés</h3>
<?php
foreach ($comments as $data) :?>
    <br/>
    <div class="row">
        <div class="col-sm-2 col-md-3" style="background-color: #b3b7bb">
            <em>par <?= htmlspecialchars($data['alias']) ?></em>
            <em>le <?= htmlspecialchars($data['date']) ?></em>

            <br/><a href="index.php?action=soloArticle&amp;id=<?= htmlspecialchars($data['idArticle']) ?>">Article
                concerné</a>
        </div>
        <div class="col-sm-4 col-md-7" style="background-color: #0f6674">
            <?= htmlspecialchars($data['content']) ?>
            <p>Signalé pour : <?= htmlspecialchars($data['reportReason']) ?></p>
        </div>


        <!-- report comment -->
        <div class="col-sm-2 col-md-2" style="background-color: #86cfda">
            <form action="index.php?action=unReportComment&amp;id=<?= $data['id'] ?>" method="post">
                <input type="submit" value="Rétablir">
            </form>
            <br/>
            <form action="index.php?action=deleteComment&amp;id=<?= $data['id'] ?>" method="post">
                <input type="submit" value="Supprimer (définitif)">
            </form>
            <br/>
        </div>
    </div>
<?php endforeach;
$content = ob_get_clean();
require('View/header.php');
