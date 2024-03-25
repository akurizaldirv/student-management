<?php
    include("proses.php");    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="input.php">Input Mahasiswa</a>
    <table border="dash">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($data) != 0) : ?>
                <?php $i = 1 ?>
                <?php foreach ($data as $row): ?>
                    <tr>
                        <td align="center"><?= $i ?></td>
                        <td align="center"><?= $row["nama"] ?></td>
                        <td align="center"><?= $row["alamat"] ?></td>
                        <td align="center"><?= $row["umur"] ?></td>
                        <td align="center"><a href="tampil.php?id=<?= $row["id"] ?>&delete=true">Hapus</a></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" align="center">Data Kosong</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>