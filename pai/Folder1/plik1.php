<?php
echo 'ZSL<br>';
echo 'ZSL<hr>';
$name="Janusz";
echo 'Imię: $name<br>'; //imię:$name
echo "Imię: $name<br>"; //imię:Janusz
//konkatenacja
echo"Janusz", "Kowalski<br>";
//typy danych
//całkowity
$calkowita=10;
$bin=0b101; //5
$oct=011; //9
$hex=0x11; //17
echo $hex;
//zmienoprzecinkowy
$x=10.5;
//logiczny
$prawda=true;
$falsz=false; //w mazwach zmiennych nie należy używać polskich znaków
echo $prawda;//1
echo$falsz;/// nic nie wyświetli
//składnia heredoc
echo <<< E
<br>Twoje imie: $name<br>
Poznań<br>
ZSŁ<hr>
E;



$text= <<< E
<br>Twoje imie: $name<br>
Poznań<br>
ZSŁ<hr>
E;
echo $text;

echo <<< "E"
<br>Twoje imie: $name<br>
Poznań<br>
ZSŁ<hr>
E;
$surname="Nowak";
echo "\$name $surname"; //$name Nowak
?>
