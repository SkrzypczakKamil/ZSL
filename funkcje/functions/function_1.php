<?php
function show(){
  echo "Funkcja SHOW <br>";
}

function show1(){
  return "Funkcja SHOW1<br>";
}


//zamiana pierwszej litery na dużą pozostałe na małe usuknie białe znaki i goraniczenie do 10 znakow
function validateName($string, $len, $color){
return substr(ucfirst(strtolower(trim($string))),0,$len);
}
function nationality($string){
return substr(ucfirst(strtolower(trim($string))),0,$len);
}
 ?>
