<?php

// Ambil data POST (pakai ?? agar tidak error jika kosong)
$nama   = $_POST["nama"] ?? "";
$tempat = $_POST["tempat"] ?? "";
$tgl    = $_POST["tgl"] ?? "";
$jk     = $_POST["jk"] ?? "";
$agama  = $_POST["agama"] ?? "";
$alamat = $_POST["alamat"] ?? "";

$hobi = [];
if (isset($_POST['Hobi1'])) $hobi[] = $_POST['Hobi1'];
if (isset($_POST['Hobi2'])) $hobi[] = $_POST['Hobi2'];
if (isset($_POST['Hobi3'])) $hobi[] = $_POST['Hobi3'];
if (isset($_POST['Hobi4'])) $hobi[] = $_POST['Hobi4'];

// Upload file
$dir = "image/";
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

$upload = "";

if (isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
    $filename = basename($_FILES['file']['name']);
    $upload = $dir . $filename;

    $kirim = move_uploaded_file($_FILES['file']['tmp_name'], $upload);
    if ($kirim) {
        echo "File berhasil diupload <br><br>";
    } else {
        echo "File gagal diupload <br><br>";
        $upload = "";
    }
} else {
    // Kalau user tidak memilih file, jangan langsung error
    // echo "Tidak ada file yang diupload<br>";
}

echo "Nama          : " . $nama . "<br>";
echo "Tempat Lahir  : " . $tempat . "<br>";
echo "Tgl Lahir     : " . $tgl . "<br>";
echo "Jenis Kelamin : " . $jk . "<br>";
echo "Agama         : " . $agama . "<br>";
echo "Alamat        : " . $alamat . "<br>";
echo "Hobi          : <br>";

if (count($hobi) > 0) {

    foreach ($hobi as $item) {
        echo "- $item <br>";
    }

} else {

    echo "Tidak ada hobi dipilih <br>";
}

// Tampilkan gambar
if ($upload != "") {
    echo "<br><img src='$upload' width='200'>";
}

?>