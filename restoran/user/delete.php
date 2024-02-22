<?php 

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $sql = "SELECT * FROM tbluser WHERE iduser=$id";

        echo $sql;

        header("location:?f=user&m=select");
    }


?>