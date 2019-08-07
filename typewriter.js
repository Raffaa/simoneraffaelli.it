// values to keep track of the number of letters typed, which quote to use. etc. Don't change these values.
var i = 0,
    j = 0,
    lineId = 0,
    backspaceChars = 0;
    isBackspacing = false;

// Typerwrite text content. Each array element correspond to a new line. To use backspace use this construct " <num of chars you want to delete> "
var textArray = [
  "Hey,",
  "this is  Raffinato, you can find me at registry office as Raffaelli Simone, I'm 22 and come from Riccione.",
  "Right now I'm attending An IT course @Unibo, and in my free time I like to make some good projects<23>basically do nothing<28>try to make some cool projects.",
  "Below I'll leave a link to my \"most successfull\" projects and my -blank- CV.",
  "Thats basically all I wanted to say...",
  "Bye :)"
];

// Speed (in milliseconds) of typing.
var speedForward = 100, //Typing Speed 100
    speedWait = 750, // Wait between typing and backspacing 750
    speedBetweenLines = 1000, //Wait between first and second lines 1000
    speedBackspace = 75 //Backspace Speed 75

//Run the loop
typeWriter("container", textArray);

function createParagraph() {
  lineId++; i=0;
  var para = document.createElement("p"),
  node = document.createTextNode("");

  para.classList.add("line", "cursor");
  para.setAttribute("id", "line-" + lineId);
  para.appendChild(node);

  var parent = document.getElementById("container");
  parent.append(para);
}

function evaluateBackspacingChars(aString) {
  j = i;
  while (aString.charAt(i) != ">") { i++;  }
  backspaceChars = parseInt(aString.substring(++j, i++));
}


function endTyping(){
  $("#contacts").fadeIn();
  $("#prjs-carousel").fadeIn();
}


function typeWriter(id, ar) {
  if(lineId < ar.length) {
      var aString = ar[lineId];
      var p = $("#" + id).children("#line-"+lineId);
if(!isBackspacing) {
    if (i < aString.length) {
      if (aString.charAt(i) == "<") {
        evaluateBackspacingChars(aString);
        isBackspacing = true;
        setTimeout(function(){ typeWriter(id, ar); }, speedWait);
      } else {
        p.text(p.text() + aString.charAt(i));
        i++;
        setTimeout(function(){ typeWriter(id, ar); }, speedForward);
      }
    } else if (i == aString.length) {
      p.removeClass("cursor");
      createParagraph();
      setTimeout(function(){ typeWriter(id, ar); }, speedBetweenLines);
    }
  } else {
    if(backspaceChars > 0) {
      p.text(p.text().slice(0, -1));
      backspaceChars--;
      setTimeout(function(){ typeWriter(id, ar); }, speedBackspace);
    } else {
      isBackspacing = false;
      setTimeout(function(){ typeWriter(id, ar); }, speedForward);
    }
  }
} else {
  $("#line-"+lineId).removeClass("cursor");
  endTyping();
}
}
