<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Poketato - The Ultimate Pokemon Repository</title>
  <link rel="stylesheet" style="text/css" href="style.css" />
</head>

<body>
  <div class="container" style="height: 1600px;">
    <div class="header">
      <?php include 'header.php'; ?>
    </div>
    <div class="menu">
      <?php include 'menu.php'; ?>
    </div>
    <div class="content">
      <div class="main_content">
        <?php
          if(!isset($_COOKIE["id"])){
            ?><p>You need to login to take the Quiz</p><?php
          }else{
            if(!isset($_SESSION["name"])) {
              $_SESSION["name"] = $_COOKIE["id"];
              $_SESSION["question"] = 1;
              $_SESSION["score"] = 0;
            ?><a href="PokeQuiz.php">Start the Quiz</a><?php
            }else{
              echo "You're logged in ".$_SESSION["name"]."<br/>";
              print_r("Current score: ".$_SESSION["score"]."<br /><br />");
              print_r("<h2>Question ".$_SESSION["question"]."</h2>");

              if($_SESSION["question"] == 1){ //Q1
                if(isset($_POST["q1"])){
                  echo "Check Question 1<br/>";
                  if($_POST["q1"] == "q1b"){
                    echo "Right answer";
                    $_SESSION["score"] += 1;
                  }else{
                    echo "Wrong answer";
                  }
                  $_SESSION["question"] +=1;
                  ?>
                  <form name="quiz" method="post">
                    <input type="submit" name="submit" value="Next Question" />
                  </form>
                  <?php
                }else{
                  ?>
                  <form name="quiz" method="post">
                    <b><h3>Easy</h3></b>
                    <img src="./img/pikachu.png" alt="easy pokemon" style="width: 250px;height: 250px;"><br />
                    <div>1) Who's the main mascot of the Pokemon Franchise?
                		<br /><input value="q1a" name="q1" type="radio" />a) Electabuzz
                		<br /><input value="q1b" name="q1" type="radio" />b) Pikachu</div>
                    <br /><input name="submit" type="submit" value="Grade this question" /><input name="reset" type="reset" value="Clear" />
                  </form>
                  <?php
                }
              }else if($_SESSION["question"] == 2){ //Q2
                if(isset($_POST["q2"])){
                  echo "Check Question 2<br/>";

                  if($_POST["q2"] == 'q2a'){
                    echo "Right answer";
                    $_SESSION["score"] += 1;
                  }else{
                    echo "Wrong answer";
                  }
                  $_SESSION["question"] +=1;
                  ?>
                  <form name="quiz" method="post">
                    <input type="submit" name="submit" value="Next Question" />
                  </form>
                  <?php
                }else{
                  ?>
                  <form name="quiz" method="post">
                    <h3>Medium</h3>
                    <div><br />2) Gyarados is a Water and Flying Type
                		<br /><input value="q2a" name="q2" type="radio" />a) True
              		  <br /><input value="q2b" name="q2" type="radio" />b) False</div>
                    <br /><input name="submit" type="submit" value="Grade this question" /><input name="reset" type="reset" value="Clear" />
                  </form>
                  <?php
                }
              }else if($_SESSION["question"] == 3){ //Q3
                if(isset($_POST["q3a"]) || isset($_POST["q3b"]) || isset($_POST["q3c"]) || isset($_POST["q3d"])){
                  echo "Check Question 3<br/>";
                  if($_POST["q3b"] == "q3b" && $_POST["q3a"] != "q3a" && $_POST["q3c"] != "q3c" && $_POST["q3d"] != "q3d"){
                    echo "Right answer";
                    $_SESSION["score"] += 1;
                  }else{
                    echo "Wrong answer";
                  }
                  $_SESSION["question"] +=1;
                  ?>
                  <form name="quiz" method="post">
                    <input type="submit" name="submit" value="Next Question" />
                  </form>
                  <?php
                }else{
                  ?>
                  <form name="quiz" method="post">
                    <h3>Medium</h3>
                    <img src="./img/charizard.png" alt="medium pokemon" style="width: 250px;height: 250px;">
                    <div><br />2) Charmander's last evolution is ___?
                		<br /><input value="q3a" name="q3a" type="checkbox" />a) Chardrago
                		<br /><input value="q3b" name="q3b" type="checkbox" />b) Charizard
                		<br /><input value="q3c" name="q3c" type="checkbox" />c) Charmeleon
                		<br /><input value="q3d" name="q3d" type="checkbox" />d) Charmander</div>
                    <br /><input name="submit" type="submit" value="Grade this question" /><input name="reset" type="reset" value="Clear" />
                  </form>
                  <?php
                }
              }else if($_SESSION["question"] == 4){ //Q4
                if(isset($_POST["q4a"]) || isset($_POST["q4b"]) || isset($_POST["q4c"]) || isset($_POST["q4d"])){
                  echo "Check Question 4<br/>";
                  if($_POST["q4d"] == "q4d" && $_POST["q4a"] != "q4a" && $_POST["q4b"] != "q4b" && $_POST["q4c"] != "q4c"){
                    echo "Right answer";
                    $_SESSION["score"] += 1;
                  }else{
                    echo "Wrong answer";
                  }
                  $_SESSION["question"] +=1;
                  ?>
                  <form name="quiz" method="post">
                    <input type="submit" name="submit" value="Next Question" />
                  </form>
                  <?php
                }else{
                  ?>
                  <form name="quiz" method="post">
                    <h3> Difficult </h3>
                    <img src="./img/aerodactyl.png" alt="medium pokemon" style="width: 250px;height: 250px;">
                    <div><br />4) The only fossil Pokemon in Generation 1 that does not have an evolution is ___?
                		<br /><input value="q4a" name="q4a" type="checkbox" />a) Victreebel
                		<br /><input value="q4b" name="q4b" type="checkbox" />b) Kabutops
                		<br /><input value="q4c" name="q4c" type="checkbox" />c) Omastar
                		<br /><input value="q4d" name="q4d" type="checkbox" />d) Aerodactyl</div>
                    <br /><input name="submit" type="submit" value="Grade this question" /><input name="reset" type="reset" value="Clear" />
                  </form>
                  <?php
                }
              }else if($_SESSION["question"] == 5){ //Q5
                if(isset($_POST["q5"])){
                  echo "Check Question 5<br/>";
                  if($_POST["q5"] == "thunder stone"){
                    echo "Right answer";
                    $_SESSION["score"] += 1;
                  }else{
                    echo "Wrong answer";
                  }
                  $_SESSION["question"] +=1;
                  ?>
                  <form name="quiz" method="post">
                    <input type="submit" name="submit" value="Next Question" />
                  </form>
                  <?php
                }else{
                  ?>
                  <form name="quiz" method="post">
                    <h3> Difficult </h3>
                    <div>5) What does Pikachu need to evolve into Raichu? <input id="q5" name="q5" type="text" />.</div>
                    <br /><input name="submit" type="submit" value="Grade this question" /><input name="reset" type="reset" value="Clear" />
                  </form>
                  <?php
                }
              }else if($_SESSION["question"] == 6){ //Q6
                if(isset($_POST["q6"])){
                  echo "Check Question 6<br/>";
                  if($_POST["q6"] == "mewtwo"){
                    echo "Right answer";
                    $_SESSION["score"] += 1;
                  }else{
                    echo "Wrong answer";
                  }
                  $_SESSION["question"] +=1;
                  ?>
                  <form name="quiz" method="post">
                    <input type="submit" name="submit" value="Next Question" />
                  </quiz>
                  <?php
                }else{
                  ?>
                  <form name="quiz" method="post">
                    <h3> Difficult </h3>
                    <div><br />6) Which Pokemon's Pokedex entry comes first, Mew or Mewtwo? <input id="q6" name="q6" type="text" /></div>
                    <br /><input name="submit" type="submit" value="Grade this question" /><input name="reset" type="reset" value="Clear" />
                  </form>
                  <?php
                }
              }else if($_SESSION["question"] == 7){
                echo "Reached the last question. Quiz ended.<br />Feel Free to try the PokePuzzle!";
              }
            }
          }
        ?>
      </div>

      <div class="footer">
        <?php include 'footer.php'; ?>
      </div>
    </div>
  </div>
</body>
</html>
