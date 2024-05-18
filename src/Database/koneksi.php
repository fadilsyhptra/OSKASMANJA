<?php 
$connect = mysqli_connect("localhost", "root", "", "OSKA");
function registrasi($data){
    global $connect;

    $nama_lengkap = $data["nama_lengkap"];
    $username = $data["username"];
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $password2 = mysqli_real_escape_string($connect, $data["confirm_password"]);
    $jabatan = $jabatan = isset($data["jabatan"]) ? $data["jabatan"] : null;

    //ketersediaan checker
    $username_cek = mysqli_query($connect, "SELECT Username FROM login WHERE Username = '$username'");
    $nama_cek = mysqli_query($connect, "SELECT 	Nama_Lengkap FROM login WHERE Nama_Lengkap = '$nama_lengkap'");

    //spasi checker
    $nama_lengkap_trimed = trim($nama_lengkap);
    $username_trimed = trim($username);
    $password_trimed = trim($password);
    $password2_trimed = trim($password2);
    $jabatan_trimed = trim($jabatan);

    if(empty($nama_lengkap_trimed) || empty($username_trimed) || empty($password_trimed) || empty($password2_trimed) || empty($jabatan_trimed)){
        echo '
            <script>
                alert("Input tidak boleh kosong.");
            </script>';
        
        return false;
    }
    
    if(mysqli_fetch_assoc(($username_cek))){
        echo '
            <script>
                alert("Username sudah terdaftar.");
            </script>';
        
        return false;
    }
    
    if(mysqli_fetch_assoc(($nama_cek))){
        echo '
            <script>
                alert("Nama Lengkap sudah terdaftar.");
            </script>';
        
        return false;
    }

    if($password != $password2){
        echo '
            <script>
                alert("Konfirmasi password anda tidak sesuai.");
            </script>';
        
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($connect, "INSERT INTO login VALUES('', '$nama_lengkap', '$username', '$password', '$jabatan')");

    return mysqli_affected_rows($connect);
}