
"use strict";
window.addEventListener("load", function(event) {
    document.getElementById("menu-toggle").addEventListener("click", menuToggle);
    let submenuToggle = document.getElementById("submenu-toggle");
    submenuToggle.addEventListener("onmouseover", submenuToggle);
    submenuToggle.addEventListener("onmouseout", submenuToggle);

    let modeButtonResume = document.getElementById("mode-toggle");
    let modeButtonResume2 = document.getElementById("mode-toggle-mobile");
    modeButtonResume.addEventListener("click", toggleDarkMode);
    modeButtonResume2.addEventListener("click", toggleDarkMode);

    let layoutButtonMobile = document.getElementById("mobile-button");
    let layoutButtonMobile2 = document.getElementById("mobile-button-mobile");
    layoutButtonMobile.addEventListener("click", function() {loadLayout("Mobile")});
    layoutButtonMobile2.addEventListener("click", function() {loadLayout("Mobile")});

    let layoutButtonTablet = document.getElementById("tablet-button");
    let layoutButtonTablet2 = document.getElementById("tablet-button-mobile");
    layoutButtonTablet.addEventListener("click", function() {loadLayout("Tablet")});
    layoutButtonTablet2.addEventListener("click", function() {loadLayout("Tablet")});

    let layoutButtonDesktop = document.getElementById("desktop-button");
    let layoutButtonDesktop2 = document.getElementById("desktop-button-mobile");
    layoutButtonDesktop.addEventListener("click", function() {loadLayout("Desktop")});
    layoutButtonDesktop2.addEventListener("click", function() {loadLayout("Desktop")});

    //TODO: if this page === resume.php....
    if(this.window.matchMedia("(min-width: 769px)").matches) {
        //TODO: add is-hidden class to the appropriate button (tablet or desktop, depending)
        //TODO: then add appropriate classes to the resume div
    }

    function menuToggle() {
        let nav = document.getElementById("nav");
        if(nav.style.display !== "block") {
            nav.style.display = "block";
        } else {
            nav.style.display = "none";
        }
    }

    function submenuToggle() {
        if(window.matchMedia("(min-width:769px)").matches) {
            let dropdown = document.getElementById("nav-dropitem-tablet");
            if(dropdown.style.display !== "block") {
                dropdown.style.display = "block";
            } else {
                dropdown.style.display = "none";
            }
        }
    }

    function toggleDarkMode() {
        let resume = document.getElementById("resume-div");
        if(resume.classList.contains("dark-mode")) {
            resume.classList.remove("dark-mode");
            modeButtonResume.innerHTML = "Dark Mode";
            modeButtonResume2.innerHTML = "Dark Mode";
        } else {
            resume.classList.add("dark-mode");
            modeButtonResume.innerHTML = "Light Mode";
            modeButtonResume2.innerHTML = "Light Mode";
        }
    }

    function loadLayout(which) {
        /*step 1: if above 769px VP, add is-hidden class to passed button and remove is-hidden from other two buttons.
        step 2: either add and remove classes from resume to style,
        OR change a span or something to load the right include or stylesheet,
        OR add and remove classes eg is-one-third or is-one-half from each section of the resume,
        OR add and remove is-hidden class from each alternate layout of resume*/
        if(window.matchMedia("(min-width:769px)").matches) {
            if(which == "Mobile") {
                layoutButtonMobile.classList.add("is-hidden");
                layoutButtonTablet.classList.remove("is-hidden");
                layoutButtonDesktop.classList.remove("is-hidden");
            } else if(which == "Tablet") {
                layoutButtonMobile.classList.remove("is-hidden");
                layoutButtonTablet.classList.add("is-hidden");
                layoutButtonDesktop.classList.remove("is-hidden");
            } else if(which == "Desktop") {
                layoutButtonMobile.classList.remove("is-hidden");
                layoutButtonTablet.classList.remove("is-hidden");
                layoutButtonDesktop.classList.add("is-hidden");
            }
        }
        if(which == "Mobile") {

        }
    }
});