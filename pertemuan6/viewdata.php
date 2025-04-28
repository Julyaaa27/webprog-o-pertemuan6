<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewdata Data Mahasiswa</title>
</head>
<body>

    <h3>Data Mahasiswa</h3>
    <a href="insertdata.php">Tambah</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
<?php
$sql = "SELECT NIM,NAMA FROM mhs;";
include_once("konfigurasi.php");
$res = mysqli_query($koneksi,$sql);

$no = 0;
while($row = mysqli_fetch_array($res)){
    $no++;

?>
            <tr>
               <td><?=$no?></td>
                <td><?=$row["NIM"]?></td>
                <td><?$row["NAMA"]?></td>
                <td>
                <a href="editdata.php?nim=<?=$row["NIM"]?>">ubah</a>  <a href="deldata.php?nim=<?$row["NIM"]?>"> hapus</td>
            </tr>
<?php
}
?>

        </tbody>

    </table>

    
</body>
</html>