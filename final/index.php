
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Information -->
    <meta charset="UTF-8"> <!-- Defines the character encoding for the webpage -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ensures responsive design on mobile devices -->

    <!-- Page Title -->
    <title>Al-Noor - Home</title>

    <!-- Linking External CSS for Styling -->
    <link rel="stylesheet" href="global/main.css"> <!-- Main CSS file for global styling -->
</head>

<body>


<div id="header">
        <img src="images/logo.png" alt="Al-Noor Logo" class="logo" style="max-height: 70px; vertical-align: middle; margin-right: 10px;" />
        <h1 style="display: inline-block; vertical-align: middle;">Al-Noor Islamic Center</h1>
    </div>


 <div id="nav">
    <ul>
        <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
        <li><a href="pages/about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a></li>

        <li class="dropdown">
            <a href="pages/services.php" class="<?= $current_page == 'services.php' ? 'active' : '' ?>">Services</a>
            <ul class="dropdown-content">
                <li><a href="pages/quran_tafsir.php">Quran & Tafsir</a></li>
                <li><a href="pages/schedule.php">Prayer Schedule</a></li>
                <li><a href="pages/quizzes.php">Quizzes</a></li>
                <li><a href="pages/donations.php">Donations</a></li>
                <li><a href="pages/videos.php">Useful Videos</a></li>
             <li><a href="pages/pdfs.php">Educational Resources</a></li>

            </ul>
        </li>
        <li><a href="pages/feedback.php" class="<?= $current_page == 'feedback.php' ? 'active' : '' ?>">Feedback</a></li>
    </ul>
</div>

    <!-- Hero Section (Main Banner) -->
    <div id="hero">
        <h2>Learn, Practice, and Grow in Faith</h2> <!-- Section heading -->
        <p>Explore Quranic teachings, Hadith, and Islamic practices.</p> <!-- Short description -->
        <a href="pages/services.php" class="btn">Get Started</a> <!-- Call-to-action button -->
    </div>
 
<!-- Feedback Slider Section -->
<div id="feedback-slider-container">
    <h3>User Feedback</h3>
    <div id="feedback-slider">
        <button id="prev-btn">&#8592;</button>
        <div id="feedback-content">
            <p>Loading feedback...</p>
        </div>
        <button id="next-btn">&#8594;</button>
    </div>
</div>
 
<!-- Footer Section -->
 <div id="footer">
    <div class="footer-left">
        <p>&copy; <?php echo date("Y"); ?> Al-Noor. All rights reserved.</p>
    </div>

    <div class="footer-center">
        <a href="pages/contact.php" class="footer-link">Contact Us</a>
    </div>

    <div class="footer-right">
        <address>
            Al-Noor Islamic Center<br>
            123 Faith Street, Jeddah, Saudi Arabia<br>
            Email: <a href="mailto:contact@alnoor.com">contact@alnoor.com</a><br>
            Phone: +123-456-7890
        </address>
    </div>
</div>



 <script src="scripts/loadFeedback.js"></script>

</body>