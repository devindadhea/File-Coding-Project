document.getElementById('downloadButton').addEventListener('click', function() {
    var pdfPath = 'https://drive.google.com/uc?export=download&id=1-W7covCIvRpDFt1yEJdpMpL4Kj2K0amR';
    var link = document.createElement('a')
    link.href = pdfPath;
    link.download = 'YourFileName.pdf';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
});