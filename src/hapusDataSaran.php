<?php

include "Database/koneksi.php";

$id = $_GET['Id'];

mysqli_query($connect, "delete from saran where Id='$id'");

echo '
    <script>
        alert("Pesan berhasil dihapus.");
    </script>';

header("Location: /admin/saran");
exit;