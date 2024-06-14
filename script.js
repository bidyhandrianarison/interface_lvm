
function showSection(sectionId) {
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        section.style.display = 'none';
    });
    document.getElementById(sectionId).style.display = 'block';

    const subsections = document.querySelectorAll('.subsection');
    subsections.forEach(subsection => {
        subsection.style.display = 'none';
    });
}

function showSubSection(subSectionId) {
    const subsections = document.querySelectorAll('.subsection');
    subsections.forEach(subsection => {
        subsection.style.display = 'none';
    });
    document.getElementById(subSectionId).style.display = 'block';
}
