<?php
echo "Soal Nomber 8";
echo "<br>";
echo "<br>";
function hitungJumlah($data, $cari) {
    // Menghitung jumlah kemunculan angka $cari dalam array $data
    $jumlah = 0;
    foreach ($data as $angka) {
        if ($angka == $cari) {
            $jumlah++;
        }
    }
    return $jumlah;
}

// Contoh penggunaan
$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;
$jumlah = hitungJumlah($data, $cari);
echo "jumlah angka $cari = $jumlah";
?>
