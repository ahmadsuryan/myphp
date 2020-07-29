<?php
function pasangan_terbesar($angka){
// kode di sini
    $str_angka=(string) $angka;
    $max = (int) substr($str_angka,0,2);
    for ($i=1;$i<strlen($str_angka)-1;$i++){
        $bil = (int) substr($str_angka,$i,2);
        if ($bil>$max)
            $max=$bil;
    }
    return $max."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>