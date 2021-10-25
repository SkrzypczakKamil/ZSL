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
      echo "Imie bez poprawy:". $_POST['name'].",dlugosc:".strlen($_POST['name'])."<br>";
      $color=$_POST['color'];
      $nationality=$_POST['nationality']; 
      echo "<div style=\"color: $color\">";
      echo "Imie po poprawie:".validateName($_POST['name'],4, $_POST['color']).",
      długość: " .strlen(validateName($_POST['name'],4,$_POST['color']));

  }
    ?>
  </body>
</html>
