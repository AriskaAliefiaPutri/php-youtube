<?php 
    $jumlahdata = $db->rowCOUNT("SELECT idpelangggan FROM tblpelangggan");
    $banyak = 3;

    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak) - $banyak
        
    }else{
        $mulai =0;
    }

    $sql = "SELECT * FROM tblpelangggan ORDER BY pelangggan ASC";
    $row = $db->getALL($sql);

    $no=1+$mulai;
?>

<h3>Pelangggan</h3>
<table class="table table-bordered w-70 mt-4">
    <thead>
        <tr>
            <th>No</th>
            <th>Pelangggan</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($row as $r): ?>
            <tr>
                <?php 
                if ($r['aktif']==1) {
                    $status = AKTIF;
                }else{
                    $status = 'TIDAK AKTIF';
                }
                ?>
                <td><?php echo $no++ ?></td>
                <td><?php echo $r['pelangggan']?></td>
                <td><?php echo $r['alamat']?></td>
                <td><?php echo $r['telp']?></td>
                <td><?php echo $r['email']?></td>
                <td><a href="?f=pelangggan&m=deleted&id"><?php echo $r['idpelangggan']?>Delete</a></td>
                <td><a href="?f=pelangggan&m=update&id"><?php echo $r['idpelangggan']?><?php echo $status ?></a></td>
            </tr>
        <?php endforeach ?>
    
    </tbody>
</table>

<?php 
    for ($i=1; $i <= $halaman ; $i++) {
        echo '<a href="?f=pelangggan&m=select&p'.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>