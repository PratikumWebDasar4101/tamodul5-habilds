<?php
session_start();
if(!isset($_SESSION["user"])) {
    echo "<p style='font-size: 20px;text-align: center'>Silahkan registrasi terlebih dahulu</p>";
	echo "<p style='font-size: 20px;text-align: center'><a href='registrasi.php'>klik link ini untuk registrasi</a></p>";
}else if(isset($_SESSION["logged_in"])){
    echo "<p style='font-size: 20px;text-align: center'>Anda telah login, untuk apa login lagi?</p>";
	echo "<p style='font-size: 20px;text-align: center'><a href='tampil.php'>klik link ini untuk melanjutkan</a></p>";
}else {
    if(isset($_SESSION["pesan_login"])) {
        $pesan_login = $_SESSION["pesan_login"];
    }else {
        $pesan_login = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="proseslogin.php" method="post">
        <h2 align="center">Silahkan Login untuk melihat data</h2>
        <?php if(isset($_SESSION["pesan_login"])) { ?>
        <p align="center"><?php echo $pesan_login; ?></p>
        <?php } ?>
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
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><center><input type="submit" name="submit" value="login"></center></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php unset($_SESSION["pesan_login"]); } ?>
