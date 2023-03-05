function mostrar(){
    lista.style.display = "flex"
}
var lista = document.getElementById("lista")
var boton = document.getElementById("botonMostrar")

boton.addEventListener("click", mostrar)