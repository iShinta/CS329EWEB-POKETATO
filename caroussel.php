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
      		images[1] = "002ivysaur.png";
      		images[2] = "003venusaur.png";
      		images[3] = "004charmander.png";
      		images[4] = "005charmander.png";
      		images[5] = "006charizard.png";
      		images[6] = "007squirtle.png";
      		images[7] = "008wartortle.png";
      		images[8] = "009blastoise.png";
      		images[9] = "010caterpie.png";
      		var captions = new Array();
      		captions[0] = "001bulbasaur";
      		captions[1] = "002ivysaur";
      		captions[2] = "003venusaur";
      		captions[3] = "004charmander";
      		captions[4] = "005charmander";
      		captions[5] = "006charizard";
      		captions[6] = "007squirtle";
      		captions[7] = "008wartortle";
      		captions[8] = "009blastoise";
      		captions[9] = "010caterpie";
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
        <?php include 'footer.php'; ?>
    </div>
  </div>
</body>
</html>
