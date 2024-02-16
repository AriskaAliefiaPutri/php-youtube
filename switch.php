<?php 

    // $hari = 4;

    // switch ($hari) {
    //     case 1:
    //         echo 'minggu';
    //     case 2:
    //         echo 'senin';
    //         break;
    //     case 3: 
    //         echo 'selasa';
    //         break;
    //     dafault:
    //         echo 'hari belum dibuat';
    //         break;      
    // }

    $pilihan = 'tambah';

    switch ($pilihan) {
        case 'tambah':
            echo 'anda memilih tambah';
            break;
        case 'ubah':
            echo 'anda memilih ubah';
            break;
        case 'hapus':
            echo 'anda memilih hapus';
            break;
        default:
            echo 'pilihan belum ada';
            break;
    }

?>