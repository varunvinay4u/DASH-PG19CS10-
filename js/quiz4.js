var totalQuestions = 10;

var answers = new Array;
var userAnswers = new Array;

answers[1] = "B";
answers[2] = "C";
answers[3] = "D";
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

    var btn1 = document.createElement("a");
    btn1.innerText = " Try Again ";
    btn1.href = 'quiz2.html';
    document.body.appendChild(btn1);


    var btn2 = document.createElement("a");
    btn2.innerText = " Go Home ";
    btn2.href = 'index.html';
    document.body.appendChild(btn2);

}

function result(score,totalQuestions){
    document.write("Score" +score);
  }

  