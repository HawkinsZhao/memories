
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

document.getElementById("CoverImg").src="../img/" + Request["index"] + "/CoverImg.jpg";
document.getElementById("IT1").src="../img/" + Request["index"] + "/0.jpg";
document.getElementById("IT2").src="../img/" + Request["index"] + "/1.jpg";
document.getElementById("IT3").src="../img/" + Request["index"] + "/2.jpg";
document.getElementById("IT4").src="../img/" + Request["index"] + "/3.jpg";
document.getElementById("IT5").src="../img/" + Request["index"] + "/4.jpg";
document.getElementById("IT6").src="../img/" + Request["index"] + "/5.jpg";