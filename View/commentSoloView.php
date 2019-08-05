<br/><h3>Commentaires</h3>
<?php
foreach($comments as $data) : ?>
	<br/><div class="row">
		<div class="col-sm-2 col-md-3" style="background-color: #b3b7bb">
			<em>par <?= $data['alias'] ?></em>
			<em>le <?= $data['date'] ?></em>
		</div>
		<div class="col-sm-4 col-md-9" style="background-color: #0f6674">
			<?= $data['content']?>
		</div>
	</div>
<?php endforeach; ?>
