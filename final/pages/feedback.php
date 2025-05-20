<!--
    Names: Asil Mufti, Hayat Alzahrani, Shrooq Kaabi
    IDs: 2106122, 2105101, 2205003
    Section: IAR
    Date: 22-03-2025
-->

<!DOCTYPE html>
<html lang="en">
<script src="../scripts/validation.js"></script>
<script src="../scripts/POST.js"></script>
<head>
    <!-- Meta tags for character encoding and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Feedback - Al-Noor</title> <!-- Title of the webpage that shows on the browser tab -->

    <!-- Linking the CSS files to style the page -->
    <link rel="stylesheet" href="../global/main.css"> <!-- Global styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- FontAwesome for icons -->

</head>
<body>

    <!-- Header Section: Main heading and subtitle of the page -->
     <?php include "../includes/header.php"; ?>

    <!-- Navigation Menu: Links to other pages on the website -->
     <?php include "../includes/links.php"; ?>

    <!-- Feedback Form Section: Collects user's feedback -->
    <div id="content">
        <div id="feedback-form">
            <h2>Share Your Thoughts</h2> <!-- Heading for the feedback form -->

            <!-- The form collects user information, ratings, preferences, and additional comments -->
            <form id="feedback">

                <!-- Section 1: Personal Information -->
                <fieldset>
                    <legend>Personal Information</legend> <!-- Title for this section -->

                    <!-- User Name Input -->
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required> <!-- Input field for the user's name -->

                    <!-- User Email Input -->
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com" required>
                    <!-- Input field for email -->
                </fieldset>

                <!-- Section 2: Feedback Details -->
                <fieldset>
                    <legend>Feedback Details</legend> <!-- Title for this section -->

                    <!-- User Rating: Options to rate the website -->
                    <label>User Rating:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="rating" value="Good"> Good</label>
                        <!-- Radio button for 'Good' rating -->
                        <label><input type="radio" name="rating" value="Average"> Average</label>
                        <!-- Radio button for 'Average' rating -->
                        <label><input type="radio" name="rating" value="Poor"> Poor</label>
                        <!-- Radio button for 'Poor' rating -->
                    </div>

                    <!-- Services Used: Options to select which services were used -->
                    <label>Services Used:</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="services[]" value="Quran and Tafsir"> Quran and Tafsir</label>
                        <!-- Checkbox for Quran and Tafsir -->
                        <label><input type="checkbox" name="services[]" value="Prayer Schedule"> Prayer Schedule</label>
                        <!-- Checkbox for Prayer Schedule -->
                        <label><input type="checkbox" name="services[]" value="Quizzes to test knowledge"> Quizzes to test
                            knowledge</label> <!-- Checkbox for Quizzes -->
                        <label><input type="checkbox" name="services[]" value="Donation Sites"> Donation Sites</label>
                        <!-- Checkbox for Donation Sites -->
                    </div>

                    <!-- Preferred Service: Dropdown list to choose the preferred service -->
                    <label for="preferences">Preferred service:</label>
                    <select id="preferences" name="preferences">
                        <option value="Quran and Tafsir">Quran and Tafsir</option> <!-- Option for Quran and Tafsir -->
                        <option value="Prayer Schedule">Prayer Schedule</option> <!-- Option for Prayer Schedule -->
                        <option value="Quizzes to Test Knowledge">Quizzes to Test Knowledge</option>
                        <!-- Option for Quizzes -->
                        <option value="Donation">Donation</option> <!-- Option for Donation -->
                        <option value="Useful Videos">Useful Videos</option> <!-- Option for Useful Videos -->
                    </select>

                    <!-- Additional Comments: Text area for any extra comments or suggestions -->
                    <label for="message"><br> Additional Comments:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                    <!-- Textarea for additional comments -->
                </fieldset>

                <!-- Submit Button: Submits the form -->
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Footer Section: Contact details and copyright information -->
   <?php include "../includes/footer.php"; ?>
</body>

</html>