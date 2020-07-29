<?php

  $data=array();
  $d1=[1,2,3];
  $d2=[4,5,6];
  $data[]=$d1;
  $data[]=$d2;
  foreach($data as $d){
    print_r($d);
    echo "<br>";
  } 
  //print_r($data);
  
  var_dump(true); // bool(true)
  $test="abcde";
  for ($i=4;$i>=0;$i--){
      echo $test[$i];
  }
    // var_dump(true && false);// bool(false)
    // var_dump(false && true);// bool(false)
    // var_dump(false && false);// bool(false)

    // var_dump(true || true); // bool(true)
    // var_dump(true || false); // bool(true)
    // var_dump(false || true); // bool(true)
    // var_dump(false || false); // bool(false)


    $index=['id','nama','asal'];
    $nilai=['001','bagus','bandung'];
    $hasil=[];
    for ($i=0; $i<3;$i++) {
        $idx=$index[$i];
        $hasil[$idx] = $nilai[$i];            
    }
    echo "<pre>";
    print_r($hasil);
    echo "</pre>";

    $huruf='a';
    $huruf++;
    echo "<br>TTTTTTTT = ".$huruf."<br>";
    echo ('a'<'b')."xxx<br>";
    echo ('A'<'b')."yyy<br>";


?> 

