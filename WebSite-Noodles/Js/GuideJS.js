document.getElementById("FirstPage").onmousemove = function () {
    document.getElementById("H").src = "../Image/Guide/HomePressed.png";
}
document.getElementById("FirstPage").onmouseout = function () {
    document.getElementById("H").src = "../Image/Guide/Home.png";
}
//SXIntro Part
document.getElementById("SXIntro").onmousemove = function () {
    document.getElementById("F").src = "../Image/Guide/FeelingPressed.png";
    document.getElementById("SXIntroDiv").style.display = "Block";
}
document.getElementById("SXIntro").onmouseout = function () {
    document.getElementById("F").src = "../Image/Guide/Feeling.png";
    document.getElementById("SXIntroDiv").style.display = "none";
}
//MSIntro Part
document.getElementById("MSIntro").onmousemove = function () {
    document.getElementById("R").src = "../Image/Guide/ResearchPressed.png";
    document.getElementById("MSIntroDiv").style.display = "Block";
}
document.getElementById("MSIntro").onmouseout = function () {
    document.getElementById("R").src = "../Image/Guide/Research.png";
    document.getElementById("MSIntroDiv").style.display = "none";
}
//MakePart
document.getElementById("Make").onmousemove = function () {
    document.getElementById("M").src = "../Image/Guide/MakePressed.png";
    document.getElementById("MakeDiv").style.display = "Block";
}
document.getElementById("Make").onmouseout = function () {
    document.getElementById("M").src = "../Image/Guide/Make.png";
    document.getElementById("MakeDiv").style.display = "none";
}

//Interview Part
document.getElementById("Interview").onmousemove = function () {
    document.getElementById("I").src = "../Image/Guide/InterviewPressed.png";
    document.getElementById("InterviewDiv").style.display = "Block";
}
document.getElementById("Interview").onmouseout = function () {
    document.getElementById("I").src = "../Image/Guide/Interview.png";
    document.getElementById("InterviewDiv").style.display = "none";
}

//Research Part
document.getElementById("Research").onmousemove = function () {
    document.getElementById("FE").src = "../Image/Guide/FeturePressed.png";
    document.getElementById("ResearchDiv").style.display = "Block";
}
document.getElementById("Research").onmouseout = function () {
    document.getElementById("FE").src = "../Image/Guide/Feture.png";
    document.getElementById("ResearchDiv").style.display = "none";
}