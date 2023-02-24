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

function GetScore() {
    var score = 0;
    for(i = 1; i <= totalQuestions; i++) {
        if(userAnswers[i] == answers[i])
            score++;
    }
    return score;
}

function CheckQuiz() {
    // ApplyDefaultQuestionStyles();
    var totalQuestions = '4';
    var score = GetScore();
    MarkIncorrectQuestions();
    document.write("You scored: " + score + " out of " + totalQuestions + ".");
