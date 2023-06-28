<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>

    <!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dari Database PHP </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <h2>Beranda Author</h2>
    <a class="tombol" href="tambah_post.php">+ Post Baru</a>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>IdPost</td>
                <td>Tanggal</td>
                <td>Judul</td>
                <td>Konten</td>
                <td>Author</td>                
                <td>Aksi</td>                
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi, 'SELECT * FROM post');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['idpost'] ?></td>
                <td><?php echo $data['date'] ?></td>
                <td><?php echo $data['title'] ?></td>
                <td><?php echo $data['content'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td>
                    <a href="edit.php">Edit</a>
                    <a href="hapus.php">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>

</body>
</html>