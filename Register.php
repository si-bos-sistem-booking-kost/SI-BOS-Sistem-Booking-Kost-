<?php

include("config.php");
//cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){
	//ambil data dari formulir
	$ID_Owner = $_POST['ID Owner'];
	$Nama_Owner = $_POST['Nama Owner'];
	$Alamat = $_POST['Alamat'];
	$No_HP = $_POST['No HP'];
	$No_Rekening = $_POST['No rekening'];
	$Email = $_POST['Email'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	//buat query
	$sql = "INSERT INTO calon_siswa (ID Owner, Nama Owner, Alamat, No HP, No Rekening, Email, Username, Password) VALUE ('$ID_Owner', '$Nama_Owner', '$Alamat', '$No_HP', '$No_Rekening', '$Email', '$Username', '$Password'
	//apakah query simpan berhasil
	if( $query ) {
		//kalau berhasil alihkan ke halaman index.php dengan status+sukses
		header('Location: index.php?status=sukses');
	} else {
		//kalau gagal alihkan ke halaman index.php dengan status=gagal
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}
?>