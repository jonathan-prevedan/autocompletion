<!DOCTYPE html>

<html id="accueilback">

  <head>

    <meta charset="UTF-8">
    <title>Accueil - Autocomplétion</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Kreon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charmonman&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">

  </head>

	<?php
  		require_once('header.php');
	?>


<body>

	<main>

		<section>

			<h1 id="titre2">Vous avez perdue votre Pokédex ?</h1>

			<article id="articledes">


			<form method="get" action="search">

				<input type="text" id="searchbox" name="q" placeholder="Entrer le nom d'un Pokémon">

				<button class="searchbtn" type="submit">Recherche</button>

			</form>
				
			</article>

		</section>
	
	</main>


</body>

	<?php
    	require_once('footer.php');
	?>


</html>

<script src="../jquery-3.4.1.min.js"></script>

<script type="text/javascript" src="script.js"></script>
