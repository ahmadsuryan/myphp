<?php
function ubah_huruf($string){
//kode di sini
    $hsl="";
    for ($i=0; $i<strlen($string); $i++){
        $hrf=$string[$i];
        $hrf++;
        $hsl .= $hrf;
    }
    return $hsl."<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>