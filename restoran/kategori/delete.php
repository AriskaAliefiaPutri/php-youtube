<?php 

    require_once "../function.php";

    
    $sql = "DELETE FROM tblkategori WHERE idkategori = 1";

    $result = mysqli_query($koneksi, $sql);

    heade("location:http://localhost/php-youtube/restoran/kategori/select.php");

?>