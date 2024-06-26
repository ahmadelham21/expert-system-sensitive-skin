import "./bootstrap";

import "bootstrap";
import "../../public/dist/js/app.js";

document.addEventListener("DOMContentLoaded", function () {
    var closeButton = document.getElementById("alert-close");
    var alertMessage = document.getElementById("alert-message");

    closeButton.addEventListener("click", function () {
        alertMessage.style.display = "none";
    });
});
