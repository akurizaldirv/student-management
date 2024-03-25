<?php
    require_once("database.php");
    $mahasiswa = new mahasiswa();
    $data = $mahasiswa->read();

    if (isset($_GET["delete"]) && isset($_GET["id"])) {
        if ($_GET["delete"] == "true") {
            $delete = $mahasiswa->delete($_GET["id"]);

            if ($delete > 0) {
                echo "<script>alert('Berhasil Menghapus Data')</script>";
            } else {
                echo "<script>alert('Gagal Menghapus Data')</script>";
            }
            echo "<script>window.location.replace('tampil.php')</script>";
        }   
    }

    if (isset($_POST["post_submit"])) {
        $mahasiswa = new mahasiswa();
        $result = $mahasiswa->create(
            $_POST["nama"],
            $_POST["alamat"],
            $_POST["umur"]
        );
        if ($result > 0) {
            echo "<script>alert('Berhasil Menambahkan Data')</script>";
        } else {
            echo "<script>alert('Gagal Meambahkan Datas')</script>";
        }
        
        echo "<script>window.location.replace('tampil.php')</script>";
    }
?>