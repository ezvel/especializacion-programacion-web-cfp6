const button = document.querySelector('button');
const body = document.querySelector("body");
const icon = document.querySelector("svg");
const title = document.getElementById("title");

const cambiaTemaBody = () => {
    body.classList.toggle('dark');
}

const cambiaTemaIcono = () => {
    icon.classList.toggle('svg-dark-mode');
}

const cambiaTextoSegunTema = () => {
    if (body.classList.contains("dark")) {
        title.textContent = "Tema oscuro";
    }else {
        title.textContent = "Tema claro";
    }
}

button.addEventListener("click", cambiaTemaBody);
button.addEventListener("click", cambiaTemaIcono);
button.addEventListener("click", cambiaTextoSegunTema);