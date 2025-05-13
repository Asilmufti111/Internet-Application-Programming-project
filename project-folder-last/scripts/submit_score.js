function submitQuizScore(email) {
  const params = new URLSearchParams();
  params.append("email", email);
  params.append("score", score); // from global variable

  fetch("../server/submit_quiz.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: params.toString()
  })
    .then(res => res.text())
    .then(text => {
     
    })
    .catch(err => {
      console.error("Submission error:", err);
      alert("Failed to submit quiz score.");
    });
}
