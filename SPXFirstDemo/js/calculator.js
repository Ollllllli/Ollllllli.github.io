// JavaScript Document
var display = "";

function calcInput(inp) {
	display = document.getElementById("display");
	display.value += inp;
}
function calculate() {
	display = document.getElementById("display");
	console.log(display);
	console.log(display.value);
	if (display.value == '40237416') { display.value = 'a3d1v.png';}
	else {display.value = eval(display.value);}
}
function clearDisplay() {
	// alert("Clear")
	display = document.getElementById("display");
	display.value = "";
}