<?php

include("koneksi.php");

if( isset($_GET['idpost']) ){

    $id = $_GET['idpost'];
    $sql = "DELETE FROM post WHERE idpost=$idpost";
    $query = mysqli_query($koneksi, $sql);

    if( $query ){
        header('Location: halaman_author.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>