function hovering(num) {
    let element = document.querySelector(".subject" + num);
    element.classList.add("hovering");
}

function hoverout(num) {

    let element = document.querySelector(".subject" + num);
    element.classList.remove("hovering");
}