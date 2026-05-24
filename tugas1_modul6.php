<?php

$mahasiswa = array(
    "M001" => "Andi",
    "M002" => "Budi",
    "M003" => "Chika",
    "M004" => "Dewi",
    "M005" => "Erna"
);

echo "<h3>Array Asosiatif Awal</h3>";
foreach($mahasiswa as $nim => $nama){
    echo "$nim : $nama <br>";
}


// ==========================
// Fungsi Pengurutan Array
// ==========================

// sort()
$temp = $mahasiswa;
sort($temp);

echo "<h3>sort()</h3>";
echo "<pre>";
print_r($temp);
echo "</pre>";


// rsort()
$temp = $mahasiswa;
rsort($temp);

echo "<h3>rsort()</h3>";
echo "<pre>";
print_r($temp);
echo "</pre>";


// asort()
$temp = $mahasiswa;
asort($temp);

echo "<h3>asort()</h3>";
foreach($temp as $nim => $nama){
    echo "$nim : $nama <br>";
}


// arsort()
$temp = $mahasiswa;
arsort($temp);

echo "<h3>arsort()</h3>";
foreach($temp as $nim => $nama){
    echo "$nim : $nama <br>";
}


// ksort()
$temp = $mahasiswa;
ksort($temp);

echo "<h3>ksort()</h3>";
foreach($temp as $nim => $nama){
    echo "$nim : $nama <br>";
}


// krsort()
$temp = $mahasiswa;
krsort($temp);

echo "<h3>krsort()</h3>";
foreach($temp as $nim => $nama){
    echo "$nim : $nama <br>";
}


echo "<hr>";
echo "<h2>Implementasi 5 Fungsi Array</h2>";

$data = array("Andi", "Budi", "Chika");


// 1. array_push()
array_push($data, "Dewi", "Erna");

echo "<h3>1. array_push()</h3>";
echo "<pre>";
print_r($data);
echo "</pre>";


// 2. array_pop()
array_pop($data);

echo "<h3>2. array_pop()</h3>";
echo "<pre>";
print_r($data);
echo "</pre>";


// 3. array_unshift()
array_unshift($data, "Zaki");

echo "<h3>3. array_unshift()</h3>";
echo "<pre>";
print_r($data);
echo "</pre>";


// 4. array_shift()
array_shift($data);

echo "<h3>4. array_shift()</h3>";
echo "<pre>";
print_r($data);
echo "</pre>";


// 5. array_reverse()
$balik = array_reverse($data);

echo "<h3>5. array_reverse()</h3>";
echo "<pre>";
print_r($balik);
echo "</pre>";

?>