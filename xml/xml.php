<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "handphone") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
//menampilkan data dari database, table tb_anggota
$sql = "select * from data_hp ";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('data_hp');
    $track->addChild('id', $row['id']);
    $track->addChild('tipe_hp', $row['tipe_hp']);
    $track->addChild('warna', $row['warna']);
    $track->addChild('harga', $row['harga']);
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>