let score = 0;
let answeredQuestions = new Map();
let emailValidated = false;

// Show selected only (not result)
function checkAnswer(button, status) {
  const questionDiv = button.closest(".quiz");

  if (!answeredQuestions.has(questionDiv)) {
    answeredQuestions.set(questionDiv, { button, status });

    // Show selected button visually
    button.style.border = "2px solid #333";
    button.style.backgroundColor = "#ddd";
  }

  questionDiv.querySelectorAll("button").forEach(btn => btn.disabled = true);
}


// Called when user starts quiz
function startQuiz() {
  const emailInput = document.getElementById("quizEmail").value.trim();
  const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

  if (!emailInput || !emailPattern.test(emailInput)) {
    alert("Please enter a valid email address.");
    return;
  }

  // Check for previous quiz score
  const params = new URLSearchParams();
  params.append("email", emailInput);

  fetch("../api/check_previous_score.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: params.toString()
  })
    .then(res => res.text())
    .then(text => {
      if (text.trim().startsWith("score:")) {
        const prevScore = text.split(":")[1];
        document.getElementById("previous-score").innerText = "Previous score: " + prevScore;
      } else {
        document.getElementById("previous-score").innerText = ""; // clear if no previous score
      }

      // Enable quiz
      emailValidated = true;
      document.getElementById("quizEmail").disabled = true;
      document.querySelector("button[onclick='startQuiz()']").style.display = "none";
      document.getElementById("quizContent").style.display = "block";
    })
    .catch(() => {
      alert("Failed to check previous score.");
    });
}


function submitResult() {
  const email = document.getElementById("quizEmail").value.trim();
  if (!emailValidated) {
    alert("Please enter your email and start the quiz first.");
    return;
  }

  score = 0;

  answeredQuestions.forEach(({ button, status }) => {
    if (status === 'correct') {
      score++;
      button.style.backgroundColor = "green";
    } else {
      button.style.backgroundColor = "red";
    }
  });

  document.getElementById("quiz-result").innerText = "Your score: " + score + "/3";
  submitQuizScore(email);
}
