<?php
$text= <<<T
ZSL- Zespół
Szkół
łączności
T;

echo"$text<br>";
echo nl2br($text),"<hr>";
$name="JaNuSZ";
//zmieniamy wielkosc liter na male
echo strtolower($name),"<br>"; //janusz
//zamiana na duze litery
echo strtoupper($name),"<br>";//JANUSZ

$data="januSZ kOwAlSki";
 //zamiana pierwszej litery na dużą
 echo ucfirst($data);
 //zamienia wszystkie pierwsze litery na duze
 echo ucwords($data);

 $lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. 
 Veritatis optio voluptate sint laudantium accusantium in eaque numquam et aut?
  Quidem distinctio voluptas vero magni
  aperiam soluta blanditiis illo iste consectetur.";
echo "<hr>$lorem</hr>";
//$col=wordwrap($lorem,30,"text");
$col=wordwrap($lorem,30,"<br>");
//$col=wordwrap($lorem,30,"<hr>");
echo $col;
//czyszczenie zawartosci bufora
ob_clean();
//usuwanie białych znaków 
$name="Janusz"
$name1="Janusz  "     ;
echo"Długość \$name":strlen($name)."<br>";
echo"Długość \$name1":strlen($name1)."<br>";
echo"Długość \$name1":strlen(rtrim($name1))."<br>";
echo"Długość \$name1":strlen(ltrim($name1))."<br>";
echo"Długość \$name1":strlen(trim($name1))."<br>";

//przeszukiwanie ciagu znaków
echo strstr("janusz@gmail.com","@");//@gmail.com
echo strstr("janusz@gmail.com","G");//
echo stristr("janusz@gmail.com","G");//gmail.com

$name="Janusz";
echo substr($name, 2) // cos tu wpisze
echo substr($name, 2,3) // ostatnie 3 nuz
echo substr($name, 2,) // 
echo substr($name, -2,1) // drugi znak od konca
echo substr($name, -2,1) // drugi znak od konca
echo substr(strstr("janusz@gmail.com","@",1));//gmail.com












?>