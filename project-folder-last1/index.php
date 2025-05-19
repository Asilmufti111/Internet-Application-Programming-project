<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Information -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Noor - Home</title>
    <link rel="stylesheet" href="global/main.css">
</head>

<body>

    <!-- Header -->
    <div id="header">
        <h1>Welcome to Al-Noor</h1>
        <p>Your source for authentic Islamic education</p>
    </div>

    <!-- Navigation -->
  <div id="nav">
    <ul>
        <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
        <li><a href="pages/about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a></li>
        <li><a href="pages/services.php" class="<?= $current_page == 'services.php' ? 'active' : '' ?>">Services</a></li>
        <li><a href="pages/feedback.php" class="<?= $current_page == 'feedback.php' ? 'active' : '' ?>">Feedback</a></li>
    </ul>
</div>

    <!-- Hero Section -->
    <div id="hero">
        <h2>Learn, Practice, and Grow in Faith</h2>
        <p>Explore Quranic teachings, Hadith, and Islamic practices.</p>
        <a href="pages/services.php" class="btn">Get Started</a>
    </div>

    <!-- About Preview -->
    <div id="content">
        <h3>About Al-Noor</h3>
        <p>Al-Noor is a platform designed to help you learn more about Islam, deepen your faith, and stay connected
            with the teachings of the Quran and Sunnah.</p>
    </div>

    <!-- Footer -->
    <div id="footer">
        <p>&copy; 2025 Al-Noor. All rights reserved.</p>
    </div>

</body>
</html>
