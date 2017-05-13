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
					<style>
						table {
						    font-family: arial, sans-serif;
						    border-collapse: collapse;
						    width: 80%;
						    position: fixed;
						    left: 10%;
						}

						td, th {
    						border: 1px solid #dddddd;
    						text-align: left;
    						padding: 8px;
						}

						tr:nth-child(even) {
    						background-color: #dddddd;
						}
						p {
							position: fixed;
							left: 10%;
						}
					</style>
					<h2>Rekap Pendaftaran</h2>
					<br><br>
					<p style="display:inline">Jenjang: S1</p><br>
					<table>
						<tr>
							<th>Nama Prodi</th>
							<th>Jenis Kelas</th>
							<th>Nama Fakultas</th>
							<th>Kuota</th>
							<th>Jumlah Pelamar</th>
							<th>Jumlah Diterima</th>
						</tr>
						<tr>
							<td>Ilmu Komputer</td>
							<td>Reguler</td>
							<td>Ilmu Komputer</td>
							<td>110</td>
							<td>400</td>
							<td>110</td>
						</tr>
						<tr>
							<td>Teknik Industri</td>
							<td>Paralel</td>
							<td>Teknik</td>
							<td>140</td>
							<td>200</td>
							<td>58</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

	</body>
</html>
