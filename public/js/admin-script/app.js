/*===== SHOW NAVBAR  =====*/
const showNavbar = (toggleId, navId, bodyId, headerId) => {
    const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId);

    // Validate that all variables exist
    if (toggle && nav && bodypd && headerpd) {
        toggle.addEventListener("click", () => {
            // show navbar
            nav.classList.toggle("showed");
            // change icon
            toggle.classList.toggle("i-sort");
            // add padding to body
            bodypd.classList.toggle("body-pd");
            // add padding to header
            headerpd.classList.toggle("body-pd");
        });
    }
};

showNavbar("header-toggle", "nav-bar", "body-pd", "header");

/*===== LINK ACTIVE  =====*/
const linkColor = document.querySelectorAll(".nav__link");

function colorLink() {
    if (linkColor) {
        linkColor.forEach((l) => l.classList.remove("active"));
        this.classList.add("active");
    }
}
linkColor.forEach((l) => l.addEventListener("click", colorLink));

const acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
    if (i === 0) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("actived");
            let icons1 = document.getElementById("arrows1");
            icons1.classList.toggle("down");
            let panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    } else if (i === 1) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("actived");
            let icons2 = document.getElementById("arrows2");
            icons2.classList.toggle("down");
            let panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
}

// Deactive account verification
$("#deactive").click(function () {
    if ($("#deactive:checked").length == 1) {
        $("#deactivated").removeAttr("disabled");
    } else {
        $("#deactivated").attr("disabled", "disabled");
    }
});
// ----------------------------

// password hide and unhide
const tooglePassword = document.querySelector("#tooglePassword");
const password = document.querySelector("#current-password");

const tooglePasswordNew = document.querySelector("#tooglePassword-new");
const passwordNew = document.querySelector("#new-password");

const tooglePasswordVerification = document.querySelector(
    "#tooglePasswordVerification"
);
const passwordVer = document.querySelector("#verify-password");

tooglePasswordNew.addEventListener("click", function () {
    const type =
        passwordNew.getAttribute("type") === "password" ? "text" : "password";
    passwordNew.setAttribute("type", type);
    this.classList.toggle("fa-eye-slash");
});
tooglePassword.addEventListener("click", function () {
    const type =
        password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    this.classList.toggle("fa-eye-slash");
});

tooglePasswordVerification.addEventListener("click", function () {
    const type =
        passwordVer.getAttribute("type") === "password" ? "text" : "password";
    passwordVer.setAttribute("type", type);
    this.classList.toggle("fa-eye-slash");
});

// custume date picker with flatpicker
$("#bornDate").flatpickr({
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
});

// $("[type='number']").keypress(function(evt) {
//     evt.preventDefault();
// })
// Prevent NULL input and replace text.
// $(document).on("change", 'input[type="tel"]', function (event) {
//     this.value = this.value.replace(/[^0-9]+/g, "");
//     if (this.value < 1) this.value = 0;

// });

const isNumericInput = (event) => {
    const key = event.keyCode;
    return (
        (key >= 48 && key <= 57) || // Allow number line
        (key >= 96 && key <= 105) // Allow number pad
    );
};

const isModifierKey = (event) => {
    const key = event.keyCode;
    return (
        event.shiftKey === true ||
        key === 35 ||
        key === 36 || // Allow Shift, Home, End
        key === 8 ||
        key === 9 ||
        key === 13 ||
        key === 46 || // Allow Backspace, Tab, Enter, Delete
        (key > 36 && key < 41) || // Allow left, up, right, down
        // Allow Ctrl/Command + A,C,V,X,Z
        ((event.ctrlKey === true || event.metaKey === true) &&
            (key === 65 ||
                key === 67 ||
                key === 86 ||
                key === 88 ||
                key === 90))
    );
};

const enforceFormat = (event) => {
    // Input must be of a valid number format or a modifier key, and not longer than ten digits
    if (!isNumericInput(event) && !isModifierKey(event)) {
        event.preventDefault();
    }
};

const formatToPhone = (event) => {
    if (isModifierKey(event)) {
        return;
    }

    // I am lazy and don't like to type things more than once
    const target = event.target;
    let input = event.target.value.replace(/\D/g, "").substring(0, 16); // First ten digits of input only
    let zip = input.substring(0, 3);
    let middle = input.substring(3, 7);
    const last = input.substring(7, 14);
    if (zip == "0" || zip == "62" || zip == "+62") {
        input = event.target.value.replace(/\D/g, "").substring(16);
        zip = "+62";
        target.value = `${zip}${middle} ${last}`;
        inputElement.setAttribute("maxlength", "16");
    } else {
        input = event.target.value.replace(/\D/g, "").substring(14);
    }
};

const inputElement = document.getElementById("phone");
inputElement.addEventListener("keydown", enforceFormat);
inputElement.addEventListener("keyup", formatToPhone);

// Block non-numeric chars.
// $(document).on("keypress", 'input[type="tel"]', function (event) {
//     return (event.which > 47 && event.which < 58) || event.which == 13;
// });

// $( ".i-arrow" ).click(function() {
//     $(this).toggleClass("rotate");
//   });
// //
//     $(".accordion").click(function() {
//         $(".rotate").toggleClass("down");
//     })
