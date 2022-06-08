/*=============== LINK ACTIVE ===============*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    linkColor.forEach(l => l.classList.remove('active-link'))
    this.classList.add('active-link')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))

function openNav() {
    document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
    document.getElementById("main").style.marginLeft = "0";
}
/*=============== SHOW HIDDEN MENU ===============*/
const showMenu = (toggleId, navbarId) =>{
    const toggle = document.getElementById(toggleId),
        navbar = document.getElementById(navbarId);
    var screen = window.matchMedia("(max-width: 700)");

    if(toggle && navbar) {
        toggle.addEventListener('click', () => {
            /* Show menu */
            navbar.classList.toggle('show-menu')
            /* Rotate toggle icon */
            let icon = toggle.classList.toggle('rotate-icon')
            if (icon || screen.matches) {
                document.getElementById("main").style.marginLeft = "9rem";
            } else {
                document.getElementById("main").style.marginLeft = "20rem";
            }

        });
    }
}
showMenu('nav-toggle','nav')
