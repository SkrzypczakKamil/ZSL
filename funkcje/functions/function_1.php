<?php
function show(){
  echo "Funkcja SHOW <br>";
}

function show1(){
  return "Funkcja SHOW1<br>";
}


// zamiana pierwszej litery na dużą,
// pozostałe na małe,
// usunie białe znaki i zwróci podciąg o długości $len
function validateName($string, $len){
  return substr(ucfirst(strtolower(trim($string))),0,$len);
}

// zwraca cztery pierwsze litery
function nationality($string){
  return validateName($string, 4); 
}
 ?>
