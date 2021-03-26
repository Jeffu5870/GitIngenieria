src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"
function validar() {
    var buscar;
    buscar = document.getElementById("buscar").value;

if(/^([0-9])*$/.test(buscar)){
    if (buscar.length < 5) {
        alert("Debe de contener mínimo 5 digitos");
        return false;
    }
    return true;
}else{
    if (buscar.length < 4) {
        alert("La descripción debe de contener como mínimo 4 caracteres");
        return false;
    }
    return true;
}

}
