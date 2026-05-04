<?php
$saldoAwal = 2000000;
$bunga = 0.03;
$bulan = 11;

$saldoAkhir = $saldoAwal;

for ($i = 1; $i <= $bulan; $i++) {
    $saldoAkhir = $saldoAkhir + ($saldoAkhir * $bunga);
}

echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".number_format($saldoAkhir,0,',','.');
?>