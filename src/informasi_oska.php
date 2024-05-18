<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSKA SMANJA | INFORMATION OF OSKA SMANJA</title>
    <link rel="stylesheet" href="/src/output.css">
    <link rel="shortcut icon" href="/src/img/logoOska_circle.png" type="image/x-icon">
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
                                <a href="/saran" class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Saran</a>
                            </li>
                            <li class="group">
                                <a href="/visi-misi" class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Visi & Misi</a>
                            </li>
                            <li class="group">
                                <p class="text-base  py-2 mx-8 flex text-primary">Informasi</p>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?php 
        include "Database/koneksi.php";
        $ambilData = mysqli_query($connect, "select * from information");
    ?>

    <div class="flex items-center justify-center min-h-screen container mx-auto pt-32">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <?php while($tampil = mysqli_fetch_array($ambilData)): ?>
            <div class="rounded-xl shadow-lg mb-10 bg-white mx-3">
                <div class="flex items-center justify-center md:mt-5">
                    <img src="Admin/img/<?php echo $tampil['Gambar'] ?>" alt="" class="w-auto mx-auto md:w-[75%] md:rounded-xl rounded-md">
                </div>
                <div class="p-5 flex flex-col mx-3 text-center">
                    <h5 class="text-lg font-bold md:text-xl uppercase mt-3 text-slate-600"><?php echo htmlspecialchars($tampil["Judul"]) ?></h5>
                    <p class="text-base font-medium mt-3 text-secondary"><?php echo htmlspecialchars($tampil["Tanggal"]) ?></h5>
                    <p class="mt-3 text-xs font-normal text-slate-400">“<?php echo htmlspecialchars($tampil["Deskripsi"]) ?>”</p>
                    <p class="text-xs font-medium mt-5 mb-5 text-secondary">Diunggah Oleh <span class="text-sm font-medium block"><?php echo htmlspecialchars($tampil["Diunggah_oleh"]) ?></span></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script src="javascript/script.js"></script>
</body>

</html>