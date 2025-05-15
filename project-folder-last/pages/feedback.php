<?php include '../includes/header.php'; ?>

<script src="../scripts/validation.js"></script>
<script src="../scripts/POST.js"></script>

<div id="nav">
    <?php include '../includes/links.php'; ?>
</div>

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
                    <label><input type="radio" name="rating" value="Good"> Good</label>
                    <label><input type="radio" name="rating" value="Average"> Average</label>
                    <label><input type="radio" name="rating" value="Poor"> Poor</label>
                </div>

                <label>Services Used:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="services[]" value="Quran and Tafsir"> Quran and Tafsir</label>
                    <label><input type="checkbox" name="services[]" value="Prayer Schedule"> Prayer Schedule</label>
                    <label><input type="checkbox" name="services[]" value="Quizzes to test knowledge"> Quizzes to test
                        knowledge</label>
                    <label><input type="checkbox" name="services[]" value="Donation Sites"> Donation Sites</label>
                </div>

                <label for="preferences">Preferred service:</label>
                <select id="preferences" name="preferences">
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

    <div id="feedback-display">
        <h2>User Feedback</h2>
        </div>
</div>

<?php include ('../includes/footer.php';) ?>

</body>

</html>
