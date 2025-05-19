<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div id="nav">
    <ul>
        <li><a href="../pages/index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
        <li><a href="../pages/about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a></li>

        <li class="dropdown">
            <a href="../pages/services.php" class="<?= $current_page == 'services.php' ? 'active' : '' ?>">Services</a>
            <li><a href="../pages/feedback.php" class="<?= $current_page == 'feedback.php' ? 'active' : '' ?>">Feedback</a></li>
    </ul>
</div>