<?php
// Ambil indeks buku yang dipilih dari URL
$index = isset($_GET['index']) ? $_GET['index'] : null;

// Jika indeks buku valid
if ($index !== null && isset($daftar_buku[$index])) {
    // Ubah status ketersediaan buku menjadi tidak tersedia
    $daftar_buku[$index]['tersedia'] = false;
    
    // Notifikasi bahwa buku telah dipinjam
    $pesan_notifikasi = "Buku \"" . $daftar_buku[$index]['judul'] . "\" telah dipinjam.";

    // Redirect kembali ke daftar_buku.php dengan notifikasi
    header("Location: daftar_buku.php?notif=" . urlencode($pesan_notifikasi));
    exit();
} else {
    // Jika indeks buku tidak valid atau tidak ada, kembali ke daftar_buku.php dengan pesan kesalahan
    header("Location: daftar_buku.php?error=Buku tidak tersedia");
    exit();
}
?>
