var Checker = document.getElementById("Checker");
var Texter = document.getElementById("Texter");
var Shower1 = document.getElementById("Shower1");
var Shower2 = document.getElementById("Shower2");
var Shower3 = document.getElementById("Shower3");
var ShowImg = document.getElementById("ShowImg");

Shower1.onmousedown = function ()
{
    ShowImg.src = "../Image/Research/Research (1)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;山西省面食博物馆-山西会馆，是一个及餐饮与文化一身的现代型面食馆，里面不仅有面食，还有面艺表演，不过我因为时间原因没能拍摄到。";
}

Shower2.onmousedown = function () {
    ShowImg.src = "../Image/Research/Research (2)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;山西省图书馆，山西省最大最权威的图书馆，藏书不计其数，涵盖的范围也极广。近年来选址重建后，先进的管理运营使其更加现代化。";
}

Shower3.onmousedown = function () {
    ShowImg.src = "../Image/Research/Research (3)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;太原市尔雅购书中心，虽然没有省图书馆大，但更倾向于市民的生活需求，里面的书记也大部分是满足人们日常生活观看的。";
}