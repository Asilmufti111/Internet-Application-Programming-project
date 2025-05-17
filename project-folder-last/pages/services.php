<!-- Names: Asil Mufti, Hayat Alzahrani, Shrooq Kaabi
     IDs: 2106122, 2105101, 2205003
     Section: IAR
     Date: 22-03-2025
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Character encoding and viewport settings for mobile responsiveness -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title> <!-- Page title displayed in the browser tab -->
    <link rel="stylesheet" href="../global/main.css"> <!-- Link to external CSS file for styling -->
</head>
<body class="services-page"> <!-- Apply a specific class to the body for styling in services page -->

    <!-- Header Section: Displays the page's main title and a brief description -->
    <header id="header">
        <h1>Our Services</h1> <!-- Main heading for the page -->
        <p>Explore the various services we offer</p> <!-- Subtitle to explain the page's purpose -->
    </header>

    <!-- Navigation Menu: Links to other pages of the website -->
    <div id="nav">
        <ul>
            <!-- List of navigation links -->
            <li><a href="../index.php">Home</a></li> <!-- Link to the homepage -->
            <li><a href="about.php">About</a></li> <!-- Link to the about page -->
            <li><a href="services.php">Services</a></li> <!-- Link to the current services page -->
            <li><a href="feedback.php">Feedback</a></li> <!-- Link to the feedback page -->
        </ul>
    </div>

    <!-- Services Section: Displays the various services offered -->
    <section class="services-container">
        
        <!-- Service Box for Quran and Tafsir -->
        <div class="service-box">
            <a href="quran-tafsir.php"> <!-- Link to the Quran and Tafsir page -->
                <h2 class="service-title">Quran and Tafsir</h2> <!-- Title for the Quran and Tafsir service -->
                <p class="service-subtitle">Deepen your knowledge</p> <!-- Subtitle to explain the service -->
                <p class="service-description">Explore the Quran with Tafsir to gain deeper understanding.</p> <!-- Short description of the service -->
            </a>
        </div>

        <!-- Service Box for Prayer Schedule -->
        <div class="service-box">
            <a href="schedule.php"> <!-- Link to the Prayer Schedule page -->
                <h2 class="service-title">Prayer Schedule</h2> <!-- Title for the Prayer Schedule service -->
                <p class="service-subtitle">Stay connected with prayer times</p> <!-- Subtitle to explain the service -->
                <p class="service-description">Stay updated with accurate prayer times for your region.</p> <!-- Short description of the service -->
            </a>
        </div>

        <!-- Service Box for Quizzes -->
        <div class="service-box">
            <a href="quizzes.php"> <!-- Link to the Quizzes page -->
                <h2 class="service-title">Quizzes to Test Knowledge</h2> <!-- Title for the Quizzes service -->
                <p class="service-subtitle">Engage and learn</p> <!-- Subtitle to explain the service -->
                <p class="service-description">Engage in fun and educational quizzes to test your knowledge.</p> <!-- Short description of the service -->
            </a>
        </div>

        <!-- Service Box for Donations -->
        <div class="service-box">
            <a href="Donations.php"> <!-- Link to the Donations page -->
                <h2 class="service-title">Donation</h2> <!-- Title for the Donations service -->
                <p class="service-subtitle">Give back to the community</p> <!-- Subtitle to explain the service -->
                <p class="service-description">Find trusted donation websites in Saudi Arabia.</p> <!-- Short description of the service -->
            </a>
        </div>

        <!-- Service Box for Useful Videos -->
        <div class="service-box">
            <a href="video.php"> <!-- Link to the Useful Videos page -->
                <h2 class="service-title">Useful Videos</h2> <!-- Title for the Useful Videos service -->
                <p class="service-subtitle">Watch and learn</p> <!-- Subtitle to explain the service -->
                <p class="service-description">Watch informative and beneficial videos.</p> <!-- Short description of the service -->
            </a>
        </div>
    </section>

    <!-- Footer Section: Contains contact information and copyright notice -->
    <?php include "../includes/footer.php"; ?>
</body>
</html>


