<form action="" method="post">
    kategori :
    <input type="text" name="kategori">
    <br>
    <input type="submit" name="simpan" value="simpan">

</form>

<?php 

    require_once "../function.php";

    if (isset($_POST['simpan'])) {

        $kategori = $_POST['kategori'];
            
        $sql = "INSERT INTO tblkategori(kategori) VALUES ('$kategori')";

        $result = mysqli_query($koneksi, $sql);

        header("location:http://localhost/php-youtube/restoran/kategori/select.php");
    }

    

?>