<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="vues/style.css">
	<title>Document</title>
</head>

<body>
	<header class="navbar navbar-expand-lg navbar-dark bg-secondary" >

		<nav class="text-center" >
			
			<?php if(isset($_SESSION['pers'])): ?>

			<!--Button 1 -->
			<div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse " id="navbarNavDarkDropdown">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Consulter
							</a>
							<ul class="dropdown-menu dropdown-menu-white bg-primary">
								<li><a class="dropdown-item mb-0" href="?actionR=listes">Listes des rencontres</a></li>
								<hr class="mt-0 mb-0 opacity-15">
								<li><a class="dropdown-item" href="?actionPers=historique">Historique des Reservations</a></li>
								<hr class="mt-0 mb-0 opacity-2">
								<li><a class="dropdown-item" href="?actionPers=assiste">Historique Des Match Assistés</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>			
			<div>
				<a class="btn btn-danger text-white" href="?actionPers=deconnexion">Deconnexion</a>
			</div>
			<?php else: ?>
				<div>
				<a  hidden class="btn text-white" href="?actionPers=acceuil" id="">Acceuil</a>
				<a class="btn text-white" href="?actionPers=inscription" id="">Inscription</a>
				<a class="btn text-white" href="?actionPers=connexion" id="">Connexion</a>
			</div>

			<?php endif ?>

			<!--Button 2 -->			
			<?php if(isset($_SESSION['pers']) && ($_SESSION['role'] =='admin' )): ?>
				<div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
					<ul class="navbar-nav ">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Creer
							</a>
							<ul class="dropdown-menu dropdown-menu-white bg-primary">
								<li><a class="dropdown-item mb-0" href="?actionEq=ajouter">Ajouter Une Equipe</a></li>
								<hr class="mt-0 mb-0 opacity-15">
								<li><a class="dropdown-item" href="?actionR=rencontre">Ajouter une rencontre</a></li>
								<hr class="mt-0 mb-0 opacity-15">
								<li><a class="dropdown-item" href="?actionPers=listes">Liste des clients</a></li>
								<hr class="mt-0 mb-0 opacity-15">

								<li><a class="dropdown-item" href="?actionEq=listes">Liste d'equipes</a></li>
								<li><a hidden class="dropdown-item" href="?actionR=confirmation">confirmation</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<?php endif ?>
		</nav>


	</header>
	<main class="container-fluid">
		<?= $content ?? "" ?>
	</main>

	<footer class="text-white bg-secondary p-4 mt-5 text-center">
		&copy; - Coupe du Monde - 2022
	</footer>

</body>
</html>