var idGrup;
var nomGrup;
var arrayUsuarisGrup = [];
var cont5 = 0;


//modificar y eliminar grupo
function idGrup(id) {
    idGrup = id;
    /*
     var nom = $('#nombreGrupo td').html();
     alert(nom);
     //$('#nombre_grupo').val(nom);
     
     
     // nomGrup = $(this).parent().parent().children(':first-child').html();
     //nom = 'oasdsdvs';
     */
}

$("button[name='deleteBtn']").click(function () {
    idGrup = this.value;
    alert('sa');
});


//crear grupo
function nouGrup(id) {
    //recorre bbdd y asigna id a nuevo grupo
    id++;
    idGrup = id;
}

//modificar grupo
function guardar() {
    //guarda datos grupo
    alert('guardar ' + idGrup);
}

//eliminar grupo (FUNCIONA)
function eliminarGrup() {
    //eliminar grupo
    window.location.replace("http://localhost/DAW2M14/public/CU_37_EliminarGrup/" + idGrup);

    $("#myModal_3").modal("hide");
}

function afegirUsuari() {

    var i = 0;
    var j;
    var s;
    var n;
    var cont = 0;
    var cont2;
    var cont3 = 0;
    var cont4 = 0;
    var firstId;
    var firstId2;
    var idLabel;
    var idLabel2;
    var idLabel3;
    var idLabel4;
    var idUsuarisGrup = [];
    var nomUsuarisGrup = [];
    var encontrado;


    if (cont5 === 0) {
        $(".columnUsuarisGrup label").each(function () {
            idLabel3 = this.id;
            if (firstId2 === idLabel3) {
                return false;
            }
            arrayUsuarisGrup.push(idLabel3);
            if (cont3 === 0) {
                firstId2 = idLabel3;
            }
            cont3++;
        });
    }
    cont5++;
    //recorrer los checkbox y si estan seleccionados anyade a un array
    $(".columnUsuaris label").each(function () {
        if (firstId === $(this).attr('id')) {
            return false;
        }
        // if this.child is cheked push, si no no
        if ($(this).children('input').is(':checked')) {
            idLabel = this;
            cont2 = 0;
            //recorre columna usuaris grup, si buscar objeto input, si su id o valor es igual al "this.id" no hacer nada// if this.child is cheked push, si no no
            for (j in arrayUsuarisGrup) {
                encontrado = 0;
                idLabel4 = this.id;
                if (idLabel.id === arrayUsuarisGrup[j]) {
                    cont2 = 1;
                } else {
                    if (cont2 !== 1) {
                        if (idLabel2 !== idLabel.id) {
                            for (s in arrayUsuarisGrup) {
                                if (arrayUsuarisGrup[s] === idLabel.id) {
                                    encontrado = 1;
                                }
                            }
                            if (encontrado !== 1) {
                                cont4 = 0;
                                for (n in arrayUsuarisGrup) {

                                    cont4++;
                                    if (idLabel.id !== arrayUsuarisGrup[n]) {
                                        if (cont4 === arrayUsuarisGrup.length) {
                                            idUsuarisGrup.push(idLabel.id);
                                            nomUsuarisGrup.push(idLabel.textContent);
                                            arrayUsuarisGrup.push(idLabel.id);


                                        }
                                    }
                                }
                            }
                        }
                        idLabel2 = idLabel.id;
                    }
                }
            }
        }
        if (cont === 0) {
            firstId = $(this).attr('id');
        }
        cont++;
    });

    //recorre array y va anyadiendo input por cada uno
    for (i = 0; i < idUsuarisGrup.length; i++) {
        input = jQuery('<label id="' + idUsuarisGrup[i] + '"><input type="checkbox" id="' + idUsuarisGrup[i] + '" style="cursor:default;" name="usuari" value="usuari">' + nomUsuarisGrup[i] + '</label><br>');
        $(".columnUsuarisGrup").append(input);
    }
}

function eliminarUsuari() {

    var j;
    var cont = 0;
    var firstId;
    var idLabel;

    //recorrer los checkbox y si estan seleccionados anyade a un array
    $(".columnUsuarisGrup label").each(function () {
        if (firstId === $(this).attr('id')) {
            return false;
        }
        // if this.child is cheked push, si no no
        if ($(this).children('input').is(':checked')) {

            //coger nombre input
            idLabel = this.id;

            //recorrer array usuaris grup, si coinciden borra arrayusuari[posicion]
            for (j in arrayUsuarisGrup) {
                if (idLabel === arrayUsuarisGrup[j]) {
                    arrayUsuarisGrup.splice(j, 1);
                }
            }
            $(this).next('br').remove();
            $(this).remove('input');
            $(this).remove();
        }
        if (cont === 0) {
            firstId = $(this).attr('id');
        }
        cont++;
    });
}