function grade() {
	var correct  = 0;

	if (!document.getElementById("mcOneA").checked && !document.getElementById("mcOneB").checked) {
		alert("You did not answer question 1!");
		return false;
	} else if (document.getElementById("mcOneB").checked) {
		correct++;
	}

	if (!document.getElementById("mcTwoA").checked && !document.getElementById("mcTwoB").checked && !document.getElementById("mcTwoC").checked) {
		alert("You did not answer question 2!");
		return false;
	} else if (document.getElementById("mcTwoB").checked) {
		correct++;
	}

	if (!document.getElementById("mcThreeA").checked && !document.getElementById("mcThreeB").checked && !document.getElementById("mcThreeC").checked) {
		alert("You did not answer question 3!");
		return false;
	} else if (document.getElementById("mcThreeA").checked) {
		correct++;
	}

	alert("You got " + correct + " right!");
}