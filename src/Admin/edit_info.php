<?php
    require "Secure/session_login.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSKA SMANJA | ADMIN OF OSKA SMANJA</title>
    <link rel="stylesheet" href="../output.css">
    <link rel="shortcut icon" href="../img/logoOska_circle.png" type="image/x-icon">
</head>

<body class="fade-anim bg-gray-100">
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

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                        <li class="group">
                                <a href="/admin/home"
                                    class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Profil</a>
                            </li>
                            <li class="group">
                                <a href="/admin/evaluasi"
                                    class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">
                                    Evaluasi</a>
                            </li>
                            <li class="group">
                                <a href="/admin/update"
                                    class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Perbarui
                                    Informasi</a>
                            </li>
                            <li class="group">
                                <a href="/admin/saran"
                                    class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Kelola
                                    Saran</a>
                            </li>
                            <li class="group">
                                <p
                                    class="text-base py-2 mx-8 flex text-primary">Kelola
                                    Informasi</p>
                            </li>
                            <li class="group">
                                <a href="/admin/event"
                                    class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Kelola
                                    Event</a>
                            </li>
                            <li class="group">
                                <a href="logout.php"
                                    class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Logout</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?php 
        include "../Database/koneksi.php";
        $ambilData = mysqli_query($connect, "select * from information");
    ?>

    <div class="flex items-center justify-center min-h-screen container mx-auto pt-32">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <?php while($tampil = mysqli_fetch_array($ambilData)): ?>
            <div class="rounded-xl shadow-lg mb-10 bg-white">
                <div class="flex items-center justify-center md:mt-5">
                    <img src="img/<?php echo $tampil['Gambar'] ?>" alt="" class="w-auto mx-auto md:w-[75%] md:rounded-xl rounded-md">
                </div>
                <div class="p-5 flex flex-col mx-3 text-center">
                    <h5 class="text-lg font-bold md:text-xl uppercase mt-3 text-slate-600"><?php echo htmlspecialchars($tampil["Judul"]) ?></h5>
                    <p class="text-base font-medium mt-3 text-secondary"><?php echo htmlspecialchars($tampil["Tanggal"]) ?></h5>
                    <p class="mt-3 text-xs font-normal text-slate-400">“<?php echo nl2br(htmlspecialchars_decode(htmlspecialchars($tampil["Deskripsi"]))) ?>”</p>
                    <p class="text-xs font-medium mt-7 text-secondary">Diunggah oleh <span class="text-sm font-medium block"><?php echo htmlspecialchars($tampil["Diunggah_oleh"]) ?></span></h5>
                    <br>
                    <span class="font-medium text-base text-red-300 hover:text-red-100 mb-3 mt-3 text-center">
                        <a href="infoUbah.php?Id=<?php echo $tampil["Id"]?>">Ubah</a>
                    </span>
                    <span class="font-medium text-base text-slate-400"> | </span>
                    <span class="font-medium text-base text-red-300 hover:text-red-100 mb-3 mt-3 text-center">
                        <a href="hapusDataInfo.php?Id=<?php echo $tampil["Id"]?>">Hapus</a>
                    </span>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <script src="../javascript/script.js"></script>
</body>

</html>