<?php
session_start();
if(!$_SESSION['login']){
    header('location: ../auth/login.php');
}
?>
<?php 
if(isset($_GET['id'])){
    include '../setting.php';
    $id = $_GET['id'];
    $query = "DELETE FROM penulis WHERE id='$id'";
    $result = mysqli_query($link,$query);
    if($result){
        header('location:tampil.php?alert=data berhasil terhapus');
    }else{
        echo "Gagal";
    }
}
?>