var totalQuestions = 10;

var answers = new Array;
var userAnswers = new Array;

answers[1] = "B";
answers[2] = "C";
answers[3] = "A";
answers[4] = "C";
answers[5] = "A";
answers[6] = "C";
answers[7] = "D";
answers[8] = "B";
answers[9] = "A";
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
    var totalQuestions = '10';
    var score = GetScore();
    MarkIncorrectQuestions();
    document.write("You scored: " + score + " out of " + totalQuestions + ".");
    
    var btn1 = document.createElement("a");
    btn1.innerText = " Try Again ";
    btn1.href = 'quiz3.html';
    document.body.appendChild(btn1);