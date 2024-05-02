<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            width: 80%;
            margin: 50px auto;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 15px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        .alert p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Pengembalian Buku</h1>
        <form action="proses_pengembalian.php" method="post">
            <label for="nama">Nama Lengkap:</label><br>
            <input type="text" id="nama" name="nama" required><br>

            <label for="alamat">Alamat:</label><br>
            <input type="text" id="alamat" name="alamat" required><br>

            <label for="buku">Buku yang Dikembalikan:</label><br>
            <select id="buku" name="buku" required>
                <option value="Harry Potter dan Batu Bertuah">Harry Potter dan Batu Bertuah</option>
                <option value="Lord of the Rings: The Fellowship of the Ring">Lord of the Rings: The Fellowship of the Ring</option>
                <option value="To Kill a Mockingbird">To Kill a Mockingbird</option>
                <option value="The Great Gatsby">The Great Gatsby</option>
                <!-- Tambahkan buku lainnya sesuai kebutuhan -->
            </select><br>

            <input type="submit" value="Kembalikan Buku">
        </form>

        <!-- Notifikasi -->
        <?php
        if(isset($_GET['notif'])) {
            $notif = $_GET['notif'];
            echo "<div class='alert alert-success'>$notif</div>";
        }
        ?>
    </div>
</body>
</html>
