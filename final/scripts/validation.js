document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent form from submitting normally

    if (!form.checkValidity()) return;

    let isValid = true;
    let messages = [];

    const name = document.getElementById("name").value.trim();
    const namePattern = /^[a-zA-Z\s]+$/;

    if (!namePattern.test(name)) {
      messages.push("Invalid name: only letters are allowed.");
      isValid = false;
    }

    const ratingChecked = document.querySelector('input[name="rating"]:checked');
    if (!ratingChecked) {
      messages.push("Please select a rating.");
      isValid = false;
    }

    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="services[]"]');
    let checkboxChecked = false;
    checkboxes.forEach((box) => {
      if (box.checked) checkboxChecked = true;
    });
    if (!checkboxChecked) {
      messages.push("Please select at least one service used.");
      isValid = false;
    }

    const message = document.getElementById("message").value.trim();
    if (message === "") {
      messages.push("Please enter your comments.");
      isValid = false;
    }

    if (!isValid) {
      alert(messages.join("\n"));
      return;
    }

    // If valid, send data via POST.js
    sendFeedbackViaAPI();
  });
});
