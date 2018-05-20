
function eliminaGrup(t) {

    var id = $(t).parent().parent().children('#nombreGrupo').children('#idGrup').val();
    idGrup = id;

    $('#idGrupEliminar').remove();

    var nomGrup = $(t).parent().parent().children('#nombreGrupo').children('#nomGrup').val();
    $('#nom_Grup_Modificar').val(nomGrup);

    var idModal = $(t).attr("data-target");

    $('#nombre_grupo').text('"' + nomGrup + '"');

    var modal_body_eliminarGrup = $(idModal).children([0]).children([0]).children([0]).children([0]);

    input_grupEliminar = jQuery('<input type="hidden" id="idGrupEliminar" name="idGrupEliminar" value="' + idGrup + '">');
    modal_body_eliminarGrup.append(input_grupEliminar);
}

function modificaGrup(t) {

    var stringIdUsuarisGrup = '';
    var id = $(t).parent().parent().children('#nombreGrupo').children('#idGrup').val();
    idGrup = id;

    $('#stringUsuarisGrup').remove();
    $('#idGrupEliminar').remove();

    var nomGrup = $(t).parent().parent().children('#nombreGrupo').children('#nomGrup').val();
    $('#nom_Grup_Modificar').val(nomGrup);

    var idModal = $(t).attr("data-target");
    var column_UsuarisGrup = $(idModal).children([0]).children([0]).children([0]).children([0]).children('.modal-body').children('.containerModificaMembres').children('.columnUsuarisGrup');

    $(idModal).children([0]).children([0]).children([0]).children([0]).children('.modal-body').children('.containerModificaMembres').children('.columnUsuarisGrup').children('label').each(function () {
        $(this).remove();
    });

    $(idModal).children([0]).children([0]).children([0]).children([0]).children('.modal-body').children('.containerModificaMembres').children('.columnUsuarisGrup').children('br').each(function () {
        $(this).remove();
    });

    $(t).parent().parent().children('#nombreMiembros').children('#idUsuariGrup').each(function () {
        var idUsuari = $(this).val();
        var nomUsuari = $(this).next('input').val();

        var grupUsuari = jQuery('<label id="usuari' + idUsuari + '"><input type="checkbox" id="usuari' + idUsuari + '" style="cursor:default;" name="usuari" value="' + nomUsuari + '">' + nomUsuari + '</label><br>');
        column_UsuarisGrup.append(grupUsuari);

        stringIdUsuarisGrup = stringIdUsuarisGrup + idUsuari + ',';
    });

    stringIdUsuarisGrup = stringIdUsuarisGrup.substring(0, stringIdUsuarisGrup.length - 1);

    input_idStringUsuarisGrup = jQuery('<input type="hidden" id="stringUsuarisGrup" name="stringUsuarisGrup" value="' + stringIdUsuarisGrup + '">');
    column_UsuarisGrup.append(input_idStringUsuarisGrup);

    input_grupEliminar = jQuery('<input type="hidden" id="idGrupEliminar" name="idGrupEliminar" value="' + idGrup + '">');
    column_UsuarisGrup.append(input_grupEliminar);
}


function afegirUsuari(t) {
    var idLabel;
    var valLabel;
    var idLabel2;
    var arrayUsuarisGrup = [];
    var stringIdUsuarisGrup = '';

    $('#stringUsuarisGrup').remove();

    $(t).parent().next().children('label').each(function () {
        idLabel = this.id;
        arrayUsuarisGrup.push(idLabel);
    });

    $(t).parent().prev().children('label').each(function () {
        if ($(this).children('input').is(':checked')) {
            idLabel = this.id;
            valLabel = this.innerText;
            idLabel = idLabel.replace('id', '');

            if (arrayUsuarisGrup.length === 0) {
                input = jQuery('<label id="' + idLabel + '"><input type="checkbox" id="' + idLabel + '" style="cursor:default;" name="usuari" value="' + valLabel + '">' + valLabel + '</label><br>');
                $(t).parent().next().append(input);

            } else {
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

    stringIdUsuarisGrup = stringIdUsuarisGrup.substring(0, stringIdUsuarisGrup.length - 1);
    
    input_idStringUsuarisGrup = jQuery('<input type="hidden" id="stringUsuarisGrup" name="stringUsuarisGrup" value="' + stringIdUsuarisGrup + '">');
    $(t).parent().next().append(input_idStringUsuarisGrup);
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

    stringIdUsuarisGrup = stringIdUsuarisGrup.substring(0, stringIdUsuarisGrup.length - 1);

    input_idStringUsuaris = jQuery('<input type="hidden" id="stringUsuarisGrup" name="stringUsuarisGrup" value="' + stringIdUsuarisGrup + '">');
    $(t).parent().next().append(input_idStringUsuaris);
}