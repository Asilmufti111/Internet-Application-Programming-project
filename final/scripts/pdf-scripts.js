// ../global/pdf-scripts.js
function updatePDF() {
    const select = document.getElementById("pdfSelect");
    const pdfViewer = document.getElementById("pdfViewer");

    const file = select.value;

    if (file) {
       
        pdfViewer.innerHTML = `
    <iframe src="${file}" width="80%" height="600px" style="border: none;"></iframe>
`;

    } else {
        pdfViewer.innerHTML = "";
    }
}