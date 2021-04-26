<!Doctype Html>
<html>
<head>
<title>cara insert data menggunakan json di php</title>
</head>
<body>
<?php
//koneksi ke database
$connection = mysqli_connect("localhost","root","","handphone") or die("Error " . mysqli_error($connection));

//untuk mendapatkan file json
$jsondata = file_get_contents('empdetail.json');

//convert json ke   data array
$data = json_decode($jsondata, true);

//mendapatkan data employee details

$tipe_hp = $data['tipe_hp'];
$warna= $data['warna'];
$harga = $data['harga'];



//insert data ke table tbl_emp 
$sql = "INSERT INTO data_hp(tipe_hp, warna, harga)
VALUES('$tipe_hp', '$warna', '$harga')";

if(!mysqli_query($connection, $sql)){
  die("Error insert data ");
}else{
  echo "Success insert data";
}

?>
</body>
</html>