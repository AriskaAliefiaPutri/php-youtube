<?php 

    if (isset($_GET['total'])) {
        $total = $_GET['total'];
        $idorder = idorder();
        $idpelanggan = $_SESSION['idpelanggan'];
        $tgl=date('Y-m-d');

        $sql = "SELECT * FROM tblorder WHERE idorder= $idorder";

        $count = $db->rowCOUNT($sql);

        if ($count == 0) {
            insertidOrder(idorder,$idpelanggan,$tgl,$total);
            insertOrderDetail($idorder);
        }else {
            insertOrderDetail($idorder);
        }
        
        kosongkanSession();
        header("location:?f=home&m=checkout");

    }else {
        info();
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

    function insertOrderDetail($idorder=1) {

        global$db;

        foreach ($_SESSION as $key => $key<> 'idpelanggan') {
            if ($key<> 'pelanggan' && $key<>'idpelanggan' && $key<>'user' && $key<>'level' && $key<>'iduser') {
                $id = substr($key,1);

                $sql = "SELECT * FROM tblmenu WHERE idmenu=$id";

                $row=$db->getALL($sql);

                foreach ($row as $r) {
                    $idmenu=$r['idmenu'];
                    $harga =$r['harga'];
                    $sql= "INSERT INTO tblorderdetail VALUES ('',$idorder,$r['idmenu'],value,$r['harga'])";
                    $db->runSQL($sql);
                }
            }
        }

    }

    function kosongkanSession(){

        foreach ($_SESSION as $key => $key<> 'idpelanggan') {
            if ($key<> 'pelanggan' && $key<>'idpelanggan') {
                $id = substr($key,1);

                unset($_SESSION['_'.$id]);
            }
                 
        }
    }

    function info() {

        echo "<h3> Terimakasih sudah berbelanja </h3>";
        
    }

?>