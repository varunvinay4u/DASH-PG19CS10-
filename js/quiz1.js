var totalQuestions = 3;

var answers = new Array;
var userAnswers = new Array;

answers[1] = "A";
answers[2] = "C";
answers[3] = "B";

function SetAnswer(questionNumber, answerSelection) {
    userAnswers[questionNumber] = answerSelection;
}

// applies the .wrong class styling to any question div that is incorrect
function MarkIncorrectQuestions() {
    for(i = 1; i <= totalQuestions; i++) {
        if(answers[i] != userAnswers[i]) {
            document.getElementById(i).className += " wrong";
        }
    }
}

function GetScore() {
    var score = 0;
    for(i = 1; i <= totalQuestions; i++) {
        if(userAnswers[i] == answers[i])
            score++;
    }
    return score;
}
