<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="raptor.png">
    <link rel="stylesheet" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurrasicant Breeding</title>

  </head>

  <body>
    <nav class="navBar">
      <ul class="navItems">
        <li><a class="active" href="">Home</a></li>
        <li><a href="raptor.html">Raptor</a></li>
        <li class="icon"><a id="icon" href="index.html"><img src="raptor.png" alt=""></a></li>
        <li><a href="rex.html">Rex</a></li>
        <li><a href="rhino.html">Rhino</a></li>
      </ul>
    </nav>
    <hr>
  </body>
<div class="table">
  <table>
    <tr>
      <th>Name</th>
      <th>Health</th>
      <th>Stamina</th>
      <th>Oxygen</th>
      <th>Food</th>
      <th>Weight</th>
      <th>Melee Damage</th>
      <th>Movement Speed</th>
      <th>Torpor</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "Jurrasicant");
    if ($conn-> connect_error) {
      die("Connection failed:". $conn-> connect_error);
    }

    $sql = "SELECT Name, Health, Stamina, Weight, Melee_Damage, Movement_Speed FROM Raptors";
    $result = $conn -> query($sql);
    if ($result -> num_rows > 0) {
      while ($row = $result -> fetch_assoc()){
        echo "<tr><td>". $row["Name"]."</td><td>". $row["Health"]."</td><td>". $row["Stamina"]."</td><td>". $row["Weight"]."</td><td>". $row["Melee_Damage"]."</td><td>". $row["Movement_Speed"]."</td></tr>";
      }
    }
    ?>
  </table>
</div>
</html>
