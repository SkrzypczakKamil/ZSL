<?php
//function text(){
//  return "test";
//}

//function name($name){
//  return $name;
//}
//zamiana pierwszej litery na dużą pozostałe na małe usuknie białe znaki i goraniczenie do 10 znakow
function validateString($string, $length){
return substr(ucfirst(strtolower(trim($string))),0,$length);

}

 ?>
