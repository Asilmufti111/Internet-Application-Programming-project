// ../global/pdf-scripts.js
async function updatePDF() {
    var pdfSelect = document.getElementById("pdfSelect");
    var pdfViewer = document.getElementById("pdfViewer");
    pdfViewer.innerHTML = ""; 
    if (!pdfSelect.value) return; 

    try {
        const pdf = await pdfjsLib.getDocument(pdfSelect.value).promise;

        for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
            const page = await pdf.getPage(pageNum);
            const viewport = page.getViewport({ scale: 1.0 });

            const canvas = document.createElement("canvas");
            const context = canvas.getContext("2d");
            canvas.height = viewport.height;
            canvas.width = viewport.width;
            pdfViewer.appendChild(canvas);

            await page.render({
                canvasContext: context,
                viewport: viewport,
            }).promise;
        }
    } catch (error) {
        console.error("Error loading PDF: ", error);
        pdfViewer.innerHTML = "<p style='color: red;'>Error loading PDF. Please try again.</p>";
    }
}