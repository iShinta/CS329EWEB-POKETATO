<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8" />
	<title>Poketato - The Ultimate Pokemon Repository</title>
	<link rel="stylesheet" style="text/css" href="style.css" />
</head>

<body>
	<div class="container">
		<div class="header">
			<?php include 'header.php'; ?>
		</div>
		<div class="menu">
			<?php include 'menu.php'; ?>
		</div>
		<div class="content">
			<div class="main_content">
				<div class="featured_pokemon">
					<h1>Featured Pokemon</h1>
					<h2>Pikachu</h2> <img style="float: right;" src="img/pikachu.png" alt="Pikachu" />
	        <div>Pikachu (Japanese: ピカチュウ Hepburn: Pikachū?) are a species of Pokémon, fictional creatures that appear in an assortment of video games, animated television shows and movies, trading card games, and comic books licensed by The Pokémon Company, a Japanese corporation. The Pikachu design was conceived by Atsuko Nishida and finalized by Ken Sugimori. Pikachu first appeared in Pokémon Red and Green in Japan, and later in the first internationally released Pokémon video games, Pokémon Red and Blue, for the original Game Boy.
	            Like other species of Pokémon, Pikachu are often captured and groomed by humans to fight other Pokémon for sport. Pikachu are one of the most well-known varieties of Pokémon, largely because a Pikachu is a central character in the Pokémon anime series. Pikachu is regarded as a major character of the Pokémon franchise as well as its mascot, and has become an icon of Japanese pop culture in recent years.</div>
				</div>
				<div class="news">
					<h1>News</h1>
          <ul>
            <li>In today's PokemonGenerations, Ghetsis makes one last attempt to take over Unova, but a hero arrives to stop him! </li>
            <li>The PokemonSunMoon: Super Music Collection is available on iTunes! <a href="http://bit.ly/2bWgfJi">http://bit.ly/2bWgfJi</a></li>
            <li>More Pokémon are coming to #PokemonGO! Stay tuned for details on 12/12, Trainers!</li>
          </ul>
				</div>
				<div class="player">
					<h1>Featured Video</h1>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/5s8g8NCJyvs" frameborder="0" allowfullscreen></iframe>
				</div>
        <div>
          <h1>Pokemon Go new ventures</h1>
            <p>Pokémon GO has been toying with spawns from the very beginning, first starting out slow by switching nests every so often, but now they’ve evolved, no pun intended. We had a Halloween event that blanketed the world in very specific Pokémon, and we now have Pokémon super-nests popping up to help promote the new daily quest system.</p>

            <p>Now, Niantic is doing something even more interesting. In what might be a preview of new events to come, they’re spawning Lapras (Laprases?) on the coastlines of the Iwate Prefecture, Miyagi Prefecture, and Fukushima Prefecture, areas affected by the 2011 Tsunami.</p>

            <p>The goal is to increase tourism in those struggling areas, and hey, if you want to buy a  few hundred Pokéballs to catch all the Lapras while you’re there, no one’s going to stop you. It’s a nice gesture, and the rest of the world is exceedingly jealous, as Lapras is one of the most popular, most powerful, but hardest to find Pokémon in the game, unless you’ve been lucky with spawns or hatching 10 km eggs.</p>

            <p>The event runs until November 23rd, so that’s a bit of late notice for you to plan a trip to Japan, but hopefully those nearby will be able to take advantage. Given the game’s popularity in Japan, and the popularity of Lapras in the game, I’m guessing this will be a hit.</p>

            <p>It is interesting, however, to see Niantic playing around with the idea of very, very targeted spawns, something we have not seen them do to date, as most of their spawn finagling has been global. The only “region” spawns are the four region-specific Pokémon that spawn in NA, EU, Asia and Oceana. But this, limiting spawns of specific Pokémon to very, very specific areas, is something new.</p>

            <p>I have to believe that in addition to being a “for a good cause” event, they’re testing out the concept for future events like this, ones that may have less to do with charity, and may serve instead to be big promotional vehicles to get people out to catch something super rare, like the Legendary Birds, Mew or Mewtwo.</p>

            <p>The original commercial for Pokémon GO showed a bunch of people attempting to catch Mewtwo in Times Square, but obviously nothing like that has ever happened in actuality yet. But that doesn’t meant it couldn’t. It’s easy to imagine Niantic using this same sort of targeting to spawn legendary Pokémon in specific locations, inspiring road trips or mass meet-ups unlike anything the game has seen yet.</p>

            <p>Would they really do it with one spawn? After all, it would be a bit goofy to have an area full of Mewtwos like they’re doing with Lapras here. It’s intriguing to consider the possibilities.</p>

            <p>But yeah, if you want a guaranteed army of Lapras in the next two weeks here, it’s time to head out to Japan and frequent these recovering regions.</p>
        </div>
        <div class="caroussel">
          <h1 style="text-align: center;">Pokemon Carousel!</h1>
        	<script type="text/javascript">
        	<!--
        		var images = new Array();
        		images[0] = "001bulbasaur.png";
        		var captions = new Array();
        		captions[0] = "001bulbasaur";
        		index = 0;
        		document.writeln("<p id=\"pic\">")
        		document.writeln("<img src=\"img/pokemon-pics/" + images[index] + "\" title=\"Travel\" style=\"max-width: 300px; max-height: 300px; margin: auto;\" alt=\"" + captions[index] + "\" /><br />" + captions[index]);
        		document.writeln("</p>");

            var xhr;
            if (window.ActiveXObject) {
              xhr = new ActiveXObject ("Microsoft.XMLHTTP");
            }else if (window.XMLHttpRequest) {
              xhr = new XMLHttpRequest ();
            }

        		setInterval(function(){
              var url = "rndpic.php";
              xhr.open("GET", url, true);
              xhr.onreadystatechange = function() {
                if ((xhr.readyState == 4) && (xhr.status == 200)) {
                  var response = xhr.responseText.split(",");
                  document.getElementById("pic").innerHTML = "<img src=\"" + response[0] + "\" title=\"Travel\" style=\"max-width: 300px; max-height: 300px; margin: auto;\" alt=\"" + response[1] + "\" /><br />" + response[1];
                }
            	};
              xhr.send(null);
        		}, 3000);
        	-->
        	</script>
        </div>
      </div>
			<div class="right_content">
        <?php include 'ads.php'; ?>
			</div>
		</div>
		<div class="footer">
			<?php include 'footer.php'; ?>
		</div>
	</div>
</body>
</html>
