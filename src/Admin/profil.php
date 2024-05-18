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
</head>

<body class="fade-anim bg-gray-100 bg-no-repeat bg-cover bg-center"  style="background-image: url('../img/lapangan.jpg');">
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 bg-white">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <p class="font-bold text-lg text-primary block py-6" style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);">OSKA SMANJA</p>
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
                                <p class="text-base py-2 mx-8 flex text-primary">Profil</p>
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

    <div class="flex justify-center min-h-screen container mx-auto pt-32">
        <div class="grid-cols-2">
            <div class="rounded-xl shadow-lg bg-white">
                <div class="p-5 mx-3 text-center">
                    <center>
                        <img src="img/profile.png" alt="" class="mb-6 mt-6">
                    </center>
                    <h5 class="text-base font-bold md:text-xl uppercase mt-3 text-slate-600"><?php echo $_COOKIE['Key1'] ?></h5>
                    <p class="text-xs md:text-sm font-medium mt-3 text-slate-400">No Akun : <?php echo $_COOKIE['Id'] ?></h5>
                    <p class="text-xs md:text-sm font-medium mt-3 text-slate-500">Username : <?php echo $_COOKIE['Key2'] ?></h5>
                    <p class="text-xs md:text-sm font-medium mt-[0.40rem] text-slate-500">Jabatan : <?php echo $_COOKIE['Key3'] ?></h5>
                        <br><br>
                    <div class="mb-4 text-slate-500">
                        <span>
                            <a href="logout.php"
                                class="text-xs md:text-sm font-medium text-red-300 hover:text-red-500 text-justify mt-3">Logout</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../javascript/script.js"></script>
</body>

</html>