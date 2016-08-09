var Checker = document.getElementById("Checker");
var Texter = document.getElementById("Texter");
var Shower1 = document.getElementById("Shower1");
var Shower2 = document.getElementById("Shower2");
var Shower3 = document.getElementById("Shower3");
var ShowImg = document.getElementById("ShowImg");

Shower1.onmousedown = function ()
{
    ShowImg.src = "../Image/Feture/Feture (7)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;六味斋虽然在山西太原，但它的历史却可以追溯到清乾隆年间的北京，它是国内食品行业现存为数不多的具有200年以上历史的老字号之一。";
}

Shower2.onmousedown = function () {
    ShowImg.src = "../Image/Feture/Feture (6)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;六味斋酱肉是太原市的传统名食。太原市六味斋酱肉店生产，已有40多年的历史。“六味斋”的酱肉的品种有酱肉、酱肘花、杂拌等，风味各异。特点是：“肥而不腻，瘦而不柴”。";
}

Shower3.onmousedown = function () {
    ShowImg.src = "../Image/Feture/Feture (5)-Large.png";
    Texter.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;六味斋，这个中华老字号经过一辈又一辈人的努力，一直保持着自开宗立派以来260多年的传统工艺、传统风味，生意越做越大、越做越强。";
}