<!-- Names: Asil Mufti, Hayat Alzahrani, Shrooq Kaabi
     IDs: 2106122, 2105101, 2205003
     Section: IAR
     Date: 20-05-2025
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational PDFs - Al-Noor Islamic Center</title>
    <link rel="stylesheet" href="../global/main.css">
    <link rel="stylesheet" href="../global/pdf-styles.css">
</head>
<body>


    <?php include "../includes/header.php"; ?>
    <?php include "../includes/links.php"; ?>

    <section class="pdf-container">
        <h2>Educational Resources (PDF)</h2>
        <p style="text-align: center; color: #555; margin-bottom: 20px;">Select a PDF to view it directly below.</p>

        <!-- Dropdown for selecting PDF -->
        <div style="text-align: center;">
            <select class="pdf-select" id="pdfSelect" onchange="updatePDF()">
                <option value="">-- Select a PDF --</option>
                <option value="../PDF/New_Muslim_Ramadan_Guide.pdf">New Muslim Ramadan Guide</option>
                <option value="../PDF/Prayer-Guide.pdf">Prayer Guide</option>
                <option value="../PDF/The-Complete-Hadith.pdf">The Complete Hadith</option>
            </select>
        </div>

        <!-- PDF Display Area -->
        <div id="pdfViewer" class="pdf-frame" style="margin-top: 30px; text-align: center;"></div>
    </section>

    <?php include "../includes/footer.php"; ?>

    
       
     <script src="../scripts/pdf-scripts.js"></script>

</body>
</html>