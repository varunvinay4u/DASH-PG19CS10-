// menu
function showContent(sectionId) {
    const contentSections = document.getElementsByClassName("content-section");

    for (let i = 0; i < contentSections.length; i++) {
        const section = contentSections[i];

        if (section.id === sectionId) {
            section.style.display = "block";
        } else {
            section.style.display = "none";
        }
    }
}
