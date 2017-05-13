<!DOCTYPE html>
<html>
	<head>	
		<meta charset = "utf-8">
		<title>Daftar Pelamar Diterima</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link id="general_theme" rel="stylesheet" type = "text/css" href = "css/style.css"/>
		<link type = "text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
	</head>

	<body style="overflow-x: hidden">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">SIRIMA</a>
				</div>
			</div>
		</nav>
		<div class="outer">
			<div class="middle">
				<div class="inner">
					<h2>Form Pemilihan Prodi</h2>
					<form class="form" method="" action="hasil-daftar-pelamar-diterima.html">
						<p style="display:inline">Periode:</p>
						<select name="periode" id="periode">
							<option value="1-2016">1-2016</option>
							<option value="2-2016">2-2016</option>
							<option value="3-2016">3-2016</option>
							<option value="1-2017">1-2017</option>
							<option value="2-2017">2-2017</option>
						</select>
						<br>
						<p style="display:inline">Prodi:</p>
						<select name="prodi" id="prodi">
							<option value="S1 Ilmu Komputer Reguler">S1 Ilmu Komputer Reguler</option>
							<option value="S1 Ilmu Komputer Paralel">S1 Ilmu Komputer Paralel</option>
							<option value="S1 Sistem Informasi Reguler">S1 Sistem Informasi Reguler</option>
							<option value="S1 Sistem Informasi Reguler">S1 Sistem Informasi Paralel</option>
						</select>
						<br>
						<button>Pilih</button>
					</form>
				</div>
			</div>
		</div>

	</body>
</html>
