<?php
if(!empty($_POST['name'])){
  require_once '../functions/function_1.php';
   //echo text();
   //echo name('Krystyna').'<hr>';
  //echo $_POST['name'];
//  echo name($_POST['name']);
  //echo"Imię".name($_POST['name']);
  echo validateString($_POST['name'],10);
}

?>
