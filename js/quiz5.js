var totalQuestions = 10;

var answers = new Array;
var userAnswers = new Array;

answers[1] = "C";
answers[2] = "A";
answers[3] = "C";
answers[4] = "D";
answers[5] = "B";
answers[6] = "A";
answers[7] = "D";
answers[8] = "C";
answers[9] = "C";
answers[10] = "B";

function SetAnswer(questionNumber, answerSelection) {
    userAnswers[questionNumber] = answerSelection;
}
