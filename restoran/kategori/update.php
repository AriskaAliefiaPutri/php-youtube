update data

<?php 

    require_once "../function.php";


    $sql = "SELECT * FROM tblkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi, $sql);

    $row=mysqli_fetch_assoc($result);
    

    // $kategori = 'Jelly';
    // $id=18;
    // $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori= ";

    // $result = mysqli_query($koneksi, $sql);

    // echo $sql;


?>

<form action="" method="post">
    kategori :
    <input type="text" name="kategori" value="<php echo $row['kategori']?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php 

    if (isset($_POST['simpan'])){

        $kategori = $_POST['kategori'];
        
        $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori= ";

        $result = mysqli_query($koneksi, $sql);
        
        header("location:http://localhost/php-youtube/restoran/kategori/select.php")
    }


?>