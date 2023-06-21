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

// fetch data from txt
document.addEventListener("DOMContentLoaded", function() {
    fetchContent();
});

function fetchContent() {
    fetch("data/data.txt")
        .then(response => response.text())
        .then(data => {
            const sections = data.split("---");

            const section1Content = sections[0].trim();
            const section2Content = sections[1].trim();
            const section3Content = sections[2].trim();

            document.getElementById("section1-content").textContent = section1Content;
            document.getElementById("section2-content").textContent = section2Content;
            document.getElementById("section3-content").textContent = section3Content;
        })
        .catch(error => {
            console.error("Error fetching content:", error);
        });
}
