<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>
    <form method="post" action="createdata.php">
        <div>
            <label>NIM</label>
            <input type="text" name="NIM">
        </div>
        <div>
            <label>NAMA</label>
            <input type="text" name="NAMA">
        </div>
        <div>
            <label>ALAMAT</label>
            <input type="text" name="ALAMAT">
        </div>
        <div>
            <label>TGL LAHIR</label>
            <input type="date" name="TGLLAHIR">
        </div>
        <div>
            <label>Jenis kelamin</label>
            <select name="JK">
                <option disabled>pilih jenis kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div>
            <button type='submit'>simpan data</button>
        </div>
    </form>
</body>
</html>