<?php
session_start();
if(isset($_SESSION["pesan_nama"]) || isset($_SESSION["pesan_nim"]) || isset($_SESSION["pesan_email"])) {
    if(isset($_SESSION["pesan_nama"])) {
        $pesan_nama = $_SESSION["pesan_nama"];
    }else {
        $pesan_nama = "";
    }
    if(isset($_SESSION["pesan_nim"])) {
        $pesan_nim = $_SESSION["pesan_nim"];
    }else {
        $pesan_nim = "";
    }
    if(isset($_SESSION["pesan_email"])) {
        $pesan_email = $_SESSION["pesan_email"];
    }else {
        $pesan_email = "";
    }
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Registrasi</title>
    <style type="text/css">
        th {
            text-align: left;
        }
        input[type=text] , select{
            width: 100%;
        }
    </style>
</head>
<body>
    <h2 align="center">Form Registrasi</h2>
    <form action="prosesregis.php" method="post" enctype="multipart/form-data">
		<table align="center">
            <tr>
                <th>Username</th>
            </tr>
            <tr>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <th>Password</th>
            </tr>
            <tr>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
				<th>Nama</th>
			</tr>
			<tr>
				<td><input type="text" name="nama"></td>
            </tr>
            <?php if(isset($_SESSION["pesan_nama"])) { ?>
            <tr>
                <td><p style="color: red;"><?php echo $pesan_nama ?></p></td>
            </tr>
            <?php } ?>
			<tr>
				<th>Nim</th>
			</tr>
			<tr>
				<td><input type="text" name="nim"></td>
            </tr>
            <?php if(isset($_SESSION["pesan_nim"])) { ?>
            <tr>
                <td><p style="color: red;"><?php echo $pesan_nim ?></p></td>
            </tr>
            <?php } ?>
			<tr>
				<th>Email</th>
			</tr>
			<tr>
				<td><input type="text" name="email"></td>
            </tr>
            <?php if(isset($_SESSION["pesan_email"])) { ?>
            <tr>
                <td><p style="color: red;"><?php echo $pesan_email ?></p></td>
            </tr>
            <?php } ?>
            <tr>
                <th>Jenis Kelamin</th>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <th>Fakultas</th>
            </tr>
            <tr>
                <td>
                    <select name="fakultas">
                        <option value="Ilmu Terapan">Ilmu Terapan</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Elektro">Elektro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Program Studi</th>
            </tr>
            <tr>
                <td>
                    <select name="prodi">
                        <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                        <option value="D3 Informatika">D3 Informatika</option>
                        <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Hobi</th>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="hobi[]" value="Musik">Musik<br>
                    <input type="checkbox" name="hobi[]" value="Seni">Seni<br>
                    <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga<br>
                    <input type="checkbox" name="hobi[]" value="Teknologi">Teknologi<br>
                </td>
            </tr>
            <tr>
                <th>Upload Foto</th>
            </tr>
            <tr>
                <td><input type="file" name="image" id="image"></td>
            </tr>
			<tr>
				<td><input type="submit" name="submit" value="Kirim"></td>
			</tr>
		</table>
	</form>
</body>
</html>
