<!-- contact.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - Al-Noor</title>
  <link rel="stylesheet" href="../global/main.css">
</head>
<body>

  <!-- Include Header -->
  <?php include "../includes/header.php"; ?>

  <!-- Include Navigation -->
<
<?php include "../includes/links.php"; ?>

  <!-- Contact Form Content -->
  <div id="content">
    <div id="contact-form">
      <form action="../server/process_contact.php" method="post">
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

  <!-- Include Footer -->
   <footer>
   <?php include "../includes/footer.php"; ?>
</footer>
</body>
</html>
