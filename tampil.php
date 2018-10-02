<?php
session_start();
$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Semua Data</title>
</head>
<body>
    <table>
        <tr>
            <th align="left" valign="top">Nama</th>
            <td>&nbsp;</td>
            <td valign="top"><?php echo $user["nama"]; ?></td>
            <td rowspan="4">
                <img height="120px" src="uploads/<?php echo $user["gambar"]["name"]; ?>" alt="">
            </td>
        </tr>
        <tr>
            <th align="left" valign="top">Nim</th>
            <td>&nbsp;</td>
            <td valign="top"><?php echo $user["nim"]; ?></td>
        </tr>
        <tr>
            <th align="left" valign="top">Email</th>
            <td>&nbsp;</td>
            <td valign="top"><?php echo $user["email"]; ?></td>
        </tr>
        <tr>
            <th align="left" valign="top">Jenis Kelamin</th>
            <td>&nbsp;</td>
            <td valign="top"><?php echo $user["jk"]; ?></td>
        </tr>
        <tr>
            <th align="left" valign="top">Fakultas</th>
            <td>&nbsp;</td>
            <td valign="top"><?php echo $user["fakultas"]; ?></td>
        </tr>
        <tr>
            <th align="left" valign="top">Program Studi</th>
            <td>&nbsp;</td>
            <td valign="top"><?php echo $user["prodi"]; ?></td>
        </tr>
        <tr>
            <th align="left" valign="top">Hobi</th>
            <td>&nbsp;</td>
            <td valign="top">
                <?php
                   foreach($user["hobi"] as $value) {
                       echo $value . "<br>";
                   }
                ?>
            </td>
        <tr>
    </table>
</body>
</html>