src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"
function validar() {
    var buscar;
    buscar = document.getElementById("buscar").value;

if(/^([0-9])*$/.test(buscar)){
    if (buscar.length < 5) {
        swal("Debe de contener mínimo 5 digitos",'','error');
        return false;
    }
    return true;
}else{
    if (buscar.length < 4) {
        swal("La descripción debe de contener como mínimo 4 caracteres",'','error');
        return false;
    }
    return true;
}

}
