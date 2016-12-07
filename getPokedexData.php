<?php
  $pokeName = $_GET["pokeName"];
  $response = "No Pokemon Found, , , ";
  $host = "fall-2016.cs.utexas.edu";
  $user = "kevintn";
  $pwd = "RRtcQ26KjE";
  $dbs = "cs329e_kevintn";
  $port = "3306";

  $connect = mysqli_connect ($host, $user, $pwd, $dbs);

  if (empty($connect)) {
    die("mysqli_connect failed: " . mysqli_connect_error());
  }

  $table = "pokedex";
  $result = mysqli_query($connect, "SELECT * from $table WHERE name = \"$pokeName\"");
  $row = $result->fetch_row();

  $response = $row[0] . ":" . $row[1] . ":" . $row[2] . ":" . $row[3];

  mysqli_close($connect);

  echo $response;
?>
