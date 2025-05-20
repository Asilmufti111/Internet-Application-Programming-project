
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

    <!-- Header Section -->
     <header id="header">
        <h1>Welcome to Al-Noor</h1> <!-- Main heading -->
        <p>Your source for authentic Islamic education</p> <!-- Short description -->
    </header>

    <!-- Navigation Menu -->
    <div id="nav">
        <ul>
            <li><a href="index.html">Home</a></li> <!-- Link to Home Page -->
            <li><a href="pages/about.html">About</a></li> <!-- Link to About Page -->
            <li><a href="pages/services.html">Services</a></li> <!-- Link to Services Page -->
            <li><a href="pages/feedback.html">Feedback</a></li> <!-- Link to Feedback Page -->
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
        <a href="../pages/contact.php" class="footer-link">Contact Us</a>
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