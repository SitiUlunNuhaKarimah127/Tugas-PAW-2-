<?php
// membuat fungsi
function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Siti Ulun Nuha Karimah", "Hi");

    echo "<hr>";

    $saya = "Hesti";
    $ucapanSalam = "Selamat pagi";
    // memanggilnya lagi
    perkenalan($saya, $ucapanSalam);
    $saya = "Danita";
    $ucapanSalam = "Halo";
    // memanggilnya lagi
    perkenalan($saya, $ucapanSalam)
?>