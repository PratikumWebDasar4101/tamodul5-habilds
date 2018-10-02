<?php 
session_start();
if (isset($_POST["submit"])) {
	$user = array(
		"username" 	=> $_POST["username"],
		"password" 	=> $_POST["password"],
		"nama"		=> $_POST["nama"],
		"nim"		=> $_POST["nim"],
		"email"		=> $_POST["email"],
		"jk"		=> $_POST["jk"],
		"fakultas"	=> $_POST["fakultas"],
		"prodi"		=> $_POST["prodi"],
		"hobi"		=> $_POST["hobi"],
		"gambar"	=> $_FILES["image"]
	);

	$nama_file = $user["gambar"]["name"];
	$nama_file_tmp = $user["gambar"]["tmp_name"];
	$dir = "uploads/";
	$simpan = $dir . $nama_file;

	$inputlagi = "<br><a href='registrasi.php'>Input Lagi</a>";
	$br = "<br>";
	if (strlen($user["nama"]) > 25 || $user["nama"] == "") {
		$_SESSION["pesan_nama"] = "Nama tidak boleh lebih dari 25 huruf.";
		header("Location: registrasi.php");
	}
	if (!is_numeric($user["nim"]) || strlen((string)$user["nim"]) > 10) {
		$_SESSION["pesan_nim"] = "Nim harus angka dan tidak lebih dari 10 digit.";
		header("Location: registrasi.php");
	}
	if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $user["email"])) {
		$_SESSION["pesan_email"] = "Format email salah!";
		header("Location: registrasi.php");
	}else {
		move_uploaded_file($nama_file_tmp, $simpan);
		$_SESSION["user"] = $user;
		header("Location: login.php");
	}
}else {
	header("Location: registrasi.php");
}
?>
