// js box in the first section

let input_js = document.getElementById("input_js");
let btn_js = document.getElementById("btn_js");

function CodeVerse() {
    let inputValue = input_js.value;
    let message = "Welcome " + inputValue;

    Swal.fire({
        title: message,
        customClass: {
            content: "custom-message-text-class",
        },
        background: "#252830",
        color: "white",
        confirmButtonText: "Cancel",
    });
}

btn_js.onclick = () => {
    CodeVerse();
};

(function () {
    "use strict";
    /*
     * Form Validation
     */

    // Fetch all the forms we want to apply custom validation styles to
    const forms = document.querySelectorAll(".needs-validation");
    const result = document.getElementById("result");
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener(
            "submit",
            function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();

                    form.querySelectorAll(":invalid")[0].focus();
                } else {
                    /*
                     * Form Submission using fetch()
                     */

                    const formData = new FormData(form);
                    event.preventDefault();
                    event.stopPropagation();
                    const object = {};
                    formData.forEach((value, key) => {
                        object[key] = value;
                    });
                    const json = JSON.stringify(object);
                    result.innerHTML = "Please wait...";

                    fetch("https://api.web3forms.com/submit", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            Accept: "application/json",
                        },
                        body: json,
                    })
                        .then(async (response) => {
                            let json = await response.json();
                            if (response.status == 200) {
                                result.innerHTML = json.message;
                                result.classList.remove("text-gray-500");
                                result.classList.add("text-green-500");
                            } else {
                                console.log(response);
                                result.innerHTML = json.message;
                                result.classList.remove("text-gray-500");
                                result.classList.add("text-red-500");
                            }
                        })
                        .catch((error) => {
                            console.log(error);
                            result.innerHTML = "Something went wrong!";
                        })
                        .then(function () {
                            form.reset();
                            form.classList.remove("was-validated");
                            setTimeout(() => {
                                result.style.display = "none";
                            }, 5000);
                        });
                }
                form.classList.add("was-validated");
            },
            false
        );
    });
})();

const form = document.getElementById("form");
const subject = document.getElementById("subject");
const message = document.getElementById("message");
const ErrorSubject = document.getElementById("error_subject");
const ErrorMessage = document.getElementById("error_message");

form.addEventListener("submit", function (e) {
    if (subject.value == "") {
        e.preventDefault();
        ErrorSubject.innerHTML = "Subject field is required";
    } else if (subject.value.length < 4 || subject.value.length > 18) {
        e.preventDefault();
        ErrorSubject.innerHTML = "Subject must be between 4 and 18 characters";
    } else if (!/^[a-zA-Z0-9\s]+$/.test(subject.value)) {
        e.preventDefault();
        ErrorSubject.innerHTML =
            "Subject can only contain letters, numbers, and white spaces";
    } else {
        ErrorSubject.innerHTML = "";
    }

    if (message.value == "") {
        e.preventDefault();
        ErrorMessage.innerHTML = "Subject field is required";
    } else if (message.value.length < 10 || subject.value.length > 200) {
        e.preventDefault();
        ErrorMessage.innerHTML = "Subject must be between 4 and 18 characters";
    } else if (!/^[a-zA-Z0-9\s]+$/.test(message.value)) {
        e.preventDefault();
        ErrorMessage.innerHTML =
            "Subject can only contain letters, numbers, and white spaces";
    } else {
        ErrorMessage.innerHTML = "";
    }
});
