<html>
<head>
  <meta charset="utf-8" />
  <title>Poketato - The Ultimate Pokemon Repository</title>
  <link rel="stylesheet" style="text/css" href="style.css" />
  <script src="./pokeDex.js"></script>
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
        <select name="pokeValue" id ="pokeValue" style="width: 200px; height: 50px" onchange="">
          <option value="#">Pokemon</option>
          <option value="Bulbasaur">Bulbasaur</option>
          <option value="Ivysaur">Ivysaur</option>
          <option value="Venusaur">Venusaur</option>
        </select>
        <h3>Or enter a Pokemon: </h3>
        <table border="1">
          <tr>
            <td>Enter a Pokemon Name:</td>
            <td><input type="text" maxlength="20" size="30" name = "name" id = "name" /></td>
          </tr>
        </table>
      	<?php

      	?>
      </div>

      <div class="footer">
        <?php include 'footer.php'; ?>
      </div>
    </div>
  </div>
</body>
</html>
