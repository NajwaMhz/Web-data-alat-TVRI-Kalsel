<?php 
session_start();
include 'src/koneksi.php';

$username= $_POST['username'];
$password = md5 ($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM logindata WHERE username='$username' AND password='$password'")
        or die (mysqli_error());
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    if($data['level']=="spvadmin"){
    $_SESSION['username']= $username;
    $_SESSION['level']="spvadmin";
    $_SESSION['idlogin']= $data['idlogin'];

    echo '<script language="javascript">alert("Anda berhasil login spvadmin!"); 
    document.location="spvadmin/halaman.php";</script>';
    

}else if($data['level']=="admin"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin";
    $_SESSION['idlogin']= $data['idlogin'];
    
    echo '<script language="javascript">alert("Anda berhasil login admin!"); 
    document.location="admin/halaman.php";</script>';

}else {

    header("location:index.php?pesan=gagal");

}

}else {

    header("location:index.php?pesan=gagal");

}

?>