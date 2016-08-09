var Checker = document.getElementById("Checker");
var Texter = document.getElementById("Texter");
var Shower1 = document.getElementById("Shower1");
var Shower2 = document.getElementById("Shower2");
var Shower3 = document.getElementById("Shower3");
var ShowImg = document.getElementById("ShowImg");

Shower1.onmousedown = function ()
{
    ShowImg.src = "../Image/Feture/Feture (1)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;参观省博物院中的晋商文化展厅。这是一个仿古的大门样式，后面的一堵墙是为了挡住院中的东西，不让人直接从门外看到。";
}

Shower2.onmousedown = function () {
    ShowImg.src = "../Image/Feture/Feture (3)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;山西省博物院门口，博物院的建筑宏伟高大，形似上海世博会的中国馆，是出自同一位设计师之手。";
}

Shower3.onmousedown = function () {
    ShowImg.src = "../Image/Feture/Feture (4)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;这幅画是博物院中一幅描绘晋商生产生活的画，画上的任务辛勤工作，正是几千年来晋商的缩影。";
}