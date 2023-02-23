var totalQuestions = 4;

var answers = new Array;
var userAnswers = new Array;

answers[1] = "A";
answers[2] = "C";
answers[3] = "B";
answers[4] = "B";

function SetAnswer(questionNumber, answerSelection) {
    userAnswers[questionNumber] = answerSelection;
}

function MarkIncorrectQuestions() {
    for(i = 1; i <= totalQuestions; i++) {
        if(answers[i] != userAnswers[i]) {
            document.getElementById(i).className += " wrong";
        }
    }
}