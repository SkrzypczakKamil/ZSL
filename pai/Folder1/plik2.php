
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Wybierz jedną z opcji</h1>
<form action="skrypt1.php" 
    <form method="post">

    <input type="text" name="sideA" placeholder="podaj bok">
    <input type="submit"value="zatwierdź figure">
    


</form>
<?php

if (!empty($_POST['sideA'])){
$slideA=$_POST["sideA"];
$area=$sideA;
$circuit=4*$sideA;
}
else


?>
</body>
</html>