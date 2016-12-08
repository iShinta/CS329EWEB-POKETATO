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
			<?php include 'header.php'; ?>
		</div>
		<div class="menu">
			<?php include 'menu.php'; ?>
		</div>
		<div class="content">
			<div class="main_content">
	    <?php
          if (isset($_COOKIE["puzzleCompleted"])) {
          	print <<< COMPLETED
          	<h2>Looks like you have already tried this puzzle!</h2>
          	<h3>Feel free to try again, or try our PokeQuiz!</h3>
            COMPLETED;
          } else {
          	$random = "TRUE";
          	setcookie("puzzleCompleted", $random, time()+60 * 60 * 24 * 365);
          }
        ?>
        <script type="text/javascript">
        <!--
        var dim = 4;
        //For values, -1 means that the cell is empty, -2 means that the cell doesn't exist
        var gameArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, -1];
        var imgGame = false;

        function updim(){
          n = document.forms["dimension"]["dim"].value;
          //Validation
          if(isNaN(n)){
            alert("The dimension has to be an number");
            return false;
          }else if(n <= 1){
            alert("The dimension has to be higher than 1")
            return false;
          }

          //After Validation
          dim = n;

          //If picture game
          if(document.getElementById("imggame").checked){
            dim = 5;
            imgGame = true;
          }else{
            imgGame = false;
          }

          //Populate the new game
          size = dim * dim;
          for(i = 0; i < size-1; i++){
            gameArray[i] = i+1;
          }
          gameArray[size-1] = -1;

          //alert("New dimension: " + dim);

          //Randomization
          if(document.getElementById("randomgame").checked){
            nbRnd = 100;
            for(k = 1; k <= nbRnd; k++){

              ranCase = findEmptyIndex();
              changeDirection = true;
              do{
                ranDirection = getRandomInt(1,5);
                if(ranDirection == 1){ //left
                  if(valLeft(toGridVal(ranCase)) != -2){
                    switchCell(toGridVal(ranCase), cellLeft(toGridVal(ranCase)));
                    changeDirection = false;
                  }
                }else if(ranDirection == 2){ //right
                  if(valRight(toGridVal(ranCase)) != -2){
                    switchCell(toGridVal(ranCase), cellRight(toGridVal(ranCase)));
                    changeDirection = false;
                  }
                }else if(ranDirection == 3){ //top
                  if(valTop(toGridVal(ranCase)) != -2){
                    switchCell(toGridVal(ranCase), cellTop(toGridVal(ranCase)));
                    changeDirection = false;
                  }
                }else if(ranDirection == 4){ //bottom
                  if(valBottom(toGridVal(ranCase)) != -2){
                    switchCell(toGridVal(ranCase), cellBottom(toGridVal(ranCase)));
                    changeDirection = false;
                  }
                }
              }while(changeDirection);
            }
          }

          //Render the final board
          drawboard();
        }

        function getRandomInt(min, max) {
          min = Math.ceil(min);
          max = Math.floor(max);
          return Math.floor(Math.random() * (max - min)) + min;
        }

        function findEmptyIndex(){
          res = -1;
          size = dim * dim;
          for(i = 0; i < size; i++){
            if(gameArray[i] == -1){
              res = i;
            }
          }
          return res;
        }

        function cellLeft(cell){
          var res = "No cell on the left";
          if(parseInt(cell.charAt(1)) != 0){
            res = cell.charAt(0) + (parseInt(cell.charAt(1))-1);
          }

          return res;
        }

        function valLeft(cell){
          targetCell = cellLeft(cell);
          if(isNaN(targetCell)){
            return -2;
          } else {
            return gameArray[toArrayVal(targetCell)];
          }
        }

        function cellRight(cell){
          var res = "No cell on the right";
          if(parseInt(cell.charAt(1)) < (dim-1)){
            res = cell.charAt(0) + (parseInt(cell.charAt(1))+1);
          }

          return res;
        }

        function valRight(cell){
          targetCell = cellRight(cell);
          if(isNaN(targetCell)){
            return -2;
          } else {
            return gameArray[toArrayVal(targetCell)];
          }
        }

        function cellTop(cell){
          var res = "No cell on the top";
          if(parseInt(cell.charAt(0)) != 0){
            res = (parseInt(cell.charAt(0))-1).toString() + cell.charAt(1);
          }

          return res;
        }

        function valTop(cell){
          targetCell = cellTop(cell);
          if(isNaN(targetCell)){
            return -2;
          } else {
            return gameArray[toArrayVal(targetCell)];
          }
        }

        function cellBottom(cell){
          var res = "No cell on the bottom";
          if(parseInt(cell.charAt(0)) < (dim-1)){
            res = (parseInt(cell.charAt(0))+1) + cell.charAt(1);
          }

          return res;
        }

        function valBottom(cell){
          targetCell = cellBottom(cell);
          if(isNaN(targetCell)){
            return -2;
          } else {
            return gameArray[toArrayVal(targetCell)];
          }
        }

        function intToString(cell){
          //Assumption of cell > 0
          if(cell<10){
            cell = "0" + cell.toString();
          }else{
            cell = cell.toString();
          }

          return cell;
        }

        function toArrayVal(cell){ //Assume cell is a String
          res = parseInt(cell.charAt(0)) * dim + parseInt(cell.charAt(1));

          return res;
        }

        function toGridVal(index){
          //Find n
          n = Math.floor(index / dim);

          //Find m
          m = index - n * dim;

          return n.toString() + m.toString();
        }

        function switchCell(cellA, cellB){ //Assume cells are Strings
          temp = gameArray[toArrayVal(cellA)];
          gameArray[toArrayVal(cellA)] = gameArray[toArrayVal(cellB)];
          gameArray[toArrayVal(cellB)] = temp;
          //alert(temp);
        }

        //When clicking on a cell
        function clicon(cell){
          cell = intToString(cell);

          //Check cells around.
          var res = "You selected cell " +cell;
          res += "<br />Array Index: " +toArrayVal(cell);
          res += "<br />Grid Value: " + toGridVal(toArrayVal(cell));
          res += "<br />Cell on the left: " +valLeft(cell);
          res += " [Id: " +cellLeft(cell) +"]";
          res += "<br />Cell on the right: " +valRight(cell);
          res += " [Id: " +cellRight(cell) +"]";
          res += "<br />Cell on the top: " +valTop(cell);
          res += " [Id: " +cellTop(cell) +"]";
          res += "<br />Cell on the bottom: " +valBottom(cell);
          res += " [Id: " +cellBottom(cell) +"]";

          if(valLeft(cell) == -1){
            switchCell(cell, cellLeft(cell));
            res += "<br /> Switching cells: " + cell + " and cell " + cellLeft(cell);
          }else if(valRight(cell) == -1){
            switchCell(cell, cellRight(cell));
            res += "<br /> Switching cells: " + cell + " and cell " + cellRight(cell);
          }else if(valTop(cell) == -1){
            switchCell(cell, cellTop(cell));
            res += "<br /> Switching cells: " + cell + " and cell " + cellTop(cell);
          }else if(valBottom(cell) == -1){
            switchCell(cell, cellBottom(cell));
            res += "<br /> Switching cells: " + cell + " and cell " + cellBottom(cell);
          }else{
            res += "<br /> No switching";
          }

          drawboard();

          document.getElementById("state").innerHTML = res;
        }

        function formatVal(cell){
          res = gameArray[cell];

          if(res == -1){
            return "";
          }else{
            return res;
          }
        }

        function drawboard(){
          emptyCell = toGridVal(findEmptyIndex());
          res = "";
          if(imgGame){
            res += ("<table>");
          } else {
            res += ("<table border = \"1\">");
          }
          for(var i = 0; i < dim; i++){
            res += ("<tr>");
            for(var j = 0; j < dim; j++){
              res += ("<td style=\"margin: 0px; padding: 0px; height: 100px; width: 100px; text-align: center;\">");

              if(imgGame){
                if(i.toString() + j.toString() != emptyCell){
                  res += ("<a style=\"font-size: 3em;\" id=\"" + i + j + "\" title=\"\" href=\"#\" onclick=\"clicon(" + i.toString() + j.toString() + ");\">");
                  res += ("<img style=\"width: 100px; height: 100px;\" src=\"img/puzzle/" + formatVal(toArrayVal(i.toString() + j.toString())) + ".jpeg\" />");
                  res += ("</a>");
                }
              } else {
                res += ("<input type=\"button\" style=\"font-size: 3em; height: 100px; width: 100px; background-color: white;\" id=\"" + i + j + "\" title=\"\" onclick=\"clicon(" + i.toString() + j.toString() + ");\" value=\"" + (formatVal(toArrayVal(i.toString() + j.toString()))) + "\" />");
              }

              res += ("</td>");
            }
            res += ("</tr>");
          }
          res += ("</table>");

          document.getElementById("board").innerHTML = res;
        }

        function detailSwitch(){
          elmt = document.getElementById("state").style;
          if (elmt.visibility == "visible"){
            elmt.visibility = "hidden";
          }else{
            elmt.visibility = "visible";
          }
        }

        -->
        </script>
        <div><h1 style="font-size: 4em; margin: 0px; margin-bottom: 20px;">Game of 15</h1></div>
        <form name="dimension">
          <div id="board" style="margin-top: 20px;">
          </div>
          <table>
            <tbody>
              <tr>
                <td>Dimension</td>
                <td><input name="dim" type="text" value="5" /></td>
              </tr>
              <tr>
                <td>Randomized</td>
                <td><input id="randomgame" name="randomgame" type="checkbox" checked="checked" /></td>
              </tr>
              <tr>
                <td>Picture Game <br /> (Size will be automatically set to 5x5)</td>
                <td><input id="imggame" name="imggame" type="checkbox" checked="checked" /> </td>
              </tr>
            </tbody>
          </table>
          <input name="updatedim" type="button" onclick="updim();" value="Start the Game" style="font-size: 3em; height: 100px; width: 400px;" />
          <br /><input name="details" type="button" onclick="detailSwitch()" value="Show/Hide Details" />


        </form>
        <br />
        <div id="state" style="visibility: hidden; border: solid 1px; width: 400px; height: 400px; padding: 10px;">
          Game is beginning
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
