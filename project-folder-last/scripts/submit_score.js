// Submits the user's quiz score to the backend PHP file (submit_quiz.php)
function submitQuizScore(email) {
  // Prepare form-encoded parameters
  const params = new URLSearchParams();
  params.append("email", email);        // User's email address
  params.append("score", score);        // Score is taken from the global variable `score`

  // Send the POST request to the server
  fetch("../server/submit_quiz.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" }, // Proper format for form submission
    body: params.toString()
  })
    .then(res => res.text())           // Read the raw text response
    .then(text => {
      // Response received, but we are not doing anything with it currently
      // You can optionally log or show confirmation to user here
      // console.log("Response from server:", text);
    })
    .catch(err => {
      // Handle fetch or network errors
      console.error("Submission error:", err);
      alert("Failed to submit quiz score.");
    });
}
