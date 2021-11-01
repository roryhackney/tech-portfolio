
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

    //Dark/Light mode toggle on Resume page
    let modeButtonResume = document.getElementById("mode-toggle");
    if(modeButtonResume) {
        modeButtonResume.addEventListener("click", toggleDarkMode);
    }
    let modeButtonResume2 = document.getElementById("mode-toggle-mobile");
    if(modeButtonResume2) {
        modeButtonResume2.addEventListener("click", toggleDarkMode);
    }

    //Responsive mobile/tablet/desktop buttons on resume page (affect resume div only)
    let layoutButtonMobile = document.getElementById("mobile-button");
    if(layoutButtonMobile) {
        layoutButtonMobile.addEventListener("click", function() {loadLayout("Mobile")});
    }
    let layoutButtonMobile2 = document.getElementById("mobile-button-mobile");
    if(layoutButtonMobile2) {
        layoutButtonMobile2.addEventListener("click", function() {loadLayout("Mobile")});
    }

    let layoutButtonTablet = document.getElementById("tablet-button");
    if(layoutButtonTablet) {
        layoutButtonTablet.addEventListener("click", function() {loadLayout("Tablet")});
    }
    let layoutButtonTablet2 = document.getElementById("tablet-button-mobile");
    if(layoutButtonTablet2) {
        layoutButtonTablet2.addEventListener("click", function() {loadLayout("Tablet")});
    }

    let layoutButtonDesktop = document.getElementById("desktop-button");
    if(layoutButtonDesktop) {
        layoutButtonDesktop.addEventListener("click", function() {loadLayout("Desktop")});
    }
    let layoutButtonDesktop2 = document.getElementById("desktop-button-mobile");
    if(layoutButtonDesktop2) {
        layoutButtonDesktop2.addEventListener("click", function() {loadLayout("Desktop")});
    }

    //If the current page is resume.php, and the viewport is at least 769px wide, hide the button for the current viewport (tablet or desktop)
    //TODO: if this page === resume.php....
    if(this.window.matchMedia("(min-width: 769px)").matches) {
        //TODO: add is-hidden class to the appropriate button (tablet or desktop, depending)
        //TODO: then add appropriate classes to the resume div
        if(this.window.matchMedia("(min-width: 1024px)").matches) {
            if(layoutButtonDesktop) {
                layoutButtonDesktop.classList.add("is-hidden");
            }
        } else {
            if(layoutButtonTablet) {
                layoutButtonTablet.classList.add("is-hidden");
            }
        }
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