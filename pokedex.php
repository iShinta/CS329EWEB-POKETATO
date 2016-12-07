<html>
<head>
  <meta charset="utf-8" />
  <title>Poketato - The Ultimate Pokemon Repository</title>
  <link rel="stylesheet" style="text/css" href="style.css" />
  <script src="./pokedex.js"></script>
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
        <h1>Pokedex</h1>
        <h3>Select a Pokemon: </h3>
        <select name="pokeValue" id ="pokeValue" style="width: 200px; height: 50px" onchange="callDBDropDown();">
        	<option value="#">Pokemon</option>
        	<option value="Bulbasaur">Bulbasaur</option>
        	<option value="Ivysaur">Ivysaur</option>
        	<option value="Venusaur">Venusaur</option>
        	<option value="Charmander">Charmander</option>
        	<option value="Charmeleon">Charmeleon</option>
        	<option value="Charizard">Charizard</option>
        	<option value="Squirtle">Squirtle</option>
        	<option value="Wartortle">Wartortle</option>
        	<option value="Blastoise">Blastoise</option>
        	<option value="Caterpie">Caterpie</option>
        	<option value="Metapod"> Metapod</option>
        	<option value="Butterfree">Butterfree</option>
        	<option value="Weedle">Weedle</option>
        	<option value="Kakuna">Kakuna</option>
        	<option value="Beedrill">Beedrill</option>
        	<option value="Pidgey">Pidgey</option>
        	<option value="Pidgeotto">Pidgeotto</option>
        	<option value="Pidgeot">Pidgeot</option>
        	<option value="Rattata">Rattata</option>
        	<option value="Raticate">Raticate</option>
        	<option value="Spearow">Spearow</option>
        	<option value="Fearow">Fearow</option>
        	<option value="Ekans">Ekans</option>
        	<option value="Arbok">Arbok</option>
        	<option value="Pikachu">Pikachu</option>
        	<option value="Raichu">Raichu</option>
        	<option value="Sandshrew">Sandshrew</option>
        	<option value="Sandslash">Sandslash</option>
        	<option value="Nidoran-F">Nidoran</option>
        	<option value="Nidorina">Nidorina</option>
        	<option value="Nidoqueen">Nidoqueen</option>
        	<option value="Nidoran-M">Nidoran</option>
        	<option value="Nidorino">Nidorino</option>
        	<option value="Nidoking">Nidoking</option>
        	<option value="Clefairy">Clefairy</option>
        	<option value="Clefable">Clefable</option>
        	<option value="Vulpix">Vulpix</option>
        	<option value="Ninetales">Ninetales</option>
        	<option value="Jigglypuff">Jigglypuff</option>
        	<option value="Wigglytuff">Wigglytuff</option>
        	<option value="Zubat">Zubat</option>
        	<option value="Golbat">Golbat</option>
        	<option value="Oddish">Oddish</option>
        	<option value="Gloom">Gloom</option>
        	<option value="Vileplume">Vileplume</option>
        	<option value="Paras">Paras</option>
        	<option value="Parasect">Parasect</option>
        	<option value="Venonat">Venonat</option>
        	<option value="Venomoth">Venomoth</option>
        	<option value="Diglett">Diglett</option>
        	<option value="Dugtrio">Dugtrio</option>
        	<option value="Meowth">Meowth</option>
        	<option value="Persian">Persian</option>
        	<option value="Psyduck">Psyduck</option>
        	<option value="Golduck">Golduck</option>
        	<option value="Mankey">Mankey</option>
        	<option value="Primeape">Primeape</option>
        	<option value="Growlithe">Growlithe</option>
        	<option value="Arcanine">Arcanine</option>
        	<option value="Poliwag">Poliwag</option>
        	<option value="Poliwhirl">Poliwhirl</option>
        	<option value="Poliwrath">Poliwrath</option>
        	<option value="Abra">Abra</option>
        	<option value="Kadabra">Kadabra</option>
        	<option value="Alakazam">Alakazam</option>
        	<option value="Machop">Machop</option>
        	<option value="Machoke">Machoke</option>
        	<option value="Machamp">Machamp</option>
        	<option value="Bellsprout">Bellsprout</option>
        	<option value="Weepinbell">Weepinbell</option>
        	<option value="Victreebel">Victreebel</option>
        	<option value="Tentacool">Tentacool</option>
        	<option value="Tentacool">Tentacruel</option>
        	<option value="Geodude">Geodude</option>
        	<option value="Graveler">Graveler</option>
        	<option value="Golem">Golem</option>
        	<option value="Ponyta">Ponyta</option>
        	<option value="Rapidash">Rapidash</option>
        	<option value="Slowpoke">Slowpoke</option>
        	<option value="Slowbro">Slowbro</option>
        	<option value="Magnemite">Magnemite</option>
        	<option value="Magneton">Magneton</option>
        	<option value="Farfetch">Farfetch'd</option>
        	<option value="Doduo">Doduo</option>
        	<option value="Dodrio">Dodrio</option>
        	<option value="Seel">Seel</option>
        	<option value="Dewgong">Dewgong</option>
        	<option value="Grimer">Grimer</option>
        	<option value="Muk">Muk</option>
        	<option value="Shellder">Shellder</option>
        	<option value="Cloyster">Cloyster</option>
        	<option value="Gastly">Gastly</option>
        	<option value="Haunter">Haunter</option>
        	<option value="Gengar">Gengar</option>
        	<option value="Onix">Onix</option>
        	<option value="Drowzee">Drowzee</option>
        	<option value="Hypno">Hypno</option>
        	<option value="Krabby">Krabby</option>
        	<option value="Kingler">Kingler</option>
        	<option value="Voltorb">Voltorb</option>
        	<option value="Electrode">Electrode</option>
        	<option value="Exeggcute">Exeggcute</option>
        	<option value="Exeggutor">Exeggutor</option>
        	<option value="Cloyster">Cubone</option>
        	<option value="Marowak">Marowak</option>
        	<option value="Hitmonlee">Hitmonlee</option>
        	<option value="Hitmonchan">Hitmonchan</option>
        	<option value="Lickitung">Lickitung</option>
        	<option value="Koffing">Koffing</option>
        	<option value="Weezing">Weezing</option>
        	<option value="Rhyhorn">Rhyhorn</option>
        	<option value="Rhydon">Rhydon</option>
        	<option value="Chansey">Chansey</option>
        	<option value="Tangela">Tangela</option>
        	<option value="Kangaskhan">Kangaskhan</option>
        	<option value="Horsea">Horsea</option>
        	<option value="Seadra">Seadra</option>
        	<option value="Goldeen">Goldeen</option>
        	<option value="Seaking">Seaking</option>
        	<option value="Staryu">Staryu</option>
        	<option value="Starmie">Starmie</option>
        	<option value="Mr.Mime">Mr.Mime</option>
        	<option value="Scyther">Scyther</option>
        	<option value="Jynx">Jynx</option>
        	<option value="Electabuzz">Electabuzz</option>
        	<option value="Magmar">Magmar</option>
        	<option value="Pinsir">Pinsir</option>
        	<option value="Tauros">Tauros</option>
        	<option value="Magikarp">Magikarp</option>
        	<option value="Gyarados">Gyarados</option>
        	<option value="Lapras">Lapras</option>
        	<option value="Ditto">Ditto</option>
        	<option value="Eevee">Eevee</option>
        	<option value="Vaporeon">Vaporeon</option>
        	<option value="Jolteon">Jolteon</option>
        	<option value="Flareon">Flareon</option>
        	<option value="Porygon">Porygon</option>
        	<option value="Omanyte">Omanyte</option>
        	<option value="Omastar">Omastar</option>
        	<option value="Kabuto">Kabuto</option>
        	<option value="Kabutops">Kabutops</option>
        	<option value="Aerodactyl">Aerodactyl</option>
        	<option value="Snorlax">Snorlax</option>
        	<option value="Articuno">Articuno</option>
        	<option value="Zapdos">Zapdos</option>
        	<option value="Moltres">Moltres</option>
        	<option value="Dratini">Dratini</option>
        	<option value="Dragonair">Dragonair</option>
        	<option value="Dragonite">Dragonite</option>
        	<option value="Mewtwo">Mewtwo</option>
        	<option value="Mew">Mew
        </select>
        <h3>Or enter a Pokemon: </h3>
        <table border="1">
          <tr>
            <td>Enter a Pokemon Name:</td>
            <td><input type="text" maxlength="20" size="30" name = "txtName" id = "txtName" onkeyup="callDBTextBox();" /></td>
          </tr>
        </table>
        <br/>
        <br/>
        <h3 id = "pId">Pokemon ID: </h3>
        <h3 id ="pName">Pokemon Name: </h3>
        <br/>
        <p id="pPic"></p>
        <br/>
        <h3 id ="pEntry"></h3>
      	<?php
      	//startNow();
      	?>
      </div>
      <br/>
      <br/>

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
  </div>
</body>
</html>


