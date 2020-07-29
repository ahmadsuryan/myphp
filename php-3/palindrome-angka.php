<?php

function palindrome_angka($angka) {
  // tulis kode di sini
    $angka++;
    $palindrome=false;
    while (!$palindrome){
        $str_angka=(string) $angka;
        $hsl="";
        for ($i=strlen($str_angka)-1;$i>=0;$i--){
            $hsl .= substr($str_angka,$i,1);
        }
        if ($str_angka==$hsl)
            $palindrome=true;
        else
            $angka++;
    }
    return $angka."<br>";
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>