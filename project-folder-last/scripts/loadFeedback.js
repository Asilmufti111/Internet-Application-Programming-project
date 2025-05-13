document.addEventListener("DOMContentLoaded", function () {
    const feedbackContent = document.getElementById("feedback-content");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");

    let feedbackData = [];
    let currentIndex = 0;

    function displayFeedback(index) {
        const entry = feedbackData[index];
        feedbackContent.innerHTML = `
            <p><strong>${entry.name}</strong> (${entry.submitted_at})</p>
            <p>${entry.comments}</p>
        `;
    }

    fetch('api/process_feedback.php')
        .then(response => response.json())
        .then(data => {
            feedbackData = data.filter(entry => entry.comments && entry.comments.trim() !== '');

            if (feedbackData.length === 0) {
                feedbackContent.innerHTML = '<p>No feedback available.</p>';
                prevBtn.style.display = 'none';
                nextBtn.style.display = 'none';
                return;
            }

            displayFeedback(currentIndex);

            prevBtn.addEventListener("click", () => {
                currentIndex = (currentIndex - 1 + feedbackData.length) % feedbackData.length;
                displayFeedback(currentIndex);
            });

            nextBtn.addEventListener("click", () => {
                currentIndex = (currentIndex + 1) % feedbackData.length;
                displayFeedback(currentIndex);
            });
        })
        .catch(error => {
            console.error("Error fetching feedback:", error);
            feedbackContent.innerHTML = '<p>Could not load feedback.</p>';
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
        });
});
