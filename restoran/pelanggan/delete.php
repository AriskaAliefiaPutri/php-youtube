<?php 

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $sql = "SELECT * FROM tblpelanggan WHERE idpelanggan=$id";

        echo $sql;

        header("location:?f=pelanggan&m=select");
    }


?>