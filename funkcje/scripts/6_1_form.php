<?php
//if(!empty($_POST['name'])){
//  require_once '../functions/function_1.php';
  //show();
  //echo "<hr>";
   //echo text();
   //echo name('Krystyna').'<hr>';
  //echo $_POST['name'];
//  echo name($_POST['name']);
  //echo"Imię".name($_POST['name']);
//  echo validateSName($_POST['name'],10);

  //echo"Imie bez poprawy:".$_POST['name'].",długosc".strlen($_POST['name'])."<br>";

//}
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Dane z formularza </h3>
    <?php
    require_once '../functions/function_1.php';
    show();
    echo "<hr>";
    if(!empty($_POST['name'])&& !empty($_POST['color'])){
      echo "Imie bez poprawy:". $_POST['name'].",dlugosc:".strlen($_POST['name']);
      echo "<div style=\"color:$color\">";
      echo "Imie po poprawie:".validateName($_POST['name'],4, $_POST['color']).",
      długość: " .strlen(validateName($_POST['name'],4,$_POST['color']));
  }
    ?>
  </body>
</html>
?>
