<?php

    require 'fungsi.php';
    $qmahasiswa = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($qmahasiswa); /// wadah dengan data mahasiswa


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>WEB INFORMATIKA</h1>
    <hr>
    <table border="1" cellspacing="0" cellpadding="10px" >
        <tr>
            <td>
                <a href="index.php">Home</a>
            </td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>
    <h2>Data Mahasiswa</h2>
    <a href="inputdata.php">
        <button>Tambah Data</button>
    </a>
    <table border="1" cellpadding="5px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th> 
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>  
        
        <?php
            $i = 1;
            foreach($mahasiswas as $mhs)
            {
        ?>
        <tr>
            <td align="center"><?= $i ?></td>
            <td><?= $mhs["nama"] ?></td>
            <td align="center"><?= $mhs["nim"] ?></td>
            <td align="center"><?= $mhs["jurusan"] ?></td>
            <td align="center"><?= $mhs["email"] ?></td>
            <td align="center"><?= $mhs["no_hp"] ?></td>
            <td align="center"><img src="assets/images/<?= $mhs["foto"] ?>" width="70px" /></td>
            <td><a href="editdata.php"><button>EDIT</button></a> | <a href="deletedata.php"><button>DELETE</button></a></td>
        </tr>
        <?php 
            $i++;
            }
        ?>
    </table>
    <br>
    <hr>

</body>
</html>