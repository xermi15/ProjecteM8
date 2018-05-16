var idGrup;
var stringIdUsuarisGrup = '';

$(document).ready(function () {
    $("#password").keyup(function (event) {
        $('#idGrupEliminar').remove();

        $('#stringIdUsuarisGrup').remove();

        input = jQuery('<input type="hidden" id="idGrupEliminar" name="idGrupEliminar" value="' + idGrup + '">');
        $(event.target).parent().append(input);

        //console.log($(event.target).parent());

        stringIdUsuarisGrup = stringIdUsuarisGrup.substring(0, stringIdUsuarisGrup.length - 1);

        input_idStringUsuaris = jQuery('<input type="hidden" id="stringIdUsuarisGrup" name="stringIdUsuarisGrup" value="' + stringIdUsuarisGrup + '">');
        $(event.target).append(input_idStringUsuaris);
    });
    
    $("#modal_modificar").click(function (event) {
        $('#idGrupEliminar').remove();

        $('#stringIdUsuarisGrup').remove();

        input = jQuery('<input type="hidden" id="idGrupEliminar" name="idGrupEliminar" value="' + idGrup + '">');
        $(event.target).parent().append(input);

        console.log('ola');

    });
    
});

function guardaidGrup_idUsuarisGrup(t) {

    stringIdUsuarisGrup = '';

    var id = $(t).parent().parent().children('#nombreGrupo').children('#idGrup').val();
    idGrup = id;

    $(t).parent().parent().children('#nombreMiembros').children('#idGrup').each(function () {
        var idUsuari = $(this).val();
        stringIdUsuarisGrup = stringIdUsuarisGrup + idUsuari + ',';
    });

}

function getNomGrup(t) {

    var nomGrup = $(t).parent().parent().children('#nombreGrupo').children('#nomGrup').val();
    $('#nom_Grup_Modificar').val(nomGrup);
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
    var stringIdUsuarisGrup = '';

    $('#stringUsuarisGrup').remove();

    $(t).parent().next().children('label').each(function () {
        if ($(this).children('input').is(':checked')) {
            $(this).next('br').remove();
            $(this).remove('input');
            $(this).remove();
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