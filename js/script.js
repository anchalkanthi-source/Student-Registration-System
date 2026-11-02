
$(document).ready(function () {

    $("#registrationForm").submit(function (event) {

        let name = $("#fullname").val().trim();
        let phone = $("#phone").val().trim();

        // Name validation
        if (!/^[a-zA-Z ]+$/.test(name)) {
            alert("Please enter a valid name.");
            event.preventDefault();
            return;
        }

        // Phone number validation
        if (!/^[0-9]{10}$/.test(phone)) {
            alert("Please enter a valid 10-digit phone number.");
            event.preventDefault();
            return;
        }

        // Confirmation
        let confirmSubmit = confirm(
            "Are you sure you want to submit the registration?"
        );

        if (!confirmSubmit) {
            event.preventDefault();
        }

    });

});
