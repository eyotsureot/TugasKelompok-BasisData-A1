<!DOCTYPE html>
<html>
	<head>	
		<meta charset = "utf-8">
		<title>Melihat Rekap Pendaftaran</title>
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
					<h2>Form Pemilihan Jenjang</h2>
					<form class="form" method="" action="hasil-rekap-pendaftaran.html">
						<p style="display:inline">Periode:</p>
						<select name="periode" id="periode">
							<option value="1-2016">1-2016</option>
							<option value="2-2016">2-2016</option>
							<option value="3-2016">3-2016</option>
							<option value="1-2017">1-2017</option>
							<option value="2-2017">2-2017</option>
						</select>
						<br>
						<p style="display:inline">Jenjang:</p>
						<select name="jenjang" id="jenjang">
							<option value="S1">S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
						</select>
						<br>
						<button>Pilih</button>
					</form>
				</div>
			</div>
		</div>

	</body>
</html>
