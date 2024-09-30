<?php
echo "Soal nomber 10";
echo "<br>";
echo "<br>";
    $listUsia = [12,15, 17, 20, 25, 30, 35, 40, 45, 50];
    $dewasa = 0;
    $anakAnak = 0;
//digunakan untuk iterasi setiap elemen dalam $listUsia.
    foreach($listUsia as $umur) {
        if($umur >= 17) {
            $dewasa++;
        } else {
            $anakAnak++;
        }
    }
    //implode(", ", $listUsia) mengubah array $listUsia menjadi string yang dipisahkan oleh koma dan spasi.

    echo "List Usia : " . implode(", ", $listUsia) . "<br>";
    echo "Jumlah Kategori Dewasa : $dewasa <br>";
    echo "Jumlah Kategori Anak-anak : $anakAnak";
?>