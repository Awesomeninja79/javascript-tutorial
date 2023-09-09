
// get all the anchor tags

const anchors = document.querySelectorAll("#headNav .nav-link");
const activeClass = "active";
const spacingVal = 72;   // Spacing from top

anchors.forEach(clickedElm => {
    clickedElm.addEventListener("click", () => {
        anchors.forEach(allElm => {
            allElm.classList.remove(activeClass);
        });
        clickedElm.classList.add(activeClass);
        const section = document.querySelector(clickedElm.getAttribute("scrollto"));
        const sectionFromTop = section.getBoundingClientRect().top;
        const pageScrollY = sectionFromTop - spacingVal;
        window.scrollBy(0, pageScrollY);  // X axis is set to 0  & Y axis is set to how much scroll do you want
    });
});