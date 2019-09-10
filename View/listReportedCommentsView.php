<div class="container">
    <br/>
    <h3>Commentaires signalés</h3>
<?php
foreach ($comments as $data) :?>
    <br/>
    <div class="row border shadow-lg ">
        <div class="col-sm-4 col-md-4 " >
            <p>Posté par : <em><?= htmlspecialchars($data['alias']) ?></em></p>
            <p>Publié le : <em><?= htmlspecialchars($data['date']) ?></em></p>
            <a href="index.php?action=soloArticle&amp;id=<?= htmlspecialchars($data['idArticle']) ?>">Article
                concerné</a>
        </div>
        <div class="col-sm-6 col-md-6" >
            <p>Contenu : <em>"<?= htmlspecialchars($data['content']) ?>"</em></p>
            <p>Signalé pour : <em><?= htmlspecialchars($data['reportReason']) ?></em></p>
        </div>


        <!-- report comment -->
        <div class="col-sm-1 col-md-1" >
            <form style="margin-top: 15px;" action="index.php?action=unReportComment&amp;id=<?= $data['id'] ?>" method="post">
                <input class="btn btn-sm btn-outline-secondary" type="submit" value="Rétablir">
                <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token']; ?>"/>
            </form>
            <form style="margin-top: 15px;" action="index.php?action=deleteComment&amp;id=<?= $data['id'] ?>" method="post">
                <input class="btn btn-sm btn-outline-secondary" type="submit" value="Supprimer (définitif)">
                <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token']; ?>"/>
            </form>
            <br/>
        </div>
    </div>

<?php endforeach; ?>
</div>


<?php
    $content = ob_get_clean();
    require('View/header.php');
