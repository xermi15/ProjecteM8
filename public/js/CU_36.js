var idGrup;
var nomGrup;

//docuemnte ready 
//si inpout grupo value es diferente de "Buscar usuari"
//coger valor de input y busca



//modificar y eliminar grupo
function id_NomGrup(id, nom) {
    idGrup = id;
    nomGrup = nom;
    alert(idGrup + ' y ' + nomGrup);
}

function nouGrup() {

    //var stringUsuaris = stringUsuarisGrup.replace(/ /g, '');
    //var url = "/newGrup/" + stringUsuaris;
    //document.getElementById("formNewUser").setAttribute('action', url);
    //var stringUsuarisGrup = stringUsuaris.replace("usuari", "");

    //var usuarisGrup = jQuery('<input id="stringUsuarisGrup" type="text" value="' + stringUsuarisGrup + '" hidden>');
    //$('#grup_body').append(usuarisGrup);
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


function afegirUsuari(t) {
    var idLabel;
    var valLabel;
    var idLabel2;
    var arrayUsuarisGrup = [];
    var stringIdUsuarisGrup = '';

    //si existe input hidden ID stringIdUsuarisGrup la ELIMINA
    $('#stringUsuarisGrup').remove();

    //RECORRE COLUMNA USUARIS GRUP (recull id)
    $(t).parent().next().children('label').each(function () {
        idLabel = this.id;
        arrayUsuarisGrup.push(idLabel);
    });

    //RECORRE COLUMNA USUARIS
    $(t).parent().prev().children('label').each(function () {
        if ($(this).children('input').is(':checked')) {
            idLabel = this.id;
            valLabel = this.innerText;
            idLabel = idLabel.replace('id', '');

            //SI NO HAY USUARIO SEN LA COLUMNA DE USUARIOS GRUPO LOS AÑADE
            if (arrayUsuarisGrup.length === 0) {
                input = jQuery('<label id="' + idLabel + '"><input type="checkbox" id="' + idLabel + '" style="cursor:default;" name="usuari" value="' + valLabel + '">' + valLabel + '</label><br>');
                $(t).parent().next().append(input);

            } else {
                //COMPRUEBA SI ESTA EN LA COLUMNA DE USUARIOS GRUPO
                for (var i in arrayUsuarisGrup) {
                    idLabel2 = arrayUsuarisGrup[i];
                    if (idLabel === idLabel2) {
                        return false;
                    }
                    var s = parseInt(i) + 1;
                    if ((idLabel !== idLabel2) && (arrayUsuarisGrup.length === s)) {
                        input = jQuery('<label id="' + idLabel + '"><input type="checkbox" id="' + idLabel + '" style="cursor:default;" name="usuari" value="' + valLabel + '">' + valLabel + '</label><br>');
                        $(t).parent().next().append(input);
                    }
                }
            }
        }
    });

    $(t).parent().next().children('label').each(function () {
        idLabel = this.id;
        idUsuari = idLabel.replace('usuari', '');
        stringIdUsuarisGrup = stringIdUsuarisGrup + idUsuari + ',';

    });

    //quita coma final
    stringIdUsuarisGrup = stringIdUsuarisGrup.substring(0, stringIdUsuarisGrup.length - 1);

    input_idStringUsuaris = jQuery('<input type="hidden" id="stringUsuarisGrup" name="stringUsuarisGrup" value="' + stringIdUsuarisGrup + '">');
    $(t).parent().next().append(input_idStringUsuaris);
}

function eliminarUsuari(t) {
    $(t).parent().next().children('label').each(function () {
        if ($(this).children('input').is(':checked')) {
            $(this).next('br').remove();
            $(this).remove('input');
            $(this).remove();
        }
    });
}