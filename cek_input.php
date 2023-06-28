<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Submit'])){

    // ambil data dari formulir
    $idpost = $_POST['idpost'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $username = $_POST['username'];

    // buat query
    $sql = "INSERT INTO post (idpost, title, content, date, username) VALUE ('$idpost', '$alamat', '$content', '$date', '$username')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: halaman_author.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: halaman_author.php?status=gagal');
    }

}

?>