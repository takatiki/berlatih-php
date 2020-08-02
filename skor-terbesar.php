<?php
function skor_terbesar($arr){
//kode di sini
$tampung="";
$result =[];
$kelasReactNative=[];
$kelasReactJs=[];
$kelasLaravel=[];
foreach ($arr as $key => $value) {
  $nilai[$key]=$value["nilai"];
  $kelas[$key]=$value["kelas"];
  $nama[$key]=$value["nama"];
}
array_multisort($kelas, SORT_DESC, $nilai, SORT_DESC,$arr);

for ($i=0; $i < count($arr) ; $i++) { 
  if ($arr[$i]["kelas"] == "React Native") {
     $kelasReactNative[] = $arr[$i];
  }
  elseif ($arr[$i]["kelas"] == "React JS") {
    $kelasReactJs[] = $arr[$i];
  }
  elseif ($arr[$i]["kelas"] == "Laravel") {
    $kelasLaravel[] = $arr[$i];
  }
}
print_r($kelasReactNative);
print_r($kelasReactJs);
print_r($kelasLaravel);
//nilai tertinggi masing masing kelas
$result[]=$kelasReactNative[0];
$result[]=$kelasReactJs[0];
$result[]=$kelasLaravel[0];
foreach ($result as $key => $output) {
  echo "Skor Terbesar Kelas ".$output["kelas"]." Yaitu ".$output["nama"]." Jumlah Skor :".$output["nilai"]."<br>";
}
return $tampung;
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
echo "<pre>";
print_r(skor_terbesar($skor));
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