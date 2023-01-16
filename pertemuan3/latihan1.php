<?php
//pengulangan
//inisialisasi: variabel awal pengulangan, 
// kondisi terminasi: untuk memberhentikan pengulangan, 
// increment/decrement: agar penulangannya maju atau mundur

//for
//rumus for
//for (inisialisasi, kondisi terminasi, increment/decrement) {
    //fungsi/program;
//}
for ( $i = 0; $i < 5; $i++) {
    echo "Hello World! for <br>";
}
    echo "<br>";

//while
//inisialisasi/variable awal
//while (kondisi terminasi) {
//     fungsi/program;
// increment/decrement;
// }
$i = 0;
while ($i < 5) {
    echo "Hello World! while <br>";
$i++;
}
    echo "<br>";

// do ... while
// inisialisasi
// do {
//     fungsi/program;
// increment/decrement} while (kondisi terminasi);
// $i = 0;
do {
    echo "Hello World! do ... while <br>";
$i++;} while ($i<5);

// perbedaan: do ... while ketika kondisi salah program tetap dijalankan satu kali,
// sedangkan for dan while tidak dijalankan sama sekali

//foreach: khusus array


?>
