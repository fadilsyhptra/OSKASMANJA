<?php 
require "../Database/koneksi.php";
require "Secure/session_login.php";

error_reporting(0);

if(isset($_POST["connect_eval"])){
    $eval = mysqli_real_escape_string($connect, $_POST['Eval']);
    $users = $_POST['Desk'];

    $eval_trimed = trim($eval);
    $users_trimed = trim($users);

    if(empty($eval_trimed) || empty($users_trimed)){
        echo '
            <script>
                alert("Input tidak boleh kosong.");
            </script>';
    } else {
        mysqli_query($connect, "INSERT INTO evaluasi SET
            Id = '',
            Pesan = '$eval',
            ToUser = '$users'
        ");

        echo '
            <script>
                alert("Terimakasih sudah mengirimkan evaluasi.");
            </script>';
    }
}
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

<body class="bg-gray-100 fade-anim">
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
                                <p class="text-base py-2 mx-8 flex text-primary">
                                    Evaluasi</p>
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

    <div class="mx-4 pt-[5.5rem]">
        <div class="mx-auto max-w-md pt-8">
            <div class="bg-white shadow-md rounded-lg px-7 md:px-10 pt-6 pb-8 mb-4">
                <h1 class="text-2xl font-bold mb-6 mt-3 text-center text-dark">BERIKAN EVALUASI</h1>
                <form action="" method="post">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="Eval">
                            Evaluasi
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="Eval" type="text" placeholder="Tambahkan evaluasi" name="Eval"></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="Desk">
                            Pilih sekarang
                        </label>
                        <select
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="Desk" placeholder="Pilih nama yang akan dievaluasi" name="Desk">
                            <option value="" disabled selected>Pilih nama yang akan dievaluasi</option>
                            <option value="Muhammad Fadil Syahputra">Muhammad Fadil Syahputra</option>
                            <option value="Amelia Ismawanti">Amelia Ismawanti</option>
                            <option value="Fahmi Fauzi Hidayat">Fahmi Fauzi Hidayat</option>
                            <option value="Hanin Rosidah">Hanin Rosidah</option>
                            <option value="Jenisya Rifdah Nazla">Jenisya Rifdah Nazla</option>
                            <option value="Etsa Tharifa">Etsa Tharifa</option>
                            <option value="Nelson Fernando">Nelson Fernando</option>
                            <option value="Siti Rohmah">Siti Rohmah</option>
                            <option value="Nazura Eifelyne Rachzid">Nazura Eifelyne Rachzid</option>
                            <option value="Siti Nazlia Nurfauziah">Siti Nazlia Nurfauziah</option>
                            <option value="Alia Shoufia Alfadilah">Alia Shoufia Alfadilah</option>
                            <option value="Hafidz Assidiqi">Hafidz Assidiqi</option>
                            <option value="Rifka Khoerunnisa Salsabila">Rifka Khoerunnisa Salsabila</option>
                            <option value="Hasna Mahira">Hasna Mahira</option>
                            <option value="Vika Oktavianti Lestari">Vika Oktavianti Lestari</option>
                            <option value="Aditya Irwansyah">Aditya Irwansyah</option>
                            <option value="Sekar Kinanti Nugroho">Sekar Kinanti Nugroho</option>
                            <option value="Gamar Deniar Lestari">Gamar Deniar Lestari</option>
                            <option value="Mela Anjaningsih">Mela Anjaningsih</option>
                            <option value="Abdul Rafi">Abdul Rafi</option>
                            <option value="Mozza Luthfia Purwani">Mozza Luthfia Purwani</option>
                            <option value="Alka Dhia">Alka Dhia</option>
                            <option value="Astri Ayu Cahyani">Astri Ayu Cahyani</option>
                            <option value="Raihan Adi Tsaqif">Raihan Adi Tsaqif</option>
                            <option value="Nayla Nurfathya Wijaya">Nayla Nurfathya Wijaya</option>
                            <option value="Lintang Cerebry Putri Hutami">Lintang Cerebry Putri Hutami</option>
                            <option value="Cheeryl Keyla Azzahra">Cheeryl Keyla Azzahra</option>
                            <option value="Mazaya Zahra Nugraha">Mazaya Zahra Nugraha</option>
                            <option value="Nunik Putri Irianto">Nunik Putri Irianto</option>
                            <option value="Alina Vinke">Alina Vinke</option>
                            <option value="Meilida Azahra">Meilida Azahra</option>
                            <option value="M.Algian Prayata J">M.Algian Prayata J</option>
                            <option value="Ranisya Rahma Dwiane">Ranisya Rahma Dwiane</option>
                            <option value="Dzikry Achmad Fahrezi">Dzikry Achmad Fahrezi</option>
                            <option value="Annisa Putri Ramadhani">Annisa Putri Ramadhani</option>
                            <option value="Fira Nurlita">Fira Nurlita</option>
                            <option value="Shahifah Rihadatul Aisy">Shahifah Rihadatul Aisy</option>
                            <option value="Zahra Aulia Nurfatwa">Zahra Aulia Nurfatwa</option>
                            <option value="Muhamad Alvin Hidayat">Muhamad Alvin Hidayat</option>
                            <option value="Ayu Husnul Khotimah">Ayu Husnul Khotimah</option>
                        </select>

                    </div>


                    <div class="flex items-center justify-between mb-3">
                        <input
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500s"
                            type="submit" value="kirim" name="connect_eval">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br>
    <hr class="mx-24">
    <?php 
        $namaLengkap = urldecode($_COOKIE['Key1']);
        $ambilData = mysqli_query($connect, "SELECT * FROM evaluasi WHERE ToUser = '$namaLengkap'");
    ?>

    <h1 class="text-2xl font-bold mt-8 text-center text-dark">Evaluasi untuk anda</h1>

    <div class="flex items-center justify-center mt-10 container mx-auto">
        <div class="grid grid-cols-1">
            <?php while($tampil = mysqli_fetch_array($ambilData)): ?>
            <div class="rounded-xl shadow-lg mb-10 bg-white">
                <div class="p-5 flex flex-col mx-3 text-center">
                    <p class="text-xs font-normal text-slate-400">
                        “<?php echo htmlspecialchars($tampil["Pesan"]) ?>”
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <script src="../javascript/script.js"></script>
</body>

</html>