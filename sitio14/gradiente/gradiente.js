const caja1 = document.querySelector(".box1");
const caja2 = document.querySelector(".box2");
const buttonAplicarGradiente = document.querySelector(".btn-aplicar-gradiente");
const buttonResetear = document.querySelector(".btn-reset");

const aplicarGradiente = () => {
    caja1.classList.add("gradiente");
    caja2.classList.add("gradiente");
    buttonResetear.disabled = false;
}

const resetear = () => {
    caja1.classList.toggle("gradiente");
    caja2.classList.toggle("gradiente");
    buttonResetear.disabled = true;
}

buttonAplicarGradiente.addEventListener("click", aplicarGradiente);
buttonResetear.addEventListener("click", resetear);
