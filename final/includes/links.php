<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div id="nav">
    <ul>
        <li><a href="../index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
        <li><a href="../pages/about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a></li>

        <li class="dropdown">
            <a href="../pages/services.php" class="<?= $current_page == 'services.php' ? 'active' : '' ?>">Services</a>
            <ul class="dropdown-content">
                <li><a href="../pages/quran_tafsir.php">Quran & Tafsir</a></li>
                <li><a href="../pages/schedule.php">Prayer Schedule</a></li>
                <li><a href="../pages/quizzes.php">Quizzes</a></li>
                <li><a href="../pages/donations.php">Donations</a></li>
                <li><a href="../pages/videos.php">Useful Videos</a></li>
                <li><a href="../pages/pdfs.php">Educational Resources</a></li>
            </ul>
        </li>
        <li><a href="../pages/feedback.php" class="<?= $current_page == 'feedback.php' ? 'active' : '' ?>">Feedback</a></li>
    </ul>
</div>