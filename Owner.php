<!DOCYTE html>
<html>
<head>
	<tittle>Formulir Pendaftaran |	SIBOS<tittle>
</head>

<body>
	<header>
		<h3>Formulir Owner SIBOS</h3>
	</header>
	<form action="proses-pendaftaran.php" method="POST">
		<fieldset>
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="Nama Lengkap" />	
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="No_HP">No HP: </label>
			<input type="text" name="No_HP" placeholder="No_HP" />
		</p>
		<p>
			<label for="No_Rekening">No Rekening: </label>
			<input type="text" name="No_Rekening" placeholder="No_Rekening" />
		</p>
		<p>	
			<label for="Email">Email: </label>
			<input type="text" name="Email" placeholder="Email" />
		</p>
		<p>	
			<label for="Username">Username: </label>
			<input type="text" name="Username" placeholder="Username" />
		</p>
		<p>	
			<label for="Password">Password: </label>
			<input type="text" name="Password" placeholder="Password" />
		</p>
		<p>		
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		</fieldset>
	</form>
	</body>
</html>	