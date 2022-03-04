function toggle() {
    var container = document.getElementById("header");
    var nav = document.getElementById("nav");
    if(container.style.height !== "550px") {
    container.style.height = "550px";
    nav.style.display = "block";
    } else {
        container.style.height = "250px";
        nav.style.display = "none";
    }
}