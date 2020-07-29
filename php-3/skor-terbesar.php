<?php
function skor_terbesar($arr){
//kode di sini
    $hasil=[];
    $kelas=$arr[0]['kelas'];
    $hasil[$kelas]=$arr[0];
    for ($i=1;$i<count($arr); $i++) {
        $kelas=$arr[$i]['kelas'];
        $nilai=$arr[$i]['nilai'];
        //cari $kelas di array $hasil
        //jika ketemu dan nilai di $hasil lebih kecil, maka ganti datanya
        $found=false;
        foreach($hasil as $dt) {
            if ($dt['kelas']==$kelas) {
                $found=true;
                if ($dt['nilai']<$nilai){
                    //ganti hasil
                    $hasil[$kelas]['nama']=$arr[$i]['nama'];
                    $hasil[$kelas]['nilai']=$nilai;
                }
            }
        }
        if (!$found){
            //kelas belum pernah ada, maka tambahkan
            $hasil[$kelas]=$arr[$i];
        }
    }
    return $hasil;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r("<pre>");
print_r(skor_terbesar($skor));
print_r("</pre>");
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>
