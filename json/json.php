<?php

//koneksi ke database    
require_once('koneksi.php'); 

//mengambil data dari tabel data_hp
    $query = "SELECT * FROM data_hp";
    $sql    = mysqli_query($db_connect, $query);

    //membuat array
    if ($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)){
            array_push ($result,array(
                'id' => $row ['id'],
                'tipe_hp' => $row['tipe_hp'],
                'warna' => $row['warna'],
                'harga' => $row['harga'],
            ) );
        }
        
    //mengubah array menjadi format
    echo json_encode ( array('Data Handphone' => $result) );
    }
?>