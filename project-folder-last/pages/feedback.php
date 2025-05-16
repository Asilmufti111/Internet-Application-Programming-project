<?php
// feedback.php
$pageTitle = "Feedback - Al-Noor";
include 'header.php';
?>

    <div id="header">
        <h1>Feedback</h1>
        <p>We value your feedback! Let us know how we can improve.</p>
    </div>

<?php include 'nav.php'; ?>

    <div id="content">
        <div id="feedback-form">
            <h2>Share Your Thoughts</h2>

            <form id="feedback">

                <fieldset>
                    <legend>Personal Information</legend>

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com" required>
                </fieldset>

                <fieldset>
                    <legend>Feedback Details</legend>

                    <label>User Rating:</label>
                    <div class="radio-group">
                        <input type="radio" id="rating1" name="rating" value="Excellent" required>
                        <label for="rating1">Excellent</label>

                        <input type="radio" id="rating2" name="rating" value="Good">
                        <label for="rating2">Good</label>

                        <input type="radio" id="rating3" name="rating" value="Average">
                        <label for="rating3">Average</label>

                        <input type="radio" id="rating4" name="rating" value="Poor">
                        <label for="rating4">Poor</label>
                    </div>

                    <label for="favorite">Favorite Feature:</label>
                    <select id="favorite" name="favorite" required>
                        <option value="">Select a feature</option>
                        <option value="Quran and Tafsir">Quran and Tafsir</option>
                        <option value="Prayer Schedule">Prayer Schedule</option>
                        <option value="Quizzes to Test Knowledge">Quizzes to Test Knowledge</option>
                        <option value="Donation">Donation</option>
                        <option value="Useful Videos">Useful Videos</option>
                    </select>

                    <label for="message"><br> Additional Comments:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </fieldset>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

<?php include 'footer.php'; ?>
