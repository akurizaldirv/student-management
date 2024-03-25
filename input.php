<?php
    require("proses.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Mahasiswa</h1>
    <table>
        <form action="" method="POST">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea rows="3" name="alamat" required></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Kirim" name="post_submit">
                    <a href="index.php">...kembali</a>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>