<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 class="judul">Tambah Buku Baru</h1>

    <div class="container">
        <form action="proses_tambah_buku.php" method="post">
            <label for="judul">Judul:</label><br>
            <input type="text" id="judul" name="judul"><br>

            <label for="penulis">Penulis:</label><br>
            <input type="text" id="penulis" name="penulis"><br>

            <label for="tahun">Tahun Terbit:</label><br>
            <input type="number" id="tahun" name="tahun"><br>

            <input type="submit" value="Tambah Buku">
        </form>
    </div>
</body>
</html>
