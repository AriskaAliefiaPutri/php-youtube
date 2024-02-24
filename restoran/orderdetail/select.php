<h3>Detail Pembelian</h3>

<div class="from-group">
    <form action="" method="post">
        <div class="from-group w-50 float-left">
            <label for="">Tanggal Awal</label>
            <input type="text" name="tawal" required class="from-control">
        </div>

        <div class="from-group w-50 float-left">
            <label for="">Tanggal Akhir</label>
            <input type="text" name="takhir" required class="from-control">
        </div>

        <div>

            <input type="submit" name="simpan" value="Cari" class="btn btn-primary">

        </div>
    </form>
</div>

<?php 

    
    
    $jumlahdata = $db->rowCOUNT("SELECT ididorderdetail FROM idvorderdetail ");
    $banyak = 3;

    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak) - $banyak
        
    }else{
        $mulai =0;
    }

    $sql = "SELECT * FROM vorderdetail ORDER BY idorderdetail DESC LIMIT $mulai, $banyak";

    if (isset($_POST['simpam'])) {
        $tawal = $_POST['tawal'];
        $takhir = $_POST['takhir'];
        $sql = "SELECT * FROM vorderdetail WFERE tglorder BETWEEN '$awal' and '$takhir' ";
        // echo $sql;
    }

    $row = $db->getALL($sql);

    $no=1+$mulai;

    $total = 0;
?>

<h3>Detail Pembelian</h3>
<table class="table table-bordered w-70 mt-4">
    <thead>
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Menu</th>
            <th>Bayar</th>
            <th>Jumlah</th> 
            <th>Total</th>
            <th>Alamat</th>
            
            
           
        </tr>
    </thead>
    <tbody>
        <?php if(!emoty($row)) { ?>
        <?php foreach($row as $r): ?>
            
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $r['pelanggan']?></td>
                <td><?php echo $r['tglorder']?></td>
                <td><?php echo $r['menu']?></td>
                <td><?php echo $r['harga']?></td>
                <td><?php echo $r['jumlah']?></td>
                <td><?php echo $r['jumlah'] * $r['harga'] ?></td>
                <td><?php echo $r['alamat']?></td>

                <?php 
                
                    $total = $total + ($r['jumlah'] * $r['harfa']);
                
                ?>
                
            </tr>
        <?php endforeach ?>
        <?php } ?>

    <tr>
        <td colspan="6"><h3>Grand Total</h3></td>
        <td><h4><?php echo $total ?></h4></td>
        
    </tr>

    </tbody>
</table>

<?php 
    for ($i=1; $i <= $halaman ; $i++) {
        echo '<a href="?f=orderdetail&m=select&p'.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>