<?php
require "../Database/koneksi.php";
require "Secure/session_login.php";

if(isset($_POST["connect_information"])){
    $judul = mysqli_real_escape_string($connect, $_POST["judul"]);
    str_replace("\n", "<br>", $deskripsi = mysqli_real_escape_string($connect, $_POST["deskripsi"]));
    $data = $_POST["date"];

    if($_FILES["gambar"]["error"] == 4){
        echo
        "<script> alert('Tolong tambahkan gambarnya dulu akang/teteh.'); </script>"
        ;
    }
    else{
        $fileName = $_FILES["gambar"]["name"];
        $fileSize = $_FILES["gambar"]["size"];
        $tmpName = $_FILES["gambar"]["tmp_name"];        
    
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if ( !in_array($imageExtension, $validImageExtension) ){
            echo "
            <script>
                alert('File harus .jpg .jpeg .png ya akang/teteh');
            </script>
            ";
        }
        else if($fileSize > 2000000){
            echo "
            <script>
                alert('Ukuran gambar terlalu besar nih akang/teteh');
            </script>
            ";
        }
        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
            $namaLengkap = $_COOKIE['Key1'];

            $judul_trimed = trim($judul);
            $deskripsi_trimed = trim($deskripsi);
            
            if(empty($judul_trimed) || empty($deskripsi_trimed) || empty($data)){
                echo " 
                    <script>
                        alert('Form tidak boleh kosong.');
                    </script>
                ";

                return 0;
            }

            move_uploaded_file($tmpName, 'img/' . $newImageName);
            mysqli_query($connect, "INSERT INTO information VALUES('', '$judul', '$deskripsi', '$newImageName', '$data', '$namaLengkap')");

            echo " 
                <script>
                    alert('Informasi berhasil ditambahkan.');
                </script>
            ";
            
        }
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
                                <p class="text-base py-2 mx-8 flex text-primary">Perbarui Informasi</p>
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
                <h1 class="text-2xl font-bold mb-6 mt-3 text-center text-dark">TAMBAHKAN INFORMASI</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="judul">
                            Judul
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="judul" type="text" placeholder="Tambahkan judul" name="judul">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="deskripsi">
                            Deskripsi
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="deskripsi" type="text" placeholder="Tambahkan deskripsi"
                            name="deskripsi"></textarea>
                    </div>

                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="date">
                            Tanggal unggah
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="date" type="date" name="date">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="gambar">
                            Kirim gambar (Maksimal 2MB)
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="gambar" type="file" accept="image/*" name="gambar">
                    </div>

                    <div class="flex items-center justify-between mb-3">
                        <input
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500s"
                            type="submit" value="kirim" name="connect_information">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../javascript/script.js"></script>
</body>

</html>