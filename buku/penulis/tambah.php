<?php
session_start();
if(!$_SESSION['login']){
    header('location: ../auth/login.php');
}
?>
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tambah Data</title>
</head>

<body>
    <div class="container mt-4">
        <div class="alert alert-primary">
            <h2 class="text-center">Tambah Data</h2>
        </div>

        <div class="col-6">
            <form action="" id="form" method="post" data-parsley-validate="">
                <label class="form-label">Nama :</label>
                <input class="form-control" type="text" name="txtnama" required> <br>

                <label class="form-label">Alamat :</label>
                <input class="form-control" type="text" name="txtnama" required> <br>
                <input class="form-control" type="text" name="txtalamat" required> <br>

                <label class="form-label">No Hp :</label>
                <input class="form-control" type="number" data-parsley-type="integer" name="txthp" required> <br>

                <button name="submit" class="btn btn-success"><i class="fa fa-save"> </i>SIMPAN</button>
                <a class="btn btn-danger" href="tampil.php"><i class="fa fa-cancel">
                    </i>BATAL</a>
            </form>
        </div>
    </div>
</body>

</html>
<?php
include '../setting.php';
if(isset($_POST['submit'])){
    $nama = $_POST['txtnama'];
    $alamat = $_POST['txtalamat'];
    $hp = $_POST['txthp'];

    $sql = "INSERT INTO penulis VALUES ('','$nama','$alamat','$hp')";
    $query = mysqli_query($link,$sql);

    if($query){
        header('location:tampil.php');
    }else{
        echo "Gagal";
    }
}
?>