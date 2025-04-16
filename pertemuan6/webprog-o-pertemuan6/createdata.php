<?php
    include_once("konfigurasi.php");

    $sql = "INSERT INTO mahasiswa(NIM, NAMA, ALAMAT, TGL_LAHIR, JENISKEL) VALUES('1122331122','Reno','Jl.seroja 34','2003-03-15','L')";

    $res = mysqli_query($koneksi, $sql);
    if(!$res){
        die("penambahan data gagal");
    }
    echo "penambahan data sukses";

    mysqli_close($koneksi);