<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman Buku</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function validateForm() {
            var nama = document.getElementById("nama").value;
            var alamat = document.getElementById("alamat").value;
            
            if (nama.trim() == '' || alamat.trim() == '') {
                alert("Nama dan alamat harus diisi!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>Form Peminjaman Buku</h1>

    <div class="container">
        <form action="proses_peminjaman.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label><br>
                <input type="text" id="nama" name="nama"><br>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label><br>
                <input type="text" id="alamat" name="alamat"><br>
            </div>

            <div class="form-group">
                <label for="buku">Buku yang Dipinjam:</label><br>
                <select id="buku" name="buku">
                    <?php
                    // Array daftar buku
                    $daftar_buku = array(
                        array("judul" => "Harry Potter dan Batu Bertuah", "penulis" => "J.K. Rowling"),
                        array("judul" => "Lord of the Rings: The Fellowship of the Ring", "penulis" => "J.R.R. Tolkien"),
                        array("judul" => "To Kill a Mockingbird", "penulis" => "Harper Lee"),
                        array("judul" => "The Great Gatsby", "penulis" => "F. Scott Fitzgerald"),
                        // Tambahkan buku lainnya sesuai kebutuhan
                    );

                    // Loop untuk menampilkan daftar buku dalam combobox
                    foreach ($daftar_buku as $buku) {
                        echo "<option value='" . $buku['judul'] . "'>" . $buku['judul'] . " - " . $buku['penulis'] . "</option>";
                    }
                    ?>
                </select><br>
            </div>

            <input type="submit" value="Pinjam Buku" class="btn">
        </form>
    </div>
</body>
</html>
