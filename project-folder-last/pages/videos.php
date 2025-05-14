<?php
// Define page title
$page_title = "Islamic Videos - Al-Noor";

// Include header and links
require_once '../includes/header.php';
require_once '../includes/links.php';
?>

<!-- Main Content Section -->
<main>
    <section class="content">
        <h2>Featured Islamic Videos</h2>

        <div class="video-container">
            <iframe width="560" height="315" 
                src="https://www.youtube.com/embed/UitSEoGBvls" 
                title="Quran Recitation by Saud Al-Shuraim" 
                frameborder="0" 
                allowfullscreen>
            </iframe>
            <p>Beautiful recitation of Surah Al-Baqarah by Saud Al-Shuraim.</p>
        </div>

        <div class="video-container">
            <iframe width="560" height="315" 
                src="https://www.youtube.com/embed/Cdu6H8wDorY" 
                title="Hadith Explanation - Islamic Lessons" 
                frameborder="0" 
                allowfullscreen>
            </iframe>
            <p>Explanation of a key Hadith by a scholar.</p>
        </div>

        <div class="video-container">
            <iframe width="560" height="315" 
                src="https://www.youtube.com/embed/u3DBN0cxIo8" 
                title="The History of the Entire Islamic Civilization in 49 Minutes" 
                frameborder="0" 
                allowfullscreen>
            </iframe>
            <p>Overview of Islamic contributions to history from Islam Channel.</p>
        </div>
    </section>
</main>

<?php
require_once '../includes/footer.php';
?>
