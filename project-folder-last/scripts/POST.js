function sendFeedbackViaAPI() {
  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const rating = document.querySelector('input[name="rating"]:checked').value;
  const message = document.getElementById("message").value.trim();
  const preferences = document.getElementById("preferences").value;

  // Collect checked services
  const services = [];
  document.querySelectorAll('input[name="services[]"]:checked').forEach(cb => {
    services.push(cb.value);
  });

  const data = {
    name: name,
    email: email,
    feedback: message,
    rating: rating,
    services_used: services,
    preferred_service: preferences
  };

  fetch("../api/process_feedback.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data)
  })
    .then(res => res.text())
.then(text => {
  console.log("Raw response:", text);
  const response = JSON.parse(text); // convert manually
  if (response.message) {
    alert(response.message);
    window.location.href = "../pages/feedback.html";
  } else if (response.error) {
    alert("Error: " + response.error);
  }
})
.catch(error => {

  console.error("Submission error:", error);
  alert("Submission failed: " + error.message + "\nCheck console for details.");
});


    
}

