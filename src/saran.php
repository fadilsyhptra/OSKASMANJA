<?php
        include "Database/koneksi.php";

        if(isset($_POST['Process'])){
            $nama = mysqli_real_escape_string($connect, $_POST['nama']);
            $kelas = mysqli_real_escape_string($connect, $_POST['kelas']);
            $saran = mysqli_real_escape_string($connect, $_POST['saran']);

            $nama_trimed = trim($nama);
            $kelas_trimed = trim($kelas);
            $saran_trimed = trim($saran);

            if(empty($nama_trimed) || empty($kelas_trimed) || empty($saran_trimed)){
                echo '
                    <script>
                        alert("Input tidak boleh kosong.");
                    </script>';
            } else {
                mysqli_query($connect, "insert into saran set
                    Nama = '$nama',
                    Kelas = '$kelas',
                    Saran = '$saran'");

                echo '
                    <script>
                        alert("Pesan berhasil dikirim.");
                    </script>';
            }
        }
    ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSKA SMANJA | SUGGESTION PAGE OF OSKA SMANJA</title>
    <link rel="stylesheet" href="/src/output.css">
    <link rel="shortcut icon" href="/src/img/logoOska_circle.png" type="image/x-icon">
</head>
<body class="bg-gray-100 fade-anim">
<body class="fade-anim">
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <p class="font-bold text-lg text-primary block py-6">OSKA SMANJA</p>
                </div>

                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/" class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="/program-kerja" class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Program Kerja</a>
                            </li>
                            <li class="group">
                                <a href="/event" class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Event</a>
                            </li>
                            <li class="group">
                                <p class="text-base py-2 mx-8 flex text-primary">Saran</a>
                            </li>
                            <li class="group">
                                <a href="/visi-misi" class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Visi & Misi</a>
                            </li>
                            <li class="group">
                                <a href="/informasi" class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Informasi</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="mx-4 pt-[5.5rem] mb-5">
        <div class="mx-auto max-w-md pt-8">
            <div class="bg-white shadow-md rounded-lg px-7 md:px-10 pt-6 pb-8 mb-2">
                <h1 class="text-2xl font-bold mb-3 mt-3 text-center text-dark">KRITIK & SARAN</h1>
                <p class="text-slate-400 text-center mb-4 text-xs">Jika tidak ingin diketahui, cukup isi dengan <br>" - "</p>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                            Nama
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="nama" type="text" placeholder="Nama" name="nama">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="kelas">
                            Kelas
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="kelas" type="text" placeholder="Tambahkan kelas"
                            name="kelas">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="saran">
                            Kritik & Saran
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="saran" type="text" name="saran" placeholder="Tambahkan kritik & saran"></textarea>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                        <input
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500s"
                            type="submit" value="kirim" name="Process">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="javascript/script.js"></script>
</body>
</html>