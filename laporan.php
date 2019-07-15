<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="css/style.css">


	<title>Finance</title>
</head>

<body style="background-color: teal; color: white">

	<div class="navbar-fixed">
		<nav class="no-shadow">
			<div class="nav-wrapper container">
				<a href="#" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="index.php">Home</a></li>
					<li><a href="input-transaksi.php">Input Transaksi</a></li>
					<li><a href="validasi.php">Validasi</a></li>
					<li class="active"><a class='dropdown-trigger' href='#' data-target='dropdown1'>Laporan</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="container">

		<!-- Dropdown Structure -->
		<ul id='dropdown1' class='dropdown-content'>
			<li><a href="#!">Buku Besar</a></li>
			<li><a href="#!">Jurnal Umum</a></li>
			<li><a href="#!">Laba Rugi</a></li>
			<li><a href="#!">Neraca</a></li>
			<li><a href="#!">Prive</a></li>
		</ul>


	</div>


	<script src="node_modules\materialize-css\dist\js\materialize.js">
	</script>
	<script src="js/index.js"></script>
</body>

</html>
