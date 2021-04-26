<?php
include ('connect.php');
$xml = simplexml_load_file('data.xml'); //parse the xml file into object
foreach( $xml->children() as $hp) 
{
$tipe_hp = $hp->tipe_hp; //get the childnode tipe_hp
$warna = $hp->warna; //get the child node warna
$harga = $hp->harga; //get the child node harga

echo 'tipe_hp : '.$tipe_hp.'<br/>';
echo 'warna : '.$warna.'<br/>';
echo 'harga : '.$harga.'<br/>';
echo '<br>';

$query = "INSERT INTO data_hp 
VALUES('$tipe_hp','$warna','$harga')";
mysqli_query($koneksi, $query);
}


?>