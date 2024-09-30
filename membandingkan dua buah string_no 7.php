<?php
echo "Soal Nombor 7";
echo "<br>";
echo "<br>";
// Fungsi untuk membandingkan dua nama
function bandingkanNama($nama1, $nama2) {
    // Menghitung jumlah karakter dari masing-masing nama
    $panjangNama1 = strlen(str_replace(' ', '', $nama1)); // Menghilangkan spasi untuk menghitung jumlah karakter sebenarnya
    $panjangNama2 = strlen(str_replace(' ', '', $nama2));
    
    // Menampilkan jumlah karakter dari kedua nama
    echo "Jumlah karakter nama pertama ($nama1): $panjangNama1 karakter<br>";
    echo "Jumlah karakter nama kedua ($nama2): $panjangNama2 karakter<br>";

    // Membandingkan jumlah karakter
    if ($panjangNama1 > $panjangNama2) {
        $selisih = $panjangNama1 - $panjangNama2;
        echo "$nama1 memiliki jumlah karakter lebih banyak dari $nama2: selisih $selisih karakter.<br>";
    } elseif ($panjangNama2 > $panjangNama1) {
        $selisih = $panjangNama2 - $panjangNama1;
        echo "$nama2 memiliki jumlah karakter lebih banyak dari $nama1: selisih $selisih karakter.<br>";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.<br>";
    }
}

// Contoh penggunaan fungsi
$namaPertama = "Kika Mailani";
$namaKedua = "Kafiya Nuril Kautsar";

bandingkanNama($namaPertama, $namaKedua);
?>
