var questionNumber = 0;

//load the questions from the XML file
function getQuestions() {
  obj = document.getElementById("question");
  obj.firstChild.nodeValue = "(please wait)";
  ajaxCallback = nextQuestion;
  // ajaxRequest("xml/questions.xml");
  ajaxRequest("ajaxQuestions.xml");
}

//display the next question
function nextQuestion() {
  questions = ajaxreq.responseXML.getElementsByTagName("question");
  obj = document.getElementById("question");

  if (questionNumber < questions.length){
    question = questions[questionNumber].firstChild.nodeValue
    obj.firstChild.nodeValue = question;
  }

  else {
    obj.firstChild.nodeValue = "(no more questions)";

    ans = document.getElementById("submit");
    ans.style.visibility = 'hidden';
  }
}

function checkAnswer() {
  answers = ajaxreq.responseXML.getElementsByTagName("answer");
  answer = answers[questionNumber].firstChild.nodeValue;
  answerfield = document.getElementById("answer");

  if (answer == answerfield.value) {
    alert("Correct!");
  }
  else {
    alert("Incorrect. the correct answer is : " + answer)
  }

  questionNumber++;
  answerfield.value = "";
  nextQuestion();
}

//set up the event handlers for the buttons
obj = document.getElementById("start_quiz");
obj.onclick=getQuestions;

ans = document.getElementById("submit");
ans.onclick=checkAnswer;
