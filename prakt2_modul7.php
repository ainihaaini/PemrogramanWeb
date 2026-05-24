<?php

$nama   = isset($_POST['nama']) ? $_POST['nama'] : '';
$tempat = isset($_POST['tempat']) ? $_POST['tempat'] : '';
$tgl    = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$jk     = isset($_POST['jk']) ? $_POST['jk'] : '';
$agama  = isset($_POST['agama']) ? $_POST['agama'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';

echo "Nama : ".$nama."<br>";
echo "Tempat Lahir : ".$tempat."<br>";
echo "Tanggal Lahir : ".$tgl."<br>";
echo "Jenis Kelamin : ".$jk."<br>";
echo "Agama : ".$agama."<br>";
echo "Alamat : ".$alamat."<br>";

echo "Hobi : <br>";

if(isset($_POST['hobi'])){

    foreach($_POST['hobi'] as $hobi){
        echo "- ".$hobi."<br>";
    }

} else {

    echo "Tidak ada hobi dipilih";

}

?>