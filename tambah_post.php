
<html>
<head>
    <title>Tambah Post</title>
</head>
 
<body>
    <a href="halaman_author.php">Go to Home</a>
    <br/><br/>
 
    <form action="cek_input.php" method="POST" name="form1">
        <table width="25%" border="0">
        <tr> 
                <td>Id Post</td>
                <td><input type="number" name="idpost"></td>
            </tr>
            <tr> 
                <td>Judul</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr> 
                <td>Content</td>
                <td><input type="text" name="content"></td>
            </tr>
            <tr> 
                <td>Date</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr> 
                <td>Author</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="submit"></td>
            </tr>
        </table>
    </form>
    
  
</body>
</html>