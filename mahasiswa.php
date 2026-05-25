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
        <tr>
            <td align="center">1</td>
            <td>M. Faisol Gunawan Supermen</td>
            <td align="center">112243345543</td>
            <td align="center">Informatika</td>
            <td align="center">faisol@mail.com</td>
            <td align="center">0866775656245</td>
            <td align="center"><img src="assets/images/foto.webp" width="70px" /></td>
            <td><a href="editdata.php"><button>EDIT</button></a> | <a href="deletedata.php"><button>DELETE</button></a></td>
        </tr>
    </table>
    <br>
    <hr>

</body>
</html>