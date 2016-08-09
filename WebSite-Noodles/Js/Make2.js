var Checker = document.getElementById("Checker");
var Texter = document.getElementById("Texter");
var Shower1 = document.getElementById("Shower1");
var Shower2 = document.getElementById("Shower2");
var Shower3 = document.getElementById("Shower3");
var ShowImg = document.getElementById("ShowImg");

Shower1.onmousedown= function ()
{
    ShowImg.src = "../Image/Make/Record (1)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;先学习削面，在盆里练习，削完后再把面和到一起继续练习。但其实削不了几下就得重和，因为我没有掌握要领，把面团已经削的崎岖不平，难以下刀了……";
}

Shower2.onmousedown = function () {
    ShowImg.src = "../Image/Make/Record (2)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;开始不会削，力道用不对的结果就是，削面如同砍面，使了很大的力气，但面就是削不下来。";
}

Shower3.onmousedown = function () {
    ShowImg.src = "../Image/Make/Record (3)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;先从和面开始，刀削面的面要比拉面的面硬，水要放的少一点，这样才能顺利削出。";
}