<h3>Registrasi Pelanggan</h3>
<div class="from-group">
    <form action="" method="post">
        <div class="from-group w-50">
            <label for="">Pelanggan</label>
            <input type="text" name="pelanggan" required placeholder="isi pelanggan" class="from-control">
        </div>

        <div class="from-group w-50">
            <label for="">Alamat</label>
            <input type="text" name="alamat" required placeholder="email" class="from-control">
        </div>

        <div class="from-group w-50">
            <label for="">Telp</label>
            <input type="text" name="telp" required placeholder="isi telp" class="from-control">
        </div>

        <div class="from-group w-50">
            <label for="">Email</label>
            <input type="email" name="email" required placeholder="email" class="from-control">
        </div>

        <div class="from-group w-50">
            <label for="">Password</label>
            <input type="password" name="password" required placeholder="password" class="from-control">
        </div>

        <div class="from-group w-50">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder="password" class="from-control">
        </div>    
        
          

        <div>

            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $pelanggan = $_POST['pelanggan'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $email =$_POST['email'];
        $passwword =$_POST['password'];
        $konfirmasi =$_POST['konfirmasi'];
        $level =$_POST['level'];

        if ($password === $konfirmasi ) {
            $sql = "INSERT INTO tblpelanggan VALUES ('','$pelanggan','$alamat','$telp','$email','$password',1)";
            // echo $sql;
            $db->runSQL($sql);
            header("location:?f=home&m=info");
        }else {
            echo "<h3>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h3>"
        }
        
    }


?>