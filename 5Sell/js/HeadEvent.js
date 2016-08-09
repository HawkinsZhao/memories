//var Shopper = document.getElementById("Shopper");
var Conn = document.getElementById("Connect");
var Logo = document.getElementById("Logo");



Shopper.onmousemove = function()
{
	Shopper.style.backgroundColor = "#c3a0d9";
}

Shopper.onmouseout = function(){
	Shopper.style.backgroundColor = "#A97CCA";
}

Conn.onmousemove = function()
{
	Conn.style.backgroundColor = "#c3a0d9";
}

Conn.onmouseout = function(){
	Conn.style.backgroundColor = "#A97CCA";
}

Logo.onmousemove = function()
{
	Logo.style.backgroundColor = "#c3a0d9";
}

Logo.onmouseout = function(){
	Logo.style.backgroundColor = "#A97CCA";
}

Shopper.onclick = function(){
	window.open("Shopper.php");
}
