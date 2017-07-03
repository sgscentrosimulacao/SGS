
function verificarDataEHora () {

    var dataInicio = $('#fieldDataInicio').val();
    var horaInicio = $('#fieldHoraInicio').val();
    var dataFim = $('#fieldDataFim').val();
    var horaFim = $('#fieldHoraFim').val();

    $.ajax({
        method: "GET",
        url: "../Control/verificarDisponibilidade.php?dataInicio="+dataInicio+"&horaInicio="+horaInicio+"&dataFim="+dataFim+"&horaFim="+horaFim,
        dataType: "text",
        success:function (result) {
            if(result == 'Erro') {

                $('#fieldGroupDataInicio').attr("class","editor-label form-inline has-error");
                $('#fieldGroupDataFim').attr("class","editor-label form-inline has-error");
                $('#fieldGroupHoraInicio').attr("class","editor-label form-inline has-error");
                $('#fieldGroupHoraFim').attr("class","editor-label form-inline has-error");
                $('#alerta').attr("class", "alert alert-danger");
                window.location.href += "#alerta";
            }else{

                $('#fieldGroupDataInicio').attr("class","editor-label form-inline");
                $('#fieldGroupDataFim').attr("class","editor-label form-inline");
                $('#fieldGroupHoraInicio').attr("class","editor-label form-inline");
                $('#fieldGroupHoraFim').attr("class","editor-label form-inline");
                $('#alerta').attr("class", "alert alert-danger hidden");




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
