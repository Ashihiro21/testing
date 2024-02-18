// script.js
document.getElementById('downloadButton').addEventListener('click', function() {
    // Replace 'resume.pdf' with the actual path to your resume file
    var fileUrl = 'elexis_resume.pdf';
    
    var a = document.createElement('a');
    a.href = fileUrl;
    a.download = 'elexis_resume.pdf';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
  });
  