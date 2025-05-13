let score = 0;

// Called when user selects an answer
function checkAnswer(button, status) {
  if (status === 'correct') {
    score++;
    button.style.backgroundColor = "green";
  } else {
    button.style.backgroundColor = "red";
  }

  // Disable all buttons for this question
  button.parentElement.querySelectorAll('button').forEach(btn => btn.disabled = true);

  // Show score so far
  document.getElementById("quiz-result").innerText = "Your score: " + score + "/3";
}

// Called when user clicks "Start Quiz"
function startQuiz() {
  const emailInput = document.getElementById("quizEmail").value.trim();
  const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

  if (!emailInput || !emailPattern.test(emailInput)) {
    alert("Please enter a valid email address.");
    return;
  }

  // Lock input and show quiz
  document.getElementById("quizEmail").disabled = true;
  document.querySelector("button[onclick='startQuiz()']").style.display = "none";
  document.getElementById("quizContent").style.display = "block";
}

// Called when user clicks "Submit My Score"
function submitResult() {
  const email = document.getElementById("quizEmail").value.trim();
  if (!email) {
    alert("Email missing. Cannot submit result.");
    return;
  }

  submitQuizScore(email); // from submit_score.js
}
