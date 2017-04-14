<?php
	include("./config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?> - Home</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
	<div class="blue darken-3">
		<div class="container">
			<div class="white-text">
				<?php if($facebook == true) { echo '<a href="' . $facebookLink . '"><i class="fa fa-facebook"></i></a>'; } ?>
				<?php if($mcm == true) { echo '<a href="' . $mcmLink . '"><i class="fa fa-cubes" style="color: white;"></i></a>'; } ?>
				<?php if($instagram == true) { echo '<a href="' . $instagramLink .'"><i class="fa fa-instagram"></i></a>'; } ?>
				<?php if($twitter == true) { echo '<a href="' . $twitterLink . '"><i class="fa fa-twitter" style="color: white;"></i></a>'; } ?>
			</div>
		</div>
	</div>

	<nav class="navbar">
		<div class="nav-wrapper blue darken-2">
			<div class="container">
				<a class="brand-logo" href="./"><?php echo $navTitle; ?></a>
				<ul class="right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li ><a href="portfolio.php">Portfolio</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="section no-pad-bot" style="background-image: url(assets/img/header3.jpg); background-repeat: no-repeat;">
		<div class="container">
			<br>
			<br>
			<h1 class="header center white-text"><?php echo '<b>' . $title . '</b>'; ?></h1>
			<div class="row center">
				<h5 class="header white-text text-darken-2 col s12">Welcome to my Personal Site.</h5>
			</div>
			<br>
			<br>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="card">
					<div class="card-content black-text">
						<p>
							Lorem ipsum dolor sit amet, ius et labores denique periculis, eam ut omnium integre, omnesque voluptaria vis eu. No qui cibo diceret nonumes. Eum et lorem graeci omnium, cu mea probo senserit, probo solum postulant ea cum. Alienum platonem his ex.
							<br><br>
							In placerat temporibus duo, homero oportere eu ius. Vel nemore interesset intellegebat cu, atqui singulis mel no. Ludus veritus nam an, ad ius feugait antiopam concludaturque, at sed singulis sadipscing. Copiosae lucilius laboramus vel cu, nec ea vituperata dissentias. Qui an sint consul delectus, his augue convenire cu. Nec an quis consequat, amet animal ex vix. Nisl debet melius nam id, pro ut facilis voluptatibus.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="page-footer blue darken-3">
		<div class="container">
			<div class="row">
				<div class="col m6 s12">
					<h5 class="white-text">About</h5>
					<p class="grey-text text-lighten-4">Sensibus electram definiebas his ei, has ex assentior sadipscing mediocritatem, minim delenit menandri mel et. Quo detraxit disputationi te, eros iracundia eum et. Sea cu unum zril impedit. In vidit summo nusquam mea, regione propriae posidonium has eu. In moderatius definiebas deterruisset per, possim omittantur suscipiantur no mel. Mea te facilis volumus, mei in solum illum.</p>
				</div>

				<div class="col m2 s12">
					<h5 class="white-text"><i class="fa fa-code-fork" style="color: lightgrey;"></i> Navigation</h5>

					<ul>
						<li><a href="./" class="grey-text text-lighten-2"><strong>Home</strong></a></li>
						<li><a href="about.php" class="grey-text text-lighten-2"><strong>About</strong></a></li>
						<li><a href="portfolio.php" class="grey-text text-lighten-2"><strong>Portfolio</strong></a></li>
						<li><a href="contact.php" class="grey-text text-lighten-2"><strong>Contact</strong></a></li>
					</ul>
				</div>

				<div class="col m2 s12">
					<h5 class="white-text"><i class="fa fa-file-code-o" style="color: lightgrey;"></i> Projects</h5>

					<ul>
						<li><a href="<?php echo $project1Link; ?>" class="grey-text text-lighten-2"><strong><?php echo $project1; ?></strong></a></li>
						<li><a href="<?php echo $project2Link; ?>" class="grey-text text-lighten-2"><strong><?php echo $project2; ?></strong></a></li>
						<li><a href="<?php echo $project3Link; ?>" class="grey-text text-lighten-2"><strong><?php echo $project3; ?></strong></a></li>
						<li><a href="<?php echo $project4Link; ?>" class="grey-text text-lighten-2"><strong><?php echo $project4; ?></strong></a></li>
					</ul>
				</div>

				<div class="col m2 s12">
					<h5 class="white-text"><i class="fa fa-address-card-o" style="color: lightgrey;"></i> Contact</h5>

					<ul>
						<li><a href="<?php echo $mcmLink; ?>" class="grey-text text-lighten-2"><strong>MCM</strong></a></li>
						<li><a href="<?php echo $githubLink; ?>" class="grey-text text-lighten-2"><strong>GitHub</strong></a></li>
						<li><a href="contact.php" class="grey-text text-lighten-2"><strong>Contact Form</strong></a></li>
						<li><a href="<?php echo $discordLink; ?>" class="grey-text text-lighten-2"><strong>Discord</strong></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container grey-text text-lighten-4">
				© 2016-2017, <?php echo $yourName; ?>
				<div class="right">Created by <strong><a href="https://maattah.me" class="white-text">Maattah</a></strong> with <strong><a href="http://materializecss.com" class="white-text">Materialize</a></strong></div>
			</div>
		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</body>
</html>