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

var Request = new Object();
Request = GetRequest();
var InfoTtile =document.getElementById("InfoTtile");
var CoverImg = document.getElementById("CoverImg");
var InfoDes =document.getElementById("InfoDes");
var InfoPrice = document.getElementById("InfoPrice");

switch (Request['Subject']){
	case 'Chinese':
		var OLChinese = document.getElementById("OLChinese");
		InfoTtile.innerText="语文笔记";
		CoverImg.src = "../img/BJ/ChineseCover.jpg";
		InfoDes.innerHTML="&emsp;&emsp;本笔记知识网络清晰，内容是手写笔记的复印件，按照高三复习专题划分，类型全面。适合高三复习的同学进行知识层面上的加深和巩固，有效梳理、强化复杂知识点。";
		OLChinese.style.display="inherit";
		InfoPrice.innerText="￥30";
		break;
	case 'English':
		var OLEnglish = document.getElementById("OLEnglish");
		InfoTtile.innerText="英语笔记";
		CoverImg.src = "../img/BJ/EnglishCover.jpg";
		InfoDes.innerHTML="&emsp;&emsp;本笔记知识网络清晰，内容是手写笔记的复印件，类型全面。适合高三复习的同学进行知识层面上的加深和巩固，有效梳理、强化复杂知识点。";
		OLEnglish.style.display="inherit";
		InfoPrice.innerText="￥30";
		break;
	case 'Math':
		var OLMath = document.getElementById("OLMath");
		InfoTtile.innerText="数学笔记";
		CoverImg.src = "../img/BJ/MathCover.jpg";
		InfoDes.innerHTML="&emsp;&emsp;笔记为精装版，封面目录为打印页，内容是手写笔记的复印件，并且有塑料夹。<br/>&emsp;&emsp;本笔记知识网络清晰，按照高三复习单元划分，函数的性质、导数、三角函数……公式、题型总结全面，文理均适合。适合高三复习的同学进行知识层面上的加深和巩固，配套例题是老师多年总结的经典题型。";
		InfoPrice.innerText="￥55";
		OLMath.style.display="inherit";
		break;
	case 'WenZong':
		var OLWenZong = document.getElementById("OLWenZong");
		InfoTtile.innerText="文综笔记";
		InfoPrice.innerText="￥100";
		CoverImg.src="../img/BJ/WZCover.jpg"
		InfoDes.innerHTML="&emsp;&emsp;五中文科考生笔记，作者考入复旦大学！<br/>&emsp;&emsp;笔记全套共4本，两本以作者总结的经典习题为主，两本以知识点为主。<br/>&emsp;&emsp;使用本笔记，既有助于你在知识层面查缺补漏，构建完善知识网；又有助于通过训练精选习题，避开盲目刷题误区，利于实现做题一通百通的目标。";
		OLWenZong.style.display="inherit";
		break;
	case 'Physic':
		var OLPhysic = document.getElementById("OLPhysic");
		InfoTtile.innerText="物理笔记";
		InfoPrice.innerText="￥45";
		CoverImg.src = "../img/BJ/PhysicCover.jpg";
		InfoDes.innerHTML="&emsp;&emsp;笔记为精装版，封面目录为打印页，内容是手写笔记的复印件，并且有塑料夹。<br/>&emsp;&emsp;本笔记知识网络清晰，按照高三复习单元划分，运动学、静力学、牛顿运动定律……适合高三复习的同学进行知识层面上的加深和巩固，配套例题是老师多年总结的经典题型。";
		OLPhysic.style.display="inherit";
		break;
	case 'Chem':
		var OLChem = document.getElementById("OLChem");
		InfoTtile.innerText="化学笔记";
		InfoPrice.innerText="￥45";
		CoverImg.src = "../img/BJ/ChemCover.jpg";
		InfoDes.innerHTML="&emsp;&emsp;笔记为精装版，封面目录为打印页，内容是手写笔记的复印件，并且有塑料夹。<br/>&emsp;&emsp;本笔记知识网络清晰，按照高三复习单元划分，金属及其化合物、非金属及其化合物、化学能与热能……并且有化学方程式的总结，查询十分方便。适合高三复习的同学进行知识层面上的加深和巩固，配套例题是老师多年总结的经典题型。";
		OLChem.style.display="inherit";
		break;
	case 'Biology':
		var OLBiology = document.getElementById("OLBiology");
		InfoTtile.innerText="生物笔记";
		InfoPrice.innerText="￥45";
		CoverImg.src = "../img/BJ/BiologyCover.jpg";
		InfoDes.innerHTML="&emsp;&emsp;笔记为精装版，封面目录为打印页，内容是手写笔记的复印件，并且有塑料夹。<br/>&emsp;&emsp;本笔记知识网络清晰，按照高三复习单元划分，并且有专题总结，有效应对生物庞大的知识体系。适合高三复习的同学进行知识层面上的加深和巩固，配套例题是老师多年总结的经典题型。";
		OLBiology.style.display="inherit";
		break;
}

var Math =document.getElementById("Math");

Chinese.onclick = function(){
	window.location.href="./M_BJ.html?Subject=Chinese";
}
Math.onclick = function(){
	window.location.href="./M_BJ.html?Subject=Math";
}
English.onclick = function(){
	window.location.href="./M_BJ.html?Subject=English";
}
WenZong.onclick = function(){
	window.location.href="./M_BJ.html?Subject=WenZong";
}
Physic.onclick = function(){
	window.location.href="./M_BJ.html?Subject=Physic";
}
Chem.onclick = function(){
	window.location.href="./M_BJ.html?Subject=Chem";
}
Biology.onclick = function(){
	window.location.href="./M_BJ.html?Subject=Biology";
}