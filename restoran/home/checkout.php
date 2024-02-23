<?php 

    if (isset($_GET['total'])) {
        $total = $_GET['total'];
        echo $total;

        echo '<br>';

        echo idorder();

        echo '<br>';

        echo idOrder(idorder(),$_SESSION['idpelanggan'], '2019-12-21', $total);



    }


    function idorder(){
        global $db;
        $sql = "SELECT idorder FROM tblorder ORDER BY idorder DESC"
        $jumalh = $db->rowCOUNT($sql);
        if ($jumlah == 0) {
            $idorder = 1;
        }else {
            $item = $db->getITEM($sql);
            $id = $item['idorder']+;
        }

        return $id;

    }

    function inserOrder($idorder, $idpelanggan, $tgl, $total){
        global $db;

        $sql = "INSERT INTO tblorder VALUES ($idorder, $idpelanggan, '$tgl', $total,0,0,0)";
        
        $db->runSQL($sql);

    }

?>