
var questionNum = 0;		  // first question
var input=document.getElementById("input");
var h1 = document.getElementById('h1Bot');
var h2 = document.getElementById('h2Bot');
var h3 = document.getElementById('h3Bot');
var h4 = document.getElementById('h4Bot');
var h5 = document.getElementById('h5Bot');
var h6 = document.getElementById('h6Bot');				// store id="output" in output variable
h1.innerText = 'Bonjour';													// ouput first question
var aff;

//push enter key (using jquery), to run bot function.
$(document).keypress(function(e) {
    if (e.which == 13) {
        clearTimeout(aff);
        vide();
        checkMessage();
        //bot();
        																					// run bot function when enter key pressed
        questionNum++;
        vide();
        seul();																// increase questionNum count by 1
    }
});

function checkMessage(){
  var msg=input.value;
  if(msg=="qui es tu" || msg=="qui es tu?" || msg=="tu es qui?" || msg=="tu es qui" || msg=="t'es qui?" || msg=="t'es qui"){
    presentation();
  } else if(msg=="quelle heure est-il?" || msg=="quelle heure est-il" || msg=="quelle heure est il?" || msg=="quelle heure est il" || msg=="heure" || msg=="quelle heure" || msg=="quelle heure?"){
    heure();
  } else if(msg=="temp"||msg=="temperature"||msg=="température"||msg=="quelle est la temperature"||msg=="quelle est la température"||msg=="quelle est la temperature?"||msg=="quelle est la température?"){
    temperature();
  }else{
    msgdefaut();
  }
  input.value="";
}

function reponse(h,msg,duree){
  aff=setTimeout(function(){ h.innerText=msg; }, duree*1000);
}
function videT(duree){
  setTimeout(function(){ vide() }, duree*1000);
}
function vide(){
    h1.innerText="";
    h2.innerText="";
    h3.innerText="";
    h4.innerText="";
    h5.innerText="";
    h6.innerText="";
}

function presentation(){
  reponse(h1,"Je suis votre assistant",0);
  videT(2);
  reponse(h2,"Vous ne me connaissez toujours pas depuis le temps?",2.01);
  videT(5);
}

function heure(){
  var d = new Date();
  var h = Math.floor(d.getTime()/1000/3600%24);
  var m = Math.floor(d.getTime()/1000/60%60);

  reponse(h1,"il est "+h+"h "+m,0);
  videT(2);
  reponse(h1,"Ne dites pas merci surtout...",2.01);
  videT(4);
}

function msgdefaut(){
  reponse(h1,"Je ne sais pas quoi vous répondre",0);
  videT(2);
  reponse(h1,"Dommage pour vous",2.01);
  videT(4);
}

function temperature(){
  reponse(h1,"Il fait 70°C",0);
  videT(2);
  reponse(h1,"Ca chauffe ici",2.01);
  videT(4);
}

function seul(){
  var rand=Math.floor(Math.random() * 2);
  if(rand==0){
    reponse(h1,"Zzz",10);
    videT(12);
  } else if(rand==1){
    reponse(h1,"Ca va?",10);
    videT(11);
    reponse(h1,"Tu ne te sens pas trop seul?",11.01);
    videT(13);
  }
}
