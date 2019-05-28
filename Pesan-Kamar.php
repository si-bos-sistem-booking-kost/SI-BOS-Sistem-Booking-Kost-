<!DOCYTE html>
<html>
<head>
	<tittle> Pemesanan Kamar |	SIBOS<tittle>
</head>

<body>
	<header>
		<h3> Pesan Kamar SIBOS</h3>
	</header>
	<form action="proses-pemesanan.php" method="POST">
		<fieldset>
		<p>
			<label for="ID Kamar">ID Kamar: </label>
			<input type="text" name="ID Kamar" placeholder="ID_Kamar" />	
		</p>
		<p>
			<label for="Harga">Harga: </label>
			<input type="text" name="Harga" placeholder="Harga" />	
		</p>
		<p>
		<label for="Durasi">Durasi: </label>
			<input type="text" name="Durasi" placeholder="Durasi" />
		</p>
		<p>		
			<input type="submit" value="Pesan" name="Pesan" />
		</p>
		</fieldset>
	</form>
	</body>
</html>	