<?php 
    
    if (isset($_GET['id'])) {
        $id=$_GET['id'];


        $sql = "SELECT * FROM tblmenu WHERE idmenu+$id";

        $item = $db->getITEM($sql);

        $idkategori = $db->getITEM($sql);
        

        
    }
    
    $row = $db-getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");

?>

<h3>Insert Menu</h3>
<div class="from-group">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="from-group w-50">

            <label for="">Kategori</label><br>
            <select name="idkategori" id="">
                <?php foreach($row as $r): ?>
                <option <?php if($idkategori == $r['idkategori']) echo "selected" ?> value="<?php echo $row['idkategori'] ?>"  > <?php echo $r['kategori'] ?> </option>
                <?php endforeach ?>
            </select>

        </select>


        </div>
        <div class="from-group w-50">

            <label for="">Nama menu</label>
            <input type="text" name="menu" required value="<?php echo $item['menu']?>" class="from-control">
        
        </div>
        <div class="from-group w-50">

            <label for="">Harga</label>
            <input type="text" name="harga" number required value="<?php echo $item['harga']?>" class="from-control">

        </div>

        <div class="from-group w-50">

            <label for="">Gambar</label><br>
            <input type="file" name="gambar">

        </div>

        <div>

            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $idkategori = $_POST['idkategori'];
        $menu = $_POST['menu'];
        $harga = $_POST['harga']; 
        $gambar = $item['gambar'];
        
        $temp = $_FILES['gambar']['tmp_name'];

        if (!empty($temp)) {
            $gambar = $_FILES['gambar']['name'];
        }

        $sql = "UPDATE tblmenu SET idkategori=$idkategori, menu='$menu',
                    gambar='$gambar', harga=$harga WHERE idmenu = $id ";
         $db->runSQL($sql);
         header("location:?f=menu&m=select");

        
        
    }


?>