<html>
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
        <h1>Pokemons!</h1>
      	<script type="text/javascript">
      	<!--
      		var images = new Array();
      		images[0] = "001bulbasaur.png";
      		images[1] = "016pidgey";
      		images[2] = "028sandslash.png";
      		images[3] = "037vulpix";
      		images[4] = "040wigglytuff.png";
      		images[5] = "043oddish.png";
      		images[6] = "130gyarados.png";
      		images[7] = "133eevee.png";
      		images[8] = "143snorlax.png";
      		images[9] = "146moltres.png";
      		var captions = new Array();
      		captions[0] = "001bulbasaur";
      		captions[1] = "016pidgey";
      		captions[2] = "028sandslash";
      		captions[3] = "037vulpix";
      		captions[4] = "040wigglytuff";
      		captions[5] = "043oddish";
      		captions[6] = "130gyarados";
      		captions[7] = "133eevee";
      		captions[8] = "143snorlax";
      		captions[9] = "146moltres";
      		index = 0;
      		document.writeln("<p id=\"pic\">")
      		document.writeln("<img src=\"img/pokemon-pics/" + images[index] + "\" title=\"Travel\" alt=\"" + captions[index] + "\" /><br />" + captions[index]);
      		document.writeln("</p>");

      		setInterval(function(){
      			if(++index == images.length){
      				index = 0;
      			}
      			document.getElementById("pic").innerHTML = "<img src=\"img/pokemon-pics/" + images[index] + "\" title=\"Travel\" alt=\"" + captions[index] + "\" /><br />" + captions[index];
      		}, 3000);


      	-->
      	</script>
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
  </div>
</body>
</html>
