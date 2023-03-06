var totalQuestions = 10;

var answers = new Array;
var userAnswers = new Array;

answers[1] = "A";
answers[2] = "B";
answers[3] = "C";
answers[4] = "A";
answers[5] = "B";
answers[6] = "C";
answers[7] = "B";
answers[8] = "C";
answers[9] = "B";
answers[10] = "D";

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