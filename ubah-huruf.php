<?php
function ubah_huruf($string){
//kode di sini
$abjad = "abcdefghijklmnopqrstuvwxyz";
    $output = "";
    for($i = 0; $i < strlen($string); $i++){
        $position = strrpos($abjad, $string[$i]);
        $output .= substr($abjad, $position + 1, 1);
    }
    return $output;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu

?>