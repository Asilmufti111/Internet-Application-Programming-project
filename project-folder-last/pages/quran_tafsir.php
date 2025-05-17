<!-- Names: Asil Mufti , Hayat Alzahrani , shrooq Kaabi
 IDs: 2106122 , 2105101 , 2205003
 Section: IAR
 Date: 22- 3- 2025
-->
 <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="UTF-8"> <!-- Defines character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design -->

    <!-- Page Title -->
    <title>Quran & Tafsir - Al-Noor</title>

    <!-- Linking External CSS -->
    <link rel="stylesheet" href="../global/main.css">
</head>
<body>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <div id="header">
            <h1>Quran & Tafsir</h1>
            <p>Explore the wisdom of the Holy Quran with detailed Tafsir</p>
        </div>

        <!-- Navigation -->
        <div id="nav">
            <ul>
                <li><a href="../index.php">Home</a></li> <!-- Link to Home Page -->
                <li><a href="about.php">About</a></li> <!-- Link to About Page -->
                <li><a href="services.php">Services</a></li> <!-- Link to Services Page -->
                <li><a href="feedback.php">Feedback</a></li> <!-- Link to Feedback Page -->
            </ul>
        </div>

        <!-- Quran & Tafsir Content -->
        <div id="container">

            <!-- Quran & Tafsir Section using iFrame -->
            <section class="iframe-section">
                <h2 class="iframe-title">Read the Quran & Tafsir</h2>
                <p>Explore the Quran with detailed Tafsir below:</p>

                <!-- Embed Quran & Tafsir Page -->
                <iframe src="https://quran.com" title="Quran and Tafsir" ></iframe>
            </section>


        </div> <!-- End of Container -->

        <!-- Footer Section -->
        <?php include "../includes/footer.php"; ?>
    </div> <!-- End of Wrapper -->

</body>
</html>