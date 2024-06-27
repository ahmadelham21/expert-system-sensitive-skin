import "./bootstrap";

import "bootstrap";
import "../../public/dist/js/app.js";

document.addEventListener("DOMContentLoaded", function () {
    var closeButton = document.getElementById("alert-close");
    var alertMessage = document.getElementById("alert-message");
    setTimeout(function () {
        alertMessage.style.display = "none"; // Sembunyikan pesan
    }, 4000);

    closeButton.addEventListener("click", function () {
        alertMessage.style.display = "none";
    });
});

document
    .getElementById("delete-button")
    .addEventListener("click", function (event) {
        // Show the modal
        document.getElementById("show-modal").click();
    });

document
    .getElementById("confirm-delete")
    .addEventListener("click", function () {
        // Submit the form
        document.getElementById("delete-form").submit();
    });

// Initialize Feather icons
feather.replace();

function confirmDelete(ruleId) {
    if (confirm("Are you sure you want to delete this record?")) {
        // Submit the form
        document.getElementById("delete-form-" + ruleId).submit();
    } else {
        // Do nothing or handle the cancel action
    }
}
