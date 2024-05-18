<?php 
session_start();
require "../Database/koneksi.php";

if(isset($_COOKIE['Id']) && isset($_COOKIE['KeyEncrypt'])){
    $id = $_COOKIE['Id'];
    $key = $_COOKIE['KeyEncrypt'];

    $result = mysqli_query($connect, "SELECT * FROM login WHERE Id = '$id'");

    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['Username'])){
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION['login'])){
    header('Location: /admin/home');
    exit;
}

if(isset($_POST['connect_login'])){
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $result = mysqli_query($connect, "SELECT * FROM login WHERE Username = '$username'");

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['Password'])){
            if(isset($_POST["remember"])){
                setcookie('Id', $row["Id"], time() + 604800);
                setcookie('KeyEncrypt', hash("sha256", $username), time() + 604800);
                setcookie('Key1', $row['Nama_Lengkap'], time() + 604800);
                setcookie('Key2', $username, time() + 604800);
                setcookie('Key3', $row['Jabatan'], time() + 604800);
            } else {
                setcookie('Id', $row["Id"]);
                setcookie('Key1', $row['Nama_Lengkap']);
                setcookie('Key2', $username);
                setcookie('Key3', $row['Jabatan']);
                $_SESSION['login'] = true;
            }

            header("Location: profil.php");
            exit;
        } else {
            echo '
            <script>
                alert("Password anda salah.");
            </script>';
        }
    } else {
        echo '
        <script>
            alert("Username tidak tersedia atau salah.");
        </script>';
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSKA SMANJA | ADMIN REGISTER OF OSKA SMANJA</title>
    <link rel="stylesheet" href="../output.css">
    <link rel="shortcut icon" href="../img/logoOska_circle.png" type="image/x-icon">
</head>

<body class="bg-gray-100 fade-anim">
    <div class="mx-4 pt-2">
        <div class="mx-auto max-w-md pt-10">
            <div class="bg-white shadow-md rounded-lg px-7 md:px-10 pt-6 pb-8 mb-4">
                <h1 class="text-2xl font-bold mb-6 mt-3 text-center text-dark">LOGIN</h1>
                <form action="" method="post">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Username
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="username" type="text" placeholder="Username" name="username">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                            id="password" type="password" placeholder="********" name="password">
                    </div>
                    <div class="mb-6 flex items-center">
                        <input id="remember" type="checkbox" name="remember"
                            class="h-5 w-5 text-primary focus:ring-primary focus:border-primary appearance-none shadow border rounded checked:bg-primary checked:appearance-auto">
                        <label for="remember" class="ml-3 text-gray-700 text-sm font-bold mt-[0.18rem]">Remember me</label>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                        <input
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500s"
                            type="submit" value="Masuk" name="connect_login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>