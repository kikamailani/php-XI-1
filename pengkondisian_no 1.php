<?php

echo "Soal Nomber 1 LKPD :";
echo "<br>";
echo "<br>";

$teks1 = "Selamat ulang tahun yang ke-17!";
$teks2 = "Selamat ulang tahun ya!";

function cekAngka($teks) {
    $angkaDicari = array(1,7);

    foreach ($angkaDicari as $angka) {
        //strval($hasil): Mengonversi variabel $hasil menjadi tipe data string.
        if (strpos($teks, strval($angka)) !== false) {
            return "Teks mengandung angka " . implode(", ", $angkaDicari);
        }
    }

    return "Teks tidak mengandung angka.";
}

echo "Teks: " . $teks1 . "<br>";
echo cekAngka($teks1) . "<br><br>";

echo "Teks: " . $teks2 . "<br>";
echo cekAngka($teks2) . "<br>";
?>
