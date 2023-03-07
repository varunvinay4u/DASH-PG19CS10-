var totalQuestions = 10;

var answers = new Array;
var userAnswers = new Array;

answers[1] = "A";
answers[2] = "C";
answers[3] = "B";
answers[4] = "B";
answers[5] = "C";
answers[6] = "B";
answers[7] = "C";
answers[8] = "D";
answers[9] = "B";
answers[10] = "C";

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


// function ApplyDefaultQuestionStyles() {
//     for(i = 1; i <= totalQuestions; i++) {
//         if(i % 2 == 0) {
//             document.getElementById(i).className = "question";
//         }
//         else {
//             document.getElementById(i).className = "question odd";
//         }
//     }
// }

function CheckQuiz() {
    // ApplyDefaultQuestionStyles();
    var totalQuestions = '10';
    var score = GetScore();
    MarkIncorrectQuestions();
    document.write("You scored: " + score + " out of " + totalQuestions + ".");

    var btn1 = document.createElement("a");
    btn1.innerText = " Try Again ";
    btn1.href = 'quiz1.html';
    document.body.appendChild(btn1);


    var btn2 = document.createElement("a");
    btn2.innerText = " Go Home ";
    btn2.href = 'index.html';
    document.body.appendChild(btn2);
    

}

function result(score,totalQuestions){
    document.write("Score" +score);
  }