<?php
function start(){
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //echo "Not in a session, Form Posted";
    if(isset($_POST["username"])){
      $username = $_POST["username"];
      $password = $_POST["password"];

      $fh = fopen("passwd.txt", "r");
      //Check if username is already taken
      $userlist = Array();
      while(!feof($fh)){
        //Read Line
        $line = fgets($fh);
        $line_pieces = explode(":", $line);
        $userlist[$line_pieces[0]] = $line_pieces[1];
      }
      fclose($fh);
      //print_r($userlist);

      //If not taken, register
      if(!array_key_exists($username, $userlist)){
        $fh2 = fopen("passwd.txt", "a");
        fwrite($fh2, $username.":".$password."\n");
        fclose($fh2);

        setcookie("id", $username, time()+31536000);
        setcookie("timeloggedin", time(), time()+31536000);

        print($username." has been successfully registered");
        print("<br /><a href=\"index.php\"> Back to the homepage </a>");
      }else{
        print($username." already exists.");
        print("<br /><a href=\"index.php\"> Back to the homepage </a>");
      }

    }
  }else{
    if(isset($_COOKIE["id"])){ //In a session
      //Recuperer les variables de la session
      print("You are already registered.");
      print("<br /><a href=\"index.php\"> Back to the homepage </a>");
    }else{ //Is not in a session
      // echo "Not in a session, Showing Login";
      showRegister();
    }
  }
}

function showRegister(){ ?>
  <p>Registration Page</p>
  <form method="post" action="#">
    Username: <input type="text" name="username" /><br />
    Password: <input type="text" name="password" /><br />
    <input type="submit" name="submit" value="Submit" />
    <input type="reset" name="reset" value="Reset" />
  </form>
<?php }
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8" />
	<title>Poketato - The Ultimate Pokemon Repository</title>
	<link rel="stylesheet" style="text/css" href="style.css" />
</head>

<body>
	<div class="container">
		<div class="header">
			<div class="title"><a href="index.html"><img title="Poketato" src="img/title.png" alt="Poketato" /></a></div>
			<div class="undertitle"> The Ultimate Pokemon Repository </div>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.html">News</a></li>
				<li><a href="#">Pokemon</a></li>
				<li><a href="#">Games</a></li>
				<li><a href="#">Anime</a></li>
				<li><a href="puzzle.html">Puzzle</a></li>
        <li><a href="./PokeQuiz.html">Quiz</a></li>
			<ul>
		</div>
		<div class="content">
			<div class="main_content">
				<?php start(); ?>
			</div>
			<div class="right_content">
        5 days left until #PokemonSunMoon, US Trainers! Which Pokémon do you want on your team? http://bit.ly/1OnFndH
				<div class="ad">
					<img src="img/ad2-pic.jpg" alt="advertising" />
					Advertisement
				</div>
				Who can stop Team Galactic's ambitions from turning into catastrophe? Don't miss this week's #PokemonGenerations! http://bit.ly/2eZNop3
			</div>
		</div>
		<div class="footer">
			<span><a href="#">&copy; 2016 Poketato</a> | </span>
			<span><a href="#">Contact Us</a> | </span>
			<span><a href="#">Work With Us</a> | </span>
			<span><a href="#">Advertise</a> | </span>
			<span><a href="#">Your Ad Choices</a> | </span>
			<span><a href="#">Privacy</a> | </span>
			<span><a href="#">Terms of Service</a> | </span>
			<span><a href="#">Site Information Navigation</a> | </span>
			<span><a href="#">Site Map</a> | </span>
			<span><a href="#">Help</a> | </span>
			<span><a href="#">Site Feedback</a> | </span>
	    <span><a href="#">Subscriptions</a></span>
		</div>
	</div>
</body>
</html>
