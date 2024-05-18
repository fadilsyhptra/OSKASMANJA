<?php
    require "../Secure/session_login.php";
    require "../../Database/koneksi.php";
    if(isset($_POST['connect_regist'])){
        if(registrasi($_POST) > 0){
            echo '
                <script>
                    alert("Akun berhasil dibuat.");
                </script>';
        } else {
            echo mysqli_error($connect);
        }
    }
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSKA SMANJA | ADMIN REGISTER OF OSKA SMANJA</title>
    <link rel="stylesheet" href="../../output.css">
    <link rel="shortcut icon" href="../../img/logoOska_circle.png" type="image/x-icon">
</head>

<body class="bg-gray-100 fade-anim">
    <div class="mx-4">
        <div class="mx-auto max-w-md pt-10">
            <div class="bg-white shadow-md rounded-lg px-7 md:px-10 pt-6 pb-8 mb-4">
                <h1 class="text-2xl font-bold mb-6 mt-3 text-center text-dark">REGISTER</h1>
                <form action="" method="post">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_lengkap">
                            Nama Lengkap
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="nama_lengkap" type="text" placeholder="Nama Lengkap" name="nama_lengkap">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Username
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="username" type="text" placeholder="Username" name="username">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="password" type="password" placeholder="********" name="password">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm_password">
                            Konfirmasi Password
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="confirm_password" type="password" placeholder="********" name="confirm_password">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="jabatan">
                            Jabatan
                        </label>
                        <select
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="jabatan" placeholder="Pilih Jabatan Anda" name="jabatan">
                            <option value="" disabled selected>Pilih Jabatan Anda</option>
                            <option value="Ketua MPK">Ketua MPK</option>
                            <option value="Ketua OSIS">Ketua OSIS</option>
                            <option value="Wakil Ketua MPK">Wakil Ketua MPK</option>
                            <option value="Wakil Ketua OSIS">Wakil Ketua OSIS</option>
                            <option value="Sekretaris MPK">Sekretaris MPK</option>
                            <option value="Sekretaris OSIS">Sekretaris OSIS</option>
                            <option value="Bendahara MPK">Bendahara MPK</option>
                            <option value="Bendahara OSIS">Bendahara OSIS</option>
                            <option value="Komisi 1 (MPK)">Komisi 1 (MPK)</option>
                            <option value="Komisi 2 (MPK)">Komisi 2 (MPK)</option>
                            <option value="Komisi 3 (MPK)">Komisi 3 (MPK)</option>
                            <option value="Komisi 4 (MPK)">Komisi 4 (MPK)</option>
                            <option value="Sekbid 1">Sekbid 1</option>
                            <option value="Sekbid 2">Sekbid 2</option>
                            <option value="Sekbid 3">Sekbid 3</option>
                            <option value="Sekbid 4">Sekbid 4</option>
                            <option value="Sekbid 5">Sekbid 5</option>
                            <option value="Sekbid 6">Sekbid 6</option>
                            <option value="Sekbid 7">Sekbid 7</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <input
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500s"
                            type="submit" name="connect_regist" value="Daftar">
                    </div>
                    <div class="flex items-center justify-center mb-3">
                        <p class="text-gray-600 text-sm">Sudah punya akun? <span class="text-blue-500"><a href="/admin/login">Login sekarang</a></span></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>