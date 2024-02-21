<?php 

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $sql = "SELECT * FROM tblkategori WHERE idkategori=$id";

        echo $sql;

        header("location:?f=kategori&m=select");
    }


?>