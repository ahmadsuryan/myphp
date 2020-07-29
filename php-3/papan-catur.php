<?php

function papan_catur($angka) {
// tulis kode di sini
    $hsl=""; 
    for ($i=0;$i<$angka-1;$i++) {
        $hsl .= "# ";
    }
    $grs1=$hsl."#<br>";
    $grs2="&nbsp;".$hsl."<br>";

    $hsl="";
    for ($i=0;$i<$angka;$i++){
        if ($i%2==0) 
            $hsl .= $grs1;
        else
            $hsl .= $grs2;
    }
    $hsl .= "<br>";
    return $hsl;
}

// TEST CASES
echo "papan catur 4 x 4 :<br>";
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo "papan catur 8 x 8 :<br>";
echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo "papan catur 5 x 5 :<br>";
echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/