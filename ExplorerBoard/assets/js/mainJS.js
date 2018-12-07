$("#image-map").click( function(){
    alert.log("clicked");
});

<<<<<<< HEAD
var questionNum = 0;													// keep count of question, used for IF condition.
var question = '<h1>what is your name?</h1>';				  // first question
=======
function checkMessage(){
  var msg=input.value;
  if(msg=="qui es tu" || msg=="qui es tu?" || msg=="tu es qui?" || msg=="tu es qui" || msg=="t'es qui?" || msg=="t'es qui"){
    presentation();
  } else if(msg=="quelle heure est-il?" || msg=="quelle heure est-il" || msg=="quelle heure est il?" || msg=="quelle heure est il" || msg=="heure" || msg=="quelle heure" || msg=="quelle heure?"){
    heure();
  } else if(msg=="temp"||msg=="temperature"||msg=="température"||msg=="quelle est la temperature"||msg=="quelle est la température"||msg=="quelle est la temperature?"||msg=="quelle est la température?"){
    temperature();
  }else{
    chercheMot();
  }
  input.value="";
}
>>>>>>> origin/master

var output = document.getElementById('output');				// store id="output" in output variable
output.innerHTML = question;													// ouput first question

function bot() {
    var input = document.getElementById("input").value;
    console.log(input);

    if (questionNum == 0) {
        output.innerHTML = '<h1>hello ' + input + '</h1>';// output response
        document.getElementById("input").value = "";   		// clear text box
        question = '<h1>how old are you?</h1>';			    	// load next question
        setTimeout(timedQuestion, 2000);									// output next question after 2sec delay
    }

    else if (questionNum == 1) {
        output.innerHTML = '<h1>That means you were born in ' + (2016 - input) + '</h1>';
        document.getElementById("input").value = "";
        question = '<h1>where are you from?</h1>';
        setTimeout(timedQuestion, 2000);
    }
}

function timedQuestion() {
    output.innerHTML = question;
}

//push enter key (using jquery), to run bot function.
$(document).keypress(function(e) {
    if (e.which == 13) {
        bot();																						// run bot function when enter key pressed
        questionNum++;																		// increase questionNum count by 1
    }
});
