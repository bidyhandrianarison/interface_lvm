document.addEventListener('DOMContentLoaded', function() {
    fetch('assets/php/get_disk.php')
        .then(response => response.json())
        .then(data => {
            const diskList = document.getElementById('diskList');
            data.blockdevices.forEach(device => {
                const listItem = document.createElement('li');
                listItem.textContent = `${device.name} - ${device.size}`;
                diskList.appendChild(listItem);

                if (device.children) {
                    const subList = document.createElement('ul');
                    device.children.forEach(child => {
                        const subListItem = document.createElement('li');
                        subListItem.textContent = `${child.name} - ${child.size} - ${child.mountpoint || 'non monté'}`;
                        subList.appendChild(subListItem);
                    });
                    diskList.appendChild(subList);
                }
            });
        });
});

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
