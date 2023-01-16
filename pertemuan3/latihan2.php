<?php
//pengkondisian atau percabangan

//if else
//inisialisasi
// if (kondisi) {
//     fungsi/program ketika true;
// } else {
//     fungsi/program ketika false
// }
$x=10;
if($x<20) {
    echo "benar";
} else {
    echo "salah";
}

//if else if else
//inisialisasi
// if (kondisi) {
//     fungsi/program ketika true;
// } elseif (nilai variabel tepat == x) {
//     fungsi/program ketika tepat x;
// } elseif (nilai variabel tepat == y) {
//     fungsi/program ketika tepat y;
// } else {
//     fungsi/program ketika false
// }
$x=10;
if($x<20) {
    echo "benar";
} elseif ($x == 10) {
    echo "tepat";
} else {
    echo "salah";
}

//ternary

//switch: untuk meringkas if else yang sudah terlalu banyak



?>
