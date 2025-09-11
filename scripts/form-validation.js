"use strict";
window.addEventListener("DOMContentLoaded", function(event) {
    //if the user deletes the name value, or navigates out of the field without typing anything, show error
    const nameInput = document.getElementById("name");
    addListeners(nameInput);

    //same for message
    const messageInput = document.getElementById("message");
    addListeners(messageInput);

    //validate email - _@_._
    const emailInput = document.getElementById("email");
    emailInput.addEventListener("input", (ev) => {
        const error = document.getElementById(ev.target.name + "-error");
        validateEmail(emailInput, this.document.getElementById("email-error"));
    });
    emailInput.addEventListener("focusout", (ev) => {
        const error = document.getElementById(ev.target.name + "-error");
        validateEmail(emailInput, this.document.getElementById("email-error"));
    });

    //validate before submitting to handler
    const form = document.getElementById("contact-form");
    form.addEventListener("submit", (ev) => {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (nameInput.value.trim() === "" ||
            messageInput.value.trim() === "" ||
            ! regex.test(emailInput.value)) {
                ev.preventDefault();
        }
    });
        
});

function validateEmail(email, emailErr) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email.value.trim() === "") {
        email.value = "";
        emailErr.innerText = "Email is required";
        emailErr.style.display = "block";
    } else if (! email.checkValidity() || ! regex.test(email.value)) {
            emailErr.innerText = "Email is formatted incorrectly";
            emailErr.style.display = "block";
    } else {
        emailErr.style.display = "none";
    }
}

// if the input is blank, shows error, otherwise hides error, doesn't allow typing only spaces
function requireValue(input, error) {
    if (input.value.trim() === "") {
        input.value = "";
        error.style.display = "block";
    } else {
        error.style.display = "none";
    }
}

//adds both listeners for input and focusout handled by requireValue
function addListeners(input) {
    input.addEventListener("input", (ev) => {
        const error = document.getElementById(ev.target.name + "-error");
        requireValue(ev.target, error);
    });
    //if the user navigates out of the field without typing anything, show error
    input.addEventListener("focusout", (ev) => {
        const error = document.getElementById(ev.target.name + "-error");
        requireValue(ev.target, error);
    });
}