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
      		var captions = new Array();
      		captions[0] = "001bulbasaur";
      		index = 0;
      		document.writeln("<p id=\"pic\">")
      		document.writeln("<img src=\"img/pokemon-pics/" + images[index] + "\" title=\"Travel\" alt=\"" + captions[index] + "\" /><br />" + captions[index]);
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
                document.getElementById("pic").innerHTML = "<img src=\"" + response[0] + "\" title=\"Travel\" alt=\"" + response[1] + "\" /><br />" + response[1];
              }
          	};
            xhr.send(null);
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
