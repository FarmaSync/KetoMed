<?php 
//connect to db
$servername = "185.224.137.5";
$username = "u219831890_ketobeheer";
$password = "Admin_admin1";
$databaseName = "u219831890_ketomed";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databaseName);
// Check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error(); 
}
?>



<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>KetoMed</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- theme meta -->
  <meta name="theme-name" content="KetoMed" />

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<!--Favicon-->
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Main Stylesheet -->
	<link href="assets/style.css" rel="stylesheet" media="screen" />

	<!-- Own CSS-->
	


</head>

<body>

	<!-- header -->
	<header class="banner overlay bg-cover" data-background="images/banner.jpg">
		<nav class="navbar navbar-expand-md navbar-dark">
			<div class="container">
				<a class="navbar-brand px-2" href="index.php">KetoMed</a>
				<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
					aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse text-center" id="navigation">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link text-dark" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="faq.html">Faq</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="contact.html">contact</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>
		<!-- banner -->

			<div class="container section">
				<div class="row">
					<div class="col-lg-8 text-center mx-auto">
						<h1 class="text-white mb-3">Is uw geneesmiddel KetoProof?</h1>
						<p class="text-white mb-4">Voor welk geneesmiddel zoekt u een KetoProof preparaat?</p>
						<div class="position-relative">
						
							<form id="main_form" method="GET" action="results.php">
								<!-- searchbar-->
								
							<div class="input-group">
								<input name = "drug" type="search" id="search" class="form-control"
									style="overflow: hidden; text-overflow: ellipsis;"
									placeholder="Typ hier de naam van het geneesmiddel (bijv. 'paracetamol')">
								<span class="input-group-append">
									<button type = "submit" class="btn bg-white">
										<i class="ti-search search-icon"></i>
									</button>					
								</span>
							</div>					
																		
								
								<!-- Uitsluitend recept-->
								<div class="form-check-inline text-white mt-3">
									<input name = "UR" class="form-check-input" type="checkbox" value="ja" id="uitsluitend_recept">
									<label class="form-check-label" for="uitsluitend_recept">
										Uitsluitend recept
									</label>
								</div>
								<!--ETHANOL-->
								<div class="form-check-inline text-white">
									<input name = "ethanol" class="form-check-input" type="checkbox" value="nee" id="ethanol">
									<label class="form-check-label" for="ethanol">
										Bevat geen ethanol
									</label>
								</div>
			
								<!--Farmaceutische vorm-->
								<div class="form-inline text-white mb-4 mt-4">
									<label for="farmaceutische_vorm">Farmaceutische vorm: </label>
									<select name="F_vorm" class="form-control ml-2" id="farmaceutische_vorm">
										<option value="">Maakt niet uit</option>
										<option value="tablet">Tablet</option>
										<option value="drank">Drank</option>
										<option value="suspensie">Suspensie</option>
										<option value="vloeistof_voor_infusie">Vloeistof voor infusie</option>
										<option>...</option>
									</select>
								</div>
								
								<!--Toedienwegen-->
								<div class="form-inline text-white mb-4 mt-4">
									<label for="exampleFormControlSelect1">Toedienweg: </label>
									<select name = "T_weg" class="form-control ml-2" id="exampleFormControlSelect1">
										<option value="">Maakt niet uit</option>
										<option value="oraal">Oraal</option>
										<option value="intraveneus">Intraveneus</option>
										<option>...</option>
									</select>
			
								</div>
		
							</form>
						</div>
					</div>
				</div>
		
			</div>
		


		<!-- /banner -->
	</header>
	<!-- /header -->

	<!-- call to action -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section px-3 bg-white shadow text-center">
						<h2 class="mb-4">Heeft u vragen/opmerkingen over KetoMed of wilt u graag een bijdrage leveren?</h2>
						<a href="contact.html" class="btn btn-primary">Neem contact op</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /call to action -->

	<!-- footer -->
	<footer class="section pb-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 text-md-left text-center">
					<p class="mb-md-0 mb-4">Copyright © 2022 Designed and Developed by <a
							href="https://farmasync.nl">FarmaSync</a></p>
				</div>
				<div class="col-md-4 text-md-right text-center">
					<ul class="list-inline">
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-facebook"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-twitter-alt"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i class="ti-github"></i></a>
						</li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- /footer -->

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="assets/script.js"></script>
</body>

</html>