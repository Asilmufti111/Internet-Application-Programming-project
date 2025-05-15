<!-- feedback.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Al-Noor</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../global/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- JS -->
    <script src="../scripts/validation.js" defer></script>
    <script src="../scripts/POST.js" defer></script>
</head>
<body>

    <!-- Include header and nav -->
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/links.php'); ?>

    <!-- Feedback Form -->
    <div id="content">
        <div id="feedback-form">
            <h2>Share Your Thoughts</h2>
            <form id="feedback" method="post">
                <fieldset>
                    <legend>Personal Information</legend>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
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
                        <label><input type="checkbox" name="services[]" value="Quizzes"> Quizzes</label>
                        <label><input type="checkbox" name="services[]" value="Donation Sites"> Donation Sites</label>
                    </div>

                    <label for="preferences">Preferred service:</label>
                    <select id="preferences" name="preferences">
                        <option value="Quran and Tafsir">Quran and Tafsir</option>
                        <option value="Prayer Schedule">Prayer Schedule</option>
                        <option value="Quizzes">Quizzes</option>
                        <option value="Donation">Donation</option>
                        <option value="Useful Videos">Useful Videos</option>
                    </select>

                    <label for="message"><br> Additional Comments:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </fieldset>

                <button type="submit" class="btn">Submit</button>
            </form>

            <!-- Area to show feedback response -->
            <div id="feedback-response"></div>
        </div>
    </div>

    <!-- Include footer -->
    <?php include('../includes/footer.php'); ?>

</body>
</html>
