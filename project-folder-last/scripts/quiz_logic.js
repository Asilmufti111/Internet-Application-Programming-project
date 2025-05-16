let score = 0; // Holds the user's quiz score
let answeredQuestions = new Map(); // Tracks user's selected answers per question
let emailValidated = false; // Ensures user provided a valid email before starting

// Handles user's answer selection for each question
function checkAnswer(button, status) {
  const questionDiv = button.closest(".quiz"); // Find the parent quiz block

  // Remove highlight from any previously selected answers in the same question
  questionDiv.querySelectorAll("button").forEach(btn => {
    btn.style.border = "";
    btn.style.backgroundColor = "";
  });

  // Visually mark the selected answer
  button.style.border = "2px solid #333";
  button.style.backgroundColor = "#ddd";

  // Store or update the user's answer for this question
  answeredQuestions.set(questionDiv, { button, status });
}

// Starts the quiz after validating the user's email
function startQuiz() {
  const emailInput = document.getElementById("quizEmail").value.trim();
  const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

  // Validate email format
  if (!emailInput || !emailPattern.test(emailInput)) {
    alert("Please enter a valid email address.");
    return;
  }

  // Prepare request to check previous score using the entered email
  const params = new URLSearchParams();
  params.append("email", emailInput);

  // AJAX call to check for a previous quiz score
  fetch("../server/check_previous_score.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: params.toString()
  })
    .then(res => res.text())
    .then(text => {
      // If a score exists, show it
      if (text.trim().startsWith("score:")) {
        const prevScore = text.split(":")[1];
        document.getElementById("previous-score").innerText = "Previous score: " + prevScore;
      } else {
        // Otherwise, leave it blank
        document.getElementById("previous-score").innerText = "";
      }

      // Enable quiz interaction
      emailValidated = true;
      document.getElementById("quizEmail").disabled = true; // Lock the email field
      document.querySelector("button[onclick='startQuiz()']").style.display = "none"; // Hide Start button
      document.getElementById("quizContent").style.display = "block"; // Show quiz content
    })
    .catch(() => {
      alert("Failed to check previous score.");
    });
}

// Reloads the page to reset the quiz
function restartQuiz() {
  location.reload();
}

// Calculates and submits the user's score
function submitResult() {
  const email = document.getElementById("quizEmail").value.trim();

  // Ensure quiz was started with a valid email
  if (!emailValidated) {
    alert("Please enter your email and start the quiz first.");
    return;
  }

  score = 0; // Reset score

  // Evaluate all answered questions
  answeredQuestions.forEach(({ button, status }) => {
    if (status === 'correct') {
      score++;
      button.style.backgroundColor = "green"; // Highlight correct answers
    } else {
      button.style.backgroundColor = "red"; // Highlight wrong answers
    }
  });

  // Show score and restart button
  document.getElementById("quiz-result").innerText = "Your score: " + score + "/3";
  document.getElementById("restart-btn").style.display = "inline-block";

  // Submit the score to the backend
  submitQuizScore(email);
}
