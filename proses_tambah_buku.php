<?php
// Periksa apakah data buku telah dikirim dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah semua data buku telah diisi
    if (!empty($_POST['judul']) && !empty($_POST['penulis']) && !empty($_POST['tahun'])) {
        // Ambil data buku dari formulir
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun = $_POST['tahun'];

        // Buat array baru untuk buku yang akan ditambahkan
        $buku_baru = array(
            "judul" => $judul,
            "penulis" => $penulis,
            "tahun_terbit" => $tahun
        );

        // Simpan data buku baru ke dalam file atau database (contoh: array di file PHP)
        // Misalnya, Anda dapat menambahkan buku baru ke dalam array daftar_buku
        $daftar_buku[] = $buku_baru;

        // Simpan daftar buku ke dalam file atau database jika diperlukan
        // Misalnya, Anda dapat menulis ulang array daftar_buku ke dalam file PHP

        // Redirect kembali ke halaman daftar_buku.php setelah penambahan buku berhasil
        header("Location: daftar_buku.php");
        exit();
    } else {
        // Jika ada data yang tidak diisi, kembalikan ke halaman tambah_buku.php dengan pesan kesalahan
        header("Location: tambah_buku.php?error=Data tidak lengkap");
        exit();
    }
} else {
    // Jika tidak ada data yang dikirimkan, kembalikan ke halaman tambah_buku.php dengan pesan kesalahan
    header("Location: tambah_buku.php?error=Tidak ada data yang dikirimkan");
    exit();
}
?>
