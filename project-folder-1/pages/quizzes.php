<!-- Names: Asil Mufti , Hayat Alzahrani , shrooq Kaabi
 IDs: 2106122 , 2105101 , 2205003
 Section: IAR
 Date: 22- 3- 2025
-->
 <?php
$page_title = "Islamic Quizzes";
$page_description = "Test your knowledge of Islam";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Information -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic Quizzes - Al-Noor</title>
    <link rel="stylesheet" href="../global/main.css">
</head>

<body>

    <!-- Header -->
   <?php include "../includes/header.php"; ?>
    <!-- Navigation -->
  <?php include "../includes/links.php"; ?>

    <!-- Quiz Section -->
    <div id="container">
        <div style="text-align: center; margin: 20px;">
            <!-- in xampp press ctrl+shift+R to refresh correctly -->
            <label for="quizEmail"><strong>Enter your email to start the quiz:</strong></label><br>
            <input type="email" id="quizEmail" placeholder="example@example.com" required>
            <br><br>
            <button class="btn" onclick="startQuiz()">Start Quiz</button>
        </div>
        <p id="previous-score" style="text-align:center; font-weight:bold;"></p>


        <div id="quizContent" style="display: none;">
            <section class="quiz-section">
                <h2 class="quiz-title">Islamic Knowledge Quiz</h2>
                <p>Choose the correct answer for each question and test your understanding.</p>

                <!-- Quiz Questions -->
                <div class="quiz">
                    <h3>1. How many chapters (Surahs) are in the Quran?</h3>
                    <button class="option btn" onclick="checkAnswer(this, 'correct')">114</button>
                    <button class="option btn" onclick="checkAnswer(this, 'wrong')">99</button>
                    <button class="option btn" onclick="checkAnswer(this, 'wrong')">110</button>
                    <button class="option btn" onclick="checkAnswer(this, 'wrong')">120</button>
                </div>

                <div class="quiz">
                    <h3>2. What is the first word revealed in the Quran?</h3>
                    <button class="option btn" onclick="checkAnswer(this, 'correct')">Iqra (Read)</button>
                    <button class="option btn" onclick="checkAnswer(this, 'wrong')">Salah (Pray)</button>
                    <button class="option btn" onclick="checkAnswer(this, 'wrong')">Tawheed (Oneness)</button>
                    <button class="option btn" onclick="checkAnswer(this, 'wrong')">Noor (Light)</button>
                </div>

                <div class="quiz">
                    <h3>3. What is the name of the Angel who brought revelation to Prophet Muhammad (PBUH)?</h3>
                    <button class="option btn" onclick="checkAnswer(this, 'correct')">Jibreel (Gabriel)</button>
                    <button class="option btn" onclick="checkAnswer(this, 'wrong')">Mikail (Michael)</button>
                    <button class="option btn" onclick="checkAnswer(this, 'wrong')">Israfeel</button>
                    <button class="option btn" onclick="checkAnswer(this, 'wrong')">Izra'il</button>
                </div>

                <p id="quiz-result"></p>
                <button class="btn" onclick="submitResult()">Submit My Score</button>
            </section>
        </div>
    </div>

    <!-- Footer -->
     <?php include "../includes/footer.php"; ?>
    <!-- Scripts at the end of body -->
    <script src="../scripts/quiz_logic.js"></script>
    <script src="../scripts/submit_score.js"></script>

</body>
</html>


