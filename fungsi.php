<?php

    $koneksi = mysqli_connect("localhost", "root", "", "answeekly-ifa");
    
    function tampildata($query)
    {
        global $koneksi;

        $result = mysqli_query($koneksi,$query);

        $rows = []; /// siapkan wadahnya

        while($row = mysqli_fetch_assoc($result))  /// selama lemari masih ada isinya sesuai perintah
        {
            $rows[] = $row; /// ambil datanya masukkan ke wadah
        }
        return $rows; /// bawa ke depan rumah
    }

    function inputdata($data, $foto)
    {
        global $koneksi;

        $nama =  htmlspecialchars($data["nama"]);
        $nim =  htmlspecialchars($data["nim"]);
        $prodi =  htmlspecialchars($data["jurusan"]);
        $email =  htmlspecialchars($data["email"]);
        $nohp =  htmlspecialchars($data["nohp"]);
        
        $namafoto = $foto["name"];
        $newnamefoto = date('dmYhis_').$namafoto;
        $tmpfoto = $foto["tmp_name"];

        $path = "assets/images/$newnamefoto";

        if(move_uploaded_file($tmpfoto,$path))
        {
            $query = "INSERT INTO mahasiswa (nama,nim,jurusan,email,no_hp,foto) 
            VALUES ('$nama','$nim', '$prodi', '$email', '$nohp', '$newnamefoto' )";

            mysqli_query($koneksi, $query);
        }

        return mysqli_affected_rows($koneksi);

    }

    function deletedata($id)
    {
        global $koneksi;

        $query = "DELETE FROM mahasiswa WHERE id=$id";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }

    function editdata($data, $id)
    {
        global $koneksi;

        $nama =  htmlspecialchars($data["nama"]);
        $nim =  htmlspecialchars($data["nim"]);
        $prodi =  htmlspecialchars($data["jurusan"]);
        $email =  htmlspecialchars($data["email"]);
        $nohp =  htmlspecialchars($data["nohp"]);
        $foto =  htmlspecialchars($data["foto"]);

        $query = "UPDATE mahasiswa SET 
                    nama='$nama',
                    nim='$nim',
                    jurusan='$prodi',
                    email='$email',
                    no_hp='$nohp',
                    foto='$foto'
                 WHERE id=$id
                ";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);

    }


?>