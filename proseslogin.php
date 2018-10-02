<?php
session_start();
if(isset($_POST["submit"])) {
    $user = $_SESSION["user"];
    $data = array(
        $user["username"] => $user["password"]
    );

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!isset($data[$username]) || $data[$username] != $password) {
        $_SESSION["pesan_login"] = "Username atau password salah atau tidak ditemukan";
        header("Location: login.php");
    }else {
        header("Location: tampil.php");
        $_SESSION["logged_in"] = true;
    }
}else {
    header("Location: login.php");
}
?>
