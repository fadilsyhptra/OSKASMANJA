<?php

include "../Database/koneksi.php";

$id = $_GET['Id'];

$result = mysqli_query($connect, "SELECT * FROM information WHERE Id = $id");

$row = mysqli_fetch_assoc($result);

$file = $row["Gambar"];

if (unlink("img/" . $file)) {
    echo '
        <script>
            alert("Informasi berhasil dihapus.");
        </script>';
    mysqli_query($connect, "delete from information where Id='$id'");

    header("Location: /admin/informasi");
} else {
    echo '<script>alert("Gagal menghapus file.");</script>';
}