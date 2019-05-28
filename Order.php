<!DOCYTE html>
<html>
<head>
	<tittle>Formulir Order |	SIBOS<tittle>
</head>

<body>
	<header>
		<h3>Formulir Order SIBOS</h3>
	</header>
	<form action="proses-pendaftaran.php" method="POST">
		<fieldset>
		<p>
			<label for="ID_Order">ID Order: </label>
			<input type="text" name="ID_Order" placeholder="ID_Order" />	
		</p>
		<p>
			<label for="Tanggal_Order">Tanggal Order: </label>
			<input type="text" name="Tanggal_Order" placeholder="Tanggal_Order" />	
		</p>
		<p>
			<label for="ID_User">ID User: </label>
			<input type="text" name="ID_User" placeholder="ID_User" />
		</p>
		<p>
			<label for="ID_Kamar">ID Kamar: </label>
			<input type="text" name="ID_Kamar" placeholder="ID_Kamar" />
		</p>
		<p>	
			<label for="Status_Pembayaran">Status Pembayaran: </label>
			<input type="text" name="Status_Pembayaran" placeholder="Status_Pembayaran" />
		<input type="submit" value="Daftar" name="daftar" />
		</p>
		</fieldset>
	</form>
	</body>
</html>	
		