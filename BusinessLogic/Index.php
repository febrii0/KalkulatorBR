<?php

require_once __DIR__ . '/kalkulator.php';

$kalkulator = new KalkulatorTabung();

$r = floatval(input('Masukkan jari-jari tabung: '));
$t = floatval(input('Masukkan tinggi tabung: '));

$hasil = $kalkulator->hitungVolume($r, $t);

echo "Volume tabung dengan jari-jari $r dan tinggi $t adalah $hasil";

function input($pesan)
{
    echo $pesan;
    return readline();
}
