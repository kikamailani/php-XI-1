
    <?php
    echo "Soal Nomber 6";
    echo "<br>";
    echo "<br>";
$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];
foreach ($student as $siswa) {
    //$rataRata menyimpan nilai rata-rata yang dihitung dengan membagi total nilai dengan jumlah nilai.
    $rataRata = array_sum($siswa['nilai']) / count($siswa['nilai']);
    //round($rataRata, 2) digunakan untuk membulatkan nilai rata-rata ke dua desimal.
    echo $siswa['nama'] . " = " . round($rataRata, 2) . "<br>";
}

?>