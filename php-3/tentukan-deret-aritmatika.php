<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
    $arit=true;
    $selisih=$arr[1] - $arr[0];
    $i=1;
    while ($i<count($arr)-1 && $arit) {
        if ($arr[$i+1]-$arr[$i]!=$selisih)
            $arit=false;
        $i++;
    }
    if ($arit) 
        return "deret aritmatika = true, selisih = $selisih<br>";
    else
        return "deret aritmatika = false<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>