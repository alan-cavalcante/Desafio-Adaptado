export function abrirHamburger() {
    let x = document.getElementById("linksNav")
    if(x.style.display === "flex") {
        x.style.display === "none";
    } else {
        x.style.display === "flex";
    }
}