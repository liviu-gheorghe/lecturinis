const scrollToPosition = (top) => {
    window.scroll({
        top: top,
        left: 0,
        behavior: 'smooth'
    })
}

const scrollToMainContent = () => {
    const titleParagraph = document.getElementById("arrow_down_anchor");
    let top = titleParagraph.getBoundingClientRect().top;
    window.scroll({
        top: top,
        left: 0,
        behavior: 'smooth'
    })
}