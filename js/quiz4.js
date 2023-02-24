var totalQuestions = 4;

var answers = new Array;
var userAnswers = new Array;

answers[1] = "B";
answers[2] = "C";
answers[3] = "D";
answers[4] = "A";

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