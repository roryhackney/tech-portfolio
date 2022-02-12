"use strict";
window.addEventListener("DOMContentLoaded", function(event) {
    //Persistent dark mode styles
    if(localStorage.getItem("storedDarkMode")) {
        if(localStorage.getItem("storedDarkMode") == "dark") {
            let html = document.getElementsByTagName("html")[0];
            html.classList.add("dark-mode");
        }
    }
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
    //Nav dark mode toggle
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
        let html = document.getElementsByTagName("html")[0];
        if(html.classList.contains("dark-mode")) {
            localStorage.setItem("storedDarkMode", "light");
            html.classList.remove("dark-mode");
            darkModeToggle.innerHTML = "Dark Mode";
        } else {
            localStorage.setItem("storedDarkMode", "dark");
            html.classList.add("dark-mode");
            darkModeToggle.innerHTML = "Light Mode";
        }
    }
});