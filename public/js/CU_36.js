var idGrupo;

//modificar y eliminar grupo
function idGrup(id) {
    idGrupo = id;
}

//crear grupo
function nouGrup(id) {
    //recorre bbdd y asigna id a nuevo grupo
    id++;
    idGrupo = id;
}

//crear grupo
function crear() {
    //crea grupo con idGroup nuevo
    alert('crear nuevo grupo con id '+idGrupo);
}

//modificar grupo
function guardar() {
    //guarda datos grupo
    alert('guardar ' + idGrupo);
}

//eliminar grupo
function eliminar() {
    //eliminar grupo
    alert('eliminar ' + idGrupo);
}