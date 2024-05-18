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

<body class="fade-anim bg-slate-100">
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
                                <p class="text-base py-2 mx-8 flex text-primary">Kelola Saran</p>
                            </li>
                            <li class="group">
                                <a href="/admin/informasi"
                                    class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Kelola
                                    Informasi</a>
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
        $ambilData = mysqli_query($connect, "select * from saran");
    ?>

    <div class="flex items-center justify-center min-h-screen container mx-auto pt-32">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <?php while($tampil = mysqli_fetch_array($ambilData)): ?>
            <div class="rounded-xl shadow-lg mb-10 bg-white mx-3">
                <div class="p-5 flex flex-col mx-3">
                    <h5 class="text-lg font-semibold md:text-xl uppercase mt-3 text-slate-600">Nama : <?php echo htmlspecialchars($tampil["Nama"]) ?></h5>
                    <p class="text-base font-medium mt-3 text-secondary">Kelas : <?php echo htmlspecialchars($tampil["Kelas"]) ?></h5>
                    <p class="mt-3 text-xs font-normal text-slate-400">“<?php echo htmlspecialchars($tampil["Saran"]) ?>”</p>
                    <p class="font-medium text-base text-red-300 hover:text-red-100 text-justify mb-3 mt-3">
                        <a href="../hapusDataSaran.php?Id=<?php echo $tampil["Id"]?>">Hapus</a>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script src="../javascript/script.js"></script>
</body>

</html>