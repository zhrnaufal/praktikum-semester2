<?php
 $array_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
 // menampilkan array
 echo $array_buah[0].'<br>';
 // menampilkan jumlah array
 echo"menampilkan jumlah data array".count($array_buah). '<br>';
 // menambahkan data array
 foreach ($array_buah as $key => $value) {
     echo"menambahkan data array ke-".$key.'=>' .$value. '<br>';
 }
 echo '<hr>';
// menampilkan array dengan list
echo '<ol>';
foreach($array_buah as $value) {
    echo '<li>' .$value. '</li>';
}
echo '</ol';
?>