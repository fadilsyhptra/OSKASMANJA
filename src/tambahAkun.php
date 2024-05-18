<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="sandi">
    <input type="submit" name="konek">
</form>

<?php
include "Database/koneksi.php";

if (isset($_POST['konek'])) {
    mysqli_query($connect, "insert into login set
        Username = '$_POST[name]',
        Password = '$_POST[sandi]'");

    echo '
                <script>
                    alert("Akun berhasil dibuat.");
                </script>';
}
?>