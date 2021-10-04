<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Średni wiek</title>
</head>
<body>

<?php
if (!isset($_POST['person'])&& !isset($_POST['buttonavg'])){
    echo<<<FORMCOUNTPERSON

<h3>ilośc osób w rodzinie</h3>
<form method="post">
    <input type="number" name="person" placeholder="podaj ilość osób"><br><br>
    <input type="submit" value='Zatwierdź'>
</form>
FORMCOUNTPERSON;
}
?>



<?php
if(!empty($_POST["person"])){
echo'<h3>ilość osób w rodzinie: $_POST[person]</h3>';
echo $_POST["person"];
echo<<<FORMAGEPERSON
<form method="post">
FORMAGEPERSON;
    for ($i=0); $i<$_POST['person']; $i++;{
        echo "<input type=\"number\" name=\"age$i\" placeholder=\"podaj wiek osoby $i\"><br><br>";
    
    }
    echo '<input type="submit" name="buttonavg" value="oblcz średni wiek">';
    echo<<<FORMAGEPERSON
<input type="number" name="age" placeholder="podaj wiek osób"><br><br>

</form>
FORMAGEPERSON;
}
if(isset($_POST['buttonavg']))
//echo"średni wiek"'
$ageavg=0;
foreach($_POST as $key => $value){
    echo "$key; $value;<br>";
    if (key !='buttonavg'){
    $ageavg=$ageavg+$value;
    }
}
echo "Średni wiek: $ageavg";
//zad dom dodać zaokrąglenie do 2 miejsc po przecinku
//zad dom dodac hiperłacze co przekieruje do pierwszego fomularza
?>
</body>
</html>