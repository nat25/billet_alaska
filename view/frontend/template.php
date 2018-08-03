<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php $title ?></title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="public/css/style.css">
	</head>
	<body>
		<header>
			<div id="navbar">
				<a href="#"><img src="public/images/logo_alaska.png"></a>
				<i id="hamburger" class="fas fa-bars"></i>
				<i id="cross" class="fas fa-times"></i>
			</div>
			<div id="menu">
				<nav>
					<a href="">Table des matières</a>
					<a href="">A propos de l'Autheur</a>
					<a href="">4ème de couverture</a>
					<a href="">Contact</a>
				</nav>
			</div>
			<div id="text_header">
				<h1>Billet pour l'Alaska</h1>
				<h2>Par Jean Forteroche</h2>
			</div>
		</header>
		
		<?= $content ?>

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

		<footer>
			<i class="fab fa-facebook-square"></i>
			<i class="fab fa-twitter-square"></i>
			<i class="fab fa-instagram"></i>
			<i class="fab fa-pinterest-square"></i>
			<p>	&copy; 2018 Jean Forteroche </p>
			<p><a href="#">Administration</a></p>
		</footer>

		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script src="public/js/menu.js"></script>
	</body>
</html>