<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Data</title>
</head>

<body>
    <div class="container mt-4">
        <div class="alert alert-primary">
            <h2 class="text-center">Edit Data</h2>
        </div>
        <?php 
            include('../setting.php');
            $id = $_GET['id'];
            $query = "SELECT * FROM penerbit WHERE id='$id'";
            $result = mysqli_query($link,$query);
            $row = mysqli_fetch_object($result);
        ?>
        <div class="col-6">
            <form action="" method="post">
                <label class="form-label">Nama Penerbit:</label>
                <input class="form-control" type="text" name="txtpenerbit" value="<?= $row->nama_penerbit ?>"> <br>

                <label class="form-label">Nama Ketua :</label>
                <input class="form-control" type="text" name="txtketua" value="<?= $row->nama_ketua ?>"> <br>

                <button name="submit" class="btn btn-success"><i class="fa fa-save"> SIMPAN</i></button>
                <a class="btn btn-danger" href="tampil.php"><i class="fa fa-cancel">
                        BATAL</i></a>
            </form>
        </div>
    </div>
</body>

</html>

<?php
include '../setting.php';
if(isset($_POST['submit'])){
    $nama = $_POST['txtpenerbit'];
    $ketua = $_POST['txtketua'];

    $sql = "UPDATE penerbit SET nama_penerbit='$nama', nama_ketua='$ketua' where id='$id'";
    $query = mysqli_query($link,$sql);

    if($query){
        header('location:tampil.php');
    }else{
        echo "Gagal";
    }
}
?>