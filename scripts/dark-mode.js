"use strict";
window.addEventListener("DOMContentLoaded", function(event) {
    let theme = "light";
    const browserTheme = window.matchMedia && window.matchMedia("prefers-color-scheme: dark").matches ? "dark" : "light";

    //get site preferred theme from local storage if set to a valid value
    const check = localStorage.getItem("theme");
    if (check == "dark" || check == "light") {
        theme = check;
    } else {
        //otherwise, get browser preferred theme
        theme = browserTheme;
    }
    localStorage.setItem("theme", theme);

    const toggle = document.getElementById("dark-mode-checkbox");
    if (theme == "dark") {
        toggle.checked = true;
        document.body.classList.add("dark-mode");
    } else {
        toggle.checked = false;
        document.body.classList.remove("dark-mode");
    }

    toggle.addEventListener("change", (event) => {
        if (event.target.checked) {
            localStorage.setItem("theme", "dark");
            document.body.classList.add("dark-mode");
        } else {
            localStorage.setItem("theme", "light");
            document.body.classList.remove("dark-mode");
        }
    })
});