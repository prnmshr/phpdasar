<?php
//date
//date("l")=hari
//date("d")=tanggal
//date("M")=bulan 
//date("m")=bulan dalam angka#
//date("Y")=tahun

    echo date("l");
    echo "<br>";
    echo date("l, d-M-Y");
    echo "<br>";
    echo date("l, d-m-y");
    echo "<br>";

//time
//UNIX time stamp / EPOCH time: detik sudah berlalu sejak 1 jan 1970

    echo "<br>";
    echo time();
    echo "<br>";
//
    echo date("l, d-M-Y", time()+60*60*24*101);
    echo "<br>";
    echo date("l, d-M-Y", time()-60*60*24*101);
    echo "<br>";

//mktime: untuk membuat sendiri detik yang sudah berlalu dari UNIX time stamp
//mktime(0,0,0,0,0,0);
//mktime(jam,menit,detik,bulan,tanggal,tahun)
    echo date("l", mktime(0,0,0,4,6,2001));
    echo "<br>";


//strtotime: memasukkan format tanggal ke UNIX time stamp
    echo date("l", strtotime("6 Apr 2001"));
    
?>
