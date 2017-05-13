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
					<h2>Lihat Pelamar Diterima</h2>
					<br><br>
					<p style="display:inline">Prodi: S1 Ilmu Komputer Reguler</p><br>
					<table>
						<tr>
							<th>ID Pendaftaran</th>
							<th>Nama Lengkap</th>
							<th>Alamat</th>
							<th>Jenis Kelamin</th>
							<th>Tanggal Lahir</th>
							<th>No KTP</th>
							<th>Emai;</th>
						</tr>
						<tr>
							<td>1234</td>
							<td>Tania Putri</td>
							<td>Jl. Cendrawasih 2, Depok</td>
							<td>Perempuan</td>
							<td>2 Desember 1997</td>
							<td>1234543234565432</td>
							<td>tania@gmail.com</td>
						</tr>
						<tr>
							<td>5678</td>
							<td>Budi Baskara</td>
							<td>Jl. Veteran 15, Jakarta</td>
							<td>Laki-Laki</td>
							<td>15 November 1997</td>
							<td>5676567643454234</td>
							<td>budi@gmail.com</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

	</body>
</html>
