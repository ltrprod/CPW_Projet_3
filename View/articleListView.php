<?php include ('View/header.php'); ?>

<?php
foreach($articles as $data) : ?>
    <br/><div class="row">
        <div class="col-sm-2 col-md-3">
		    <?php echo htmlspecialchars($data['title']) ?>
            <br/><em>par <?php echo $data['author'] ?></em>
            <br/><em>le <?php echo $data['date'] ?></em>
            <img src="<?php echo $data['image']?>" alt="image chapitre" width="100px" height="50px">
        </div>
        <div class="col-sm-3 col-md-6">
			<?php echo substr($data['content'],0,250).'...' ?>
            <br/><a href="index.php?action=articleSolo&amp;id=<?=$data['id']?>">Lire l'article</a>
        </div>
    </div>

<?php endforeach; ?>