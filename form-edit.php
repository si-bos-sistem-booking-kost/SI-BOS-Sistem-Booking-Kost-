<?php
include ("config.php");
//kalau tidak ada id di query string
if (!isset($_GET['id'])) {
	header('Location: list-siswa.php');
}
//ambil id dari query string
$id = $_GET['id'];
//buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
//jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query)<1) {
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulir Register | SIBOS</title>
</head>
<body>
	<header>
		<h3>Formulir Edit SIBOS</h3>
	</header>
	<form action="proses-edit.php" method="POST">
		<fieldset>
		<input type="hidden" name="id" value="<?php echo $user['id'] ?>" />
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $user['nama'] ?>" />
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<?php $jk = $siswa['jenis_kelamin']; ?>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php
			echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php
			echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"><?php echo $user['alamat'] ?></textarea>
		</p>
		<p>
			<label for="No_HP">No HP: </label>
			<textarea name="No_HP"><?php echo $user['No HP'] ?></textarea>
		</p>
		<p>
			<label for="No_Rekening">No Rekening: </label>
			<input type="text" name="No_Rekening" placeholder="No Rekening" value="<?php echo $user['No_Rekening'] ?>" />
		</p>
		<p>
			<label for="Email">Email: </label>
			<textarea name="Email"><?php echo $user['Email'] ?></textarea>
		</p>
		<p>
			<label for="Username">Username: </label>
			<textarea name="Username"><?php echo $user['Username'] ?></textarea>
		</p>
		<p>
			<input type="submit" value="simpan" name="simpan" />
		</p>
		</fieldset>
	<form>
	</body>
<html>