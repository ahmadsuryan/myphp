<?php
function tentukan_deret_geometri($arr) {
// kode di sini
    $geo=true;
    $pengali=$arr[1] / $arr[0];
    $i=1;
    while ($i<count($arr)-1 && $geo) {
        if (($arr[$i+1]/$arr[$i])!=$pengali)
            $geo=false;
        $i++;
    }
    if ($geo) 
        return "deret geometri = true, pengali = $pengali<br>";
    else
        return "deret geometri = false<br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>