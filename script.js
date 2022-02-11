"use strict";
window.addEventListener("load", function(event) {
    //Nav mobile menu toggle and submenu toggle
    let menuToggle = document.getElementById("menu-toggle");
    if(menuToggle) {
        menuToggle.addEventListener("click", menuToggler);
    }
    let submenuToggle = document.getElementById("submenu-toggle");
    if(submenuToggle) {
        submenuToggle.addEventListener("mouseenter", submenuToggler);
        submenuToggle.addEventListener("mouseleave", submenuToggler);
    }

    let darkModeToggle = document.getElementById("dark-mode-toggle");
    if(darkModeToggle) {
        darkModeToggle.addEventListener("click", darkModeToggler);
    } 

    function menuToggler() {
        let nav = document.getElementById("nav");
        if(nav.style.display !== "block") {
            nav.style.display = "block";
        } else {
            nav.style.display = "none";
        }
    }

    function submenuToggler() {
        if(window.matchMedia("(min-width:769px)").matches) {
            let dropdown = document.getElementById("nav-dropitem-tablet");
            if(dropdown.style.display !== "block") {
                dropdown.style.display = "block";
            } else {
                dropdown.style.display = "none";
            }
        }
    }

    function darkModeToggler() {
        let body = document.getElementsByTagName("body")[0];
        if(body.classList.contains("dark-mode")) {
            body.classList.remove("dark-mode");
            darkModeToggle.innerHTML = "Dark Mode";
        } else {
            body.classList.add("dark-mode");
            darkModeToggle.innerHTML = "Light Mode";
        }
    }
});