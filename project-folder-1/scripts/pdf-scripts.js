// ../global/pdf-scripts.js
function updatePDF() {
    const select = document.getElementById("pdfSelect");
    const pdfViewer = document.getElementById("pdfViewer");

    const file = select.value;

    if (file) {
        pdfViewer.innerHTML = `
            <iframe src="${file}" sandbox="allow-same-origin"></iframe>
        `;
    } else {
        pdfViewer.innerHTML = "";
    }
}