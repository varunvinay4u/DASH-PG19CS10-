//timer

var total_seconds = 60 * 10;
var c_minutes = parseInt(total_seconds / 60);
var c_seconds = parseInt(total_seconds % 60);
var timer;
var submitBtn = document.getElementById("submit-btn");

function CheckTime() {
document.getElementById("timer").innerHTML = 'Time Left: ' + c_minutes + ' minutes ' + c_seconds + ' seconds ';

if (total_seconds <= 0) {
  score();
} 
else {
  total_seconds = total_seconds - 1;
  c_minutes = parseInt(total_seconds / 60);
  c_seconds = parseInt(total_seconds % 60);
  timer = setTimeout(CheckTime, 1000);
}
}
timer = setTimeout(CheckTime, 1000);

submitBtn.addEventListener("click", () => {
  alert(`Time taken: ${600-total_seconds-1} seconds`);
});

   
// //active question-links

//     // Get all question links
//     const questionLinks = document.querySelectorAll(".question-link");

//     // Get all questions
//     const questions = document.querySelectorAll(".question");

//     // Show the first question by default
//     questions[0].classList.add('active');

//     // Add click event listener to each question link
//     questionLinks.forEach((questionLink, index) => {
//       questionLink.addEventListener('click', () => {
//         // Remove active class from all question links
//         questionLinks.forEach(questionLink => questionLink.classList.remove('active'));

//         // Add active class to clicked question link
//         questionLink.classList.add('active');

//         // Remove active class from all questions
//         questions.forEach(question => question.classList.remove('active'));

//         // Add active class to corresponding question
//         questions[index].classList.add('active');
//       });
//     });


// next and previous buttons
        
    // // DOM elements
    // const quizElement = document.getElementsByClassName("question-container");
    // const questionElements = document.querySelectorAll(".question");
    // const previousButton = document.getElementById("previous-btn");
    // const nextButton = document.getElementById("next-btn");

    // // Current question index
    // let currentQuestionIndex = 0;

    // // Show the current question
    // function showQuestion() {
    //   questionElements.forEach((questionElement, index) => {
    //     if (index === currentQuestionIndex) {
    //       questionElement.style.display = "block";
    //     } else {
    //       questionElement.style.display = "none";
    //     }
    //   });

    //   // Enable or disable the previous button
    //   if (currentQuestionIndex === 0) {
    //     previousButton.disabled = true;
    //   } else {
    //     previousButton.disabled = false;
    //   }

    //   // Enable or disable the next button
    //   if (currentQuestionIndex === questionElements.length - 1) {
    //     nextButton.disabled = true;
    //   } else {
    //     nextButton.disabled = false;
    //   }
    // }

    // // Show the first question
    // showQuestion();

    // previousButton.addEventListener("click", () => {
    //   currentQuestionIndex--;
    //   showQuestion();
    // });

    // nextButton.addEventListener("click", () => {
    //   currentQuestionIndex++;
    //   showQuestion();
    // });