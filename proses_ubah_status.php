<?php
// Mengecek apakah index dan action sudah diberikan
if(isset($_GET['index']) && isset($_GET['action'])){
    // Ambil index buku dari parameter GET
    $index = $_GET['index'];
    // Ambil aksi dari parameter GET
    $action = $_GET['action'];

    // Array daftar buku
    $daftar_buku = array(
        array("judul" => "Harry Potter dan Batu Bertuah", "penulis" => "J.K. Rowling", "tahun_terbit" => 1997, "tersedia" => true),
        array("judul" => "Lord of the Rings: The Fellowship of the Ring", "penulis" => "J.R.R. Tolkien", "tahun_terbit" => 1954, "tersedia" => true),
        array("judul" => "To Kill a Mockingbird", "penulis" => "Harper Lee", "tahun_terbit" => 1960, "tersedia" => true),
        array("judul" => "The Great Gatsby", "penulis" => "F. Scott Fitzgerald", "tahun_terbit" => 1925, "tersedia" => true),
        // Tambahkan buku lainnya sesuai kebutuhan
    );

    // Mengecek apakah index buku valid
    if($index >= 0 && $index < count($daftar_buku)){
        // Melakukan aksi berdasarkan parameter GET
        switch($action){
            case "set_not_available":
                // Set status buku menjadi tidak tersedia
                $daftar_buku[$index]['tersedia'] = false;
                $notif = "Status buku \"" . $daftar_buku[$index]['judul'] . "\" telah diubah menjadi Tidak Tersedia.";
                break;
            case "set_available":
                // Set status buku menjadi tersedia
                $daftar_buku[$index]['tersedia'] = true;
                $notif = "Status buku \"" . $daftar_buku[$index]['judul'] . "\" telah diubah menjadi Tersedia.";
                break;
            default:
                // Aksi tidak valid
                $notif = "Aksi tidak valid.";
        }
    } else {
        // Index buku tidak valid
        $notif = "Index buku tidak valid.";
    }
} else {
    // Parameter tidak lengkap
    $notif = "Parameter tidak lengkap.";
}

// Redirect kembali ke daftar_buku.php dengan membawa notifikasi
header("Location: daftar_buku.php?notif=" . urlencode($notif));
exit();
?>
