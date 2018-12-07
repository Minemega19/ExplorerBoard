var nom =document.getElementById("champsNom");
var pre =document.getElementById("champsPre");

document.addEventListener("click", click, false);

function click(){
  if(nom.value!="" && pre.value!=""){
    document.location.href="../../dashboard.html";
  }
}
