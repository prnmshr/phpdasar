<?php
//standar output

//echo "Purnama Ashari";
//print "Purnama Ashari";
//var_dump ("Purnama Ashari");

$nama = "Purnama Ashari";
$nama_depan = "Purnama";
$nama_belakang = "Ashari";

//operator assignment +=, -=, *=, /=,.=
$a = 1;
$a += 2;

$b = 2;
$b -= 1;

$c =2;
$c *= 3;

$d = 4;
$d /= 2;

$e = "Purnama ";
$e .= "Ashari";

//operator perbandingan
var_dump (1>5);
var_dump(1=="1");
var_dump(1==="1");

//OPERATOR LOGIKA
$x= 30;
var_dump ($x < 20 || $x > 20);
var_dump ($x < 20 && $x > 20);
?>


<!-- php dalam html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, welcome, <?php echo "Purnama Ashari";?>!</h1>
    <h1>Halo, nama saya <?php echo $nama;?>!</h1>
    <p><?php echo "ini adalah tag php"?></p>
    <p><?php echo $a;?></p>
    <p><?php echo $b;?></p>
    <p><?php echo $c;?></p>
    <p><?php echo $d;?></p>
    <p><?php echo $e;?></p>

    <h2><?php echo $nama_depan." ". $nama_belakang;?></h2>


    <?php
        echo "<h1>Hallo Selamat datang di website!</h1>";
    ?>
</body>
</html>
