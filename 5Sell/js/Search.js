var SButton = document.getElementById("SearchButton");
var SearchInput = document.getElementById("SearchInput");
var LMore = document.getElementById("ListMore");
var L1=document.getElementById("List1");
var L2=document.getElementById("List2");
var NtoO=document.getElementById("NtoO");
var LTime=document.getElementById("LTime");
var Chinese=document.getElementById("Chinese");
var Math=document.getElementById("Math");
var English=document.getElementById("English");
var LiZong=document.getElementById("LiZong");
var WenZong=document.getElementById("WenZong");
var Physic=document.getElementById("Physic");
var Chem=document.getElementById("Chem");
var Biology=document.getElementById("Biology");
var Pol=document.getElementById("Pol");
var History=document.getElementById("History");
var Geography=document.getElementById("Geography");

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

SButton.onmousemove = function(){
	SButton.style.backgroundColor="#c3a0d9";
}

SButton.onmouseout = function(){
	SButton.style.backgroundColor="#A97CCA";
}

SButton.onclick = function(){
	var i = SearchInput.value;
	window.location.href="./Store.php?Search="+i;
}

LMore.onclick = function(){
	if (LMore.innerText == "更多"){
		L1.style.display = "table-row";
		L2.style.display = "table-row";
		LMore.innerText="收起";
	}
	else{
		L1.style.display = "none";
		L2.style.display = "none";
		LMore.innerText="更多";
	}
}
	
var Request = new Object();
Request = GetRequest();
	

Order1.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Subject'] != null) {a +="&Subject="+Request['Subject'];}
	a +="&Order=BookIndex";
	window.location.href="./Store.php"+a;
}

Order2.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Subject'] != null) {a +="&Subject="+Request['Subject'];}
	a +="&Order=Percent";
	window.location.href="./Store.php"+a;
}

MyAll.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	window.location.href="./Store.php"+a;
}

Chinese.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Chinese";
	window.location.href="./Store.php"+a;
}
Math.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Math";
	window.location.href="./Store.php"+a;
}
English.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=English";
	window.location.href="./Store.php"+a;
}
LiZong.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=LiZong";
	window.location.href="./Store.php"+a;
}
WenZong.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=WenZong";
	window.location.href="./Store.php"+a;
}
Physic.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Physic";
	window.location.href="./Store.php"+a;
}
Chem.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Chem";
	window.location.href="./Store.php"+a;
}
Biology.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Biology";
	window.location.href="./Store.php"+a;
}
Pol.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Pol";
	window.location.href="./Store.php"+a;
}
History.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=History";
	window.location.href="./Store.php"+a;
}
Geography.onclick = function(){
	var a = "?";
	if (Request['Search'] != null) {a +="Search="+Request['Search'];}
	if (Request['Order'] != null) {a +="&Order="+Request['Order'];}
	a+="&Subject=Geography";
	window.location.href="./Store.php"+a;
}

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

if (Request["Order"]==null || Request["Order"] == "BookIndex"){Oh1.style.display="inherit";Order1.style.color="#A97CCA";}
if (Request["Order"]=="Percent") {Oh2.style.display="inherit";Order2.style.color="#A97CCA";}