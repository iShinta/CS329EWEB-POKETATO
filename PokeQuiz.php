<html>
<head>
  <meta charset="utf-8" />
  <title>Poketato - The Ultimate Pokemon Repository</title>
  <link rel="stylesheet" style="text/css" href="style.css" />
  <script src="./PokeQuiz.js"></script>
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
          if (isset($_COOKIE["quizCompleted"])) {
            print <<< COMPLETED
            <h2>Looks like you've already tried this quiz!</h2>
            <h3>Feel free to try again, or try our PokePuzzle!</h3>
COMPLETED;
          } else {
            $random = "TRUE";
            setcookie("quizCompleted", $random, time()+60 * 60 * 24);
          }
        ?>
        <h1>Who's That Pokemon?</h1>
        <form name = "pokemonQuiz">
          <b><h3>Easy</h3></b>
          <b>1) </b><span>Who's the main mascot of the Pokemon Franchise?</span><br />
          <img src="./img/pikachu.png" alt="easy pokemon" style="width: 250px;height: 250px;">
          <br/>
          <input type="radio" name = "mcOne" id ="mcOneA" value = "mcOneA" /> Electabuzz <br />
          <input type="radio" name = "mcOne" id ="mcOneB" value = "mcOneB" /> Pikachu <br />
          <br />
          <h3>Medium</h3>
          <b>2) </b><span>Charmander's last evolution is ___?</span><br />
          <img src="./img/charizard.png" alt="medium pokemon" style="width: 250px;height: 250px;">
          <br/>
          <input type="radio" name = "mcTwo" id ="mcTwoA" value = "mcTwoA" /> Chardrago <br />
          <input type="radio" name = "mcTwo" id ="mcTwoB" value = "mcTwoB" /> Charizard <br />
          <input type="radio" name = "mcTwo" id ="mcTwoC" value = "mcTwoC" /> Charmeleon <br />
          <br />
          <h3> Difficult </h3>
          <b>3) </b><span>The only fossil Pokemon in Generation 1 that does not have an evolution is ___?</span><br />
          <img src="./img/aerodactyl.png" alt="medium pokemon" style="width: 250px;height: 250px;">
          <br/>
          <input type="radio" name = "mcThree" id ="mcThreeA" value = "mcThreeA" /> Aerodactyl <br />
          <input type="radio" name = "mcThree" id ="mcThreeB" value = "mcThreeB" /> Omastar <br />
          <input type="radio" name = "mcThree" id ="mcThreeC" value = "mcThreeC" /> Kabutops <br />
          <br />
          <input type = "button" value = "Grade It!" onclick="grade()" />
          <input type = "reset" value = "Clear" />
        </form>
      </div>

      <div class="footer">
        <?php include 'footer.php'; ?>
      </div>
    </div>
  </div>
</body>
</html>
