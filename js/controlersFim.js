
function verificarDataEHora () {

    var dataInicio = $('#fieldDataInicio').val();
    var horaInicio = $('#fieldHoraInicio').val();
    var dataFim = $('#fieldDataFim').val();
    var horaFim = $('#fieldHoraFim').val();
    var sala = $('#dropSala').val();

    $.ajax({
        method: "GET",
        url: "../control/verificarDisponibilidade.php?dataInicio="+dataInicio+"&horaInicio="+horaInicio+"&dataFim="+dataFim+"&horaFim="+horaFim+"&sala="+sala,
        dataType: "text",
        success:function (result) {
            if(result == 'Erro') {

                $('#fieldGroupDataInicio').attr("class","editor-label form-inline has-error");
                $('#fieldGroupDataFim').attr("class","editor-label form-inline has-error");
                $('#fieldGroupHoraInicio').attr("class","editor-label form-inline has-error");
                $('#fieldGroupHoraFim').attr("class","editor-label form-inline has-error");
                $('#dropSala').attr("class","form-control dropdown-toggle has-error");
                $('#alerta').attr("class", "alert alert-danger");
                $('#cadastrarAula').attr('disabled', 'disabled');
                window.location.href += "#alerta";

            }else{

                $('#fieldGroupDataInicio').attr("class","editor-label form-inline");
                $('#fieldGroupDataFim').attr("class","editor-label form-inline");
                $('#fieldGroupHoraInicio').attr("class","editor-label form-inline");
                $('#fieldGroupHoraFim').attr("class","editor-label form-inline");
                $('#dropSala').attr("class","form-control dropdown-toggle");
                $('#alerta').attr("class", "alert alert-danger hidden");
                $('#cadastrarAula').removeAttr('disabled', 'disabled');
            }
        }
    });
}


$('#fieldDataInicio').on('blur', function (e) {

    verificarDataEHora();

});

$('#fieldHoraInicio').on('blur', function (e) {

    verificarDataEHora();

});

$('#fieldDataFim').on('blur', function (e) {

    verificarDataEHora();

});

$('#fieldHoraFim').on('blur', function (e) {

    verificarDataEHora();

});

$('#dropSala').on('blur', function (e) {

    verificarDataEHora();

});
