// password hide and unhide
const tooglePassword = document.querySelector("#tooglePassword");
const password = document.querySelector("#password");

tooglePassword.addEventListener("click", function () {
    const type =
        password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    this.classList.toggle("i-eye");
});

// ----------------------------
