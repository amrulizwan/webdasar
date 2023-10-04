<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belajar PHP</title>
</head>

<body>
    <h1>PHP DASAR</h1>

    <?php 
    //PERULANGAN FOREACH
      $i = 1;
      echo 'Cetak Dari PHP';
      $dataOrang = [
        ['nama' => 'Amrul Izwan','jurusan' => 'S1 RPL','umur' => 20],  
        ['nama' => 'Lalu Rendi','jurusan' => 'S1 ILKOM','umur' => 27],  
        ['nama' => 'Sukardi','jurusan' => 'S1 RPL','umur' => 29]        
      ];
      ?>
    <table border="1">
        <thead>
            <td>No</td>
            <td>Nama</td>
            <td>Jurusan</td>
            <td>Umur</td>
        </thead>
        <?php
        foreach ($dataOrang as $key => $value) {
           echo '<tr>';
           echo '<td>' .$i++. '</td>';
           echo '<td>' .$value['nama']. '</td>';
           echo '<td>' .$value['jurusan']. '</td>';
           echo '<td>' .$value['umur']. '</td>';
           echo '</td>';
        }

      ?>
    </table>
</body>

</html>