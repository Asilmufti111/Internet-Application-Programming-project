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
    <title>PDF Files - Al-Noor Islamic Center</title>
    <link rel="stylesheet" href="../global/main.css">
    <link rel="stylesheet" href="../global/pdf-styles.css">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
</head>
<body>
    <?php 
    $page_title = "PDF Files";
    $page_description = "Access and view a collection of Islamic PDF resources directly on this page.";
    include "../includes/header.php";
    ?>

    <?php include "../includes/links.php"; ?>

    <section class="pdf-container">
        <h2 class="section-title">PDF Resources</h2>
        <p style="text-align: center; color: #555; margin-bottom: 20px;">Select a PDF to view it directly on this page.</p>

        <select class="pdf-select" id="pdfSelect" onchange="updatePDF()">
            <option value="">Select a PDF</option>
            <option value="../PDF/IbnSaad.pdf">IbnSaad</option>
            <option value="../PDF/Prayer-Guide.pdf">Guide Prayers</option>
            <option value="../PDF/The-Complete-Hadith.pdf">The-Complete-Hadith</option>
        </select>

        <div id="pdfViewer" class="pdf-frame"></div>
    </section>

    <?php include "../includes/footer.php"; ?>

    <script src="../scripts/pdf-scripts.js"></script>
</body>
</html>