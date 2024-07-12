"use strict";

document.addEventListener("DOMContentLoaded", (event) => {
    console.log("DOM fully loaded and parsed");
    console.log("Attatching listner to form!");
    const formEL = document.getElementById("form");
    formEL.addEventListener("submit", form_handler);
    formEL.addEventListener("beforeunload", (e) => {
        console.log("Unloading listner!");
        formEL.removeEventListener("beforeunload", form_handler);
    });
});

/**
 * Handles teh form data and computes the appropriate redirect.
 * @param {SubmitEvent} submitEvt The submit event
 */
function form_handler(submitEvt) {
    console.log(JSON.stringify(submitEvt.submitter));
}