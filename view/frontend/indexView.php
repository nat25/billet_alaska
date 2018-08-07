<?php $title = "Billet pour l'Alaska"; ?>

<?php ob_start() ?>
<section id="about">
	<div id="text_about">
		<h2>A propos</h2>			
		<p><i class="fas fa-quote-left"></i> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
		ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
	</div>
	<aside>
		<div class="circle">
			<img src="public/images/jean_forteroche.jpg" alt="portrait">
		</div>
	</aside>
</section>

<section id="table_of_contents">
	<h2>Table des matières</h2>
	<?php
	while ($data = $posts->fetch())
	{
	?>
	<div class="chapter">
		<h3>
			<?php echo htmlspecialchars($data['title']); ?>
		</h3>
		<p>
			<?php echo htmlspecialchars($data['excerpt']); ?>
		</p>
		<p><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Continuer la lecture</a></p>
	</div>	
	<?php
	}
	$posts -> closeCursor();
	?>
</section>

<section id="back_cover">
	<div id="img_cover">
		<img src="public/images/alaska.jpg">
	</div>
	<div id="text_cover">
		<h2>Quatrième de couverture</h2>
			<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

