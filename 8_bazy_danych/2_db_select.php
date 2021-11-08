<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
    $connect = new mysqli("localhost","root","","3pi2t");
    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);
echo<<<TABLE
  <table>
    <tr>
      <th>Id</th>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Data urodzenia</th>
      <th>Data utworzenia użytkownika</th>
    </tr>
TABLE;
    while($user = $result->fetch_assoc()){
  //  $user = $result->fetch_assoc();
    echo <<< USER
    <tr>
    <td>$user[ID]</td>
    <td>$user[Name]</td>
    <td>$user[Surname]</td>
    <td>$user[Birthday]</td>
    <td>$user[Create_date]</td>
    </tr>
USER;
}
echo "</table>"
     ?>

  </body>
</html>
