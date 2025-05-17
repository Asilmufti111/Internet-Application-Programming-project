<?php
// Default page title and description if not set
$page_title = isset($page_title) ? $page_title : 'Al-Noor Islamic Center';
$page_description = isset($page_description) ? $page_description : '';
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo htmlspecialchars($page_title); ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="../global/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body>
    <div id="header">
        <img src="../images/logo.png" alt="Al-Noor Logo" class="logo" style="max-height: 70px; vertical-align: middle; margin-right: 10px;" />
        <h1 style="display: inline-block; vertical-align: middle;"><?php echo htmlspecialchars($page_title); ?></h1>
        <?php if ($page_description): ?>
            <p style="text-align: center;"><?php echo htmlspecialchars($page_description); ?></p>
        <?php endif; ?>
    </div>
    <div id="nav">
        <ul>
            <li><a href="../pages/index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="../pages/about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a></li>
            <li class="dropdown">
                <a href="../pages/services.php" class="<?= $current_page == 'services.php' ? 'active' : '' ?>">Services</a>
                <ul class="dropdown-content">
                    <li><a href="../pages/quran_tafsir.php">Quran & Tafsir</a></li>
                    <li><a href="../pages/schedule.php">Prayer Schedule</a></li>
                    <li><a href="../pages/quizzes.php">Quizzes</a></li>
                    <li><a href="../pages/donations.php">Donations</a></li>
                    <li><a href="../pages/videos.php">Useful Videos</a></li>
                </ul>
            </li>
            <li><a href="../pages/contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
            <li><a href="../pages/feedback.php" class="<?= $current_page == 'feedback.php' ? 'active' : '' ?>">Feedback</a></li>
        </ul>
    </div>