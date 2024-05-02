<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['nama']) && !empty($_POST['alamat']) && !empty($_POST['buku'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $buku = $_POST['buku'];
        
        // Pesan notifikasi
        $pesan = "Terima kasih, $nama. Buku $buku telah berhasil dikembalikan ke perpustakaan. Alamat pengembalian: $alamat.";
        
        // Menampilkan notifikasi dengan alert
        echo "<script>alert('$pesan');</script>";
        
        // Redirect kembali ke pengembalian.php
        header("Location: pengembalian.php");
        exit();
    } else {
        $notif = "Mohon lengkapi semua bidang teks.";
        echo "<script>alert('$notif');</script>";
        header("Location: pengembalian.php");
        exit();
    }
} else {
    header("Location: pengembalian.php");
    exit();
}
?>
