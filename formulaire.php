<form method="POST" action="form.php">
	<div>
		<label for="firstname"><?php echo $lang['Prenom'] ?>*</label>
		<input type="text" id="firstname" name="firstname" required aria-required="true" aria-labelledby="firstname" />
	</div>
	<div>
		<label for="lastname"><?php echo $lang['Nom'] ?>*</label>
		<input type="text" id="lastname" name="lastname" required aria-required="true" aria-labelledby="lastname" />
	</div>
	<div>
		<label for="url"><?php echo $lang['URL'] ?></label>
		<input type="url" id="url" name="url" aria-labelledby="url" />
	</div>
	<div>
		<label for="message"><?php echo $lang['Message'] ?>*</label>
		<textarea id="message" cols="30" rows="10" required aria-required="true" aria-labelledby="message"></textarea>
	</div>

	<button type="submit"><?php echo $lang['Enregistrer'] ?></button>
</form>
<section id="comments_display">
	<?php
	$messages = $pdo->query(
		'SELECT * FROM formulaire ORDER BY id DESC'
	)->fetchAll();

	foreach ($messages as $formulaire) :
	?>
		<article>
			<p>
				<?php if ($formulaire['url']) : ?>
					<a href="<?= $formulaire['url']; ?>" <?= $formulaire['first_name']; ?> <?= $formulaire['last_name']; ?></a> <?php else : ?> <?= $formulaire['first_name']; ?> <?= $formulaire['last_name']; ?> <?php endif; ?> </p> <p><?= $formulaire['message']; ?></p>
		</article>
	<?php endforeach; ?>

</section>