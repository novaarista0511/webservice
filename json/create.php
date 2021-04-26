<?php

 require_once('koneksi.php');

    $id = $_POST['id'];
    $tipe_hp = $_POST['tipe_hp'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO data_hp(id,tipe_hp,warna,harga)
    VALUES('$id','$tipe_hp','$warna','$harga')";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        echo json_encode ( array('message' => 'created!') );
    }else {
        echo json_encode ( array('message' => 'error') );
    }
?>