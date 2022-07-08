<?php 
// array buah
$array_buah = [
    'p'=>"Pepaya",
     'm'=>"Mangga",
     'a'=>"apel",
     'j'=>"Jambu" 
];
//menampilkan array dengan foreach
echo '<ol>';
foreach($array_buah as $key => $value) {
    echo '<li>' .$key. ' - ' .$value. '</li>';
}

echo '</ol>';
sort($array_buah);
echo '<hr/>';

foreach($array_buah as $key => $value) {
    echo '<li>' .$key. ' - ' .$value. '</li>';
}
?>