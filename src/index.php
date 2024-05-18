<?php
    include "Database/koneksi.php";

    $sql = mysqli_query($connect, "SELECT * FROM event");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSKA SMANJA | OFFICIAL WEBSITE OF OSKA SMANJA</title>
    <link rel="stylesheet" href="/src/output.css">
    <link rel="shortcut icon" href="/src/img/logoOska_circle.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="fade-anim">
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
                            <li class="group" style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);">
                                <p class="text-base py-2 mx-8 flex text-primary">Beranda</p>
                            </li>
                            <li class="group" style="text-shadow: 4px 4px 8px rgba(255, 255, 255, 0.5);">
                                <a href="/program-kerja" class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Program
                                    Kerja</a>
                            </li>
                            <li class="group" style="text-shadow: 4px 4px 8px rgba(255, 255, 255, 0.5);">
                                <a href="/event"
                                    class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Event</a>
                            </li>
                            <li class="group" style="text-shadow: 4px 4px 8px rgba(255, 255, 255, 0.5);">
                                <a href="/saran"
                                    class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Saran</a>
                            </li>
                            <li class="group" style="text-shadow: 4px 4px 8px rgba(255, 255, 255, 0.5);">
                                <a href="/visi-misi"
                                    class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Visi & Misi</a>
                            </li>
                            <li class="group" style="text-shadow: 4px 4px 8px rgba(255, 255, 255, 0.5);">
                                <a href="/informasi"
                                    class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Informasi</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section id="home" class="pt-36 pb-12 relative min-h-screen bg-cover bg-no-repeat bg-center"
        style="background-image: url('img/lapangan.jpg');">
        <div class="absolute z-[1] w-[20%] h-[40%] rounded-full gradientB bottom-10"></div>
        <div class="absolute z-[0] w-[40%] h-[30%] right-20 bottom-20 gradientC"></div>
        <div class="container">
            <div class="hidden md:flex flex-wrap">
                    <div class="w-full self-center lg:w-1/2">
                        <!-- <h1 class="text-base text-lime-700 lg:text-lg mb-2 font-semibold">Selamat Datang <span class="text-teal-700">Di</span> <span class="text-amber-400">Website Official</span></h1> -->
                        <h1 class="font-extrabold mt-10 text-white mb-4 text-6xl"
                            style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 1);">OSKA SMANJA</h1>
                        <h4 class="font-bold text-white text-xl mb-4"
                            style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 1);">&#40; OSIS & MPK SMAN 1 Jatiluhur &#41;</h2>
                        <p class="font-semibold text-white mb-10 leading-relaxed text-xs"
                            style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 1);">Jl. Pramuka No.138, Bunder, Kec. Jatiluhur,
                            Kabupaten Purwakarta, Jawa Barat</p>

                        <button
                            class="text base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">
                            <a href="https://www.instagram.com/oskasmanja/">Hubungi Kami</a>
                        </button>
                    </div>
                    <div class="w-full self-end px-4 lg:w-1/2">
                        <div class="relative mt-10 lg:mt-9 lg:right-0 hidden lg:block">
                            <img src="img/logoOska_circle.png" alt="Logo OSKA SMANJA" class="mx-auto" width="350px"
                                height="350px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:hidden mx-2">
            <center>
                <br><br>
                <h1 class="font-extrabold mt-6 text-white mb-2 text-4xl sm:text-6xl"
                            style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 1);">OSKA SMANJA</h1>
                <h1 class="font-bold mt-6 text-white mb-6 text-sm sm:text-xl"
                            style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 1);">OSIS & MPK SMAN 1 JATILUHUR</h1>
                <button
                    class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-md hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out border-black"  style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5);">
                        <a href="https://www.instagram.com/oskasmanja/">Hubungi Kami</a>
                </button>
            </center>
        </div>
        <div class="flex justify-center">
            <span class="material-symbols-outlined absolute bottom-0 mb-[4.5rem] bg-white rounded-full opacity-55">
                <a href="#about">expand_more</a>
            </span>
        </div>
    </section>


    </section>
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang OSKA SMANJA</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md">Yuk, Kenalan lebih jauh dengan OSKA SMANJA!
                    </h2>
                    <p class="font-medium text-secondary text-xs mb-5 lg:text-sm max-w-xl text-justify">Yuk, mari kita
                        kenali lebih dalam tentang OSIS (Organisasi Siswa Intra Sekolah) dan MPK (Majelis Perwakilan
                        Kelas) di SMAN 1 Jatiluhur! Dua lembaga ini menjadi tonggak utama dalam membangun kepemimpinan,
                        pengembangan potensi, dan pemberdayaan siswa di sekolah ini. Melalui beragam kegiatan dan
                        program, OSIS dan MPK tidak hanya menjadi wadah untuk suara dan aspirasi siswa, tetapi juga
                        menjadi pembentukan karakter, kolaborasi, serta semangat kebersamaan di antara siswa.</p>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-bold text-dark text-2xl mb-5 max-w-md pt-11">Pesan dari Ketua OSIS dan MPK <span
                            class="lg:block">SMAN 1 Jatiluhur</span></h3>
                    <p class="font-medium text-secondary text-xs mb-5 lg:text-sm max-w-xl text-justify">Selamat pagi /
                        siang / malam teman-teman! Mari kita jaga etika dan kekeluargaan dalam pembelajaran kita. Saling
                        hormat, koreksi, dan bantu satu sama lain. Lalu, pendapat yang berbeda terkadang menimbulkan perselisihan. Namun dibalik perbedaan itu ada banyak pelajaran, motivasi, dan kebaikan yang bisa kita raih bersama. <br><br> Jadi, perbedaan pendapat bukan dilihat dari siapa yang benar atau siapa yang salah. Akan tetapi lihatlah betapa banyak hal positif yang bisa kita ambil, kita bisa saling menghargai dan menghormati satu sama lain tanpa harus merendahkan mereka. Terima kasih atas perhatiannya. Sampai jumpa!</p>
                    <div class="flex items-center">
                        <a href="https://www.youtube.com/@sman1jatiluhurofficial"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-300 border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
                                class="fill-current">

                                <title>YouTube</title>
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />

                            </svg>
                        </a>

                        <a href="https://www.tiktok.com/@oskasmanja"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-300 border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
                                class="fill-current">
                                <title>TikTok</title>
                                <path
                                    d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                            </svg>
                        </a>

                        <a href="https://www.instagram.com/oskasmanja/"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-300 border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
                                class="fill-current">

                                <title>Instagram</title>
                                <path
                                    d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="events" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-bold text-primary text-lg mb-2 lg:text-xl mr-2">OSKA SMANJA</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4">Event terbaru</h2>
                    <p class="font-medium text-xs text-secondary text-center">
                        Berikut adalah event terbaru dari OSIS & MPK SMANJA yang telah dilaksanakan di lingkungan 
                        <span class="block">SMAN 1 Jatiluhur.</span>
                    </p>
                </div>
            </div>

            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <?php while($tampil = mysqli_fetch_array($sql)): ?>
                    <div class="mb-12 p-4 md:w-1/2">
                        <div class="rounded-md shadow-md overflow-hidden">
                            <img src="Admin/img/<?php echo $tampil["Gambar"] ?>"
                                width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl md:text-2xl text-dark mt-5 mb-3"><?php echo $tampil["Judul"] ?></h3>
                        <p class="font-medium text-xs md:text-md text-secondary text-justify"><?php echo $tampil["Deskripsi"] ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">OSKA SMANJA</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Berikan Saran</h2>
                    <p class="font-medium text-xs text-secondary">Berikan saran kegiatan maupun kritik kepada OSKA
                        SMANJA</p>
                </div>
            </div>
            <form action="" method="post">
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold text-primary">Nama <span
                                class="text-slate-400 opacity-50 text-xs">&ensp;*&#40;Apabila tidak ingin diketahui
                                cukup isi dengan [-] &#41;</span></label>
                        <input type="text" id="name"
                            class="w-full bg-slate-200 text-slate-500 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            name="Nama" autocomplete="off">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="class" class="text-base font-bold text-primary">Kelas <span
                                class="text-slate-400 opacity-50 text-xs">&ensp;*&#40;Apabila tidak ingin diketahui
                                cukup isi dengan [-] &#41;</span></label>
                        <input type="text" id="class"
                            class="w-full bg-slate-200 text-slate-500 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            name="Kelas" autocomplete="off">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="saran" class="text-base font-bold text-primary">Kritik & Saran</label>
                        <textarea type="text" id="saran"
                            class="w-full bg-slate-200 text-slate-500 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"
                            name="Saran" autocomplete="off"></textarea>
                    </div>
                    <div class="w-full px-4">
                        <input
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500"
                            type="submit" value="Kirim" name="Process">
                    </div>
                </div>
            </form>
        </div>
    </section>

    
    <?php
        if(isset($_POST['Process'])){
            $nama = mysqli_real_escape_string($connect, $_POST['Nama']);
            $kelas = mysqli_real_escape_string($connect, $_POST['Kelas']);
            $saran = mysqli_real_escape_string($connect, $_POST['Saran']);

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

    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap sm:px-4 lg:px-10">
                <div class="w-full px-4 mb-8 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-2xl text-white lg:text-4xl mb-3">OSKA SMANJA</h2>
                    <h3 class="font-bold text-xl lg:text-2xl mb-2">Hubungi Kami</h3>
                    <p>Jl. Pramuka No.138, Bunder, Kec. Jatiluhur</p>
                    <p>Kabupaten Purwakarta, Jawa Barat, 41161</p>
                </div>
                <div class="w-full px-4 mb-8 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Media Sosial</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="https://www.tiktok.com/@oskasmanja"
                                class="inline-block text-base hover:text-primary mb-3">TikTok</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/oskasmanja/"
                                class="inline-block text-base hover:text-primary mb-3">Instagram</a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@sman1jatiluhurofficial"
                                class="inline-block text-base hover:text-primary mb-3">YouTube</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-8 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <p class="inline-block text-base text-primary mb-3">Beranda</p>
                        </li>
                        <li>
                            <a href="/program-kerja" class="inline-block text-base hover:text-primary mb-3">Program Kerja</a>
                        </li>
                        <li>
                            <a href="/event" class="inline-block text-base hover:text-primary mb-3">Event</a>
                        </li>
                        <li>
                            <a href="/saran" class="inline-block text-base hover:text-primary mb-3">Kritik & Saran</a>
                        </li>
                        <li>
                            <a href="/visi-misi" class="inline-block text-base hover:text-primary mb-3">Visi &
                                Misi</a>
                        </li>
                        <li>
                            <a href="/informasi" class="inline-block text-base hover:text-primary mb-3">Informasi</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full pt-10 border-t border-slate-600">
                <p class="font-medium text-sm text-slate-500 text-center">Dibuat oleh siswa SMAN 1 Jatiluhur,
                    menggunakan Tailwind CSS</p>
            </div>
        </div>
    </footer>
    <script src="javascript/script.js"></script>
    <script>
    const alert = () => {
        this.parentElement.style.display = 'none'
    }
    </script>
</body>

</html>