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

function ApplyDefaultQuestionStyles() {
    for(i = 1; i <= totalQuestions; i++) {
        if(i % 2 == 0) {
            document.getElementById(i).className = "question";
        }
        else {
            document.getElementById(i).className = "question odd";
        }
    }
}

function CheckQuiz() {
    ApplyDefaultQuestionStyles();
    var totalQuestions = '4';
    var score = GetScore();
    MarkIncorrectQuestions();
    document.write("You scored: " + score + " out of " + totalQuestions + ".");

    let btn = document.createElement("button");
    btn.innerHTML = "Click Me";
document.body.appendChild(btn);


}

function result(score,totalQuestions){
    document.write("Score" +score);
  }