<?php
// Define page title
$page_title = "Contact Us - Al-Noor";

// Include header and links
require_once '../includes/header.php';
require_once '../includes/links.php';
?>

<!-- Main Content Section -->
<div id="content">
    <div id="contact-form">
        <form action="../api/process_contact.php" method="post">
            <fieldset>
                <legend>Your Info</legend>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </fieldset>
            <fieldset>
                <legend>Message</legend>
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </fieldset>
            <button type="submit" class="btn">Send</button>
        </form>
    </div>
</div>

<?php
require_once '../includes/footer.php';
?>
