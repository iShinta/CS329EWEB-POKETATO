var xhr;
if (window.ActiveXObject) {
  xhr = new ActiveXObject ("Microsoft.XMLHTTP");
} else if (window.XMLHttpRequest) {
  xhr = new XMLHttpRequest ();
}

function callDBDropDown() {
  var pokeNameList = document.getElementById("pokeValue");
  var pokeName = pokeNameList.options[pokeNameList.selectedIndex].value;
  var urlOne = "./getPokedexData.php?pokeName=" + escape(pokeName);
  xhr.open("GET", urlOne, true);
  xhr.onreadystatechange = showDBDropDown;
  xhr.send(null);
}

function showDBDropDown() {
  if ((xhr.readyState == 4) && (xhr.status == 200)) {
    var response = xhr.responseText.split(":");
    document.getElementById("pId").innerHTML = "Pokemon ID: " + response[0];
    document.getElementById("pName").innerHTML = "Pokemon Name: " + response[1];
    document.getElementById("pPic").innerHTML = "<img src=\"" + response[2] + "\" alt=\"pokepic\" style=\"width:300px;height:300px;\" />";
    document.getElementById("pEntry").innerHTML = response[3];
  }
}

function callDBTextBox() {
  var pokeNameTwo = document.getElementById("txtName").value;
  var urlTwo = "./getPokedexData.php?pokeName=" + escape(pokeNameTwo);
  xhr.open("GET", urlTwo, true);
  xhr.onreadystatechange = showDBDropDown;
  xhr.send(null);
}


