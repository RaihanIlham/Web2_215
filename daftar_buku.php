<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <style>
        /* CSS Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            color: #007bff;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #fff;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e2e2e2;
        }
        .notif {
            color: green;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #0056b3;
        }
        .not-available {
            color: red;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Daftar Buku</h1>

    <?php
    // Tampilkan notifikasi jika ada
    if (isset($_GET['notif'])) {
        echo "<p class='notif'>" . $_GET['notif'] . "</p>";
    }
    ?>

    <table border='1'>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        // Array daftar buku beserta status ketersediaan
        $daftar_buku = array(
            array("judul" => "Harry Potter dan Batu Bertuah", "penulis" => "J.K. Rowling", "tahun_terbit" => 1997, "tersedia" => true),
            array("judul" => "Lord of the Rings: The Fellowship of the Ring", "penulis" => "J.R.R. Tolkien", "tahun_terbit" => 1954, "tersedia" => true),
            array("judul" => "To Kill a Mockingbird", "penulis" => "Harper Lee", "tahun_terbit" => 1960, "tersedia" => true),
            array("judul" => "The Great Gatsby", "penulis" => "F. Scott Fitzgerald", "tahun_terbit" => 1925, "tersedia" => true),
            // Tambahkan buku lainnya sesuai kebutuhan
        );

        // Menampilkan daftar buku
        foreach ($daftar_buku as $index => $buku) {
            echo "<tr>";
            echo "<td>" . $buku['judul'] . "</td>";
            echo "<td>" . $buku['penulis'] . "</td>";
            echo "<td>" . $buku['tahun_terbit'] . "</td>";
            echo "<td>";
            if ($buku['tersedia']) {
                echo "Tersedia";
            } else {
                echo "<span class='not-available'>Tidak Tersedia!</span>";
            }
            echo "</td>";
            echo "<td>";
            if ($buku['tersedia']) {
                echo "<a href='proses_ubah_status.php?index=$index&action=set_not_available'>Set Tidak Tersedia</a>";
            } else {
                echo "<a href='proses_ubah_status.php?index=$index&action=set_available'>Set Tersedia</a>";
            }
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="peminjaman.php">Pinjam Buku</a>
</body>
</html>
