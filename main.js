// Global variables
const API_URL = "https://opentdb.com/api.php?amount=20";
let questions;
var currentQuestion = 0;
let correctAnswers = 0;

// Show loading screen
function showLoadingScreen() {
  document.querySelector("#loading-screen").style.display = "flex";
  document.querySelector("#start-screen").style.display = "none";
  document.querySelector("#question-screen").style.display = "none";
  document.querySelector("#results-screen").style.display = "none";
}

// Show start screen
function showStartScreen() {
  document.querySelector("#loading-screen").style.display = "none";
  document.querySelector("#start-screen").style.display = "block";
  document.querySelector("#question-screen").style.display = "none";
  document.querySelector("#results-screen").style.display = "none";
}

// Show question screen
function showQuestionScreen() {
  document.querySelector("#loading-screen").style.display = "none";
  document.querySelector("#start-screen").style.display = "none";
  document.querySelector("#question-screen").style.display = "block";
  document.querySelector("#start-over-screen").style.display = "block";
  document.querySelector("#results-screen").style.display = "none";
}

// Show results screen
function showResultsScreen() {
  document.querySelector("#loading-screen").style.display = "none";
  document.querySelector("#start-screen").style.display = "none";
  document.querySelector("#start-over-screen").style.display = "none";
  document.querySelector("#question-screen").style.display = "none";
  document.querySelector("#results-screen").style.display = "block";
}

const question = document.querySelector('#question');
const questionCategory = document.querySelector('#question-category');
const answers = document.querySelector('#answers');
const completed = document.querySelector('#completed')

// Fetch questions from API
function fetchQuestions() {
  return fetch(API_URL)
    .then((response) => response.json())
    .then(data => {
      // Hide the loading screen
     showStartScreen();

     var currentQuestion = 0;
  
      // Use the data returned from the API
      console.log(data.results);
      question.innerHTML = data.results[currentQuestion].question;
      questionCategory.innerHTML = data.results[currentQuestion].category;
      completed.innerHTML = `COMPLETED ${currentQuestion}/20`;

      const correctAnswer = document.createElement('button');
      const correctAnswerValue =  data.results[currentQuestion].correct_answer;
      correctAnswer.innerHTML = data.results[currentQuestion].correct_answer;
      correctAnswer.setAttribute('type', 'submit');
      correctAnswer.setAttribute('class', 'btn-answer btn btn-outline-secondary mx-3 my-2');
      correctAnswer.setAttribute('value',`${correctAnswerValue}`);
      answers.appendChild(correctAnswer);

      const incorrect = data.results[currentQuestion].incorrect_answers;
      let icount = 0;

      incorrect.forEach(element => {
        element = document.createElement('button');
        element.innerHTML = data.results[currentQuestion].incorrect_answers[icount];
        element.setAttribute('type', 'submit');
        element.setAttribute('class', 'btn-answer btn btn-outline-secondary mx-3 my-2');
        element.setAttribute('value', `${incorrect[icount]}`);
        answers.appendChild(element);
        icount++;
      });

      // Buttons and answer handling

      const answerButtons = document.querySelectorAll('.btn-answer');
      answerButtons.forEach(element => {
        element.addEventListener('click', function() {
          if (element.value == correctAnswerValue) {
          window.localStorage.setItem(`answer${currentQuestion + 1}`, JSON.stringify(element.value));
          } else {
            console.log('incorrect');
          };
          currentQuestion++;
          location.hash = `#question-${currentQuestion + 1}`;

        });
      });

      // Hashchange handling
      
      window.addEventListener('hashchange', function() {
        if(currentQuestion < 20) {
        question.innerHTML = "";
        answers.innerHTML = "";
        questionCategory.innerHTML = "";

        question.innerHTML = data.results[currentQuestion].question;
        questionCategory.innerHTML = data.results[currentQuestion].category;
        completed.innerHTML = `COMPLETED ${currentQuestion}/20`;
  
        const correctAnswer = document.createElement('button');
        const correctAnswerValue =  data.results[currentQuestion].correct_answer;
        correctAnswer.innerHTML = data.results[currentQuestion].correct_answer;
        correctAnswer.setAttribute('type', 'submit');
        correctAnswer.setAttribute('class', 'btn-answer btn btn-outline-secondary mx-3 my-2');
        correctAnswer.setAttribute('value',`${correctAnswerValue}`);
        answers.appendChild(correctAnswer);
  
        const incorrect = data.results[currentQuestion].incorrect_answers;
        let icount = 0;
  
        incorrect.forEach(element => {
          element = document.createElement('button');
          element.innerHTML = data.results[currentQuestion].incorrect_answers[icount];
          element.setAttribute('type', 'submit');
          element.setAttribute('class', 'btn-answer btn btn-outline-secondary mx-3 my-2');
          element.setAttribute('value', `${incorrect[icount]}`);
          answers.appendChild(element);
          icount++;
        });

        const answerButtons = document.querySelectorAll('.btn-answer');
        answerButtons.forEach(element => {
          element.addEventListener('click', function() {
            if (element.value == correctAnswerValue) {
            window.localStorage.setItem(`answer${currentQuestion + 1}`, JSON.stringify(element.value));
            } else {
              console.log('incorrect');
            };
            currentQuestion++;
            location.hash = `#question-${currentQuestion + 1}`;
          });
        });  

         } else {
          const result = window.localStorage.length;
          const total = document.querySelector('#total');
          total.innerHTML = `Total Correct Answers: ${result}/20`;
            showResultsScreen();
            location.hash = 'results';
            }
      });
    });
};

showLoadingScreen();
fetchQuestions();

function reloadPage(){
  document.location.reload();
};

function clearLocalStorage(){
  window.localStorage.clear();
};

document.querySelector('#start-button').addEventListener('click', function(){
showQuestionScreen();
location.hash = `#question-${currentQuestion + 1}`;
});

document.querySelector('#start-over-button').addEventListener('click', function(){
  clearLocalStorage();
  history.replaceState(null, null, ' ');
  reloadPage();
});

document.querySelector('#try-again-button').addEventListener('click', function() {
  clearLocalStorage();
  history.replaceState(null, null, ' ');
  reloadPage();
});

window.addEventListener('load', function() {
  clearLocalStorage();
  history.replaceState(null, null, '?');
});
