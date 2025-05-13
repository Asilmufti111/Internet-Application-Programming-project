
function submitQuizScore(email) {
  fetch("../api/submit_quiz.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ email: email, score: score }) // 'score' is defined in quiz_logic.js
  })
  .then(res => res.json())
  .then(data => {
    if (data.message) {
      alert(data.message);
    } else if (data.error) {
      alert("Error: " + data.error);
    }
  })
  .catch(err => {
    console.error("Submission error:", err);
    alert("Failed to submit quiz score.");
  });
}
