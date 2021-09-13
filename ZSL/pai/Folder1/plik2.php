<?php
echo PHP_VERSION;//wersja php
echo 2**10;

$x=10;
$y=1;

echo $x<==>$y;

//równe , identyczne

$x=1;
$y=1.0;
echo gettype($x);//integer
echo gettype($y); //double

if ($x==$y) {
    echo"równe";
}else{
    echo"różne";
}

if($x===$y) {
    echo"identyczne";
}else{
    echo"różne";
}


$x=1;
echo $x;//1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=$x++;
echo $x; //4
echo $y; //3
?>