<?php
session_start();
if (isset($_SESSION['login'])) {
    header("location: index.php");
    exit;
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