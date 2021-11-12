let formInputs = document.querySelectorAll(".contact-details [name]");

if (formInputs[0] == "") {
    throw("Please insert first name");
}