<?php

echo "Soal Nomber 3 LKPD :<br>";
for ($i = 1; $i <= 11; $i++) {
    //strpos digunakan untuk memeriksa apakah hasil perkalian ($hasil) mengandung karakter '0'.
    //Memeriksa apakah karakter '0' ada dalam hasil. Jika ada, perintah continue akan dilewatkan ke iterasi berikutnya,
    if (strpos((string)($hasil = $i * 5), '0') !== false) continue;
    echo "$i x 5 = $hasil<br>";
}

?>
