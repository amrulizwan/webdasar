<?php
session_start();
if (isset($_SESSION['login'])) {
    header("location: index.php");
    exit;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Data Penerbit</title>
</head>

<body>

    <div class="container mt-4">
        <div class="alert alert-primary">
            <h2 style="text-align: center;">Data Penerbit</h2>
        </div>
        <a href="tambah.php"><button class="btn btn-info mb-3">TAMBAH DATA</button></a>
        <table class="table table-striped table-hover" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Penerbit</th>
                    <th>Nama Ketua</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include('../setting.php');
                    $no = 1;
                    $query = "SELECT * FROM penerbit";
                    $result = mysqli_query($link,$query);
                    while($row = mysqli_fetch_object($result)):

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?= $row->nama_penerbit; ?></td>
                    <td><?= $row->nama_ketua; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row->id; ?>"><button type="button" class="btn btn-success"><i
                                    class="fa fa-edit">
                                    EDIT</i></button></a>
                        <a href="delete.php?id=<?= $row->id; ?>"><button type="button" class="btn btn-danger"><i
                                    class="fa fa-trash">
                                    DELETE</i></button></a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
</body>

</html>