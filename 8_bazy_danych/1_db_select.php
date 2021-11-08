<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
    $connect = new mysqli("localhost","root","","3pi2t");
    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);

    while($user = $result->fetch_assoc()){
  //  $user = $result->fetch_assoc();
    echo <<< USER
    Id: $user[ID]<br>
Imie i nazwisko: $user[Name] $user[Surname]<br>
Data urodzenia: $user[Birthday]<br>
Data utworzenia uzytkownia: $user[Create_date]
<hr>
USER;
}
     ?>
  </body>
</html>
