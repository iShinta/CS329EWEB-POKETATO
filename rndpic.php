<?php
  $servername = "fall-2016.cs.utexas.edu";
  $username = "kevintn";
  $password = "RRtcQ26KjE";
  $dbname = "cs329e_kevintn";
  $port = "3306";

  $connect = mysqli_connect ($servername, $username, $password, $dbname);

  if (empty($connect))
  {
    die("mysqli_connect failed: " . mysqli_connect_error());
  }

  print "Connected to ". mysqli_get_host_info($connect) . "<br /><br />\n";

  $table = "pokedex";
  $result = mysqli_query($connect, "SELECT * FROM $table ORDER BY RAND() LIMIT 1");

  while($row = $result->fetch_row()){
    if (empty($result)){
      $response = " , ";
    }else{
      $response = substr($row[2],2).",".$row[1];
    }
    echo $response;
  }

  $result->free();
  mysqli_close($connect);
  echo "End";
?>
