function GetRequest() {
  var url = location.search; //获取url中"?"符后的字串
   var theRequest = new Object();
   if (url.indexOf("?") != -1) {
      var str = url.substr(1);
      strs = str.split("&");
      for(var i = 0; i < strs.length; i ++) {
         theRequest[strs[i].split("=")[0]]=(strs[i].split("=")[1]);
      }
   }
   return theRequest;
}

var Order1 = document.getElementById("Order1");
var Order2 = document.getElementById("Order2");
var Order3 = document.getElementById("Order3");
var MoreTable = document.getElementById("MoreTable");
var Oh1 = document.getElementById("Oh1");
var Oh2 = document.getElementById("Oh2");
var Request = new Object();
var BookTable = document.getElementById("BookTable");
var NoDisplay = document.getElementById("NoDisplay");
var SearchButton = document.getElementById("SearchButton");
var SearchInput = document.getElementById("SearchInput");
var HomeButton = document.getElementById("HomeButton");
var ShopperButton = document.getElementById("ShopperButton");

Request = GetRequest();

Order1.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Subject'] != null) {a +="&Subject="+Request['Subject'];}
	a +="&Order=BookIndex";
	window.location.href="./M_Store.php"+a;
	Oh1.style.display="inherit";
}

Order2.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Subject'] != null) {a +="&Subject="+Request['Subject'];}
	a +="&Order=Percent";
	window.location.href="./M_Store.php"+a;
	Oh2.style.display="inherit";
}

if (Request["Order"]==null || Request["Order"] == "BookIndex"){Oh1.style.display="inherit";Order1.style.color="#A97CCA";}
if (Request["Order"]=="Percent") {Oh2.style.display="inherit";Order2.style.color="#A97CCA";}
if (Request['Subject'] != null) {
	var j = document.getElementById(Request['Subject']);
	var k = document.getElementById('OL'+Request['Subject']);
	j.style.color= "#A97CCA";
	k.style.display = "inherit";
}
else{
	MyAll.style.color =  "#A97CCA";
	OLAll.style.display = "inherit";
}
if (BookTable.rows.length == 0) {NoDisplay.style.display="inherit";}

Order3.onclick = function(){
	if (MoreTable.style.display != "none"){ MoreTable.style.display = "none"; }
	else{ MoreTable.style.display = "table" ;}
}
MyAll.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	window.location.href="./M_Store.php"+a;
}

Chinese.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Chinese";
	window.location.href="./M_Store.php"+a;
}
Math.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Math";
	window.location.href="./M_Store.php"+a;
}
English.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=English";
	window.location.href="./M_Store.php"+a;
}
LiZong.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=LiZong";
	window.location.href="./M_Store.php"+a;
}
WenZong.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=WenZong";
	window.location.href="./M_Store.php"+a;
}
Physic.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Physic";
	window.location.href="./M_Store.php"+a;
}
Chem.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Chem";
	window.location.href="./M_Store.php"+a;
}
Biology.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Biology";
	window.location.href="./M_Store.php"+a;
}
Pol.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Pol";
	window.location.href="./M_Store.php"+a;
}
History.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=History";
	window.location.href="./M_Store.php"+a;
}
Geography.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Geography";
	window.location.href="./M_Store.php"+a;
}

SearchButton.onclick = function(){
	SearchButton.style.backgroundColor ="#c3a0d9";
	var a=SearchInput.value;
	if (a=='') {
		history.go(0);
	}
	else{
		window.location.href="./M_Store.php?Search=" + SearchInput.value;
	}
}

HomeButton.onclick = function(){
	window.location.href="../Mindex.html";
}

SearchInput.onkeydown = function(){
	if (event.keyCode == 13){
		SearchButton.style.backgroundColor ="#c3a0d9";
		window.location.href="./M_Store.php?Search=" + SearchInput.value;
	}
}

ShopperButton.onclick = function(){
	window.location.href="M_Shopper.php";
}